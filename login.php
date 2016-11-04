<?php
require_once './header.php';
require_once './Login_class.php';

if (isset($_POST['login'])) {
    $login_obj = new Login_class();
    $login_obj->login($_POST);
}
?>

<div class="col-md-offset-4 col-sm-offset-4 col-md-4 col-sm-4">
    <div class= "appointment">
        <div class="header text-center">
            <h2>Login Here</h2>
            <span class="or">OR</span>
        </div>

        <!-- form of appointment -->
        <div class="row">
            <form method="post" action="">
                <div class= "form">
                    <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <input class="form-control" name="email" type="text" placeholder="Email Address" required>
                    </div>
                    <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <input class="form-control" name="password" type="password" placeholder="Password" required>
                    </div>
                    <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <select name="login_type" class="form-control">
                            <option value="">Select Login Type</option>
                            <option value="1">User</option>
                            <option value="2">Doctor</option>
                            <option value="3">Admin</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                    <br>
                    <input class="btn btn-primary send" name="login" type="submit" value="Login">
                </div>
            </form>
        </div>
        <!-- end of form -->
        <br>
    </div><!-- end of appointment-->
</div>

<?php require_once './footer.php'; ?>
