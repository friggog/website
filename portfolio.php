<?php
$portfolio_items = array(
    array(
        'title' => '3D Face Reconstruction',
        'button_title' => 'Read Paper',
        'button_link' => 'https://arxiv.org/abs/2204.02776',
        'image' => 'DenseLandmarks',
        'content' => '<p>We present the first method that accurately predicts ten times as many landmarks as usual, covering the whole head, including the eyes and teeth. This is accomplished using synthetic training data, which guarantees perfect landmark annotations. By fitting a morphable model to these dense landmarks, we achieve state-of-the-art results for monocular 3D face reconstruction in the wild.</p>'
    ),
    array(
        'title' => 'Fake It Till You Make It',
        'button_title' => 'Project Page',
        'button_link' => 'https://microsoft.github.io/FaceSynthetics',
        'image' => 'FaceSX',
        'content' => '<p>We demonstrate that it is possible to perform face-related computer vision in the wild <b>using synthetic data alone</b>.</p><p>The community has long enjoyed the benefits of synthesizing training data with graphics, but the domain gap between real and synthetic data has remained a problem, especially for human faces. Researchers have tried to bridge this gap with data mixing, domain adaptation, and domain-adversarial training, but we show that it is possible to synthesize data with minimal domain gap, so that models trained on synthetic data generalize to real in-the-wild datasets.</p>'
    ),
    array(
        'title' => 'OpticSim.jl',
        'button_title' => 'GitHub',
        'button_link' => 'https://github.com/microsoft/OpticSim.jl',
        'image' => 'OpticSim',
        'content' => '<p>OpticSim.jl is a <a href="https://julialang.org/" target="_blank">Julia</a> package for simulation and optimization of complex optical systems developed by the Microsoft Research Interactive Media Group and the Microsoft HART group.</p><p>I spent most of 2020 working with Brian Guenter on the package and it has now been open sourced on GitHub.</p>'
    ),
    array(
        'title' => 'Microsoft',
        'button_title' => 'Website',
        'button_link' => 'https://aka.ms/MRAILabCam',
        'image' => 'MSFT',
        'content' => '<p>I\'m joining Microsoft\'s Mixed Reality &amp; AI Labs in Cambridge as a research scientist.</p><p>I interned with the group over the summer of 2019 and will be returning permanently to work at the intersection of computer graphics, computer vision and machine learning.</p>'
    ),
    array(
        'title' => 'Face Synthetics',
        'button_title' => 'Read Paper',
        'button_link' => 'https://arxiv.org/pdf/2007.08364.pdf',
        'image' => 'Faces',
        'content' => '<p>Technical report describing the synthetic faces system which I worked on while with Microsoft over the summer of 2019.</p>'
    ),
    array(
        'title' => 'Microsoft Research',
        'button_title' => 'Website',
        'button_link' => 'https://www.microsoft.com/en-us/research/group/graphics/',
        'image' => 'MSR2',
        'content' => '<p>I\'m rejoining Microsoft\'s research lab in Cambridge at the start of 2020 as a research consultant for <strike>six</strike> eighteen months. I\'ll be working with the <i>Interactive Media Group</i> on future display technologies.</p>'
    ),
    array(
        'title' => 'OLM',
        'button_title' => 'Website',
        'button_link' => 'https://olm.co.jp/rd/?lang=en',
        'content' => '<p>I\'m heading to Tokyo for a three month internship with the R&amp;D department at OLM Digital, starting in September 2019. I\'ll be building in-house tooling for their 3D animation and visual effects pipelines, primarily developing custom modelling tools for Autodesk Maya.</p>'
    ),
    array(
        'title' => 'Mocrosoft HoloLens',
        'button_title' => 'Website',
        'button_link' => 'https://aka.ms/MRAILabCam',
        'image' => 'HoloLens',
        'content' => '<p>I\'m joining the Cognition research and development team based at Microsoft\'s lab in Cambridge as a research consultant over the summer of 2019, working on application of machine learning to problems in computer graphics and vision.</p>'
    ),
    array(
        'title' => 'The AVAM',
        'image' => 'AVAM',
        'button_title' => 'Read Paper',
        'button_link' => './Papers/CTH-AVAM-2019.pdf',
        'content' => '<p>Paper introducing the Autonomous Vehicle Acceptance Model (AVAM), a model of user acceptance for autonomous vehicles, adapted from existing models of user acceptance for generic technologies.</p><p>Presented at <a href="https://iui.acm.org/2019/" target="_blank">Intelligent User Interfaces 2019</a>.</p><p>The complete data and analysis code can be downloaded <a href="./Files/AVAM_res.zip">here</a></p>.'
    ),
    array(
        'title' => 'CMIC',
        'button_title' => 'Website',
        'button_link' => 'https://www.victoria.ac.nz/cmic',
        'content' => '<p>I\'m taking up a research assistant position at the Computational Media Innovation Centre (CMIC) at the Victoria University of Wellington in New Zealand for three months starting in January 2019.</p><p>I\'ll be working with researchers and industry partners to help develop innovative augmented, virtual and mixed reality technologies.</p>'
    ),
    array(
        'title' => 'Microsoft Research',
        'button_title' => 'Website',
        'button_link' => 'https://www.microsoft.com/en-us/research/lab/microsoft-research-cambridge/',
        'content' => '<p>I\'m joining Microsoft Research in Cambridge for a <strike>three</strike> six month research internship starting in summer 2018</p><p>I\'ll be helping to develop the next generation of head mounted displays using digital holography.</p><p>Some more details about the project are available <a target="-blank" href="https://www.microsoft.com/en-us/research/project/holographic-near-eye-displays-virtual-augmented-reality/">here</a>.</p>',
        'image' => 'MSR'
    ),
    array(
        'title' => 'Animal Face Alignment',
        'button_title' => 'Read Paper',
        'button_link' => './Papers/CTH-Dissertation-2018.pdf',
        'content' => '<p>For my fourth year (masters) project I looked at head pose estimation and facial landmark detection for animals, specifically sheep. This included the adaption of deep learning models for sheep head pose estimation and combination with classical techniques to enable accurate facial alignment. This culminated in the implementation of a near real-time pipeline for farm survellience videos, the end-goal being automated livestock health monitoring.</p><p>A <a href="./Papers/CTH-PIFA-2019.pdf" target="_bblank">condensed version</a> of the dissertation was presented at ACII 2019.</p>',
        'image' => 'Sheep'
    ),
    array(
        'title' => 'Leaf Identification',
        'button_title' => 'Read Paper',
        'button_link' => 'https://arxiv.org/abs/1811.08398',
        'content' => '<p>Paper presenting a novel feature set for shape-only leaf identification from images. Over 90% accuracy is achieved on all but one public dataset, with top-four accuracy for these datasets over 98%.</p><p>Source code available on <a href="https://github.com/friggog/tree-id" target="=_blank">GitHub</a>.</p>',
        'image' => 'TreeID'
    ),
    array(
        'title' => 'Emosic',
        'button_title' => 'Read Paper',
        'button_link' => 'https://arxiv.org/abs/1807.08775',
        'content' => '<p>Paper focussing on the design, deployment and evaluation of Convolutional Neural Network (CNN) architectures for facial affect analysis on mobile devices. The proposed architectures equal the dataset baseline while minimising storage requirements. A user study demonstrates the feasibility of deploying the models for real-world applications.</p>
        <p>Source code is available on <a href="https://github.com/friggog/Emosic" target="_blank">GitHub</a>.</p>'
    ),
    array(
        'title' => 'GP Confidences for CNNs',
        'button_title' => 'Read Paper',
        'button_link' => './Papers/CTH-CNN-Conf-2018.pdf',
        'content' => '<p>Paper presenting a hybrid classification technique using Gaussian processes fitted on features extracted by a convolutional neural network to enable estimation of prediction confidence. The classifier is evaluated on the MNIST dataset and shown to have somewhat meaningful implications for confidence estimation.</p>',
        'image' => 'CNNConf'
    ),
    array(
        'title' => 'THJE Website',
        'button_title' => 'View Website',
        'button_link' => './Files/THJE',
        'content' => '<p>Website design and other graphics for the 2018 Trinity Hall June Event, in addition to managing the ticketing service provided through <a href="https://getqpay.com" target="_blank">Qpay</a>.</p>',
        'image' => 'THJE'
    ),
    //array(
    //    'title' => 'AirPi',
    //    'content' => '<p><a href="https://www.raspberrypi.org/products/raspberry-pi-zero-w/" target="_blank">Raspberry Pi Zero W</a> based AirPlay and Spotify
    //    Connect server for use with my desktop speakers.</p> <p>Uses the <a href="https://www.hifiberry.com/shop/boards/hifiberry-dac-zero/"
    //    target="_blank">HiFiBerry DAC+ Zero</a> along with <a href="https://github.com/mikebrady/shairport-sync" target="_blank">shairport-sync</a>
    //    and <a href="https://dtcooper.github.io/raspotify/" target="_blank">raspotify</a>.</p>'
    //),
    array(
        'title' => 'Cydar',
        'button_link' => 'http://www.cydarmedical.com',
        'button_title' => 'Website',
        'content' => '<p>I\'ll be joining the team at Cydar in Cambridge for a two month internship over the summer of 2017.</p>
        <p>I will help to develop technologies for medical imaging to be used by surgeons during operations.</p>'
    ),
    array(
        'title' => 'Tree Generation',
        'image' => 'Trees',
        'button_link' => './Papers/CTH-Dissertation-2017.pdf',
        'button_title' => 'Read Paper',
        'content' => '<p>For my third year project I explored the procedural modelling of trees for use in computer graphics.</p>
                      <p>I implemented two systems which generate tree models of many types within the <a href="http://blender.org" target="_blank">Blender</a> modelling application, one of which now forms the basis of a fully featured plugin.</p>
                      <p>Source code available on <a href="https://github.com/friggog/tree-gen" target="_blank">GitHub</a>.</p>'

    ),
    //array(
    //    'title' => 'ML &amp; AI',
    //    'image' => 'AI',
    //    'content' => '<p>As part of my studies I\'ve been learning a lot about machine learning and artificial intelligence, so I thought I\'d have a go at
    //                  implementing some of the concepts.</p> <p>So far I\'ve implemented a Bayesian neural network, Gaussian process regression (pictured)
    //                  and the Viterbi algorithm - I\'m hoping to implement a support vector machine and more soon!</p>'
    //),
    //array(
    //    'title' => 'PidgePing',
    //    'content' => '<p>Project completed as part of the Hack Cambridge hackathon in January 2017.</p>
    //                  <p>An IR sensor placed in the user\'s mailbox would communicate via WIFI to our server which then sent out an email notifying them. Ideal for
    //                  Cambridge students whose mailboxes are often far away from where they live.</p>
    //                  <p>A website allowed users to register and set up their device, as well as check its status.</p>'
    //),
    //array(
    //    'title' => 'OpenGL Shaders',
    //    'image' => 'Shaders',
    //    'button_link' => './Files/Shaders/',
    //    'button_title' => 'Read More',
    //    'content' => '<p>Playing around with some space themed planet shaders in GLSL.</p>
    //                  <p>Including:</p>
    //                  <ul>
    //                      <li>Poisson distributed galactic environment generation.</li>
    //                      <li>Solar system generation with dynamic lighting.</li>
    //                      <li>Earth-like planet, gas planet and star shaders.</li>
    //                      <li>Pixel art shader.</li>
    //                  </ul>'
    //),
    array(
        'title' => 'Jagex',
        'button_link' => 'http://www.jagex.com',
        'button_title' => 'Website',
        'content' => '<p>I\'m joining the team at Jagex Games Studio for three months in the summer of 2016 as an intern.</p>
                      <p>I\'ll be working on a project as part of a small team aimed at exploring new areas which Jagex may be interested in expanding into in the future.</p>'
    ),
    //array(
    //    'title' => 'SplitBit',
    //    'content' => '<p>SplitBit is an online equity, salary and payments negotiation platform aimed at startups, particularly in the tech industry.</p>
    //                  <p>The site was created as part of the Cambridge CST group project programme. The group worked with clients Matt Johnson and Eddy Ashton from
    //                  <a href="http://www.frontier.co.uk/" target="=_blank">Frontier</a>, a games company based in Cambridge.</p>'
    //),
    array(
        'title' => 'THBC Site Redesign',
        'image' => 'THBC',
        'button_link' => 'http://thbc.soc.srcf.net/',
        'button_title' => 'View Website',
        'content' => '<p>Trinity Hall Boat Club\'s original website was designed in the 90s and was starting to show its age. I carried out a complete visual redesign and tidied up many aspects of the website code.</p>
                      <p>I also wrote a new voting system to be used for captaincy elections, as well as updating the content of many of the site\'s pages and adding some new ones.</p>'
    ),
    array(
        'title' => 'Fingal',
        'button_link' => 'http://cydia.saurik.com/package/me.chewitt.fingal/',
        'button_title' => 'More Info',
        'content' => '<p>Animated icon theming platform (similar to Winterboard) for iOS 8 and 9.</p>
                      <p>Available for free from the ModMyi Cydia repo. Source code available <a href="https://github.com/friggog/Fingal" target="=_blank">on GitHub</a>.</p>'
    ),
    // array(
    //     'title' => 'JS Raytracer',
    //     'image' => 'Raytracer',
    //     'button_link' => './work/raytracer',
    //     'button_title' => 'Preview',
    //     'content' => '<p>A (quite slow) Raytracer written using javascript and rendered using HTML5 canvas.</p>
    //                   <p>Uses Phong illumination with recursive reflection and coloured lighting/shapes. Can render planes, triangles and perfect spheres with varying shininess and reflectivity.</p>'
    // ),
    // array(
    //     'title' => 'WebGL Earth',
    //     'image' => 'Earth',
    //     'button_link' => './work/webgl',
    //     'button_title' => 'Preview',
    //     'content' => '<p>First experiment writing custom OpenGL shaders using WebGL and THREE.js.</p>
    //                   <p>Model of Earth with Texture, Normal, Displacement and Specular mapping and Phong illumination.</p>'
    // ),
    array(
        'title' => 'seng',
        'image' => 'Seng',
        'button_link' => 'http://cydia.saurik.com/package/me.chewitt.seng/',
        'button_title' => 'More Info',
        'content' => '<p>Seng is a sleek and highly customisable replacement for your iOS 8 &amp; 9 app switcher and control center, providing 2 core features; Multi Centre and Hot Corners.</p>
                      <p>Available to purchase from the Cydia Store.</p>'
    ),
    array(
        'title' => 'CustomCover',
        'button_link' => 'http://cydia.saurik.com/package/me.chewitt.customcover/',
        'button_title' => 'More Info',
        'content' => '<p>Customise the iOS LockScreen Now Playing view and Music app. Packed full of features and compatible with all devices running iOS 7 through 9.</p>
                      <p>Available to purchase from the Cydia Store.</p>
                      <p><a href="http://chewitt.me/Info/CustomCoverAPI.html" target="_blank">Developer Info</a></p>'
    ),
    array(
        'title' => 'Messages Customiser',
        'image' => 'MC',
        'button_link' => 'http://cydia.saurik.com/package/me.chewitt.mcpro/',
        'button_title' => 'More Info',
        'content' => '<p>The most fully featured tweak available for modifying the iOS Messages app. Messages Customiser is the one stop solution for tweaking your texting experience on all devices running iOS 7 - 9</p>
                      <p>Free and Premium version available from the Cydia Store.</p>'
    ),
    array(
        'title' => 'Subtle7',
        'content' => '<p>Simple winterboard theme with subtle changes from the default iOS 7 look. Inspired by the work of <a href="http://louie.land" target="_blank">Louie Mantia</a></p>
                      <p>Includes all stock icons, and a few extra. Compatible with all devices on iOS 7.</p>
                      <p>Available from my <a href="http://chewitt.me/repo" target="_blank">personal repo</a>.</p>'
    ),
    array(
        'title' => 'Tinct &amp; Chroma',
        'image' => 'Tinct',
        'content' => '<p>Chroma, and the more fully featured Tinct, are a duo of UI tweaks for iOS 7 and 8. Both allow for extensive customisation of the colours of various elements of the iOS interface, while remaining lightweight and simple to use.</p>
                      <p>Chroma is available for free from Cydia (source on <a href="https://github.com/friggog/chroma">GitHub</a>), and Tinct is available to purchase from the Cydia Store.</p>'
    ),
    array(
        'title' => 'Linen Growl Style',
        'image' => 'Linen',
        'button_link' => 'http://friggog.deviantart.com/art/Linen-GrowlStyle-292018277',
        'button_title' => 'Download',
        'content' => '<p>Custom style for the popular Growl notification management app.</p>
                      <p>Inspired by the iOS 5 and OSX Mountain Lion interface styling and with custom slide in animation.</p>'
    ),
    array(
        'title' => 'Flippers Ain\'t Wings',
        'image' => 'Flippers',
        'button_link' => './Files/Flippers/',
        'button_title' => 'More Info',
        'content' => '<p>Block jumping, arcade style game for all iOS devices.</p>
                      <p>Follow the story of Percy the Penguin in his adventure to discover the source of mysterious ice blocks falling from the sky.</p>'
    ),
    // array(
    //     'title' => 'Tryst',
    //     'content' => '<p>Winterboard theme for retina iPad on iOS 6.</p>
    //                   <p>Includes:</p>
    //                   <ul>
    //                       <li>All stock icons</li>
    //                       <li>AppStore Icon Mask</li>
    //                       <li>Springboard Elements</li>
    //                       <li>App Switcher</li>
    //                       <li>Notification Centre</li>
    //                   </ul>
    //                   <p>Available from the Cydia Store</p>'
    // ),
);
?>
