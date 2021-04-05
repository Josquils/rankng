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
            $submit_path = (isset($post['sub_type']) && $post['sub_type'] == 'edit') ? 'admin/uni_details/update/' . $post['school_id'] : 'admin/uni_details/add_uni';

            ?>
            
            <?php echo form_open_multipart($submit_path);?>
                <div class="container">
                    <div class="row">

                        <!-- News content with pagination -->
                        <div class="col-md-8">


                            <div class="form-group">
                                <h5>Name of University</h5>
                                <input class="form-control" name="name" type="text" value="<?php echo (isset($post['name']) ? $post['name'] : ''); ?>" placeholder="University Name" />
                                <br><br>
                                <input class="form-control" name="abb" type="text" value="<?php echo (isset($post['abb']) ? $post['abb'] : ''); ?>" placeholder="University Abbreviation" />
                            </div>

                            <div class="form-group">

                                <h5>Details</h5>
                                <textarea class="form-control" id="content" name="details"><?php echo (isset($post['about']) ? $post['about'] : ''); ?></textarea>
                                <p class="help-block"> Do not include comma (,).</p>

                            </div>


                        </div>
                        <!-- Close main content -->

                        <!-- Sidebar with recent list and social media follow -->
                        <div class="col-md-4">

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h5>SCHOOL LOGO</h5>
                                </div>
                                <div class="panel-body">

                                    <div class="form-group col-md-6">
                                        <label class="control-label col-lg-12">Logo</label>
                                        <div class="">

                                            <div class="fileupload fileupload-new" data-provides="fileupload">

                                                <div class="fileupload-new thumbnail" style="width: 300px; height: 150px;"><img src="<?php echo (isset($post['thumbnail'])) ? base_url() . '/tips_img/' .  $post['thumbnail'] : '';  ?>" alt="" /></div>

                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

                                                <div>
                                                    <span class="btn btn-file btn-block" style="background-color: #FFDC11;">
                                                        <span class="fileupload-new">Select Logo</span>
                                                        <span class="fileupload-exists">Change</span>
                                                        <input type="file" accept=".jpg" name="logo" />
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
                                    <h5>Website URL</h5>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input class="form-control" name="url" type="text" value="<?php echo (isset($post['website']) ? $post['website'] : ''); ?>" placeholder="University Website Address" />
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">

                                <div class="panel-heading">
                                    <h5>LOCATION</h5>
                                </div>

                                <div class="panel-body">

                                    <div class="form-group">

                                        <textarea class="form-control" name="location" style="height: 220px; "><?php echo (isset($post['location']) ? strip_tags($post['location']) : ''); ?></textarea>

                                        <?php echo (isset($error['location'])) ? '<p class="help-block">' . $error['location'] . '</p>' : '';  ?>

                                    </div>

                                </div>

                            </div>


                            <input type="submit" name="<?php echo (isset($post['sub_type']) && $post['sub_type'] == 'edit') ? 'update_post' : 'add_post' ?>" class="btn btn-block" value="<?php echo (isset($post['sub_type']) && $post['sub_type'] == 'edit') ? 'Update School' : 'Add School' ?>" style="background-color: #FFDC11;" />


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
            height: '300px',
            uiColor: '#AA920B'
        });
    </script>
</body>


</html>