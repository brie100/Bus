<?php

include 'include/header.php';
if(isset($_POST['submit-search']) && $_POST['from'] !='From' && $_POST['to'] !='To' ) {

    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    $nameOfDay = date('D', strtotime($date));
    //echo $nameOfDay;
    $_search_bus = "SELECT * FROM _all_bus WHERE d_place = '$from' AND a_place = '$to' AND $nameOfDay=1";
    $a_data = mysqli_query($conn, $_search_bus);


?>
<br>
<div class="container bg-light shadow-md rounded py-4">
    <div class="mx-3 mb-3 text-center">
        <!--h4 class="">All Bus</h4>-->
        <h4 class=""><?php echo $from; ?><small class="mx-2">to</small><?php echo $to; ?><small class="mx-2"><?php echo $date; ?></small> </h4>
    </div>
    <table class="table text-xl-center">

            <tr class="thead-light shadow-none bg-light ">
                <th class="">Operators</th>
                <th>Departure</th>
                <th>Bus Number</th>
                <th>Arrival</th>
                <th>Price</th>
            </tr>

        <tbody>
        <?php
        while($row = mysqli_fetch_assoc($a_data)) {


            ?>
            <tr>
                <td><span class="text-dark"><?php echo $row['name']; ?></span> <span class="text-muted d-block"><?php echo $row['type']; ?></span>
                </td>
                <td><span class=" text-dark"><?php echo $row['d_time']; ?></span> <small class="text-muted d-block"><?php echo $row['d_place']; ?></small></td>
                <td><span class="d-flex justify-content-center"><?php echo $row['number']; ?></span></td>
                <td><span class="text-dark"><?php echo $row['a_time']; ?></span> <small class="text-muted d-block"><?php echo $row['a_place']; ?></small></td>
                <td>
                    <span class="d-inline-block d-sm-block text-dark mb-sm-1"><?php echo $row['price']; ?>tk</span>
                    <a href="booking.php?id=<?php echo $row['id']; ?>&date=<?php echo $date; ?>" class="btn btn-sm btn-outline-primary shadow-none"><span
                                class="d-block d-sm-none d-lg-block">Select Seats</span></a>
                </td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>

<?php
include 'include/footer.php';
}
else if (isset($_POST['submit-search']) && $_POST['from'] =='From' && $_POST['to'] =='To'){

    $date = $_POST['date'];
    $nameOfDay = date('D', strtotime($date));
    $_search_bus = "SELECT * FROM _all_bus where $nameOfDay=1";
    $a_data = mysqli_query($conn, $_search_bus);
    ?>

    <br>
    <div class="container bg-light shadow-md rounded py-4">
        <div class="mx-3 mb-3 text-center">
            <h4 class="">All Bus Of <?php echo $date ?></h4>

        </div>
        <table class="table text-xl-center">

            <tr class="thead-light shadow-none bg-light ">
                <th class="">Operators</th>
                <th>Departure</th>
                <th>Bus Number</th>
                <th>Arrival</th>
                <th>Price</th>
            </tr>

            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($a_data)) {


                ?>
                <tr>
                    <td><span class="text-dark"><?php echo $row['name']; ?></span> <span
                                class="text-muted d-block"><?php echo $row['type']; ?></span>
                    </td>
                    <td><span class=" text-dark"><?php echo $row['d_time']; ?></span> <small
                                class="text-muted d-block"><?php echo $row['d_place']; ?></small></td>
                    <td><span class="d-flex justify-content-center"><?php echo $row['number']; ?></span></td>
                    <td><span class="text-dark"><?php echo $row['a_time']; ?></span> <small
                                class="text-muted d-block"><?php echo $row['a_place']; ?></small></td>
                    <td>
                        <span class="d-inline-block d-sm-block text-dark mb-sm-1"><?php echo $row['price']; ?>tk</span>
                        <a href="booking.php?id=<?php echo $row['id']; ?>&date=<?php echo $date; ?>"
                           class="btn btn-sm btn-outline-primary shadow-none"><span
                                    class="d-block d-sm-none d-lg-block">Select Seats</span></a>
                    </td>
                </tr>
                <?php
            }
            ?>

        </table>
    </div>

    <?php
}
else {


    ?>
    <?php

    $_search_bus = "SELECT * FROM _all_bus";
    $a_data = mysqli_query($conn, $_search_bus);

    ?>

    <br>
    <div class="container bg-light shadow-md rounded py-4">
        <div class="mx-3 mb-3 text-center">
            <h4 class="">All Bus</h4>
            <h5>Please Select Date For Select Bus</h5>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <input name="date" id="datepicker" type="text" class="form-control" required="" placeholder="Depart Date">
                <input type="hidden" name="from" value="From">
                <input type="hidden" name="to" value="To">
                <button class="btn btn-primary btn-block" name="submit-search">Search</button>
            </form>
        </div>
        <table class="table text-xl-center">

            <tr class="thead-light shadow-none bg-light ">
                <th class="">Operators</th>
                <th>Departure</th>
                <th>Bus Number</th>
                <th>Arrival</th>
                <th>Price</th>
            </tr>

            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($a_data)) {


                ?>
                <tr>
                    <td><span class="text-dark"><?php echo $row['name']; ?></span> <span
                                class="text-muted d-block"><?php echo $row['type']; ?></span>
                    </td>
                    <td><span class=" text-dark"><?php echo $row['d_time']; ?></span> <small
                                class="text-muted d-block"><?php echo $row['d_place']; ?></small></td>
                    <td><span class="d-flex justify-content-center"><?php echo $row['number']; ?></span></td>
                    <td><span class="text-dark"><?php echo $row['a_time']; ?></span> <small
                                class="text-muted d-block"><?php echo $row['a_place']; ?></small></td>
                    <td>
                        <span class="d-inline-block d-sm-block text-dark mb-sm-1"><?php echo $row['price']; ?>tk</span>

                    </td>
                </tr>
                <?php
            }
            ?>

        </table>
    </div>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    <?php
    include 'include/footer.php';
}
 ?>
