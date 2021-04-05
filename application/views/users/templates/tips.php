{travels}
<div class="col-md-4" style="border: 1px solid #D7EBC7; margin: 10px;  padding: 10px;">
    <h5 style="display: inline-block;"> <a href="<?php echo site_url() ?>/nta_admin/travels/update/{tip_slug}">{tip_title}</a> </h5>

    <a class="" href="<?php echo site_url() ?>/nta_admin/travels/update/{tip_slug}"><em class="fa fa-edit"></em></a>

    <hr>

    <a class="text-success" href="<?php echo site_url() ?>/nta_admin/travels/view/{tip_slug}"><i class="fa fa-eye"></i><em>View</em></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <a class="text-warning" href="<?php echo site_url() ?>/nta_admin/travels/trash/{tip_slug}"><i class="fa fa-bitbucket"></i><em>Trash</em></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <a class="text-danger" href="<?php echo site_url() ?>/nta_admin/travels/delete/{tip_slug}"><i class="fa fa-trash"></i><em>Delete</em></a>

    <span class="pull-right text-muted small"><em>{last_update}</em></span>
</div>
{/travels}
