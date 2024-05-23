<!-- Image and Heading -->
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
<!-- Carousel -->
<div class="row">
    <div class="col-sm-12">
        <div id="homepageCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators"></div>
            <div class="carousel-inner"></div>
            <button class="carousel-control-prev" type="button" data-bs-target="#homepageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homepageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- Cards -->
<div class="row">
    <!-- Coke -->
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
    <!-- Sprite -->
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
    <!-- Dr Pepper -->
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