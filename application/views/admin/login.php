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
                    <div class="col-md-12">

                        <div class="col-md-6" style="padding: 50px;">
                            <form role="form" method="post" action="<?php echo site_url('admin/login'); ?>">
                                <hr />

                                <?php if(isset($login_error['msg']) && $login_error['msg'] !== ""): ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $login_error['msg']; ?>
                                </div>
                                <?php endif; ?>

                                <h3>Enter Details</h3>
                                <br />
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="username" class="form-control" placeholder="Your Username" value="<?php echo (isset($login_error['username'])) ? $login_error['username'] : '' ; ?>" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Your Password" value="" />
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" <?php echo (isset($login_error['remember']) && $login_error['remember'] == TRUE) ? 'checked' : '' ; ?>/> Remember me
                                    </label>
                                </div>


                                <hr />
                                <input type="submit" name="admin_login" class="btn" style="background-color: #FFDC11;" value="Login Now">
                            </form>
                        </div>

                    </div>
                    <!-- Close main content -->

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