<div class="row" id="row1">
    <div class="col-md-6">
        <div class="card text-left">
            <!-- X3D model selection tabs -->
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
            <!-- Controls selection tabs -->
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
    <!-- Gallery card -->
    <div class="col-sm-12">
        <div class="card text-left">
            <div class="card-header gallery-header">
                Gallery
            </div>
            <div class="card-body">
                <div class="container" id="featureContainer">
                    <!-- Start carousel code -->
                    <!-- Source: https://www.jqueryscript.net/slider/multi-item-carousel-bootstrap.html -->
                    <div class="row mx-auto my-auto justify-content-center">
                        <div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">
                            <h2 class="font-weight-light float-start">Image Gallery</h2>
                            <!-- Prev & Next Buttons -->
                            <div class="float-end pe-md-4">
                                <a class="indicator" href="#featureCarousel" role="button" data-bs-slide="prev">
                                    <span class="fas fa-chevron-left" aria-hidden="true"></span>
                                </a> &nbsp;&nbsp;
                                <a class="w-aut indicator" href="#featureCarousel" role="button" data-bs-slide="next">
                                    <span class="fas fa-chevron-right" aria-hidden="true"></span>
                                </a>
                            </div>
                                <!-- Carousel Items -->
                            <div id="carousel-gallery" class="carousel-inner" role="listbox"></div>
                        </div>
                    </div>
                    <!-- End carousel code -->
                </div>
            </div>
        </div>
    </div>
</div>