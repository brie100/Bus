<?php
include 'admin.header.php';
 {

?>
    <style>
        .container {
        }

        .counter-box {
            display: block;
            background: #f6f6f6;
            padding: 40px 20px 37px;
            text-align: center
        }

        .counter-box p {
            margin: 5px 0 0;
            padding: 0;
            color: #909090;
            font-size: 18px;
            font-weight: 500
        }

        .counter-box i {
            font-size: 60px;
            margin: 0 0 15px;
            color: #d2d2d2
        }

        .counter {
            display: block;
            font-size: 32px;
            font-weight: 700;
            color: #666;
            line-height: 28px
        }

        .counter-box.colored {
            background: #3acf87
        }

        .counter-box.colored p,
        .counter-box.colored i,
        .counter-box.colored .counter {
            color: #fff
        }
    </style>

    <div id="viewport">
        <div class="container">
            <div class="row">
                <div class="four col-md-3">
                    <div class="counter-box"><i class="fas fa-laugh-beam"></i>
                        <span class="counter">
                    <?php
                    $h_customer_query = "SELECT COUNT(DISTINCT `user_id`) FROM `all_invoice`";
                    $h_customer_request = mysqli_query($conn, $h_customer_query);
                    $h_customer_result = mysqli_fetch_assoc($h_customer_request);
                    echo $h_customer_result["COUNT(DISTINCT `user_id`)"];
                    ?>
                </span>
                        <p>Happy Customers</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box"><i class="fa fa-group"></i>
                        <span class="counter">
                    <?php
                    $r_customer_query = "SELECT COUNT(`id`) FROM `users`";
                    $r_customer_request = mysqli_query($conn, $r_customer_query);
                    $r_customer_result = mysqli_fetch_assoc($r_customer_request);
                    echo $r_customer_result["COUNT(`id`)"];
                    ?>
                </span>
                        <p>Registered Members</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box"><i class="fas fa-bus"></i>
                        <span class="counter">
                     <?php
                     $bus_query = "SELECT COUNT(`id`) FROM _all_bus";
                     $bus_request = mysqli_query($conn, $bus_query);
                     $bus_result = mysqli_fetch_assoc($bus_request);
                     echo $bus_result["COUNT(`id`)"];
                     ?>
                </span>
                        <p>Available Bus</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box"><i class="fas fa-ticket-alt"></i>
                        <span class="counter">
                    <?php
                    $in_query = "SELECT COUNT(`id`) FROM all_invoice";
                    $in_request = mysqli_query($conn, $in_query);
                    $in_result = mysqli_fetch_assoc($in_request);
                    echo $in_result["COUNT(`id`)"];
                    ?>
                </span>
                        <p>Total Sold Tickets</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {

            $('.counter').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });
    </script>
    <?php
}
?>