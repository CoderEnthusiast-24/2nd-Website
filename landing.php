<!DOCTYPE html>
<html>
<head>

    <title>MCR WEBSITE</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div id="header-container">
        <header class="header">
            <div class="logo"><img src="images/logo.png" alt="logo" id ="logo"></div>
            <nav class="nav" id="mainNav">
                <a href="#home">HOME</a>
                <a href="#about">ABOUT</a>
                <a href="#services">SERVICES</a>
                <a href="#properties">PROPERTIES</a>
                <a href="#newsletter">CONTACT US</a>
                <a href="links/login.php">SIGN UP / LOG IN</a>
            </nav>
        </header>
    </div>

     
    <section id="home" class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-image"><img src="images/pic6.jpg" alt="pic6"></div>
        <div class="hero-tagline">
            <h2>Your Dream Home Awaits</h2>
            <p>Find Your Perfect Property Today</p>
        </div>
    </section>

     
    <section id="about" class="intro">
        <div class="container">
            <div class="about__content" >
              <div class="about__intro">
                <p class="intro-label">Introduction to MCR Realty Ventures OPC</p>
                <h2 class="heading">Helping you find the home for you</h2>

              </div>
              
                <div class="about__text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Exercitationem, cum possimus! Eveniet sit placeat
                    doloribus mollitia laudantium laboriosam similique
                        perspiciatis. Nobis, perspiciatis. Commodi a cumque
                        aliquam ad tempore eligendi ratione?
                </p>
                </div>

            </div>  
            <div class="intro-cards">
                <div class="card">
                    <img src="images/pic2.jpg" alt="house1">
                </div>
                <div class="card">
                    <img src="images/pic3.jpg" alt="house2">
                </div>
                <div class="card">
                    <img src="images/pic4.jpg" alt="house3">
                </div>   
            </div>
        </div>
    </section>

     
    <section id="services" class="featured">
        <div class="container">
            <div class="featured__content">
            <div class="featured__image">
                <img src="images/pic5.jpg" alt="house">
            </div>
            <div class="featured__text">
                <h2 class="heading">Featured Property</h2>
                <a href="#" class="button">Click to see more...</a>
                <p>
                this is best property our real estate has to offer
                as we look at the exterior design as grand as it look
                we could expect more and be amamzed on how beautiful
                the interior is.
                </p>
            </div>
            </div>
        </div>
    </section>

     
    <section class="portfolio" id="properties">
        <div class="container">
            <h2 class="heading">Our properties</h2>
            <p class="button">see more</p>

            <div class="property">
                <table class="property__table">
                    <tr class="property__row">
                        <td class="property__data">
                            <h2>Pililla Heights 1</h2>
                            <p> "Own your slice of paradise in Pililla, Rizal 🌿✨.</p>

                            <br>
                            
                            <p>
                            📍 Sitio Matagbak, Brgy. Bagumbayan Pililla Rizal <br>
                            💰 ₱ 5000 – ₱ 7000 / SQM</p> 
                        </td>
                        <td class="property-image">
                            <img src="images/pic1.jpg" alt="house4">
                        </td>
                    </tr>
                    <tr class="property__row">
                        <td class="property-image">
                            <img src="images/pic2.jpg" alt="house4">
                        </td>
                        <td class="property__data">
                            <h2>Pililla Heights 2</h2>
                            <p> Prime residential lots now available — peaceful, elevated, and flood-free!".</p>
                            <br>
                            <p>
                            📍 Sitio Matagbak, Brgy. Bagumbayan Pililla Rizal <br>
                            💰 ₱ 6000 – ₱ 8000 / SQM</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

     
    <section class="testimonials">
        <div class="container">
            <h2 class="tite" style="color: white; font-size: 50px; text-align: center; margin-bottom: 60px;">Showcasing expertise</h2>
           
            
            <div class="achievements">
                <div class="ach__con">
                    <img src="images/award1.png" alt="award">
                </div>
                <div class="ach__con">
                    <img src="images/award2.png" alt="award">
                </div>
            </div>
        </div>
    </section> 
   
    <section class="newsletter">
        <div class="newsletter-left">
            <img src="images/housepic.png" alt="">
        </div>
        
        <div class="newsletter-form-wrapper" id="newsletter">
            <div class="form-heading">
                <h3>Get in Touch with Company Properties</h3>
                <p>for more details and a private secured deal then talk to us!</p>
            </div>
            
            <div class="newsletter-form">
                <form action="#" method="post">
                    <!-- Converted radio buttons to dropdown -->
                    <div class="form-group">
                        <label>Type of inquiry: </label>
                        <select name="message_type" required>
                            <option value="general">General Inquiry</option>
                            <option value="property">Property Inquiry</option>
                        </select>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="tel" name="phone">
                    </div>
                    
                    <div class="form-group checkbox">
                        <label>
                            <input type="checkbox" name="subscribe" checked>
                            Subscribe to newsletter
                        </label>
                    </div>
                    
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

      
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-columns">
                    <div class="footer-column">
                        <h3>MCR REALTY VENTURES OPC</h3>
                        <p>Lorem ipsum dolor, 
                            sit amet consectetur adipisicing elit.
                             Laborum sequi, illo praescentium iste
                            possimus eveniet obcaecati eaque veniam.
                            Ipsa amet quibusdam consectetur.</p>
                    </div>

                    <div class="footer-column">
                        <h3>GET IN TOUCH</h3>
                        <p class="contact-info">
                            +63 9420696766<br>
                            McrRealtyVenturesOpc@gmail.com<br>
                            therealestate@gmail.com
                        </p>
                    </div>

                    <div class="footer-column">
                        <h3>USEFUL LINKS</h3>
                        <a href="#home">Home</a>
                        <a href="#about">About Us</a>
                        <a href="#properties">Properties</a>
                        <a href="#contact">Contact</a>
                    </div>

                    <div class="footer-column">
                        <h3>FOLLOW US</h3>
                        <div class="social-icons">
                            <a href="#" class="social-icon">
                                <img src="images/logo_x.png" alt="X">
                            </a>
                            <a href="#" class="social-icon">
                                <img src="images/logo_tiktok.png" alt="TikTok">
                            </a>
                            <a href="#" class="social-icon">
                                <img src="images/logo_fb.png" alt="Facebook">
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="footer-bottom">
            <p>Privacy Notice - Terms and Conditions</p>
        </div>
    </footer>
    <script src="script/script.js"></script>
</body>
</html>
