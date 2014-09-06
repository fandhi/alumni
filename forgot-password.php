<?php
$page = "forgot-password";
include 'inc_header.php';
?>
<div class="container">
    <div class="row">
        <div class="panel form-center">
            <form class=" form panel-body" method="post" action="" name="" role="form">
                <h3 class="append_bottom_3">Forgot password</h3>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input class="form-control" type="email" name="" value="" placeholder="Input your email"/>
                    </div>
                </div>
                <div class="form-horizontal upfix_2">
                    <div class="form-group text-center">
                        <input type="button" class="btn btn-primary" onclick="window.location = 'home.php';" value="Save">
                    </div>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>