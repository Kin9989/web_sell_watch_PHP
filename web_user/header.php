<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#searchInput").keyup(function() {
            var query = $(this).val(); // Lấy từ khóa tìm kiếm từ input

            $.ajax({
                type: "POST",
                url: "test_search.php",
                data: {
                    query: query
                },
                success: function(data) {
                    // Cập nhật nội dung của phần tử có id là "searchResults"
                    $("#searchResults").html(data);
                }
            });
        });
    });
</script>

<body class="sticky-header">
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Mainmenu Area  -->
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-brand">
                    <a href="index.php?act=home">
                        <img style="  width: 100%; height: 52px;" src="../assets/images/logo/LogoMain.jpg" alt="Site Logo" />
                    </a>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav">
                        <button class="mobile-close-btn mobile-nav-toggler">
                            <i class="fas fa-times"></i>
                        </button>
                        <div class="mobile-nav-brand">
                            <a href="index.php?act=index.php?act=home" class="logo">
                                <img src="../assets/images/logo/LogoMain.jpg" alt="Site Logo" />
                            </a>
                        </div>
                        <ul class="mainmenu">
                            <li>
                                <a href="index.php?act=home">HOME</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">PRODUCTS</a>
                                <ul class="axil-submenu">
                                    <?php
                                    foreach ($catalog_use as $catalog) {
                                        if ($catalog['display_ctl'] == 1) {
                                            echo '
                            <li><a href="index.php?act=product_catalog_user&id=' . $catalog['id_catalog_k'] . '">' . $catalog['catalog_name'] . '</a></li>
                          ';
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li><a href="index.php?act=about">ABOUT</a></li>
                        </ul>
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
                <div class="header-action">
                    <ul class="action-list">
                        <li class="axil-search d-xl-block d-none">
                            <input type="search" class="placeholder product-search-input" name="search2" id="search2" value="" maxlength="128" placeholder="What are you looking for?" autocomplete="off" />
                            <button type="submit" class="icon wooc-btn-search">
                                <i class="flaticon-magnifying-glass"></i>
                            </button>
                        </li>
                        <li class="axil-search d-xl-none d-block">
                            <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                <i class="flaticon-magnifying-glass"></i>
                            </a>
                        </li>
                        <!-- search nav -->
                        <div class="header-search-modal" id="header-search-modal">
                            <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
                            <div class="header-search-wrap">
                                <div class="card-header">
                                    <form action="test_search.php">
                                        <div class="input-group">
                                            <input type="text" id="searchInput" class="form-control" placeholder="Write Something....">
                                            <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                                        </div>
                                    </form>
                                    <div id="searchResults"></div>
                                </div>
                                <div class="card-body">
                                    <div id="searchResults">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Header Search Modal End -->
                        <!-- end search -->
                        <li class="shopping-cart">
                            <a id="cart_click" href="#" class="cart-dropdown-btn">
                                <span id="cart-count" class="cart-count"></span>
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </li>
                        <script>
                            // Cập nhật giá trị sau mỗi 5 giây (5000 milliseconds)
                            setInterval(function() {
                                // Gửi yêu cầu AJAX để lấy số lượng từ session
                                var xhr = new XMLHttpRequest();
                                xhr.open('GET', 'get_cart_count.php', true);
                                xhr.onreadystatechange = function() {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        // Cập nhật giá trị trong thẻ span
                                        document.getElementById('cart-count').textContent = xhr
                                            .responseText;
                                    }
                                };
                                xhr.send();
                            }, 200); // Thời gian cập nhật (2 giây)
                        </script>
                        <script>
                            var input = document.getElementById('cart_click');
                            input.onclick = function() {
                                window.location.href = 'index.php?act=cart';
                            };
                        </script>


                        <li class="my-account">
                            <a href="javascript:void(0)">
                                <i class="flaticon-person"></i>
                            </a>
                            <div class="my-account-dropdown">
                                <span style="display: block; text-align: center;" class="title"></span>
                                <ul>
                                    <?php
                                    if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
                                        echo '
                          <div class="login-btn">
                          <li><a class="axil-btn btn-bg-primary" style="text-align: center;" href="index.php?act=account_user">My account</a></li>
                          </div>
                          </ul>
                          <div class="login-btn">
                            <a href="index.php?act=logout" class="axil-btn btn-bg-primary">Log out</a>
                          </div>
                          ';
                                    } else {
                                        echo '
                          <div class="login-btn">
                          <a href="index.php?act=login" class="axil-btn btn-bg-primary">Login</a>
                          </div>
                          <div class="login-btn">
                          <a href="index.php?act=insert_client_user&id=1" class="axil-btn btn-bg-primary">Sign up</a>
                          </div>';
                                    } ?>
                            </div>
                        </li>
                        <li class="axil-mobile-toggle">
                            <button class="menu-btn mobile-nav-toggler">
                                <i class="flaticon-menu-2"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
    </header>
</body>

</html>