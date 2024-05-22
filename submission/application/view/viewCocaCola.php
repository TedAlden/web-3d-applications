<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrinkto-fit=no">
        <link rel="stylesheet" type="text/css" href="../application/css/x3dom.css"></link>
        <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">
        <link rel="stylesheet" type="text/css" href="../application/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../application/css/main.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald">
        <title>Coca Cola 3D App</title>
    </head>
    <body id="bodyColor">
        <!-- Navbar -->
        <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola" id="headerColor">
            <div class="container-fluid">
                <div class="logo">
                    <a class="navbar-brand" href="#">
                        <h1 class="cola-navbar-brand">1</h1>
                        <h1 class="cola-navbar-brand">oca</h1>
                        <h2 class="cola-navbar-brand">Cola</h2>
                        <h3 class="cola-navbar-brand">Journey</h3>
                        <p class="cola-navbar-brand">Refreshing the world, one story at a time</p>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a id="navHome" class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="navAbout" class="nav-link" href="#" data-bs-toggle="popover" data-bs-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
                        </li>
                        <li class="nav-item">
                            <a id="navModels" class="nav-link"  href="#" data-bs-toggle="popover" data-bs-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
                        </li>
                        <li class="nav-item">
                            <a id="navContact" class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid main_contents">
            <!-- Home page -->
            <div id="home" style="display: none;">
                <!-- Heading -->
                <div class="row">
                    <div class="col-sm-12">
                        <div id="main_3d_image" class="coke">
                            <div id="main_text" class="col-xs-12 col-sm-4">
                                <div id="title_home"></div>
                                <div id="subTitle_home"></div>
                                <div id="description_home"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cards -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <a href="../application/assets/images/coca_cola.jpg">
                                <div class="card-img-top-wrapper">
                                    <img class="card-img-top img-fluid" src="../application/assets/images/coca_cola.jpg" alt="Coca Cola">
                                </div>
                            </a>
                            <div class="card-body">
                                <div id="title_left" class="card-title drinksText"><h2><?php echo $data[0]['brand'] ?></h2></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"><h3><?php echo $data[0]['year'] ?>, <?php echo $data[0]['location'] ?></h3></div>
                                <div id="description_left" class="card-text drinksText"><p><?php echo $data[0]['modelDescription'] ?></p></div>
                                <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more ...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <a href="../application/assets/images/sprite.jpg">
                                <div class="card-img-top-wrapper">    
                                    <img class="card-img-top img-fluid" src="../application/assets/images/sprite.jpg" alt="Sprite">
                                </div>
                            </a>
                            <div class="card-body">
                                <div id="title_centre" class="card-title drinksText"><h2><?php echo $data[1]['brand'] ?></h2></div>
                                <div id="subTitle_centre" class="card-subtitle drinksText"><h3><?php echo $data[1]['year'] ?>, <?php echo $data[1]['location'] ?></h3></div>
                                <div id="description_centre" class="card-text drinksText"><p><?php echo $data[1]['modelDescription'] ?></p></div>
                                <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary">Find out more ...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <a href="../application/assets/images/dr_pepper.jpg">
                                <div class="card-img-top-wrapper">    
                                    <img class="card-img-top img-fluid" src="../application/assets/images/dr_pepper.jpg" alt="Dr Pepper">
                                </div>
                            </a>
                            <div class="card-body">
                                <div id="title_right" class="card-title drinksText"><h2><?php echo $data[2]['brand'] ?></h2></div>
                                <div id="subTitle_right" class="card-subtitle drinksText"><h3><?php echo $data[2]['year'] ?>, <?php echo $data[2]['location'] ?></h3></div>
                                <div id="description_right" class="card-text drinksText"><p><?php echo $data[2]['modelDescription'] ?></p></div>
                                <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary">Find out more ...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Models page -->
            <div id="models" style="display: none;">


                <div class="row" id="row1">
                    <div class="col-md-6">
                        <!-- X3D model card -->
                        <div class="card text-left">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a id="navCoke" class="nav-link active" href="#" onMouseUp="cokeScene();">Coke</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="navSprite" class="nav-link" href="#" onMouseUp="spriteScene();">Sprite</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="navPepper" class="nav-link" href="#" onMouseUP="pepperScene();">Pepper</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- X3D models -->
                            <div class="card-body">
                                <div id="x3dModelTitle_coke" class="card-title drinksText"><h2><?php echo $data[0]['x3dModelTitle'] ?></h2></div>
                                <div id="x3dModelTitle_sprite" class="card-title drinksText"><h2><?php echo $data[1]['x3dModelTitle'] ?></h2></div>
                                <div id="x3dModelTitle_pepper" class="card-title drinksText"><h2><?php echo $data[2]['x3dModelTitle'] ?></h2></div>
                                <div class="model3D">
                                    <x3d id="wire">
                                        <scene>
                                            <Switch whichChoice="0" id='SceneSwitch'>
                                                <transform>
                                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="<?php echo $data[0]['x3dPath'] ?>"> </inline>
                                                </transform>
                                                <transform>
                                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="<?php echo $data[1]['x3dPath'] ?>"> </inline>
                                                </transform>
                                                <transform>
                                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url=<?php echo '"'.$data[2]['x3dPath'].'"' ?>> </inline>
                                                </transform>
                                            </Switch>
                                        </scene>
                                    </x3d>
                                </div>
                                <div id="x3dCreationMethod_coke" class="card-text drinksText"><p><?php echo $data[0]['x3dCreationMethod'] ?></p></div>
                                <div id="x3dCreationMethod_sprite" class="card-text drinksText"><p><?php echo $data[1]['x3dCreationMethod'] ?></p></div>
                                <div id="x3dCreationMethod_pepper" class="card-text drinksText"><p><?php echo $data[2]['x3dCreationMethod'] ?></p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Coke description card -->
                        <div class="card" id="cokeDescription">
                            <div class="card-header description-header" id="title_coke"><?php echo $data[0]['modelTitle'] ?></div>
                            <div class="card-body">
                                <div class="card-subtitle drinksText" id="subTitle_coke"><h3><?php echo $data[0]['modelSubtitle'] ?></h3></div>
                                <div class="card-text drinksText" id="description_coke"><p><?php echo $data[0]['modelDescription'] ?></p></div>
                                <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more ...</a>   
                            </div>
                        </div>
                        <!-- Sprite description card -->
                        <div class="card" id="spriteDescription">
                            <div class="card-header description-header" id="title_sprite"><?php echo $data[1]['modelTitle'] ?></div>
                            <div class="card-body">
                                <div class="card-subtitle drinksText" id="subTitle_sprite"><h3><?php echo $data[1]['modelSubtitle'] ?></h3></div>
                                <div class="card-text drinksText" id="description_sprite"><p><?php echo $data[1]['modelDescription'] ?></p></div>
                                <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary">Find out more ...</a>   
                            </div>
                        </div>
                        <!-- Pepper description card -->
                        <div class="card" id="pepperDescription">
                            <div class="card-header description-header" id="title_pepper"><?php echo $data[2]['modelTitle'] ?></div>
                            <div class="card-body">
                                <div class="card-subtitle drinksText" id="subTitle_pepper"><h3><?php echo $data[2]['modelSubtitle'] ?></h3></div>
                                <div class="card-text drinksText" id="description_pepper"><p><?php echo $data[2]['modelDescription'] ?></p></div>
                                <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary">Find out more ...</a>   
                            </div>
                        </div>
                        <!-- Controls -->
                        <div class="card text-left">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a id="nav-camera" class="nav-link active" href="#">Camera</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="nav-animation" class="nav-link" href="#">Animation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="nav-rendering" class="nav-link" href="#">Rendering</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="nav-lighting" class="nav-link" href="#">Lighting</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Camera -->
                            <div class="card-body" id="control-camera">
                                <div class="card-Title x3dCamera_Subtitle drinksText">
                                    <h3>Camera Views</h3>
                                </div>
                                <a href="#" class="btn btn-primary btn-responsive" onclick="cameraPerspective();">Perspective</a>
                                <a href="#" class="btn btn-primary btn-responsive" onclick="cameraTop();">Top</a>
                                <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBottom();">Bottom</a>
                                <a href="#" class="btn btn-primary btn-responsive" onclick="cameraLogo();">Logo (Front)</a>
                                <a href="#" class="btn btn-primary btn-responsive" onclick="cameraLabel();">Label (Rear)</a>
                                <div class="card-text x3dCameraDescription drinksText">
                                    <p>These buttons select a range of X3D model viewpoints.</p>
                                </div>
                            </div>
                            <!-- Animation -->
                            <div class="card-body" id="control-animation">
                                <div class="card-Title x3dAnimationSubtitle drinksText">
                                    <h3>Animation Options</h3>
                                </div>
                                <a href="#" class="btn btn-primary btn-responsive" onclick="spin();">Toggle Spin</a>
                                <a href="#" class="btn btn-primary btn-responsive" onclick="stopRotation();">Stop Spin</a>
                                <div class="card-text x3dAnimationDescription drinksText">
                                    <p>These buttons select a range of X3D animation options.</p>
                                </div>
                            </div>
                            <!-- Rendering -->
                            <div class="card-body" id="control-rendering">
                                <div class="card-Title x3dRendersubtitle drinksText">
                                    <h3>Render Options</h3>
                                </div>
                                <a href="#" class="btn btn-primary btn-responsive" onclick="wireframe();">Toggle Wireframe</a>
                                <div class="card-text x3dRenderDescription drinksText">
                                    <p>These buttons select a number of render options.</p>
                                </div>
                            </div>
                            <!-- Lighting -->
                            <div class="card-body" id="control-lighting">
                                <div class="card-Title x3dRendersubtitle drinksText">
                                    <h3>Lighting Options</h3>
                                </div>
                                <a href="#" class="btn btn-primary btn-responsive" onclick="defaultLights();">Default Lighting</a>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkboxHeadlight" onclick="headlight();" checked>
                                    <label class="form-check-label" for="checkboxHeadlight">Headlight</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkboxOmnilight5" onclick="omnilight5();" checked>
                                    <label class="form-check-label" for="checkboxOmnilight5">Top light</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkboxOmnilight2" onclick="omnilight2();" checked>
                                    <label class="form-check-label" for="checkboxOmnilight2">Bottom light</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkboxOmnilight6" onclick="omnilight6();" checked>
                                    <label class="form-check-label" for="checkboxOmnilight6">Left light</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkboxOmnilight3" onclick="omnilight3();" checked>
                                    <label class="form-check-label" for="checkboxOmnilight3">Right light</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkboxOmnilight4" onclick="omnilight4();" checked>
                                    <label class="form-check-label" for="checkboxOmnilight4">Front light</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkboxOmnilight1" onclick="omnilight1();" checked>
                                    <label class="form-check-label" for="checkboxOmnilight1">Rear light</label>
                                </div>                               
                                <div class="card-text x3dRenderDescription drinksText">
                                    <p>These buttons select a number of lighting options.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="row2">
                    <div class="col-sm-12">
                        <!-- Gallery card -->
                        <div class="card text-left">
                            <div class="card-header gallery-header">
                                Gallery
                            </div>
                            <div class="card-body">
                                <div class="card-title title_gallery drinksText"></div>
                                <div class="gallery" id="gallery"></div>
                                <div class="card-text description_gallery drinksText"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About page -->
            <div id="about" style="display: none;">
                <h1>About this project</h1>
                <p>A 3D web application showcasing Coca Cola brands through 3D modelling using PHP, SQLite3, X3DOM, AJAX, JQuery.</p>
                <p>This assignment is submitted as part requirement for the degree of MComp Computer Science at the University of Sussex. It is the product of my own labour except where indicated in the accompanying codebase. This assignment may be freely copied and distributed provided the source is acknowledged. I hereby give permission for a copy of this assignment to be loaned out to students in future years.</p>
            </div>
        </div>

        <!-- Footer -->
        <nav class="navbar navbar-expand-sm navbar-dark footer" id="footerColor">
            <div class="container">
                <div class="navbar-text float-left copyright">
                    <p><span class="align-baseline">&copy 2024 Mobile Web 3D Applications | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
                </div>
                <div class="navbar-text float-right social">
                    <a href="#"><i class="fab fa-facebook-square fa-2x fa-pullright"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-2x fa-pullright"></i></a>
                    <a href="#"><i class="fab fa-google-plus fa-2x fa-pullright"></i></a>
                    <a href="#"><i class="fab fa-github-square fa-2x fa-pullright"></i></a>
                </div>
            </div>
        </nav>

        <!-- Contact Modal -->
        <div class="modal fade" id="contactModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">3D App Contact Details</h4>
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <p>Edward Peter (Ted) Alden-Templeman</p>
                        <p>Email: epa22@sussex.ac.uk</p>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Library Scripts -->
        <script src="../application/js/jquery.js"></script>
        <script src="../application/js/jquery.fancybox.min.js"></script>
        <script src="../application/js/popper.js"></script>
        <script src="../application/js/bootstrap.js"></script>
        <script src="../application/js/font-awesome.js"></script>
        <script src="../application/js/x3dom.js"></script>

        <!-- My Scripts -->
        <script src="../application/js/custom.js"></script>
        <script src="../application/js/page-swap.js"></script>
        <script src="../application/js/gallery-generator.js"></script>
        <script src="../application/js/change-look.js"></script>
        <script src="../application/js/get-json-data.js"></script>
        <script src="../application/js/model-interactions.js"></script>
    </body>
</html>
