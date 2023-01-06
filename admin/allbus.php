<?php
include 'admin.header.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $cancle_bus_query= "DELETE FROM `_all_bus` WHERE id='$id'";
    $cancle_inv_query= "DELETE FROM `_all_bus` WHERE id='$id'";
    mysqli_query($conn,$cancle_bus_query);
    mysqli_query($conn,$cancle_inv_query);
}
 {
    $_search_bus = "SELECT * FROM _all_bus";
    $a_data = mysqli_query($conn, $_search_bus);
?>
<div id="viewport">

    <div class="container bg-light shadow-md rounded py-4">
        <div class="mx-3 mb-3 text-center">
            <h4 class="">All Bus</h4>
            <!--<h4 class="">Dhaka <small class="mx-2">to</small>Rajshahi</h4>-->
        </div>
        <hr>
        <table class="table text-xl-center">
            <tr class="thead-light shadow-none bg-light ">
                <th class="">Operators</th>
                <th>Departure</th>
                <th>Bus Number</th>
                <th>Arrival</th>
                <th>Sat</th>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Action</th>
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
                <td><span class="text-dark">
                    <?php
                    if($row['Sat'] == 1){
                        echo 'On';
                    }
                    else{
                        echo 'Off';
                    }
                    ?>
                </td>
                <td><span class="text-dark"><?php
                    if($row['Sun'] == 1){
                        echo 'On';
                    }
                    else{
                        echo 'Off';
                    }
                    ?></td>
                <td><span class="text-dark"><?php
                    if($row['Mon'] == 1){
                        echo 'On';
                    }
                    else{
                        echo 'Off';
                    }
                    ?></td>
                <td><span class="text-dark"><?php
                    if($row['Tue'] == 1){
                        echo 'On';
                    }
                    else{
                        echo 'Off';
                    }
                    ?></td>
                <td><span class="text-dark"><?php
                    if($row['Wed'] == 1){
                        echo 'On';
                    }
                    else{
                        echo 'Off';
                    }
                    ?></td>
                <td><span class="text-dark"><?php
                    if($row['Thu'] == 1){
                        echo 'On';
                    }
                    else{
                        echo 'Off';
                    }
                    ?></td>
                <td><span class="text-dark"><?php
                    if($row['Fri'] == 1){
                        echo 'On';
                    }
                    else{
                        echo 'Off';
                    }
                    ?></td>
                <td>
                    <div>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-primary shadow-none">Edit</a>
                        <a href="?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-danger shadow-none">Delete</a>
                    </div>
                </td>
            </tr>
        <?php
    }
    ?>
        </table>
    </div>


</div>
    <?php
}
?>