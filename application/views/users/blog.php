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
                        <div class="ritekhela-blogs ritekhela-blog-view1">
                            <ul class="row">
                                <?php foreach($posts as $post): ?>
                                <li class="col-md-6">
                                    <figure><a href="#"><img class="img-thumbnail" src="extra-images/blog-view1-1.jpg" alt=""> <i class="fa fa-link"></i> </a></figure>
                                    <div class="ritekhela-blog-view1-text">
                                        <ul class="ritekhela-blog-options">
                                            <li><a href="#"><i class="far fa-user"></i> By <?php echo $post['author']; ?></a></li>
                                            <li><i class="far fa-calendar-alt"></i> <?php echo $post['date']; ?></li>
                                        </ul>
                                        <h2><a href="<?php echo site_url('blog/' . $post['slug']); ?>"><?php echo $post['title']; ?></a></h2>
                                        <p><?php echo $post['excerpts']; ?>.</p>
                                        <a href="<?php echo site_url('blog/'. $post['slug']); ?>" class="btn" style="background-color: #ffdc11;">Read More</a>
                                    </div>
                                </li>
                                
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <!--// Pagination //-->
                        <div class="ritekhela-pagination">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <!--// Pagination //-->
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
                                <li><a href="#">Boxing</a> 03</li>
                                <li><a href="#">Championship</a> 05</li>
                                <li><a href="#">Cycling</a> 03</li>
                                <li><a href="#">Football</a> 19</li>
                                <li><a href="#">NFL</a> 02</li>
                                <li><a href="#">Golf</a> 11</li>
                                <li><a href="#">Premier League</a> 12</li>
                                <li><a href="#">Tennis</a> 04</li>
                                <li><a href="#">Super Ball</a> 03</li>
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