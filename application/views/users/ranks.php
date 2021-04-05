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
            <div class="ritekhela-main-section ritekhela-fixture-list-full">
                <div class="container">
                    <div class="row">

                        <!-- Rankinds content with pagination -->
                        <div class="col-md-12">

                            <!--// Fixture All Matches //-->
                            <div class="ritekhela-fixture ritekhela-matches-list">
                                <ul>
                                    <li>
                                        <div class="ritekhela-cell"><span>Rank</span></div>
                                        <div class="ritekhela-cell">
                                            <span>University</span>
                                        </div>
                                        <div class="ritekhela-cell">
                                            <span>ARWU Ranking</span>
                                            <div class="ritekhela-cell"><span>Award</span></div>
                                            <div class="ritekhela-cell"><span>HiCi</span></div>
                                            <div class="ritekhela-cell"><span>N&S</span></div>
                                            <div class="ritekhela-cell"><span>PUB</span></div>
                                        </div>
                                        <div class="ritekhela-cell">
                                            <span>WRWU Ranking</span>
                                            <div class="ritekhela-cell"><span>Visibility</span></div>
                                            <div class="ritekhela-cell"><span>Excellence (Scholar)</span></div>
                                        </div>
                                        <div class="ritekhela-cell">
                                            <span>THE Ranking</span>
                                            <div class="ritekhela-cell"><span>Citations</span></div>
                                            <div class="ritekhela-cell"><span>Reputation Survey</span></div>
                                            <div class="ritekhela-cell"><span>Doctorate awarded to academic staff</span></div>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="ritekhela-cell"><span>1</span></div>
                                        <div class="ritekhela-cell">
                                            <a href="#" class="ritekhela-fixture-flag"><img src="<?php echo base_url('assets/') ?>extra-images/fixer-flag-1.png" alt=""> <br> Lagos State University</a>
                                        </div>
                                        <div class="ritekhela-cell">
                                            <div class="ritekhela-cell"><span>83</span></div>
                                            <div class="ritekhela-cell"><span>17</span></div>
                                            <div class="ritekhela-cell"><span>12</span></div>
                                            <div class="ritekhela-cell"><span>38</span></div>
                                        </div>
                                        <div class="ritekhela-cell">
                                            <div class="ritekhela-cell"><span>15</span></div>
                                            <div class="ritekhela-cell"><span>36</span></div>
                                            <div class="ritekhela-cell"><span>1324</span></div>
                                        </div>
                                        <div class="ritekhela-cell">
                                            <div class="ritekhela-cell"><span>23</span></div>
                                            <div class="ritekhela-cell"><span>1234</span></div>
                                            <div class="ritekhela-cell"><span>13</span></div>
                                        </div>
                                    </li>
                                    
                                    
                                    <li>
                                        <div class="ritekhela-cell"><span>2</span></div>
                                        <div class="ritekhela-cell">
                                            <a href="#" class="ritekhela-fixture-flag"><img src="<?php echo base_url('assets/') ?>extra-images/fixer-flag-1.png" alt=""> <br> Lagos State University</a>
                                        </div>
                                        <div class="ritekhela-cell">
                                            <div class="ritekhela-cell"><span>83</span></div>
                                            <div class="ritekhela-cell"><span>17</span></div>
                                            <div class="ritekhela-cell"><span>12</span></div>
                                            <div class="ritekhela-cell"><span>38</span></div>
                                        </div>
                                        <div class="ritekhela-cell">
                                            <div class="ritekhela-cell"><span>15</span></div>
                                            <div class="ritekhela-cell"><span>36</span></div>
                                            <div class="ritekhela-cell"><span>1324</span></div>
                                        </div>
                                        <div class="ritekhela-cell">
                                            <div class="ritekhela-cell"><span>23</span></div>
                                            <div class="ritekhela-cell"><span>1234</span></div>
                                            <div class="ritekhela-cell"><span>13</span></div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                            <!--// Fixture All Matches //-->
                            <ul class="ritekhela-offstanding-text">
                                <li>
                                    <h6>SLR :</h6>
                                    <span>Student to Lecturer Ratio</span>
                                </li>
                                <li>
                                    <h6>SAR :</h6>
                                    <span>Student to Accredited Courses Ratio</span>
                                </li>
                                <li>
                                    <h6>FL :</h6>
                                    <span>Foreign Lectureres</span>
                                </li>
                                <li>
                                    <h6>FS :</h6>
                                    <span>Foreign Students</span>
                                </li>
                                <li>
                                    <h6>SQR :</h6>
                                    <span>Students Quality Research (for the academic session)</span>
                                </li>
                                <li>
                                    <h6>LQR :</h6>
                                    <span>Lecturers Quality Research (for the academic session)</span>
                                </li>
                                <li>
                                    <h6>SEC :</h6>
                                    <span>Students Exhibitions, Competitions and Awards </span>
                                </li>
                                <li>
                                    <h6>AGR :</h6>
                                    <span>Acceptance to Gratuation Ratio</span>
                                </li>
                                <li>
                                    <h6>Awards :</h6>
                                    <span>Innovation, Nobel prize, etc</span>
                                </li>
                                <li>
                                    <h6>Alumni :</h6>
                                    <span>Top Alumni</span>
                                </li>
                            </ul>

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


                    </div>
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