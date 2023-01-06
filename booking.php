<?php

include 'include/header.php';
if(isset($_GET['id'])){
    $bus_id_get = $_GET['id'];

    $bus_check_query = "SELECT * FROM _all_bus WHERE id='$bus_id_get' LIMIT 1";
    $result = mysqli_query($conn, $bus_check_query);
    $bus = mysqli_fetch_assoc($result);
    $booked_seat_query = "SELECT * FROM invoice_temp WHERE bus_id='$bus_id_get'";
    $all_data = mysqli_query($conn, $bus_check_query);
}

if(isset($_POST['book']) && isset($_GET['date'])){
    $jdate =  date('Y-m-d', strtotime($_GET['date']));
    $seat_count = $_POST['count'];
    $selected_seats = $_POST['selected'];
    $remove_comma = str_replace(',', '', $selected_seats);
    $booking_time = $_POST['time'];
    $selected_seat = str_split($remove_comma, 2);
    $bus_id = $bus['id'];
    $user_id = $user['id'];
    $ticket_id = uniqid();
    $invoice_numb_q = "SELECT MAX(invoice_numb) FROM all_invoice LIMIT 1";
    $max_result = mysqli_query($conn, $invoice_numb_q);
    $max_invoice_numb = mysqli_fetch_assoc($max_result);
    $invoice_numb = $max_invoice_numb['MAX(invoice_numb)']+1;
    for($i = 0; $i<$seat_count; $i++){
        $invoice_temp = "INSERT INTO invoice_temp (bus_id,user_id,seat_number,reserving_time,date_journey,ticket_id,invoice_numb) VALUES('$bus_id','$user_id','$selected_seat[$i]','$booking_time','$jdate','$ticket_id','$invoice_numb')";
        mysqli_query($conn, $invoice_temp);
        $all_invoice = "INSERT INTO all_invoice (bus_id,user_id,seat_number,reserving_time,date_journey,ticket_id,invoice_numb) VALUES('$bus_id','$user_id','$selected_seat[$i]','$booking_time','$jdate','$ticket_id','$invoice_numb')";
        mysqli_query($conn, $all_invoice);
    }
    header('location: invoice.php?invoice='.$invoice_numb);
}
?>
<br>
<br>
<br>
<div class="container bg-light shadow">
    <div class="modal-header bg-light">
        <h5 class="modal-title">Select Seat</h5>

    </div>
    <div class="row">
        <div class="col-xs-12 col-lg-6 d-flex justify-content-center">
            <div class="rounded p-3 p-sm-4">
                <div class="row table">
                    <div class="col-9"></div>
                    <div class="col-3 d-flex justify-content-lg-end"><img src="img/steering-wheel.svg" alt="" width="40px"></div>
                </div>

            <table class="table-striped">
                <tr>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">A1</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">A2</div>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">A3</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">A4</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">B1</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">B2</div>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">B3</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">B4</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">C1</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">C2</div>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">C3</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">C4</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">D1</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">D2</div>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">D3</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">D4</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">E1</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">E2</div>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">E3</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">E4</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">F1</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">F2</div>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">F3</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">F4</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">G1</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">G2</div>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">G3</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">G4</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">H1</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">H2</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">H3</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">H4</div>
                    </td>
                    <td>
                        <div class="seat rounded-sm btn btn-outline-primary">H5</div>
                    </td>
                </tr>
            </table>
            </div>
        </div>

        <div class="col-xs-12 col-lg-6">
            <div class="shadow-md rounded p-3 p-sm-4 confirm-details">
            <div class="booking-details">
                <h2 >Booking Details</h2>
            </div>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <?php
                    if(isset($_GET['id'])) {
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center trip-title">
                                    <div class="col-5 col-sm-auto text-center text-sm-left">

                                        <h5 name="" class="m-0 trip-place"><?php echo $bus['d_place']; ?></h5>
                                    </div>
                                    <div class="col-2 col-sm-auto text-8 text-black-50 text-center trip-arrow">➝</div>
                                    <div class="col-5 col-sm-auto text-center text-sm-left">
                                        <h5 class="m-0 trip-place"><?php echo $bus['a_place']; ?></h5>
                                    </div>
                                     <div class="col-6 col-sm col-md-auto text-3 date d-flex justify-content-center"><?php echo $_GET['date']; ?></div>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-3 mb-3 mb-sm-0"><span
                                                class="text-3 text-dark operator-name"><?php echo $bus['name']; ?></span>
                                        <span class="text-muted d-block"><?php echo $bus['type']; ?></span></div>
                                    <div class="col col-sm-3 text-center time-info"><span
                                                class="text-5 text-dark"><?php echo $bus['d_time']; ?></span> <small
                                                class="text-muted d-block"><?php echo $bus['d_place']; ?></small></div>

                                    <div class="col col-sm-3 text-center time-info"><span
                                                class="text-5 text-dark"><?php echo $bus['a_time']; ?></span> <small
                                                class="text-muted d-block"><?php echo $bus['a_place']; ?></small></div>

                                    <div class="col col-sm-3 text-center d-none d-sm-block time-info"> Total Fare: <span
                                                class="text-dark text-5 font-weight-600 ml-2">tk<span id="total">0</span>
                                    </div>
                                    <div class="col-12 mt-3 text-dark">
                                        <div class="row">
                                            <div class="col">Selected Seats(<span id="counter">0</span>): <span
                                                        id="selected-seats"></span></div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <input type="hidden" id="count" name="count" value="">
                        <input type="hidden" id="selected" name="selected" value="">
                        <input type="hidden" id="time" name="time" value="<?php echo date('Y-m-d H:i:s'); ?>">
                        <?php
                        if (isset($_SESSION['name'])) {
                            ?>
                            <button name="book" class="btn btn-primary btn-block">Continue</button>
                            <?php
                        } else {
                            ?>
                            You Must Login / Register For Continue
                            <?php
                        }
                        ?>
                        <?php
                    }
                    else{
                        echo 'error';
                    }
                    ?>
                </form>
            </div>
        </div>
        </div>
    </div>
    <script src="vendor/jquery/dist/jquery.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
    <script src="vendor/font-awesome/font-awesome.js"></script>
    <script>
        // splice(selected_value, 1) deselect
        //
        var $count = 0;
        var s = [];
        $(document).on('click', '.btn-outline-primary', function () {
            if($(this).toggleClass('active').hasClass('active')){
                $count++;
                s.push( $(this).text() );
                //console.log(s);

            }
            else{
                $count--;
                s.splice(s.indexOf($(this).text()), 1);

            }
            //console.log(s.length-1);
            document.getElementById('counter').innerHTML=$count;
            document.getElementById('count').value=$count;
            var total = $count*<?php echo $bus['price']; ?>;
            document.getElementById('total').innerHTML=total;
            $("#selected-seats").text(s);
            //console.log(s);
            document.getElementById('selected').value=s;


        })
    </script>
