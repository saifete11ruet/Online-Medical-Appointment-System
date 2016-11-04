<?php
require_once '../db_connection.php';
session_start();
if(!$_SESSION['is_user_login']){
    header('location:../login.php');
    }

require_once 'User_class.php';
$user_obj=new User_class();
$all_data=$user_obj->get_profile_data();

?>
<?php require_once './header.php'; ?>
    <br>
    <br>
    <br>
    <br>

    <div class="container" style="min-height: 364px;">

        <div class="row">
            <br>
        <div class="col-lg-12 col-md-12" style="font-size: 20px;">
                <a href="update_profile.php" class="add-doc-btn"><i class="fa fa-edit"></i> Update Profile</a>
                <br><br>
        </div>
        <div class="col-md-6">
            <table class="table table-bordered" style="text-align: center;">

                <tr>
                    <th class="col-md-3">Full Name</th>
                    <td class="col-md-9"><?php echo $all_data['full_name']; ?></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td><?php echo $all_data['gender']==1?'Male':'Female'; ?></td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td><?php echo $all_data['age']; ?></td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td><?php echo $all_data['email']; ?></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><?php echo $all_data['username']; ?></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>*********</td>
                </tr>
            </table>
        </div>
        </div>
    </div>
    <br>
    <br>
    <br>
<?php require_once './footer.php'; ?>