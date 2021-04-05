<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $metas; ?>
    <?php echo $styles; ?>
</head>

<body class="home">
    <div class="ritekhela-wrapper">
        <?php echo $header; ?>

        <!-- Main content  -->
        <div class="ritekhela-main-content">

            <div class="container">
                <div class="row">

                    <!-- News content with pagination -->
                    <div class="col-md-8">
                        <div class="ritekhela-editor-detail">
                            <h2> <img src="<?php echo base_url('assets/logo/'. $post['logo']) ?>" alt="" style="height: 120px; width: 120px; display: block;"> <?php echo $post['name']; ?></h2>
                            <hr>
                            <?php echo $post['about']; ?>
                            <h5>Website Address</h5>
                            <p><a href="<?php echo $post['website'] ?>"><?php echo $post['website'] ?></a></p>
                            <div class="ritekhela-tags">
                                <span><i class="fa fa-tags"></i> Tags</span>
                                <a href="#">rush</a>
                                <a href="#">test</a>
                                <a href="#">sets</a>
                                <a href="#">Techniques</a>
                            </div>
                        </div>
                    </div>
                    <!-- Close main content -->

                    <!-- Sidebar with recent list and social media follow -->
                    <div class="col-md-4">
                        <!--// Widget Popular News //-->
                        <div class="widget widget_categories">
                            <div class="ritekhela-fancy-title-two">
                                <h2>categories</h2>
                            </div>
                            <ul>
                                <li><a href="#">Cat 1</a> 03</li>
                                <li><a href="#">Category 2</a> 05</li>
                                <li><a href="#">IPO</a> 03</li>
                                <li><a href="#">Slam</a> 19</li>
                            </ul>
                        </div>
                        <!--// Widget Popular News //-->
                    </div>
                    <!-- Close sidebars -->


                </div>
            </div>

        </div>
        <!-- End main content  -->

        <?php echo $footer; ?>
    </div>

    <?php echo $modals; ?>
    <?php echo $scripts; ?>
</body>


</html>