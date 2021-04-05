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

        <?php 
            $submit_path = (isset($post['sub_type']) && $post['sub_type'] == 'edit') ? 'admin/blog/update/'. $post['slug'] : 'admin/blog/add_post';

        ?>
            <form action="<?php echo site_url($submit_path); ?>" method="post">
                <div class="container">
                    <div class="row">

                        <!-- News content with pagination -->
                        <div class="col-md-8">


                            <div class="form-group">

                                <h5>Title</h5>
                                <input class="form-control" name="title" type="text" value="<?php echo (isset($post['title']) ? $post['title'] : ''); ?>" placeholder="Post Title" />
                            </div>

                            <div class="form-group">

                                <h5>Content</h5>
                                <textarea class="form-control" id="content" name="content"><?php echo (isset($post['content']) ? $post['content'] : ''); ?></textarea>
                                <p class="help-block"> Do not include comma (,).</p>

                            </div>


                        </div>
                        <!-- Close main content -->

                        <!-- Sidebar with recent list and social media follow -->
                        <div class="col-md-4">

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h5>HEADER IMAGE</h5>
                                </div>
                                <div class="panel-body">

                                    <div class="form-group col-md-6">
                                        <label class="control-label col-lg-12">Image</label>
                                        <div class="">

                                            <div class="fileupload fileupload-new" data-provides="fileupload">

                                                <div class="fileupload-new thumbnail" style="width: 300px; height: 150px;"><img src="<?php echo (isset($post['thumbnail'])) ? base_url() . '/tips_img/' .  $post['thumbnail'] : '';  ?>" alt="" /></div>

                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

                                                <div>
                                                    <span class="btn btn-file btn-block" style="background-color: #FFDC11;">
                                                        <span class="fileupload-new">Select image</span>
                                                        <span class="fileupload-exists">Change</span>
                                                        <input type="file" accept="jpg" name="up_img" />
                                                    </span>
                                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>

                                                    <?php
                                                    if (isset($error['tip_img'])) {
                                                        if ($error['tip_img'] != 'You did not select a file to upload.') {
                                                            echo $error['tip_img'];
                                                        }
                                                    }

                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h5>Category</h5>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <select name="category" id="category">
                                            <option value="updates">Updates</option>
                                            <option value="IPO">IPO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">

                                <div class="panel-heading">
                                    <h5>EXCERPTS</h5>
                                </div>

                                <div class="panel-body">

                                    <div class="form-group">

                                        <textarea class="form-control" name="excerpts" style="height: 220px; "><?php echo (isset($post['excerpts']) ? strip_tags($post['excerpts']) : ''); ?></textarea>

                                        <?php echo (isset($error['excerpts'])) ? '<p class="help-block">' . $error['excerpts'] . '</p>' : '';  ?>

                                    </div>

                                </div>

                            </div>


                            <input type="submit" name="<?php echo (isset($post['sub_type']) && $post['sub_type'] == 'edit') ? 'update_post' : 'add_post' ?>" class="btn btn-block" value="<?php echo (isset($post['sub_type']) && $post['sub_type'] == 'edit') ? 'Update Post' : 'Add Post' ?>" style="background-color: #FFDC11;" />


                        </div>
                        <!-- Close sidebars -->


                    </div>
                </div>

            </form>
        </div>
        <!-- End main content  -->

        <?php echo $footer; ?>
    </div>

    <?php echo $modals; ?>
    <?php echo $scripts; ?>
    <script>
        // instance, using default configuration.
        CKEDITOR.replace('content', {
            height: '400px',
            uiColor: '#AA920B'
        });
    </script>
</body>


</html>