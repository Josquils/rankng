{adventures}
<div class="col-md-4 col-sm-6">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h4> {name} </h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 col-sm-8">
                    <img src="<?php echo base_url(). 'assets/adventures/'; ?>{image1}" alt="{name}" style="height: 150px; width: 98%;" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">


                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="display: inline-block;"> Scheduled Date : </h4>
                            <p style="font-size: 14px;"> {scheduled_date} </p>
                        </div>
                        <div class="col-md-6">
                            <h4 style="display: inline-block;"> Return Date : </h4>
                            <p style="font-size: 14px;"> {return_date} </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="display: inline-block;"> Registration End: </h4>
                            <p style="font-size: 14px;"> {payment_deadline} </p>
                        </div>

                        <div class="col-md-6">
                            <h4 style="display: inline-block;"> Location : </h4>
                            <p style="font-size: 14px;"> {location} </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="display: inline-block;"> Status: </h4>
                            <p style="font-size: 14px;"> {status} </p>
                        </div>

                        <div class="col-md-6">
                            <h4 style="display: inline-block;"> Type : </h4>
                            <p style="font-size: 14px;"> {type} </p>
                        </div>
                    </div>



                </div>
            </div>


        </div>

        <div class="panel-footer pannel-success">
            <a class="btn btn-success btn-block" href='<?php echo site_url(); ?>/nta_admin/adventure/edit/{slug}'>Edit</a>

        </div>

    </div>
</div>
{/adventures}
