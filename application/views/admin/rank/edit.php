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

                        <form action="<?php echo site_url('admin/rank') ?>" method="post">
                            <h5>Quality Input Data</h5>
                            <div class="form-group input-group">
                                <label for="fl" style="display: inline-block;">Foreign Lecturers:</label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                <input type="text" name="fl" id="fl" placeholder="Value (e.g 5)">
                            </div>
                            <div class="form-group input-group">
                                <label for="FS" style="display: inline-block;">Foreign Students:</label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                <input type="text" name="fs" id="fs" placeholder="Value (e.g 15)">
                            </div>
                            <div class="form-group input-group">
                                <label for="std" style="display: inline-block;">Number of Students:</label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                <input type="text" name="std" id="std" placeholder="Value (e.g 20)">
                            </div>
                            <div class="form-group input-group">
                                <label for="lct" style="display: inline-block;">Number of Lecturers:</label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                <input type="text" name="lct" id="lct" placeholder="Value (e.g 20)">
                            </div>
                            <div class="form-group input-group">
                                <label for="acr" style="display: inline-block;">Number of Accreditted Courses:</label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                <input type="text" name="lct" id="lct" placeholder="Value (e.g 20)">
                            </div>
                            <hr>
                            <h5>Quality Process Data</h5>
                            <div class="form-group input-group">
                                <label for="sr" style="display: inline-block;">Number of Student Research:</label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                <input type="text" name="lr" id="lr" placeholder="Value (e.g 5)">
                            </div>
                            <div class="form-group input-group">
                                <label for="lr" style="display: inline-block;">Number of Lecturers Research:</label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                <input type="text" name="lr" id="lr" placeholder="Value (e.g 15)">
                            </div>
                            <div class="form-group input-group">
                                <label for="enc" style="display: inline-block;">Number of Exhibitions and Competitions Won:</label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                <input type="text" name="enc" id="enc" placeholder="Value (e.g 20)">
                            </div>
                            <hr>
                            <h5>Quality Output Data</h5>
                            <div class="form-group input-group">
                                <label for="sg" style="display: inline-block;">Number of Student Graduated:</label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                <input type="text" name="sg" id="sg" placeholder="Value (e.g 5)">
                            </div>
                            <div class="form-group input-group">
                                <label for="sa" style="display: inline-block;">Number of Students Accepted (for the graduationg set):</label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                <input type="text" name="sa" id="sa" placeholder="Value (e.g 15)">
                            </div>
                            <div class="form-group input-group">
                                <label for="awd" style="display: inline-block;">Awards by past students:</label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                <input type="text" name="awd" id="awd" placeholder="Value (e.g 20)">
                            </div>
                            <div class="form-group input-group">
                                <label for="alm" style="display: inline-block;">Number of Alumnis:</label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                <input type="text" name="alm" id="alm" placeholder="Value (e.g 20)">
                            </div>

                            <input type="submit" name="rank_data" class="btn " value="<?php echo (isset($data)) ? 'UPDATE' : 'ADD'; ?>" style="background-color: #FFDC11;">
                        </form>
                    </div>
                    <!-- Close main content -->

                    <!-- Sidebar with recent list and social media follow -->
                    <div class="col-md-4">

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