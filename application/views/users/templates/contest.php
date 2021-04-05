{contests}
<div class="col-md-4 col-sm-6">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h4> {contest_name} </h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 col-sm-8">
                    <img src="<?php echo base_url(). 'contest_images/slideshow/'; ?>{contest_img1}" alt="{contest_name}" style="height: 150px; width: 98%;" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">


                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="display: inline-block;"> Start Date : </h4>
                            <p style="font-size: 14px;"> {contest_start} </p>
                        </div>
                        <div class="col-md-6">
                            <h4 style="display: inline-block;"> End Date : </h4>
                            <p style="font-size: 14px;"> {contest_end} </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="display: inline-block;"> Entry Amount : </h4> <span> (naira) </span>
                            <p style="font-size: 14px;"> {entry_amount} </p>
                        </div>

                        <div class="col-md-6">
                            <h4 style="display: inline-block;"> Draw Amount : </h4> <span> (naira) </span>
                            <p style="font-size: 14px;"> {draw_amount} </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="display: inline-block;"> Location: </h4>
                            <p style="font-size: 14px;"> {location} </p>
                        </div>

                        <div class="col-md-6">
                            <h4 style="display: inline-block;"> Type : </h4>
                            <p style="font-size: 14px;"> {contest_type} </p>
                        </div>
                    </div>



                </div>
            </div>


        </div>

        <div class="panel-footer pannel-success">
            <a class="btn btn-success btn-block" href='<?php echo site_url(); ?>/nta_admin/contest/details/{contest_slug}'>Edit</a>

        </div>

    </div>
</div>
{/contests}
