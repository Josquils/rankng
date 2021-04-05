{form_data}
<form name="profile_update" enctype="multipart/form-data" action="<?php echo site_url();?>/nta_admin/contest/<?php echo (isset($data['route'])) ? $data['route'] : 'add_new' ?>" method="post">

    <div class="panel panel-success">
<script src="<?php ?>ckeditor.js"></script>
        <div class="panel-heading">
            IMAGES OF LOCATION
        </div>

        <div class="panel-body">

            <div class="row">

                <div class="form-group col-md-6">
                    <label class="control-label col-lg-4">Contest Image 1</label>
                    <div class="">

                        <div class="fileupload fileupload-new" data-provides="fileupload">

                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo (isset($data['contest_img1'])) ? base_url().'/contest_imgages/slideshow/'.  $data['contest_img1'] : '';  ?>" alt="" /></div>

                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

                            <div>
                                <span class="btn btn-file btn-primary">
                                    <span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="contest_img1" />
                                </span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>

                                <?php
                                                        if(isset($error['contest_img1']))
                                                        {
                                                            if($error['contest_img1'] != 'You did not select a file to upload.')
                                                            {
                                                                echo $error['contest_img1'];
                                                            }
                                                        } 
                                                    
                                                    ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="control-label col-lg-4">Contest Image 2</label>
                    <div class="">

                        <div class="fileupload fileupload-new" data-provides="fileupload">

                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo (isset($data['contest_img2'])) ? base_url().'/contest_imgages/slideshow/'.  $data['contest_img2'] : '';  ?>" alt="" /></div>

                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

                            <div>
                                <span class="btn btn-file btn-primary">
                                    <span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="contest_img2" />
                                </span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>

                                <?php
                                                        if(isset($error['contest_img2']))
                                                        {
                                                            if($error['contest_img2'] != 'You did not select a file to upload.')
                                                            {
                                                                echo $error['contest_img2'];
                                                            }
                                                        } 
                                                    
                                                    ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="form-group col-md-6">
                    <label class="control-label col-lg-4">Contest Image 3</label>
                    <div class="">

                        <div class="fileupload fileupload-new" data-provides="fileupload">

                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo (isset($data['contest_img3'])) ? base_url().'/contest_imgages/slideshow/'.  $data['contest_img3'] : '';  ?>" alt="" /></div>

                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

                            <div>
                                <span class="btn btn-file btn-primary">
                                    <span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="contest_img3" />
                                </span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>

                                <?php
                                                        if(isset($error['contest_img3']))
                                                        {
                                                            if($error['contest_img3'] != 'You did not select a file to upload.')
                                                            {
                                                                echo $error['contest_img3'];
                                                            }
                                                        } 
                                                    
                                                    ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="control-label col-lg-4">Contest Image 4</label>
                    <div class="">

                        <div class="fileupload fileupload-new" data-provides="fileupload">

                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo (isset($data['contest_img4'])) ? base_url().'/contest_imgages/slideshow/'.  $data['contest_img4'] : '';  ?>" alt="" /></div>

                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

                            <div>
                                <span class="btn btn-file btn-primary">
                                    <span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="contest_img4" />
                                </span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>

                                <?php
                                                        if(isset($error['contest_img4']))
                                                        {
                                                            if($error['contest_img4'] != 'You did not select a file to upload.')
                                                            {
                                                                echo $error['contest_img4'];
                                                            }
                                                        } 
                                                    
                                                    ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="form-group col-md-6">
                    <label class="control-label col-lg-4">Contest Image 5</label>
                    <div class="">

                        <div class="fileupload fileupload-new" data-provides="fileupload">

                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo (isset($data['contest_img5'])) ? base_url().'/contest_imgages/slideshow/'.  $data['contest_img5'] : '';  ?>" alt="" /></div>

                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

                            <div>
                                <span class="btn btn-file btn-primary">
                                    <span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="contest_img5" />
                                </span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>

                                <?php
                                                        if(isset($error['contest_img5']))
                                                        {
                                                            if($error['contest_img5'] != 'You did not select a file to upload.')
                                                            {
                                                                echo $error['contest_img5'];
                                                            }
                                                        } 
                                                    
                                                    ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



    <div class="panel panel-success">

        <div class="panel-heading">
            INFORMATION
        </div>

        <div class="panel-body">

            <div class="form-group">

                <label>Contest Name</label>
                <input class="form-control" name="contest_name" type="text" value="<?php echo (isset($data['contest_name'])) ? $data['contest_name'] : '' ; ?>">

                <?php echo (isset($error['contest_name'])) ? '<p class="help-block">'. $error['contest_name'] . '</p>' : '';  ?>

            </div>

            <div class="form-group">

                <label>Contest Type</label>
                <select class="form-control" name="contest_type">

                    <option value="solo" <?php echo (isset($data['contest_type']) && $data['contest_type'] == 'solo' ) ? 'selected' : ''; ?>> Solo </option>

                    <option value="family" <?php echo (isset($data['contest_type']) && $data['contest_type'] == 'family' ) ? 'selected' : ''; ?>>Family</option>

                    <option value="group" <?php echo (isset($data['contest_type']) && $data['contest_type'] == 'group' ) ? 'selected' : ''; ?>>Group</option>

                </select>

                <?php echo (isset($error['contest_type'])) ? '<p class="help-block">'. $error['contest_type'] . '</p>' : '';  ?>

            </div>

            <div class="form-group">

                <label>Entry Amount</label>
                <input class="form-control" name="entry_amount" type="text" value="<?php echo (isset($data['entry_amount']) ? $data['entry_amount'] : '' ); ?>" placeholder="Entry Amount (naira)" />

                <p class="help-block"> Do not include comma (,).</p>

            </div>

            <div class="form-group">

                <label>Draw Amount</label>
                <input class="form-control" placeholder="Draw amount (naira)" name="draw_amount" type="text" value="<?php echo (isset($data['draw_amount']) ? $data['draw_amount'] : '') ; ?>">

                <p class="help-block"> Do not separate with comma (,). </p>

            </div>

            <div class="form-group">

                <label>Contest Start Date and Time</label>
                <input class="form-control" name="contest_start" type="datetime-local" value="<?php echo (isset($data['contest_start']) ? $data['contest_start'] : ''); ?>">

                <?php echo (isset($error['contest_start'])) ? '<p class="help-block">'. $error['contest_start'] . '</p>' : '';  ?>

            </div>

            <div class="form-group">

                <label>Contest End Date and Time</label>
                <input class="form-control" name="contest_end" type="datetime-local" value="<?php echo (isset($data['contest_end']) ? $data['contest_end'] : ''); ?>">

                <?php echo (isset($error['contest_end'])) ? '<p class="help-block">'. $error['contest_end'] . '</p>' : '';  ?>

            </div>

            <div class="form-group">

                <label>Paystack Link</label>
                <input class="form-control" name="paystack_link" type="text" value="<?php echo (isset($data['paystack_link']) ? $data['paystack_link'] : ''); ?>">

                <?php echo (isset($error['payment'])) ? '<p class="help-block">'. $error['payment'] . '</p>' : '';  ?>

            </div>

            <div class="form-group">

                <label>About The Location</label>
                <textarea class="form-control" id="content" name="about_location"><?php echo (isset($data['about_location']) ? $data['about_location'] : ''); ?></textarea>

                <?php echo (isset($error['location'])) ? '<p class="help-block">'. $error['location'] . '</p>' : '';  ?>

            </div>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
            </script>

        </div>

    </div>


    <input type="submit" name="new_contest" class="btn btn-success btn-block" value="Add" />


</form>
{/form_data}
