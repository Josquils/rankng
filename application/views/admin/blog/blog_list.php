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
                        <h2>BLOG POSTS</h2>
                        <hr>
                        <?php if (count($post_data) > 0) : ?>
                            <?php foreach ($post_data as $post) : ?>
                                <div class="col-md-12" style="border: 1px solid #D7EBC7; margin: 10px;  padding: 10px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 style="display: inline-block;"> <a href="<?php echo site_url() ?>"> <?php echo $post['title'] ?> </a> </h5>
                                                <p><?php echo $post['excerpts']; ?></p>
                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <a class="" href="<?php echo site_url('admin/blog/update/'. $post['slug']) ?>"><em class="fa fa-edit">Edit</em></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a class="text-success" href="<?php echo site_url('blog/'. $post['slug']) ?>"><i class="fa fa-eye"></i><em>View</em></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <!-- <a class="text-warning" href="<?php echo site_url() ?>"><i class="fa fa-bitbucket"></i><em>Trash</em></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                                                <a class="text-danger" href="<?php echo site_url('admin/blog/delete/'. $post['slug']) ?>"><i class="fa fa-trash"></i><em>Delete</em></a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="pull-right text-muted small"><em><?php echo $post['date']; ?></em></span>
                                    <span class="pull-left text-muted small"><em><?php echo '&nbsp;&nbsp;&nbsp;&nbsp; Author: ' . $post['author']; ?></em></span>
                                </div>

                            <?php endforeach ?>

                            <?php if (isset($pagination)) : ?>
                                <?php echo $pagination; ?>
                            <?php endif; ?>

                        <?php else : ?>
                            <h5 class="text-center">There is no Post yet</h5>
                        <?php endif; ?>

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
                        <!-- Add new content button -->
                        <div class="ritekhela-fancy-title-two">
                                <h2>ACTIONS</h2>
                            </div>
                            <a href="<?php echo site_url('admin/blog/add_post') ?>" class="btn btn-primary">Add New Post</a>

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