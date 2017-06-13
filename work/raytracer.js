// we render into a square image img_w_px pixels across
var img_w_px = 800
var img_h_px = 600

// find the canvas in the webpage, and get access to its data
var canvas = document.getElementById("scrn_canv")
var context2d = canvas.getContext("2d")
var img_data = context2d.getImageData(0, 0, img_w_px, img_h_px)

// set the size of the canvas
canvas.width = img_w_px
canvas.height = img_h_px;

// this function sets the color of pixels in the canvas data
function setPixel(x, y, r, g, b) {
	var i = (y * img_data.width + x) * 4;
	img_data.data[i++] = r;
	img_data.data[i++] = g;
	img_data.data[i++] = b;
	img_data.data[i] = 255;
}

// ------------------------------------------------------------
// ONLY MODIFY CODE BELOW THIS POINT
// ------------------------------------------------------------

// the position of the camera
var cam_pos = new Vector(0,0,-7);

// the direction the camera is looking in
var cam_dir = new Vector(0,0.02,1).unit();

// camera's up vector, going up the image plane
var up_vec = cam_dir.cross(new Vector(1,0,0)).unit();

// the vector along the edge of the image plane
var left_vec = up_vec.cross(cam_dir).unit();

// the distance from the camera to the image plane
var cam_img_dist = 2.5;

// the width of the image plane
var img_w = 1.33;
var img_h = 1.0;

// the top left of the image plane
var img_tl = cam_pos.add(cam_dir.multiply(cam_img_dist))
					.subtract(left_vec.multiply(img_w/2.0))
					.subtract(up_vec.multiply(img_h/2.0));

var max_refl_depth = 3;

function Sphere(center, radius, kAD, kS, roughness, reflectivity) {

	this.center = center;
	this.radius = radius;
	this.kAD = kAD;
	this.kS = kS;
	this.roughness = roughness;
	this.reflectivity = reflectivity;

	this.hitTest = function(origin, ray){
		var a = ray.dot(ray);
		var b = 2 * ray.dot(origin.subtract(this.center));
		var c = (origin.subtract(this.center)).dot(origin.subtract(this.center)) - this.radius*this.radius;
		var t1 = (-b + Math.sqrt(b*b - 4*a*c))/(2*a);
		var t2 = (-b - Math.sqrt(b*b - 4*a*c))/(2*a);
		return t1 >= 0 || t2 >= 0;
	}

	this.hitPos = function(origin,ray) {
		var a = ray.dot(ray);
		var b = 2 * ray.dot(origin.subtract(this.center));
		var c = (origin.subtract(this.center)).dot(origin.subtract(this.center)) - this.radius*this.radius;
		var t1 = (-b + Math.sqrt(b*b - 4*a*c))/(2*a);
		var t2 = (-b - Math.sqrt(b*b - 4*a*c))/(2*a);
		var p1 = origin.add(ray.multiply(t1));
		var p2 = origin.add(ray.multiply(t2));
		return (p1.subtract(origin)).length() < (p2.subtract(origin)).length() ? p1 : p2;
	}

	this.hitNorm = function(point, ray) {
		return point.subtract(this.center);
	}
}

function Plane(center,normal,kAD,kS, roughness, reflectivity) {
	this.center = center;
	this.normal = normal;
	this.kAD = kAD;
	this.kS = kS;
	this.roughness = roughness;
	this.reflectivity = reflectivity;

	this.hitTest = function(origin, ray){
		var dir = ray.unit();
		return (this.center.subtract(origin)).dot(this.normal) / dir.dot(this.normal) >= 0;
	}

	this.hitPos = function(origin,ray) {
		var dir = ray.unit();
		var t = (this.center.subtract(origin)).dot(this.normal) / dir.dot(this.normal);
		return origin.add(dir.multiply(t));
	}

	this.hitNorm = function(point, ray) {
		if(ray.dot(this.normal) > 0)
			return this.normal.negative();
		else
			return this.normal;
	}
}

function Triangle(v1, v2, v3, kAD, kS, roughness, reflectivity) {

	this.kAD = kAD;
	this.kS = kS;
	this.roughness = roughness;
	this.reflectivity = reflectivity;

	this.hitTest = function(origin,ray) {
		var dir = ray.unit();
		var norm = v2.subtract(v1).cross(v3.subtract(v1)).unit();
		norm = ray.dot(norm) > 0 ? norm.negative() : norm;
		var t = (v1.subtract(origin)).dot(norm) / dir.dot(norm);
		if (t<0) return false;
		var p = origin.add(dir.multiply(t));

		var u = v2.subtract(v1);
		var v = v3.subtract(v1);
		var uu, uv, vv, wu, wv, D;
		uu = u.dot(u);
		uv = u.dot(v);
		vv = v.dot(v);
		w = p.subtract(v1);
		wu = w.dot(u);
		wv = w.dot(v);
		D = uv * uv - uu * vv;

		var s, t;
		s = (uv * wv - vv * wu) / D;
		if (s < 0.0 || s > 1.0) return false;
		t = (uv * wu - uu * wv) / D;
		if (t < 0.0 || (s + t) > 1.0) return false;

		return true;
	}

	this.hitPos = function(origin,ray) {
		var dir = ray.unit();
		var norm = v2.subtract(v1).cross(v3.subtract(v1)).unit();
		norm = ray.dot(norm) > 0 ? norm.negative() : norm;
		var t = (v1.subtract(origin)).dot(norm) / dir.dot(norm);
		return origin.add(dir.multiply(t));
	}

	this.hitNorm = function(point, ray) {
		var norm = v2.subtract(v1).cross(v3.subtract(v1)).unit();
		if(ray.dot(norm) > 0)
			return norm.negative();
		else
			return norm;
	}
}

function Colour(r,g,b) {
	this.red = r;
	this.blue = b;
	this.green = g;
}

function Light(position, colour) {
	this.position = position;
	this.colour = colour;
}

var lights = [	new Light(new Vector(0,-4,5), new Colour(1.4,1.4,1.4)),
				new Light(new Vector(-3,-5,-3),new Colour(0.4,0,0)),
				new Light(new Vector(3,-5,-3),new Colour(0.4,0.4,0.4))];

var shapes = [	new Plane(new Vector(0,2,0), new Vector(0,-1,0), new Colour(1,1,1), new Colour(1,1,1), 1000000, 0.2),
				new Sphere(new Vector(0,0.5,5), 0.7, new Colour(1,1,1), new Colour(1,1,1), 100, 0.02),
				new Sphere(new Vector(1,1,6), 0.2, new Colour(0.2,0.2,1), new Colour(1,1,1), 20, 0),
				new Sphere(new Vector(-0.7,-0.5,4), 0.3, new Colour(0.9,0,0.9), new Colour(1,1,1), 200, 0.2),
				new Sphere(new Vector(-1,1,4), 0.4, new Colour(0.9,0.9,0.9), new Colour(1,1,1), 750, 0.9),
				new Triangle(new Vector(1,0,7),new Vector(1,2,7),new Vector(2,1,5),new Colour(1,1,1),new Colour(1,1,1),200,0.2),

				new Triangle(new Vector(-0.5,2,3.5),new Vector(0,2,3),new Vector(-0.5,1.3,3),new Colour(1,0,0),new Colour(1,1,1),200,0.2),
				new Triangle(new Vector(0,2,3),new Vector(-0.5,2,2.5),new Vector(-0.5,1.3,3),new Colour(0,1,0),new Colour(1,1,1),200,0.2),
				new Triangle(new Vector(-0.5,2,2.5),new Vector(-1,2,3),new Vector(-0.5,1.3,3),new Colour(0,0,1),new Colour(1,1,1),200,0.2),
				new Triangle(new Vector(-1,2,3),new Vector(-0.5,2,3.5),new Vector(-0.5,1.3,3),new Colour(1,1,0),new Colour(1,1,1),200,0.2)
		];

function sceneTrace(origin,direction,sourceShape,depth) {
	var nearestShape = null;
	var nearestDistance = -1;
	for(var i=0; i<shapes.length; i++) {
		var s = shapes[i];
		if(s != sourceShape) {
			if(s.hitTest(origin,direction)) {
				var hit_pos = s.hitPos(origin,direction);
				var distance = (hit_pos.subtract(origin)).length();
				if(distance < nearestDistance || nearestDistance == -1) {
					nearestDistance = distance;
					nearestShape = s;
				}
			}
		}
	}
	if(nearestShape != null) {
		var hit_pos = nearestShape.hitPos(origin,direction);

		var totalSpec = new Colour(0,0,0);
		var totalDA = new Colour(0,0,0);


		for(var i = 0; i<lights.length; i++) {
			var l = lights[i];
			var light_dir = ((l.position).subtract(hit_pos)).unit();

			var shadowed = false;
			for(var j=0; j<shapes.length; j++) {
				var s = shapes[j];
				if(s != nearestShape) {
					if(s.hitTest(hit_pos,light_dir)) {
						shadowed = true;
						break;
					}
				}
			}

			var normal = nearestShape.hitNorm(hit_pos, direction).unit();
			var viewpoint = direction.negative().unit();
			var h = (viewpoint.add(light_dir)).divide((viewpoint.add(light_dir)).length());
			var difM = Math.max(0,normal.dot(light_dir))
			var specM = Math.pow(Math.max(0,normal.dot(h)),nearestShape.roughness);

			var iS = 100;
			var iA = 15;
			var iD = 100;

			totalSpec.red += shadowed ? 0 : nearestShape.kS.red*specM * l.colour.red * iS;
			totalDA.red += shadowed ? 0 : nearestShape.kAD.red*iA + nearestShape.kAD.red*difM*iD*l.colour.red;

			totalSpec.green += shadowed ? 0 : nearestShape.kS.green*specM * l.colour.green * iS;
			totalDA.green += shadowed ? 0 : nearestShape.kAD.green*iA + nearestShape.kAD.green*difM*iD*l.colour.green;

			totalSpec.blue += shadowed ? 0 : nearestShape.kS.blue*specM * l.colour.blue * iS;
			totalDA.blue += shadowed ? 0 : nearestShape.kAD.blue*iA + nearestShape.kAD.blue*difM*iD*l.colour.blue;

			if(depth < max_refl_depth) {
				var normal = nearestShape.hitNorm(hit_pos,direction).unit();
				var perf_ref_dir = (directionToPixel.subtract(normal.multiply(direction.dot(normal) * 2))).unit();
				var reflCol = sceneTrace(hit_pos, perf_ref_dir,nearestShape, depth + 1);
				totalDA.red = reflCol.red * nearestShape.reflectivity + (1 - nearestShape.reflectivity) * totalDA.red;
				totalDA.green = reflCol.green * nearestShape.reflectivity + (1 - nearestShape.reflectivity) * totalDA.green;
				totalDA.blue = reflCol.blue * nearestShape.reflectivity + (1 - nearestShape.reflectivity) * totalDA.blue;
			}
		}
		return new Colour(totalSpec.red + totalDA.red, totalSpec.green + totalDA.green, totalSpec.blue + totalDA.blue);
	}
	return new Colour(0,0,0);
}

for (y=0; y<canvas.height; y++){
	for(x=0; x<canvas.width; x++){
		var u = img_tl.x + img_w * (x + 0.5)/canvas.width;
		var v = img_tl.y + img_h * (y + 0.5)/canvas.height;
		var vecV = up_vec.multiply(v);
		var vecU = left_vec.multiply(u);
		var vecW = cam_dir.multiply(cam_img_dist);
		var directionToPixel = (vecU.add(vecV).add(vecW));

		var nearestShape = null;
		var nearestDistance = -1;
		for(var i=0; i<shapes.length; i++) {
			var s = shapes[i];
			if(s.hitTest(cam_pos,directionToPixel)) {
				var hit_pos = s.hitPos(cam_pos,directionToPixel);
				var distance = (hit_pos.subtract(cam_pos)).length();
				if(distance < nearestDistance || nearestDistance == -1) {
					nearestDistance = distance;
					nearestShape = s;
				}
			}
		}

		var totalSpec = new Colour(0,0,0);
		var totalDA = new Colour(0,0,0);

		if(nearestShape) {
			var hit_pos = nearestShape.hitPos(cam_pos,directionToPixel);

			for(var i = 0; i<lights.length; i++) {
				var l = lights[i];
				var light_dir = ((l.position).subtract(hit_pos)).unit();

				var shadowed = false;
				for(var j=0; j<shapes.length; j++) {
					var s = shapes[j];
					if(s != nearestShape) {
						if(s.hitTest(hit_pos,light_dir)) {
							shadowed = true;
							break;
						}
					}
				}

				var normal = nearestShape.hitNorm(hit_pos, directionToPixel).unit();
				var viewpoint = directionToPixel.negative().unit();
				var h = (viewpoint.add(light_dir)).divide((viewpoint.add(light_dir)).length());
				var difM = Math.max(0,normal.dot(light_dir))
				var specM = Math.pow(Math.max(0,normal.dot(h)),nearestShape.roughness);
				var iS = 100;
				var iA = 0;
				var iD = 100;

				totalSpec.red += shadowed ? 0 : nearestShape.kS.red*specM * l.colour.red * iS;
				totalDA.red += shadowed ? 0 : nearestShape.kAD.red*iA + nearestShape.kAD.red*difM*iD*l.colour.red;

				totalSpec.green += shadowed ? 0 : nearestShape.kS.green*specM * l.colour.green * iS;
				totalDA.green += shadowed ? 0 : nearestShape.kAD.green*iA + nearestShape.kAD.green*difM*iD*l.colour.green;

				totalSpec.blue += shadowed ? 0 : nearestShape.kS.blue*specM * l.colour.blue * iS;
				totalDA.blue += shadowed ? 0 : nearestShape.kAD.blue*iA + nearestShape.kAD.blue*difM*iD*l.colour.blue;
			}

			var normal = nearestShape.hitNorm(hit_pos,directionToPixel).unit();
			var perf_ref_dir = (directionToPixel.subtract(normal.multiply(directionToPixel.dot(normal) * 2))).unit();
			var reflCol = sceneTrace(hit_pos, perf_ref_dir,nearestShape, 1);

			totalDA.red = reflCol.red * nearestShape.reflectivity + (1 - nearestShape.reflectivity) * totalDA.red;
			totalDA.green = reflCol.green * nearestShape.reflectivity + (1 - nearestShape.reflectivity) * totalDA.green;
			totalDA.blue = reflCol.blue * nearestShape.reflectivity + (1 - nearestShape.reflectivity) * totalDA.blue;

			setPixel(x, y, totalSpec.red + totalDA.red, totalSpec.green + totalDA.green, totalSpec.blue + totalDA.blue);
		}
		else {
			setPixel(x, y, 0, 0, 0);
		}
	}
}

// ------------------------------------------------------------
// ONLY MODIFY CODE ABOVE THIS POINT
// ------------------------------------------------------------

//rendering complete
console.log("### RENDERING COMPLETE ###")

// finally put the modified image data back into the canvas element
context2d.putImageData(img_data, 0, 0);
