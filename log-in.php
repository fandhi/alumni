<?php
$page = "log-in";
include 'inc_header.php';
?>
<div class="container">
    <div class="row">
        <div class="panel form-center ">
            <form class="form panel-body" method="post" action="" name="loginForm" role="form">
                <h3 class="append_bottom_3">Log in</h3>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="">
                    </div>
                    <!--<span class="control-label">This field is required.</span>-->
                </div>
                <div class="form-group has-error">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                        </span>
                        <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter Password">
                    </div>
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 prefix-0">
                        <button type="button" class="btn btn-primary btn-block text-center" onclick="window.location = 'home.php';">Sign in</button>
                    </div>
                    <div class="col-sm-8 col-xs-push-1 prefix-0">
                        <label class="checkbox">
                            <input type="checkbox" value="keep-login"> Remember me
                        </label>
                    </div>
                </div>
                <p class="form-group clearfix"><a href="forgot-password.php">Forgot Password</a></p>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>