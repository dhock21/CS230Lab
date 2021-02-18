<?php
require 'includes/header.php';
?>

<main>
    <link rel="stylesheet" href="css/login.css">

    <div class="bg-cover">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block mx-auto" src="images/iss.jpg" alt="Orion Nebula">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="images/orionNebula.jpg" alt="International Space Station">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="images/neutronStar.jpg" alt="Neutron Star">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="h-40 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="post">

                    <h1 class="hh">Login</h1> 
                    <p class="hh">Login to your account</p> 

                    <div class="form-group">
                        <input type="text" class="form-control" name="uname-email" placeholder="Username/ Email"
                            required autofocus>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="pwd" placeholder="Password"
                            required="required">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-control" name="signup-submit"
                            class="btn btn-outline-success btn-lg btn-block btn-">Login</button>
                    </div>
                </form>

            </div>
        </div>

    </div>

</main>