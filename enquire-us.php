<?php 
$page='home';
include 'header.php' ?>


<main class="page-content left-vertical-header">
    
    
<div id="contact" class="book-table-area bg_image--62 pt--100 pt_md--80 pt_sm--60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="brook-section-title-restaurant text-center mb--50">
                                <h3 class="color-white">Get in Touch</h3>
                                <div class="bkseparator--10"></div>
                                <h3 class="title color-white">Contact Us</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="book-table-form">
                                <form action="mail.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-input mb--50">
                                                <input name="con_name" type="text" placeholder="Name *">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-input mb--50">
                                                <input name="con_email" type="text" placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-input mb--50">
                                                <input name="con_phone" type="text" placeholder="Phone Number *">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="single-input mb--50">
                                                <input name="con_message" type="text" placeholder="Message *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="submit" value="Send Message">
                                        <p class="form-messege mt--10"></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <!-- End Book Table Area -->
            <?php include 'footer.php' ?>