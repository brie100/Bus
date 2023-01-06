<?php
include 'admin.header.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $cancle_query= "DELETE FROM `invoice_temp` WHERE id='$id'";
    mysqli_query($conn,$cancle_query);
}
{
    $temp_inv_query = "SELECT invoice_numb,ticket_id,f_name,l_name,d_place,a_place,date_journey,seat_number, `name`, `number`,invoice_temp.id FROM invoice_temp JOIN users ON invoice_temp.user_id=users.id JOIN _all_bus ON _all_bus.id = invoice_temp.bus_id ORDER BY invoice_temp.id DESC
";
    $temp_inv_result = mysqli_query($conn, $temp_inv_query);
?>

<div id="viewport">

    <div class="container bg-light shadow-md rounded py-4">
        <div class="mx-3 mb-3 text-center">
            <h4 class="">Temp Invoice</h4>
            <!--<h4 class="">Dhaka <small class="mx-2">to</small>Rajshahi</h4>-->
        </div>
        <hr>
        <table class="table text-xl-center">
            <tr class="thead-light shadow-none bg-light ">
                <th>Invoice Number</th>
                <th>Ticket Number</th>
                <th>Passenger Name</th>
                <th>Seat Number</th>
                <th>From</th>
                <th>To</th>
                <th>Journey Date</th>
                <th>Bus Name</th>
                <th>Bus Number</th>
                <th>Action</th>
            </tr>

            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($temp_inv_result)) {
                ?>
            <tr>
                <td><?php echo $row['invoice_numb'];?></td>
                <td><?php echo $row['ticket_id'];?></td>
                <td><?php echo $row['f_name']. " " .$row['l_name'];?></td>
                <td><?php echo $row['seat_number'];?></td>
                <td><?php echo $row['d_place'];?></td>
                <td><?php echo $row['a_place'];?></td>
                <td><?php echo $row['date_journey'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['number'];?></td>
                <td>
                    <a href="?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-danger shadow-none">Cancel</a>
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