<?php
include 'include/header.php';
?>

<!-- Bus Search and slide Start -->
<div class="container bg-light shadow-md rounded px-4 py-4">
    <div class="row align-items-center border-bottom-4">
        <!-- Bus Search Start -->
        <div class="col-sm-4">
            <h2 class="text-4 mb-3">Book Bus Tickets</h2>
            <form id="bookingBus" method="POST" action="buslist.php">
                <div class="form-row">
                    <div class="col-lg-6 form-group">
                        <select class="form-control" name="from">
                            <option selected hidden>From</option>
                            <option>Dhaka</option>
                            <option>Chittagong</option>
                            <option>Rajshahi</option>
                            <option>Khulna</option>
                            <option>Sylhet</option>
                            <option>Barisal</option>
                            <option>Rangpur</option>
                            <option>Comilla</option>
                        </select>

                        <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <div class="col-lg-6 form-group">
                        <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span>
                        <select class="form-control" name="to">
                            <option selected hidden>To</option>
                            <option>Dhaka</option>
                            <option>Chittagong</option>
                            <option>Rajshahi</option>
                            <option>Khulna</option>
                            <option>Sylhet</option>
                            <option>Barisal</option>
                            <option>Rangpur</option>
                            <option>Comilla</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col form-group">
                        <input name="date" id="datepicker" type="text" class="form-control" required="" placeholder="Depart Date">

                    </div>
                </div>
                <input class="btn btn-primary btn-block" type="submit" name="submit-search" value="Search Bus">
                <br>
            </form>
        </div>
        <!-- Bus Search end -->
        <div class="col-sm-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/banner/bus-01.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/banner/bus.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/banner/7a95a89bee9eb0aafecfb16dee192fe5.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
</div>
<!-- Bus Search and slide end-->
<!-- Why Book Bus with E-Bus? start-->
<div class="container">
    <section class="section pb-4">
        <h2 class="font-weight-600 text-center">Why Book Bus with E-Bus?</h2>
        <p class="lead mb-5 text-center">Book Bus Tickets Online. Save Time and Money!</p>
        <div class="row">
            <div class="col-md-4">
                <div class="featured-box style-1 mb-4">
                    <div class="featured-box-icon text-primary"> <i class="fas fa-dollar-sign"></i> </div>
                    <h3>No Booking Charges</h3>
                    <p>No hidden charges, no payment fees, and free customer service. So you get the best deal every time!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="featured-box style-1 mb-4">
                    <div class="featured-box-icon text-primary"> <i class="fas fa-search"></i> </div>
                    <h3>Quick and Easy Search</h3>
                    <p>We'll find you the best deals available from top bus companies for you to choose from, combining quality and economy. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="featured-box style-1 mb-4">
                    <div class="featured-box-icon text-primary"> <i class="fas fa-percentage"></i> </div>
                    <h3>Cheapest Price</h3>
                    <p>Always get cheapest price with the best in the industry. So you get the best deal every time.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="featured-box style-1 mb-4">
                    <div class="featured-box-icon text-primary"> <i class="fas fa-road"></i> </div>
                    <h3>2 Lakh+ Routes</h3>
                    <p>Make your road journeys easier across world with 10000+ Operators.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="featured-box style-1 mb-4">
                    <div class="featured-box-icon text-primary"> <i class="far fa-times-circle"></i> </div>
                    <h3>Easy Cancellation &amp; Refunds</h3>
                    <p>Get instant refund and get any booking fees waived off!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="featured-box style-1 mb-4">
                    <div class="featured-box-icon text-primary"> <i class="fas fa-heart"></i> </div>
                    <h3>Every time, anywhere</h3>
                    <p>Because your trip doesn't end with a ticket, we’re here for you all the way</p>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Why Book Bus with E-Bus? start-->

<br>
<footer>
    <!-- Footer
       ============================================= -->
    <footer id="footer">
        <section class="section bg-light shadow-md pt-4 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon"> <i class="fas fa-lock"></i> </div>
                            <h4>100% Secure Payments</h4>
                            <p>Moving your card details to a much more secured place.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon"> <i class="fas fa-thumbs-up"></i> </div>
                            <h4>Trust pay</h4>
                            <p>100% Payment Protection. Easy Return Policy.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon"> <i class="fas fa-bullhorn"></i> </div>
                            <h4>Refer &amp; Earn</h4>
                            <p>Invite a friend to sign up and earn up to $100.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon"> <i class="far fa-life-ring"></i> </div>
                            <h4>24X7 Support</h4>
                            <p>We're here to help. Have a query and need help ? <a href="#">Click here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Footer end -->
</footer>
<!-- scripts -->

<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
 <?php
include 'include/footer.php';
?>