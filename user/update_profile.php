<?php
require_once '../db_connection.php';
session_start();
if(!$_SESSION['is_user_login']){
    header('location:../login.php');
}

require_once 'User_class.php';
$user_obj=new User_class();

if(isset($_POST['submit'])) {

    $msg=$user_obj->update_profile_data($_POST);
}
$all_data = $user_obj->get_profile_data();
?>
<?php require_once './header.php'; ?>
    <br>
    <br>
    <br>
    <br>

    <div class="container" style="min-height: 364px;">

        <div class="row">
            <br>

            <div class="col-md-8">
                <div class="form-panel">
                    <h2 class="mb" style="text-align: center;"> Update Profile</h2>

                    <h3 style="color: red;" class="col-md-offset-3"><?php echo @$msg ? $msg.'<br>' : ''; ?></h3>
                    <form class="form-horizontal style-form" method="post" action="" >

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="full_name" class="form-control"
                                       value="<?php echo $all_data['full_name'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Gender</label>
                            <div class="col-sm-10">
                                <select class="form-control"
                                    name="gender"
                                    id="">
                                <option value="">Select Gender</option>
                                <option value="1" <?php echo $all_data['gender']==1?'selected':'';?>>Male</option>
                                <option value="2" <?php echo $all_data['gender']==2?'selected':'';?>>Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Age</label>
                            <div class="col-sm-10">
                                <input type="text" name="age" class="form-control " value="<?php echo $all_data['age'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control " value="<?php echo $all_data['email'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control " value="<?php echo $all_data['username'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" placeholder="Give new password">
                            </div>
                        </div>
                        <input type="submit" name="submit" value="submit" class="btn btn-success col-sm-offset-10 col-sm-2">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
<?php require_once './footer.php'; ?>