<?php
$page = "register";
include 'inc_header.php';
?>
<div class="container">
    <div class="row">
        <div class="panel form-center">
            <form class="form panel-body" method="post" action="" name="registerForm" role="form">
                <h3 class="append_bottom_3">Register</h3>
                <div class="form-group has-success">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </span>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" value="">
                    </div>
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group has-error">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email" value="">
                    </div>
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group  has-error">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Repeat Your Email" value="">
                    </div>
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group has-error">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                        </span>
                        <input type="password" class="form-control" id="registerPassword" name="registerPassword" placeholder="Enter Password">
                    </div>
                    <span class="control-label clearfix">This field is required.</span>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block text-center" type="button" value="Submit" onclick="window.location = 'register-success.php';">
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>