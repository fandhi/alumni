<?php
$page = "reset-password";
include 'inc_header.php';
?>
<div class="container">
    <div class="row">
        <div class="panel form-center">
            <form class=" form panel-body" method="post" action="" name="" role="form">
                <h3 class="append_bottom_3">Reset your password</h3>
                <div class="form-group has-error">
                    <input type="password" class="form-control" id="" name="" placeholder="Current password">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group has-error">
                    <input type="password" class="form-control" id="" name="" placeholder="New password">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group has-error">
                    <input type="password" class="form-control" id="" name="" placeholder="New password">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-horizontal upfix_2">
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>