<?php
include 'include/dbcon.inc.php';
session_start();
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: index.php");
}
$t_invoice = "SELECT * FROM invoice_temp INNER JOIN _all_bus on invoice_temp.bus_id=_all_bus.id";
$invoice_result = mysqli_query($conn, $t_invoice);
while ($row = mysqli_fetch_assoc($invoice_result))
{
    $date=$row['date_journey'];
    $time=$row['d_time'];
    $id =$row['id'];
    $j_date_time = $date.' '.$time;
    $now_date_time = date("Y-m-d h:i:s");
    if($now_date_time>$j_date_time){
        $invoice_delete = "DELETE FROM invoice_temp WHERE date_journey='$date'";
        mysqli_query($conn, $invoice_delete);
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-bus</title>
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/css/style.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">

    <link rel="stylesheet" href="vendor/gijgo/css/gijgo.css">

    <script src="vendor/jquery/dist/jquery.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
    <script src="vendor/font-awesome/font-awesome.js"></script>

    <script src="vendor/gijgo/js/gijgo.js"></script>
    <script src="vendor/js/bootstrap-birthday.js"></script>
</head>
<body>
<!-- Primary Navigation
             ============================================= -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light bd-navbar shadow p-3 mb-5 bg-primary rounded">
    <div class="container">
        <div class="logo">
            <a href="index.php" title="EBus"><img src="img/logo.png" alt="" width="85" ></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <h6><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></h6>
                </li>
                <li class="nav-item">
                    <h6><a class="nav-link " href="buslist.php">All Bus Route</a></h6>
                </li>
                <?php
                if (!isset($_SESSION['name'])) {
                    ?>
                    <li class="nav-item">
                        <h6><a class="nav-link " href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <h6><a class="nav-link " href="reg.php">Sign Up</a>
                        </h6>
                    </li>
                    <?php
                }
                else if(isset($_SESSION['name'] ) && $user['admin'] == 0) {

                    ?>
                    <li class="nav-item">
                        <h6><a class="nav-link " href="#"><?php echo $_SESSION['name'];?></a></h6>
                    </li>
                    <li class="nav-item">
                        <h6><a name="logout" class="nav-link " href="index.php?logout='1'">Logout</a></h6>
                    </li>
                    <?php

                }
                else if(isset($_SESSION['name']) && $user['admin'] == 1) {

                    ?>
                    <li class="nav-item">
                        <h6><a class="nav-link " href="#"><?php echo $_SESSION['name'];?></a></h6>
                    </li>
                    <li class="nav-item">
                        <h6><a name="logout" class="nav-link " href="admin">Admin Panel</a></h6>
                    </li>
                    <li class="nav-item">
                        <h6><a name="logout" class="nav-link " href="index.php?logout='1'">Logout</a></h6>
                    </li>
                    <?php

                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<br>
<br>
<br>
<!-- Primary Navigation end -->