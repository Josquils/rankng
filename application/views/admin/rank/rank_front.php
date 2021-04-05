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
                            <div class="form-group">
                                <select name="schools" id="schools" class="form-select" required>
                                    <?php if (isset($uni_list)) : ?>

                                        <?php foreach ($uni_list as $uni) : ?>
                                            <option value="<?php echo $uni['school_id'] ?>"><?php echo $uni['name'] . ' (' . $uni['abb'] . ')'; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="a_year" id="a_year" class="form-select">
                                    <option value="2020">2020</option>
                                    <option value="2019" selected>2019</option>
                                    <option value="2018">2018</option>
                                </select>
                            </div>

                            <input type="submit" name="rank_front" class="btn " value="PROCEED" style="background-color: #FFDC11;">
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
    <script>
        $(document).ready(function() {
            $("#schools, #a_year").select2();
        });
    </script>
</body>


</html>