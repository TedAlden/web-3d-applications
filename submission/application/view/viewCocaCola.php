<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrinkto-fit=no">
        <link rel="stylesheet" type="text/css" href="application/css/x3dom.css"></link>
        <link rel="stylesheet" type="text/css" href="application/css/jquery.fancybox.min.css">
        <link rel="stylesheet" type="text/css" href="application/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="application/css/main.css">
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
                        <h1>1</h1>
                        <h1>oca</h1>
                        <h2>Cola</h2>
                        <h3>Journey</h3>
                        <p>Refreshing the world, one story at a time</p>
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
                              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a>
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
                        <div id="main_3d_image">
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
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="application/assets/images/coca_cola.jpg">
                                <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/coca_cola.jpg" alt="Coca Cola">
                            </a>
                            <div class="card-body">
                                <div id="title_left" class="card-title drinksText"></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                                <div id="description_left" class="card-text drinksText"></div>
                                <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more ...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="application/assets/images/sprite.jpg">
                                <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/sprite.jpg" alt="Sprite">
                            </a>
                            <div class="card-body">
                                <div id="title_centre" class="card-title drinksText"></div>
                                <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                                <div id="description_centre" class="card-text drinksText"></div>
                                <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary">Find out more ...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="application/assets/images/dr_pepper.jpg">
                                <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/dr_pepper.jpg" alt="Dr Pepper">
                            </a>
                            <div class="card-body">
                                <div id="title_right" class="card-title drinksText"></div>
                                <div id="subTitle_right" class="card-subtitle drinksText"></div>
                                <div id="description_right" class="card-text drinksText"></div>
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
                                        <a id="navCoke" class="nav-link active" href="#" onMouseUp="cokeScene(); cokeDescription();">Coke</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="navSprite" class="nav-link" href="#" onMouseUp="spriteScene(); spriteDescription();">Sprite</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="navPepper" class="nav-link" href="#" onMouseUP="pepperScene(); pepperDescription();">Pepper</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- X3D models -->
                            <div class="card-body">
                                <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                                <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                                <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                                <div class="model3D">
                                    <x3d id="wire">
                                        <scene>
                                            <Switch whichChoice="0" id='SceneSwitch'>
                                                <transform>
                                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/coke.x3d" > </inline>
                                                </transform>
                                                <transform>
                                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/sprite.x3d"> </inline>
                                                </transform>
                                                <transform>
                                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/pepper.x3d"> </inline>
                                                </transform>
                                            </Switch>
                                        </scene>
                                    </x3d>
                                </div>
                                <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                                <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                                <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Coke description card -->
                        <div class="card" id="cokeDescription">
                            <div class="card-header description-header" id="title_coke"></div>
                            <div class="card-body">
                                <div class="card-subtitle drinksText" id="subTitle_coke"></div>
                                <div class="card-text drinksText" id="description_coke"></div>
                                <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more ...</a>   
                            </div>
                        </div>
                        <!-- Sprite description card -->
                        <div class="card" id="spriteDescription">
                            <div class="card-header description-header" id="title_sprite"></div>
                            <div class="card-body">
                                <div class="card-subtitle drinksText" id="subTitle_sprite"></div>
                                <div class="card-text drinksText" id="description_sprite"></div>
                                <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary">Find out more ...</a>   
                            </div>
                        </div>
                        <!-- Pepper description card -->
                        <div class="card" id="pepperDescription">
                            <div class="card-header description-header" id="title_pepper"></div>
                            <div class="card-body">
                                <div class="card-subtitle drinksText" id="subTitle_pepper"></div>
                                <div class="card-text drinksText" id="description_pepper"></div>
                                <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary">Find out more ...</a>   
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

                <!-- Interaction controls row -->
                <div class="row" id="row3">
                    <div class="col-sm-4">
                        <!-- Camera control card -->
                        <div class="card text-left">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <!-- Dropdown nav-tab -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraPerspective();">Perspective</a>
                                            <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBottom();">Bottom</a>
                                            <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLogo();">Logo</a>
                                            <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLabel();">Label</a>
                                            <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraTop();">Top</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="card-Title x3dCamera_Subtitle drinksText">
                                    <h3>Camera Views</h3>
                                </div>
                                <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraPerspective();">Perspective</a>
                                <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBottom();">Bottom</a>
                                <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLogo();">Logo</a>
                                <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLabel();">Label</a>
                                <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraTop();">Top</a>
                                <div class="card-text x3dCameraDescription drinksText">
                                    <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                         <!-- Animation control card -->
                        <div class="card text-left">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                    <a class="nav-link active" href="#">Animation</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="card-Title x3dAnimationSubtitle drinksText">
                                    <h3>Animation Options</h3>
                                </div>
                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">Spin</a>
                                <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                                <div class="card-text x3dAnimationDescription drinksText">
                                    <p>These buttons select a range of X3D animation options</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- Rendering and lighting card -->
                        <div class="card text-left">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Polygon</a>
                                            <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                            <a class="dropdown-item" href="#">Vertex</a>
                                        </div>
                                    </li>
                                    <!-- Dropdown nav-tab -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Default</a>
                                            <a class="dropdown-item" href="#">Onmi On/Off</a>
                                            <a class="dropdown-item" href="#">Target On/Off</a>
                                            <a class="dropdown-item" href="#">Headlight On/Off</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="card-Title x3dRendersubtitle drinksText">
                                    <h3>Render and Lighting Options</h3>
                                </div>
                                <a href="#" class="btn btn-success btn-responsive">Poly</a>
                                <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                                <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                                <a href="#" class="btn btn-outline-dark btn-responsive" onclick="defaultRender();">Default</a>
                                <div class="card-text x3dRenderDescription drinksText">
                                    <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About page -->
            <div id="about" style="display: none;">
                Insert About Contents
            </div>
        </div>

        <!-- Footer -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark footer" id="footerColor">
            <div class="container">
                <div class="navbar-text float-left copyright">
                    <p><span class="align-baseline">&copy 2019 Mobile Web 3D Applications | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
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
                        <p>Ted Alden-Templeman</p>
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
        <script src="application/js/jquery.js"></script>
        <script src="application/js/jquery.fancybox.min.js"></script>
        <script src="application/js/popper.js"></script>
        <script src="application/js/bootstrap.js"></script>
        <script src="application/js/font-awesome.js"></script>
        <script src="application/js/x3dom.js"></script>

        <!-- My Scripts -->
        <script src="application/js/custom.js"></script>
        <script src="application/js/page-swap.js"></script>
        <script src="application/js/gallery-generator.js"></script>
        <script src="application/js/change-look.js"></script>
        <script src="application/js/get-json-data.js"></script>
        <script src="application/js/model-interactions.js"></script>
    </body>
</html>
