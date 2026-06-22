    <?php
        include "header.php";
    ?>
    <!-- ===== WHATSAPP INTEGRATION PART START ===== -->
    <a href="https://wa.me/918734967027?text=Hi%20Amit!%20I%20visited%20your%20website%20and%20I%20am%20interested%20in%20your%20services." class="whatsapp-float" target="_blank" title="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <!-- ===== WHATSAPP INTEGRATION PART END ===== -->

    <!-- ===== THE HERO SECTION DEPARTMENT START ===== -->
    <section class="hero">

        <!-- ===== DESIGN HERO CONTENT , DIV , P TAGS START ===== -->
        <div class="hero-content">
            <p class="hero-main">AVAILABLE FOR WORK</p>
            <h1>Hi, I'm Amit Devi</h1>
            <p class="hero-article">Freelancing to Full Stack developer design and build digital products that people love to use - fast, clean & accessible.</p>
        <!-- ===== DESIGN HERO CONTENT , DIV , P TAGS END ===== -->
            <!-- ===== BUTTON DESIGN PART START ===== -->
            <button class="btn">Get in touch</button>
            <!-- ===== BUTTON DESIGN PART END ===== -->
        </div>

        <!-- ===== HERO IMAGE PART START ===== -->
        <div class="hero-image">
            <img src="image/amit-devi.jpg" alt="amit devi">
        </div>
        <!-- ===== HERO IMAGE PART END ===== -->
    </section>
    <!-- ===== THE HERO SECTION DEPARTMENT END ===== -->

    <!-- ===== SERVICES SECTION START ===== -->
    <section class="services" id="services">
        <h1 class="services-heading">Our Services</h1>
        <div class="services-container">
            <div class="services-card">
                <i class="fa-solid fa-laptop-code"></i>
                <h3>Web Development</h3>
                <p>Building fast , responsive and accessible website using modern technologies tailored to your needs</p>
            </div>
            <div class="services-card">
                <i class="fa-solid fa-shield-halved"></i>
                <h3>Cyber Security</h3>
                <p>Comprehensive penetration testing and network auditing to ensure your digital assests remain secure.</p>
            </div>
            <div class="services-card">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
                <h3>Photoshop</h3>
                <p>High-end photo editing and hyper-realistic cinematic portrait generation using advanced AI tools.</p>
            </div>
            <div class="services-card">
                <i class="fa-solid fa-laptop"></i>
                <h3>CSC Center</h3>
                <p>All the Government sites Form filling to satisfying services</p>
            </div>
            <div class="services-card">
                <i class="fa-solid fa-mobile"></i>
                <h3>App Development</h3>
                <p>fast building and responsive applicaton design for the user friendly or user experience next level</p>
            </div>
        </div>
    </section>
    <!-- ===== SERVICES SECTION PART END ===== -->

    <!-- ===== CONTACT US PART START ===== -->
    <section class="contact" id="contact">
        <h1 class="services-heading">Contact Us</h1>
        <div class="contact-container">
            <form action="SERVER.php" class="contact-form" method="POST">
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
                        <input type="email" name="mail" placeholder="Enter email address" required>
                    </div>
                </div>
                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="How can I help you?"></textarea>
                </div>
                <button type="submit" class="btn contact-submit">Send Message</button>
            </form>
        </div>
    </section> 
    <!-- ===== CONTACT US PART END ===== -->

    <?php
        include "footer.php";
    ?>