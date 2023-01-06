<?php
include 'include/header.php';
if(!isset($_SESSION['name'])){
?>
<div class="container shadow" style="max-width: 550px">
    <br>
<div class="card">
    <h5 class="card-header">
        Sing Up
    </h5>
    <form class="container" id="" method="POST" action="include/regfunc.php">
        <label for="fname" class="col-form-label"> First name</label>
        <div class="form-row">
            <div class="col form-group">

                <input name="f_name" id="fname" type="text" class="form-control" required  placeholder="">
                <span class="icon-inside"><i class="fas fa-child"></i></span>

            </div>
        </div>
        <label for="lname"> Last name</label>
        <div class="form-row">
            <div class="col form-group">
                <input name="l_name" id="lname" type="text" class="form-control" required="" placeholder="">
                <span class="icon-inside"><i class="fas fa-user-tie"></i></span>

            </div>
        </div>
        <label for="bdate"> Birthday (DD/MM/YY)</label>
        <div class="form-row">
            <div class="col form-group">
                <input name="bdate" id="datepicker" type="text" class="form-control" required="" placeholder="">

            </div>
        </div>
        <label for="mail"> E-Mail</label>
        <div class="form-row">
            <div class="col form-group">
                <input name="email" id="mail" type="text" class="form-control" required="" placeholder="">
                <span class="icon-inside"><i class="fas fa-envelope"></i></span>

            </div>
        </div>
        <label for="phone"> Phone Number</label>
        <div class="form-row">
            <div class="col form-group">
                <input name="phone" id="phone" type="text" class="form-control" required="" placeholder="">
                <span class="icon-inside"><i class="fas fa-phone"></i></span>

            </div>
        </div>
        <label for="pass1"> Password</label>
        <div class="form-row">
            <div class="col form-group">
                <input name="password_1" id="pass1" type="password" class="form-control" required="" placeholder="">
                <span class="icon-inside"><i class="fas fa-key"></i></span>

            </div>
        </div>
        <label for="pass2"> Repeat Password</label>
        <div class="form-row">
            <div class="col form-group">
                <input name="password_2" id="pass2" type="password" class="form-control" required="" placeholder="">
                <span class="icon-inside"><i class="fas fa-key"></i></span>

            </div>
        </div>
        <input class="btn btn-primary btn-block" type="submit" name="reg_user" value="Sing Up">
        <br>
    </form>
</div>
    <br>
</div>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
    <?php
}
else{
    echo $_SESSION['success'];
}
include 'include/footer.php';
?>