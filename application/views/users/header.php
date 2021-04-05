<!--// Header //-->
<header id="ritekhela-header" class="ritekhela-header-one">
    <div id="counter"></div>
    <!--// TopStrip //-->
    <div class="ritekhela-topstrip">
        <div class="container">
            <div class="row">

                <aside class="col-md-6">
                    <strong>Latest News :</strong>
                    <div class="ritekhela-latest-news-slider">
                        <div class="ritekhela-latest-news-slider-layer">Welcome visitor you can Login or Create an Account </div>
                        <div class="ritekhela-latest-news-slider-layer">While familiar with fellow European nation France Hareide. </div>
                    </div>
                </aside>
                <aside class="col-md-6">
                    <ul class="ritekhela-user-strip">
                        <li><a href="#"><i class="fa fa-globe-africa"></i> Location : Nigeria</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#ritekhelamodalcenter"><i class="fa fa-user-alt"></i> Login</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#ritekhelamodalrg"><i class="fa fa-sign-in-alt"></i> Signup</a></li>
                    </ul>
                </aside>

            </div>
        </div>
    </div>
    <!--// TopStrip //-->

    <!--// Main Header //-->
    <div class="ritekhela-main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo site_url(); ?>" class="ritekhela-logo"><img src="<?php echo base_url('assets/img/logo.png') ?>" alt=""></a>
                    <div class="ritekhela-right-section">
                        <div class="ritekhela-navigation">
                            <span class="ritekhela-menu-link">
                                <span class="menu-bar"></span>
                                <span class="menu-bar"></span>
                                <span class="menu-bar"></span>
                            </span>
                            <nav id="main-nav">
                                <ul id="main-menu" class="sm sm-blue">
                                    <li class="<?php echo (isset($home_m)) ? 'active' : ''; ?>"><a href="<?php echo site_url(); ?>">Home</a></li>
                                    <li class="<?php echo (isset($blog_m)) ? 'active' : ''; ?>"><a href="<?php echo site_url('blog'); ?>">Blog</a></li>
                                    <li class="<?php echo (isset($ranks_m)) ? 'active' : ''; ?>"><a href="<?php echo site_url('ranks'); ?>">Rankings</a></li>
                                    <?php
                                    $CI = &get_instance();
                                    $CI->load->helper('GL');
                                    $admin_login = check_adhead();

                                    if ($admin_login == TRUE) :
                                        // Add Admin Navigation
                                    ?>
                                        <li class="<?php echo (isset($admin)) ? 'active' : ''; ?>"><a href="#">Admin panel</a>
                                            <ul>
                                                <li><a href="#">Blog</a>
                                                    <ul>
                                                        <li><a href="<?php echo site_url('admin/blog/add_post') ?>">Add New</a></li>
                                                        <li><a href="<?php echo site_url('admin/blog/') ?>">Blog List</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Ranking</a>
                                                    <ul>
                                                        <li><a href="<?php echo site_url('admin/uni_details/') ?>">University Lists</a></li>
                                                        <li><a href="<?php echo site_url('admin/uni_details/add_uni') ?>">Add New University</a></li>
                                                        <li><a href="<?php echo site_url('admin/rank/') ?>">Ranking Data</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    <?php
                                    endif;
                                    ?>
                                    <li class="<?php echo (isset($contact_m)) ? 'active' : ''; ?>"><a href="<?php echo site_url('contact'); ?>">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <ul class="ritekhela-navsearch">
                            <li><a href="#" data-toggle="modal" data-target="#ritekhelamodalsearch"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Main Header //-->

</header>
<!--// Header //-->