<?php
session_start();
// LOGIN USER
// db conn
include 'dbcon.inc.php';

if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($conn, $query);
        $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['name'] = $user['f_name'];
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: ../index.php');
        }
        else{
            ?>
            <div class="error">

                    <p><?php echo "Wrong username/password combination" ?></p>
            </div>
            <?php
        }

}

?>