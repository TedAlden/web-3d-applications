<!doctype html>
<html lang="en">
    <?php include("includes/header.php"); ?>
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

        <!-- Home page -->
        <div class="container-fluid main_contents" id="home" style="display: none;">
            <?php include("includes/home_page.php"); ?>
        </div>

        <!-- Models page -->
        <div class="container-fluid main_contents" id="models" style="display: none;">
            <?php include("includes/models_page.php"); ?>
        </div>

        <!-- About page -->
        <div class="container-fluid main_contents" id="about" style="display: none;">
            <?php include("includes/about_page.php"); ?>
        </div>

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
    </body>
    <?php include("includes/footer.php"); ?>
</html>
