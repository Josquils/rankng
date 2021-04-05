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
                        <h2>UNIVERSITIES LIST</h2>
                        <hr>
                        <?php if (count($post_data) > 0) : ?>
                            <?php foreach ($post_data as $post) : ?>
                                <div class="col-md-12" style="border: 1px solid #D7EBC7; margin: 10px;  padding: 10px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 style="display: inline-block;"> <a href="<?php echo site_url() ?>"> <?php echo $post['name'] ?> </a> </h5>
                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <a class="" href="<?php echo site_url('admin/uni_details/update/'. $post['school_id']) ?>"><em class="fa fa-edit">Edit</em></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a class="text-success" href="<?php echo site_url('admin/uni_details/view/'. $post['school_id']) ?>"><i class="fa fa-eye"></i><em>View</em></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a class="text-danger" href="<?php echo site_url('admin/uni_details/delete/'. $post['school_id']) ?>"><i class="fa fa-trash"></i><em>Delete</em></a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="pull-right text-muted small"><em><?php echo  'Last Update: ' . $post['last_update']; ?></em></span>
                                    <span class="pull-left text-muted small"><em><?php echo '&nbsp;&nbsp;&nbsp;&nbsp; Author: ' . $post['author']; ?></em></span>
                                </div>

                            <?php endforeach ?>

                            <?php if (isset($pagination)) : ?>
                                <?php echo $pagination; ?>
                            <?php endif; ?>

                        <?php else : ?>
                            <h5 class="text-center">There is no University added yet</h5>
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
                            <a href="<?php echo site_url('admin/uni_details/add_uni') ?>" class="btn btn-primary">Add New University</a>

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