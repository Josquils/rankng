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
                        <figure class="ritekhela-fixture-detail">
                            <img src="extra-images/fixture-detail-2.jpg" alt="">
                            <ul class="ritekhela-blog-options">
                                <li><a href="#"><i class="far fa-user"></i> By <?php echo $post['author'] ?></a></li>
                                <li><i class="far fa-calendar-alt"></i> <?php echo $post['date']; ?></li>
                                <li><a href="#"><i class="fa fa-tag"></i> Blogs,</a> <a href="#">Sports,</a> <a href="#">Footbal</a> </li>
                            </ul>
                        </figure>

                        <div class="ritekhela-editor-detail">
                            <h2><?php echo $post['title']; ?></h2>
                            <?php echo $post['content']; ?>
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