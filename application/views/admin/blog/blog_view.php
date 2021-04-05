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
                        <figure class="ritekhela-fixture-detail">
                            <img src="extra-images/fixture-detail-2.jpg" alt="">
                            <ul class="ritekhela-blog-options">
                                <li><a href="#"><i class="far fa-user"></i> By Thomas Jacob</a></li>
                                <li><i class="far fa-calendar-alt"></i> January 3, 2019</li>
                                <li><a href="#"><i class="fa fa-tag"></i> Blogs,</a> <a href="#">Sports,</a> <a href="#">Footbal</a> </li>
                            </ul>
                        </figure>

                        <div class="ritekhela-editor-detail">
                            <h2>The story takes place in 19th century</h2>
                            <p>The story takes place in 19th century London, on the city’s famous Fleet Street. Despite the fact that present-day Fleet Street is a bustling financial hub, it was a pretty grim place in those days, and the barbering trade was very different to what it is now. There was no such thing as electric clippers back then, and barbers relied on straight razors to keep their customer’s beards in shape. There have been many different variations of the story over the years, but Sweeney Todd is said to have been a highly successful barber, before he was convicted.</p>
                            <p>This week has been trying for me, I have to find things that Jr. and I have in common and relate to him, motivate him and persuade him through that avenue. The human mind is a computer, it soaks up information from the hardrives of it's 5 senses and then bases it's reality off of what it has been exposed to. It is my job to figure out what Jr. had been exposed to that is causing him to be a rebel without a cause, a revolutionary with no system or dictator to overthrow.walk around like a</p>
                            <blockquote>I did study the art of being a barber because I wanted to figure out what my routine would be. Do you start in the front or back? Top or bottom? Swivel the chair or walk around? What I did</blockquote>
                            <p>You keep your eyes open during a shampoo and/or shave. Totally understandable that it can be uncomfortable to be making eye contact with the stranger whose hair you're lathering up, but shaving? Since there's a razor being pressed so close to things like jugular veins, it's a little more difficult to fight the impulse to keep your eyes open.Since you're not five years old, it should go without saying that you shouldn't cut your own hair, but even cleaning up your own neckline can be really frustrating. "I've seen crooked lines, chunks taken out and borders that have been taken up way too high, and they can be difficult to fix," says a barber from San.</p>
                            <div class="ritekhela-tags">
                                <span><i class="fa fa-tags"></i> Tags</span>
                                <a href="#">prestashop</a>
                                <a href="#">wordpress</a>
                                <a href="#">Supplies</a>
                                <a href="#">Techniques</a>
                            </div>
                        </div>
                    </div>
                    <!-- Close main content -->

                    <!-- Sidebar with recent list and social media follow -->
                    <div class="col-md-4">


                        <div class="panel panel-success">
                        <div class="ritekhela-fancy-title-two">
                                <h2>ACTIONS</h2>
                            </div>

                            <div class="panel-body">
                                <a href="<?php echo site_url(); ?>" class="btn btn-info"> <i class="fa fa-edit"></i> EDIT </a>
                                <a class="btn btn-warning" data-toggle="modal" data-target="#trash"> <i class="fa fa-bitbucket"></i> TRASH </a>
                                <a class="btn btn-danger" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash"></i> DELETE </a>


                                <div class="modal fade panel-warning" id="trash" tabindex="-1" role="dialog" aria-labelledby="trashLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="text-align: center;">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Warning</h4>
                                            </div>
                                            <div class="modal-body" style="text-align: center;">
                                                Are you sure you want to trash this tip?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                <a href="<?php echo site_url(); ?>/nta_admin/travels/trash/<?php echo $post['tip_slug']; ?>" type="button" class="btn btn-danger">Yes. Trash it</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade panel-warning" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="text-align: center;">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Warning</h4>
                                            </div>
                                            <div class="modal-body" style="text-align: center;">
                                                Are you sure you want to DELETE this tip?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                <a href="<?php echo site_url(); ?>/nta_admin/travels/delete/<?php echo $post['tip_slug']; ?>" type="button" class="btn btn-danger">Yes. Delete it</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="panel-footer">
                            </div>
                        </div>
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