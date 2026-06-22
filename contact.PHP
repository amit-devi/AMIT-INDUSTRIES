<?php
    include "header.php";
?>
    <!-- ===== WHATSAPP INTEGRATION PART START ===== -->
     <a href="https://wa.me/918734967027?text=Hi%20Amit!%20I%20visited%20your%20website%20and%20I%20am%20interested%20in%20your%20services." class="whatsapp-float" target="_blank" title="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <!-- ===== WHATSAPP INTEGRATION PART END ===== -->
    
    <!-- ===== CONTACT PAGE SECTION START ===== -->
    <section class="contact-page-section">
        <!-- ===== SERVICE HEADING PART START ===== -->
        
        <h1 class="services-heading">Get In Touch</h1>
        
        <!-- ===== SERVICE HEADING PART END ===== -->

        <!-- ===== CONTACT PAGE CONTAINER PART START ===== -->
        <div class="contact-page-container">
        <!-- ===== CONTACT PAGE CONTAINER PART END ===== -->
            
            <!-- ===== CONTACT INFO PART START ===== -->
            <div class="contact-info-wrapper">
                <!-- ===== CONTACT DETAILS PART START ===== -->
                <div class="contact-details">
                    <!-- ===== INFO ITEM PART START ===== -->
                    <div class="info-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <div>
                            <h4>Location</h4>
                            <p>Idar, Gujarat, India</p>
                        </div>
                    </div>
                    <!-- ===== INFO ITEM PART END ===== -->
                    <div class="info-item">
                        <i class="fa-solid fa-envelope"></i>
                        <div>
                            <h4>Email Address</h4>
                            <p>amitdevi210@gmail.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-phone"></i>
                        <div>
                            <h4>Phone Number</h4>
                            <p>+91 87349 67027</p>
                        </div>
                    </div>
                </div>
                <!-- ===== CONTACT DETAILS PART END ===== -->

                <!-- ===== MAP CONTAINER PART START ===== -->
                <div class="map-container">
                    <iframe src="https://maps.google.com/maps?q=Idar,+Gujarat,+India&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- ===== MAP CONTAINER PART END ===== -->
            </div>
            <!-- ===== CONTACT INFO PART END ===== -->

            
            <div class="contact-form-wrapper">
                <form class="contact-form" action="SERVER.php" method="POST">
                    <div class="input-row">
                        <div class="input-group">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="fname" placeholder="Enter your first name" required>
                        </div>
                        <div class="input-group">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname" placeholder="Enter your last name" required>
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="tel" id="mobile" name="mobile" placeholder="Your mobile number" required>
                        </div>
                        <div class="input-group">
                            <label for="mail">Email Address</label>
                            <input type="email" id="mail" name="mail" placeholder="Enter email address" required>
                        </div>
                    </div>

                    <div class="input-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="6" placeholder="How can I help you?" required></textarea>
                    </div>

                    <button type="submit" class="btn contact-submit">Send Message</button>
                </form>
            </div>

        </div>
    </section>
<!-- ===== FOOTER CALLING ===== -->
<?php
    include "footer.php";
?>