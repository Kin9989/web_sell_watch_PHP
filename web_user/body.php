<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Tick Tock WATCH </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/logo/logo.png" />

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/vendor/font-awesome.css" />
    <link rel="stylesheet" href="../assets/css/vendor/flaticon/flaticon.css" />
    <link rel="stylesheet" href="../assets/css/vendor/slick.css" />
    <link rel="stylesheet" href="../assets/css/vendor/slick-theme.css" />
    <link rel="stylesheet" href="../assets/css/vendor/jquery-ui.min.css" />
    <link rel="stylesheet" href="../assets/css/vendor/sal.css" />
    <link rel="stylesheet" href="../assets/css/vendor/magnific-popup.css" />
    <link rel="stylesheet" href="../assets/css/vendor/base.css" />
    <link rel="stylesheet" href="../assets/css/style.min.css" />

</head>

<main class="main-wrapper">
    <!-- Start Slider Area (banner) -->
    <!-- <div class="axil-main-slider-area main-slider-style-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="main-slider-content">
                       
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="main-slider-large-thumb">
                        <div class="slider-thumb-activation-two axil-slick-dots">
                            
                            <?php
                            $i = 0;
                            foreach ($product_view as $pd) {
                                if ($i < 5) {
                                    if ($pd['special'] == 1) {
                                        echo '
                        <div class="single-slide slick-slide">
                            <div class="axil-product product-style-five">
                                    <div class="thumbnail">
                                        <a href="index.php?act=detail_product&id=' . $pd['id_product'] . '">
                                            <img
                                            src="../uploads/' . $pd['product_img'] . '"
                                            alt="Product Images"
                                            />
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title">
                                              <a href="index.php?act=detail_product&id=' . $pd['id_product'] . '">' . $pd['product_name'] . '</a>
                                            </h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">' . number_format($pd['product_prices']) . 'đ</span>
                                            </div>
                                            <ul class="cart-action">
                                                <li class="select-option">
                                                    <a " href="index.php?act=detail_product&id=' . $pd['id_product'] . '">Buy Product</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        ';
                                        $i++;
                                    }
                                }
                            } ?>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- <img src="../assets/images/bg/banner3.png" class="d-block w-100" alt="..."> -->
                <div class="axil-main-slider-area main-slider-style-3">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-slider-content">
                                    <!-- <span class="subtitle"><i class="fas fa-fire"></i>
                            Unique - Strangest - Only One</span>
                        <h1 class="title">Fashion for Everyone</h1> -->
                                    <!-- <div class="shop-btn">
                  <a
                    href="shop-sidebar.html"
                    class="axil-btn btn-bg-white right-icon"
                    >Shopping Now <i class="fal fa-long-arrow-right"></i
                  ></a>
                </div> -->
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-slider-large-thumb">
                                    <div class="slider-thumb-activation-two axil-slick-dots">
                                        <!-- start -->
                                        <?php
                                        $i = 0;
                                        foreach ($product_view as $pd) {
                                            if ($i < 5) {
                                                if ($pd['special'] == 1) {
                                                    echo '
                        <div class="single-slide slick-slide">
                            <div class="axil-product product-style-five">
                                    <div class="thumbnail">
                                        <a href="index.php?act=detail_product&id=' . $pd['id_product'] . '">
                                            <img
                                            src="../uploads/' . $pd['product_img'] . '"
                                            alt="Product Images"
                                            />
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title">
                                              <a href="index.php?act=detail_product&id=' . $pd['id_product'] . '">' . $pd['product_name'] . '</a>
                                            </h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">' . number_format($pd['product_prices']) . 'đ</span>
                                            </div>
                                            <ul class="cart-action">
                                                <li class="select-option">
                                                    <a " href="index.php?act=detail_product&id=' . $pd['id_product'] . '">Buy Product</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        ';
                                                    $i++;
                                                }
                                            }
                                        } ?>
                                        <!-- end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/images/bg/banner3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/bg/banner1.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Hot Product -->
    <div class="axil-best-seller-product-area bg-color-white axil-section-gap pb--0">
        <div class="container">
            <div class="product-area pb--50">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary">

                        <h2 class="title text__Center">Hot products</h2>
                </div>
                <div class="new-arrivals-product-activation-2 slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide product-slide-mobile">
                    <?php
                    // var_dump($product);
                    $i = 0;
                    foreach ($product as $pd) {
                        if ($pd['view'] == 1 && $pd['special'] == 1) {
                            echo '
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-six">
                            <div class="thumbnail">
                                <a href="index.php?act=detail_product&id=' . $pd['id_product'] . '">
                                    <img
                                    class="conform-img"
                                    data-sal="fade"
                                    data-sal-delay="100"
                                    data-sal-duration="1500"
                                    src="../uploads/' . $pd['product_img'] . '"
                                    alt="Product Images"
                                    />
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="product-price-variant">
                                    <span class="price current-price">' . number_format($pd['product_prices']) . 'đ</span>
                                    </div>
                                        <h5 style="text-align:center" class="title">
                                            <a href="index.php?act=detail_product&id=' . $pd['id_product'] . '"
                                                >' . $pd['product_name'] . '
                                                <span class="verified-icon"
                                                ><i class="fas fa-badge-check"></i></span
                                            ></a>
                                        </h5>
                                        <ul class="cart-action">
                                            <li class="select-option">
                                                <a href="index.php?act=detail_product&id=' . $pd['id_product'] . '">Buy product</a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
                            $i++;
                        }
                    }                ?>
                    <!-- End .slick-single-layout -->
                </div>
            </div>
        </div>
    </div>

    <div class="ratio ratio-16x9" style=" width:850px; height:500px; margin:0 auto;">
        <iframe src="https://www.youtube.com/embed/nyaBARDPqGQ?si=KhB2E3YuX-B8dy0Y&amp;autoplay=1&amp;mute=1&amp;controls=0&amp;start=21" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <!-- News Product  -->
    <div class="axil-product-area bg-color-white axil-section-gap pb--0">
        <div class="container">
            <div class="product-area pb--20">
                <div class="axil-isotope-wrapper">
                    <div class="product-isotope-heading">
                        <div class="section-title-wrapper">

                            <h2 class="title">New Products</h2>
                        </div>
                        <div class="isotope-button">
                            <?php
                            echo '
                    <button data-filter="*" class="is-checked">
                    <span class="filter-text">All</span>
                    </button>';
                            foreach ($catalog_use as $catalog) {
                                echo '
                      <button data-filter=".' . $catalog['id_catalog_k'] . '" class="">
                      <span class="filter-text">' . $catalog['catalog_name'] . '</span>
                      </button>
                      ';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row row--15 isotope-list">
                    <!-- Start -->
                    <!--  -->
                    <?php
                    $count = 0;
                    foreach ($product_use as $result) {

                        echo '                
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30 product ' . $result['catalog_id'] . '">
                                    <div class="axil-product product-style-one">
                                        <div class="thumbnail">
                                            <a href="index.php?act=detail_product&id=' . $pd['id_product'] . '">
                                                <img
                                                class="conform-img"
                                                data-sal="fade"
                                                data-sal-delay="100"
                                                data-sal-duration="1500"
                                                src="../uploads/' . $result['product_img'] . '"
                                                alt="Product Images"
                                                />
                                            </a>
                                            <div class="product-hover-action">
                                                <ul class="cart-action">
                                                    <li class="select-option">
                                                    
                                                        <a href="index.php?act=detail_product&id=' . $result['id_product'] . '">Buy Product</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <h5 class="title">
                                                    <a href="index.php?act=detail_product&id=' . $result['id_product'] . '"
                                                        >' . $result['product_name'] . '
                                                        <span class="verified-icon"
                                                        ><i class="fas fa-badge-check"></i></span
                                                    ></a>
                                                </h5>
                                                <div class="product-price-variant">
                                                    <span class="price current-price">' . number_format($result['product_prices']) . 'đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                        $count++;
                    }


                    ?>
                </div>
            </div>
            <!-- <form id="product_'.$count.'" action="index.php?act=add_cart" method="POST">
                                        <input type="hidden" value="'.$result['product_img'].'" name="img">
                                        <input type="hidden" value="'.$result['product_name'].'" name="name">
                                        <input type="hidden" value="'.$result['product_prices'].'" name="price">
                                        <input type="hidden" value="'.$result['id_product'].'" name="id">
                                        <input type="hidden" value="'.$result['size'].'" name="size">
                                    </form> -->
            <!-- <script>
                    function submitNewForm(formIndex) 
                    {
                        var form = document.getElementById('product_' + formIndex);
                        form.submit();
                    }
                </script> -->
        </div>
    </div>
    <!-- Bard -->
    <div id="container">
        <h1>Collaborating brands</h1>
        <div id="slider-container">
            <span onclick="slideRight()" class="btn"></span>
            <div id="slider">
                <div class="slide">
                    <img src="../assets/images/others/sendsucess.jpg" />
                </div>
                <div class="slide">
                    <img src="../assets/images/others/sendsucess.jpg" />
                </div>
                <div class="slide">
                    <img src="../assets/images/others/sendsucess.jpg" />
                </div>
                <div class="slide">
                    <img src="../assets/images/others/sendsucess.jpg" />
                </div>
                <div class="slide">
                    <img src="../assets/images/others/sendsucess.jpg" />
                </div>
                <div class="slide">
                    <img src="../assets/images/others/sendsucess.jpg" />
                </div>
                <div class="slide">
                    <img src="../assets/images/others/sendsucess.jpg" />
                </div>
                <div class="slide">
                    <img src="../assets/images/others/sendsucess.jpg" />
                </div>
                <div class="slide">
                    <img src="../assets/images/others/sendsucess.jpg" />
                </div>
            </div>
            <span onclick="slideLeft()" class="btn"></span>
        </div>
    </div>


    </div>
    </div>
    </div>
    <!-- End Expolre Product Area  -->


    <!-- Modernizer JS -->

    <!-- jQuery JS -->

    <!-- Bootstrap JS -->


    <!-- Main JS -->


    <style type="text/css">
        #container {

            height: 100vh;
            width: 100vw;
            margin: 0;
            padding: 0;
            background: white;
            display: grid;
            place-items: center;
        }

        #slider-container {
            margin-top: -300px;
            height: 300px;
            width: 85vw;
            max-width: 1400px;
            /* background: #54d5e4; */
            /* box-shadow: 5px 5px 8px gray inset; */
            position: relative;
            overflow: hidden;
            padding: 20px;
        }

        #slider-container .btn {
            position: absolute;
            top: calc(50% - 30px);
            height: 30px;
            width: 30px;
            border-left: 8px solid pink;
            border-top: 8px solid pink;
        }

        #slider-container .btn:hover {
            transform: scale(1.2);
        }

        #slider-container .btn.inactive {
            border-color: rgb(153, 121, 126)
        }

        #slider-container .btn:first-of-type {
            transform: rotate(-45deg);
            left: 10px
        }

        #slider-container .btn:last-of-type {
            transform: rotate(135deg);
            right: 10px;
        }

        #slider-container #slider {
            display: flex;
            width: 1000%;
            height: 100%;
            transition: all .5s;
        }

        #slider-container #slider .slide {
            height: 90%;
            margin: auto 10px;
            /* background-color: #a847a4; */
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

            display: grid;
            place-items: center;
        }


        @media only screen and (min-width: 1100px) {
            #slider-container #slider .slide {
                width: calc(2.5% - 20px);
            }
        }

        @media only screen and (max-width: 1100px) {
            #slider-container #slider .slide {
                width: calc(3.3333333% - 20px);
            }
        }

        @media only screen and (max-width: 900px) {
            #slider-container #slider .slide {
                width: calc(5% - 20px);
            }
        }

        @media only screen and (max-width: 550px) {
            #slider-container #slider .slide {
                width: calc(10% - 20px);
            }
        }
    </style>

    <script type="text/javascript">
        var container = document.getElementById('container');
        var slider = document.getElementById('slider');
        var slides = document.getElementsByClassName('slide').length;
        var buttons = document.getElementsByClassName('btn');
        var autoRotate = true;
        var interval;

        var currentPosition = 0;
        var currentMargin = 0;
        var slidesPerPage = 0;
        var slidesCount = slides - slidesPerPage;
        var containerWidth = container.offsetWidth;
        var prevKeyActive = false;
        var nextKeyActive = true;

        window.addEventListener("resize", checkWidth);

        function checkWidth() {
            containerWidth = container.offsetWidth;
            setParams(containerWidth);
        }

        function setParams(w) {
            if (w < 551) {
                slidesPerPage = 1;
            } else {
                if (w < 901) {
                    slidesPerPage = 2;
                } else {
                    if (w < 1101) {
                        slidesPerPage = 3;
                    } else {
                        slidesPerPage = 4;
                    }
                }
            }
            slidesCount = slides - slidesPerPage;
            if (currentPosition > slidesCount) {
                currentPosition -= slidesPerPage;
            }
            currentMargin = -currentPosition * (100 / slidesPerPage);
            slider.style.marginLeft = currentMargin + '%';
            if (currentPosition > 0) {
                buttons[0].classList.remove('inactive');
            }
            if (currentPosition < slidesCount) {
                buttons[1].classList.remove('inactive');
            }
            if (currentPosition >= slidesCount) {
                buttons[1].classList.add('inactive');
            }
        }

        setParams();

        function slideRight() {
            if (currentPosition != 0) {
                slider.style.marginLeft = currentMargin + (100 / slidesPerPage) + '%';
                currentMargin += (100 / slidesPerPage);
                currentPosition--;
            }
            if (autoRotate && currentPosition === 0) {
                slider.style.transition = "none";
                slider.style.marginLeft = -slidesCount * (100 / slidesPerPage) + "%";
                setTimeout(function() {
                    slider.style.transition = "all .5s";
                    currentPosition = slidesCount;
                    currentMargin = -currentPosition * (100 / slidesPerPage);
                    slider.style.marginLeft = currentMargin + "%";
                }, 50);
            }
            if (currentPosition === 0) {
                buttons[0].classList.add('inactive');
            }
            if (currentPosition < slidesCount) {
                buttons[1].classList.remove('inactive');
            }
        }

        function slideLeft() {
            if (currentPosition != slidesCount) {
                slider.style.marginLeft = currentMargin - (100 / slidesPerPage) + '%';
                currentMargin -= (100 / slidesPerPage);
                currentPosition++;
            }
            if (autoRotate && currentPosition === slidesCount) {
                slider.style.transition = "none";
                slider.style.marginLeft = "0%";
                setTimeout(function() {
                    slider.style.transition = "all .5s";
                    currentPosition = 0;
                    currentMargin = -currentPosition * (100 / slidesPerPage);
                    slider.style.marginLeft = currentMargin + "%";
                }, 50);
            }
            if (currentPosition == slidesCount) {
                buttons[1].classList.add('inactive');
            }
            if (currentPosition > 0) {
                buttons[0].classList.remove('inactive');
            }
        }

        function startAutoRotate() {
            interval = setInterval(function() {
                slideLeft();
            }, 10000); // 10 seconds interval
        }

        function stopAutoRotate() {
            clearInterval(interval);
        }

        // Tự động chạy vòng lặp khi chuột rời khỏi slider
        slider.addEventListener("mouseleave", startAutoRotate);

        // Dừng vòng lặp khi chuột nằm trên slider
        slider.addEventListener("mouseenter", stopAutoRotate);
    </script>