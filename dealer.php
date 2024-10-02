<?php include 'header.php' ?>

        <!-- Page Conttent -->
        <main class="page-content left-vertical-header">

            <!-- STart Contact Us Modern -->
            <div class="contact-modern pt--120 pb--120 pb_md--80 pb_sm--80">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-12 col-12 pl--50">
                            <div class="contact-form">
                                <form action="dealer-mail.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input name="con_name" type="text" placeholder="Name *">
                                        </div>

                                        <div class="col-lg-12 mt--30">
                                            <input name="con_email" type="text" placeholder="Email *">
                                        </div>

                                        <div class="col-lg-12 mt--30">
                                            <input type="text" name="con_phone" placeholder="Phone number">
                                        </div>

                                        <div class="col-lg-12 mt--30">
                                            <div class="single-input">
                                                <select name="product" id="count">
                                                    <option value="People">Category</option>
                                                    <option value="Agriculture Pressure Pipe">Agriculture Pressure Pipe</option>
                                                    <option value="SWR Pipe">SWR Pipe</option>
                                                    <option value="Casing, Borewell & Filter Pipe">Casing, Borewell & Filter Pipe</option>
                                                    <option value="Submersible/Column Pipe">Submersible/Column Pipe</option>
                                                    <option value="Plumbing Pipe">Plumbing Pipe</option>
                                                    <option value="UPVC Self Fit Pipe">UPVC Self Fit Pipe</option>
                                                    <option value="Rainwater (Gutter) Pipe">Rainwater (Gutter) Pipe</option>
                                                    <option value="Blow Mould Water Storage Tank">Blow Mould Water Storage Tank</option>
                                                    <option value="Roto Mould Water Storage Tank 2 Layers">Roto Mould Water Storage Tank 2 Layers</option>
                                                    <option value="Roto Mould Water Storage Tank 3 Layers">Roto Mould Water Storage Tank 3 Layers</option>
                                                    <option value="Roto Mould Water Storage Tank Foam Layer">Roto Mould Water Storage Tank Foam Layer</option>
                                                    <option value="For Portable Water">For Portable Water</option>
                                                    <option value="Sewerage and Electrical Duct">Sewerage and Electrical Duct</option>
                                                    <option value="PLB Duct for Telecom">PLB Duct for Telecom</option>
                                                    <option value="MDPE Gas Pipe">MDPE Gas Pipe</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt--30">
                                            <input type="text" name="con_city" placeholder="City"></textarea>
                                        </div>

                                        <div class="col-lg-12 mt--30">
                                            <input type="submit" value="Send message">
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Us Modern -->


        </main>
        <!--// Page Conttent -->

<?php include 'footer.php' ?>