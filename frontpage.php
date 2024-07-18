<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Header</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./includes/headerstyle.css">
    <link rel="stylesheet" href="frontstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./includes/footerstyle.css">
</head>
<body>
    <?php
    include_once("./includes/header.php")
    ?>
    <div><br><br><br></div>
    <!-- <section>
        <div class="image-container">
            <div class="image-list">
                <div class="image-item"><img src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/Home/AmazonTV/Prime24/3000x1200_industry_V1._CB570152530_.jpg" alt=""></div>
                <div class="image-item"><img src="https://images-eu.ssl-images-amazon.com/images/G/31/OHL/24/BAU/feb/PC_hero_1_2x_1._CB582889946_.jpg" alt=""></div>
                <div class="image-item"><img src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/MA2024/GW/July/Unrec/PD/3000/1._CB570179554_.jpg" alt=""></div>
                <div class="image-item"><img src="https://images-eu.ssl-images-amazon.com/images/G/31/img24hp/headphones/unrec/hero/PD_Tallhero_3000x1200._CB570163451_.jpg" alt=""></div>
                <div class="image-item"><img src="https://images-eu.ssl-images-amazon.com/images/G/31/img24/Media/BAU/D132995370_Homepage_DesktopHeroTemplate_3000x1200._CB557152260_.jpg" alt=""></div>
            </div>
            <div class="image-btn-container">
                <button class="slider-btn"id="slider-btn-left"><i class="fa-solid fa-angle-left"></i></button>
                <button class="slider-btn"id="slider-btn-right"><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
    </section> -->
    

<?php
    /*<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
            <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/Home/AmazonTV/Prime24/3000x1200_industry_V1._CB570152530_.jpg" alt="">
        </div>
        <div class="item">
            <img src="https://images-eu.ssl-images-amazon.com/images/G/31/OHL/24/BAU/feb/PC_hero_1_2x_1._CB582889946_.jpg" alt="">
        </div>
        <div class="item">
            <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/MA2024/GW/July/Unrec/PD/3000/1._CB570179554_.jpg" alt="">
        </div>
        <div class="item">
            <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img24hp/headphones/unrec/hero/PD_Tallhero_3000x1200._CB570163451_.jpg" alt="">
        </div>
        <div class="item">
            <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img24/Media/BAU/D132995370_Homepage_DesktopHeroTemplate_3000x1200._CB557152260_.jpg" alt="">
        </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> */
    ?>
    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/Home/AmazonTV/Prime24/3000x1200_industry_V1._CB570152530_.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images-eu.ssl-images-amazon.com/images/G/31/OHL/24/BAU/feb/PC_hero_1_2x_1._CB582889946_.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/MA2024/GW/July/Unrec/PD/3000/1._CB570179554_.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images-eu.ssl-images-amazon.com/images/G/31/img24hp/headphones/unrec/hero/PD_Tallhero_3000x1200._CB570163451_.jpg" alt="Fourth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images-eu.ssl-images-amazon.com/images/G/31/img24/Media/BAU/D132995370_Homepage_DesktopHeroTemplate_3000x1200._CB557152260_.jpg" alt="Fifth slide">
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
    <!-- Products -->
    <section class="title_container">
        <div class="title_heading">
            <h1>Today's Deals</h1>
            <a href="">
                <p>See all deals</p>
            </a>
        </div>
        <div class="prod_container">
            <div class="prod_btn_container">
                <button class="prod_btn">
                    <i class="fa-solid fa-angle-left">

                    </i>
                </button>
                <button class="prod_btn">
                    <i class="fa-solid fa-angle-right">

                    </i>
                </button>
            </div>
            <div class="prod_list">
                <div class="prod_item">
                    <a href="product_page.php">
                        <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                        </a>
                    <div class="price_container">
                        <a class="bg-danger text-light">Upto 52% Off</a>
                        <a class="text-danger">Deal Of The Day</a>
                    </div>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
                <div class="prod_item">
                <a href="product_page.php">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    </a>
                    <div class="price_container">
                        <a class="bg-danger text-light">Upto 52% Off</a>
                        <a class="text-danger">Deal Of The Day</a>
                    </div>
                    Lorem ipsum dolor sit.
                </div>
                <div class="prod_item">
                <a href="product_page.php">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    </a>
                    <div class="price_container">
                        <a class="bg-danger text-light">Upto 52% Off</a>
                        <a class="text-danger">Deal Of The Day</a>
                    </div>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
                <div class="prod_item">
                <a href="product_page.php">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    </a>
                    <div class="price_container">
                        <a class="bg-danger text-light">Upto 52% Off</a>
                        <a class="text-danger">Deal Of The Day</a>
                    </div>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
                <div class="prod_item">
                <a href="product_page.php">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    </a>
                    <div class="price_container">
                        <a class="bg-danger text-light">Upto 52% Off</a>
                        <a class="text-danger">Deal Of The Day</a>
                    </div>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
                <div class="prod_item">
                <a href="product_page.php">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    </a>
                    <div class="price_container">
                        <a class="bg-danger text-light">Upto 52% Off</a>
                        <a class="text-danger">Deal Of The Day</a>
                    </div>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
            </div>
        </div>
    </section>
    



    
    <!-- <main class="main block">
        <div class="card-prod-container container">
            <div class="card-prod">
                <h2>Shop and Pay | Earn rewards daily</h2>
                <div class="card-prod-nested-card">
                <div class="card-nested">
                    <a href="http://">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    </a>
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                </div>
            </div>
            
            <div class="card-prod">
                <h2>Shop and Pay | Earn rewards daily</h2>
                <div class="card-prod-nested-card">
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                </div>
            </div>
            <div class="card-prod">
                <h2>Shop and Pay | Earn rewards daily</h2>
                <div class="card-prod-nested-card">
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                </div>
            </div>
            <div class="card-prod">
                <h2>Shop and Pay | Earn rewards daily</h2>
                <div class="card-prod-nested-card">
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                </div>
            </div>
        </div>
        <div class="card-prod-container container">
            <div class="card-prod">
                <h2>Shop and Pay | Earn rewards daily</h2>
                <div class="card-prod-nested-card">
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Bleach</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                </div>
            </div>
            <div class="card-prod">
                <h2>Shop and Pay | Earn rewards daily</h2>
                <div class="card-prod-nested-card">
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                </div>
            </div>
            <div class="card-prod">
                <h2>Shop and Pay | Earn rewards daily</h2>
                <div class="card-prod-nested-card">
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Bleach</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                </div>
            </div>
            <div class="card-prod">
                <h2>Shop and Pay | Earn rewards daily</h2>
                <div class="card-prod-nested-card">
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="card-nested">
                    <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="">
                    <p>Lorem Ipsum</p>
                </div>
                </div>
            </div>
        </div>
    </main> -->

    <?php
    include_once("./includes/footer.php");
    ?>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="frontjs.js"></script>
</body>
</html>