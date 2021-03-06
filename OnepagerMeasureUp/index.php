<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>MeasureUp</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <i class="ri-leaf-line nav__logo-icon"></i> MeasureUp
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#faqs" class="nav__link">FAQs</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact us</a>
                        </li>
                        <li class="nav__item">
                            <a  href="picture.html" target="_blank" class="nav__link" >Test It</a>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="assets/img/home.png" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            Get The <br> Right Size
                        </h1>
                        <p class="home__description">
                            MeasureUp is an measuring software that can measure the 
                            exact size of your customer with one click
                        </p>
                        <a href="#contact" class="button button--flex">
                            Request Demo <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/MeasureUpofficial/" target="_blank" class="home__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://www.linkedin.com/feed/" target="_blank" class="home__social-link">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="assets/img/about.png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Who we really are & <br> why choose us
                        </h2>

                        <p class="about__description">
                            MeasureUp is the only sizing service capable of matching your customer???s 
                            exact body MeasureUpnts to your exact clothing MeasureUpnts
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Reduce the number of returns.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Co2 reduction by gaining better insight into your stock
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We always come over for a check-up after sale.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                100% money back guaranteed.
                            </p>
                        </div>

                        <a href="#contact" class="button--link button--flex">
                            Demo <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== STEPS ====================-->
            <section class="steps section container">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                        How it Works 
                    </h2>

                    <div class="steps__container grid">
                        <div class="steps__card">
                            <div class="steps__card-number">01</div>
                            <h3 class="steps__card-title">Update Size Data</h3>
                            <p class="steps__card-description">
                                Step one is omporting size data into your secure business portal.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">02</div>
                            <h3 class="steps__card-title">API Key</h3>
                            <p class="steps__card-description">
                                Now it's time to embed our plugin with just a few lines of code.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">03</div>
                            <h3 class="steps__card-title">Better Servece, More Sales</h3>
                            <p class="steps__card-description">
                                You will experience higher conversion an fewer returns.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== Features ====================-->
            <section class="product section container" id="products">
                <h2 class="section__title-center">
                    Features <br> 
                </h2>

                <p class="product__description">
                    Our MeasureUp plugin comes in any color you want. 
                    Customize fonts and colors so it seamlessly fits into your overall online store appearance.
                </p>

                <div class="product__container grid">
                    <article class="product__card">
                        
                        <img src="assets/img/product1.png" alt="" class="product__img">
                        <h3 class="product__title"><b>Fewer Returns</b></h3>
                        <a class="product__discription">Perfect size matching means spot-on delivery. Resulting in fewer returns and less outstanding capital.</a>

                        
                    </article>

                    <article class="product__card">
                        
                        <img src="assets/img/product2.png" alt="" class="product__img">

                        <h3 class="product__title"><b>Increase online conversion</b></h3>
                        <a class="product__discription">MeasureUp enhances the overall shopping experience, leading to quicker decisions and more return visits.</a>

                        
                    </article>

                    <article class="product__card">
                        
                        <img src="assets/img/product3.png" alt="" class="product__img">

                        <h3 class="product__title"><b>Flexible models</b></h3>
                        <a class="product__discription">No matter the size of your online business, we can create a plan that fits like a glove.</a>

                        
                    </article>    

                    <article class="product__card">
                        
                        <img src="assets/img/product4.png" alt="" class="product__img">

                        <h3 class="product__title"><b>Ecological footprint reduction</b></h3>
                        <a class="product__discription">Fewer returns also mean lower transportation costs and less destroyed clothing, leaving your business with a smaller ecological footprint.</a>

                        
                    </article>

                    <article class="product__card">
                        
                        <img src="assets/img/product5.png" alt="" class="product__img">

                        <h3 class="product__title"><b>Customer Loyalty</b></h3>
                        <a class="product__discription">MeasureUp makes buying clothes online easier and provides your customer with a consistently positive experience. The result? Increased customer loyalty.</a>

                        
                    </article>

                    <article class="product__card">
                        
                        <img src="assets/img/product6.png" alt="" class="product__img">

                        <h3 class="product__title"><b>Valuable Data Insigh</b></h3>
                        <a class="product__discription">Online access to our sizing data will help you tailor your production to your customer's needs. Combine your customer profiles with size-related data to better align production orders with sales.</a>

                        
                    </article>
                    
                </div>
            </section>

            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 class="section__title-center questions__title container">
                    Some common questions <br> were often asked
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Where does my data go?                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Your data is encrypted and is stored in a database. 
                                    There are no 3rd parties involved that can buy your data
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What happen to the pictures?                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    The pictures that we need to measure your size gets deleted after you used the system. 
                                    Nobody sees the pictures the system deletes is after use.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What if I get still returns?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    MeasureUp is and software that measures the size of the body. 
                                    But people still can send clothing return because they don???t like the color or the feel.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    I have problems with the system?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Our service desk can help you to solve the problem. 
                                    You can give us a call 31+ 6 53 66 12 84 we are happy to help you
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What camera do I need to use?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    We advise you have a camera with an 720p resolution or higher. 
                                    When you have an better resolution is will be more accurate.   
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How much will it cost?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    You can send us an email if you want to know more details about the price. 
                                    Our sales department will contact you a few days after you received the brochure.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== COUNTER ====================-->
            <section class="steps section container">
                <div class="steps__bg">
                    
                    
                    <h2 class="section__title-center steps__title">
                        while you read this, This happens: 
                    </h2>

                    <div class="steps__container grid">
                        <div class="steps__card">
                            <h3 class="steps__card-title">Packages sent</h3>
                            <div class="counter" data-target="76000">0</div>
                        </div>

                        <div class="steps__card">
                            <h3 class="steps__card-title">Packages sent back</h3>
                            <div class="counter" data-target="12000">0</div>
                        </div>

                        <div class="steps__card">
                            <h3 class="steps__card-title">gr Co2 emissions</h3>
                            <div class="counter" data-target="88000">0</div>
                        </div>
                    </div>
                </div>
            </section>





            <!--==================== CONTACT ====================-->
            <section class="contact section container" id="contact">                
                <div class="contact__container grid">
                    <div class="contact__box">
                        <h2 class="section__title">
                            Reach out to us today <br> through any of the  <br> given information
                        </h2>

                        <div class="contact__data">
                            <div class="contact__information">
                                <h3 class="contact__subtitle">Call us for instant support</h3>
                                <span class="contact__description">
                                    <i class="ri-phone-line contact__icon"></i>
                                    31+ 6 53 66 12 84
                                </span>
                            </div>

                            <div class="contact__information">
                                <h3 class="contact__subtitle">Write us by mail</h3>
                                <span class="contact__description">
                                    <i class="ri-mail-line contact__icon"></i>
                                    daansmid@icloud.com
                                </span>
                            </div>
                        </div>
                    </div>

                    <form action="email-script.php" class="contact__form">
                        <div class="contact__inputs">
                            
                            <div class="contact__content">
                                <input type="email" placeholder=" " class="contact__input">
                                <label for="inputEmail" class="contact__label">Email</label>
                            </div>

                            <div class="contact__content">
                                <input type="tel" placeholder=" " class="contact__input">
                                <label for="inputTel" class="contact__label">Phone Number</label>
                            </div>

                            <div class="contact__content">
                                <input type="text" placeholder=" " class="contact__input">
                                <label for="inputSubject" class="contact__label">Subject</label>
                            </div>                         

                            <div class="contact__content contact__area">
                                <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                                <label for="inputMessge" class="contact__label">Message</label>
                            </div>
                        </div>

                        <button class="button button--flex">
                            Send Message
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>

                        
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <h3 class="footer__title">Our Address</h3>

                    <ul class="footer__data">
                        <li class="footer__information">3023VH - Rotterdam</li>
                        <li class="footer__information">Heemraadstraat 44</li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contact Us</h3>

                    <ul class="footer__data">
                        <li class="footer__information">31+ 6 53 66 12 84</li>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/MeasureUpofficial/" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://www.linkedin.com/feed/" class="footer__social-link">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        We accept all credit cards
                    </h3>

                    <div class="footer__cards">
                        <img src="assets/img/card1.png" alt="" class="footer__card">
                        <img src="assets/img/card2.png" alt="" class="footer__card">
                        <img src="assets/img/card3.png" alt="" class="footer__card">
                        <img src="assets/img/card4.png" alt="" class="footer__card">
                    </div>
                </div>
            </div>

            <p class="footer__copy">&#169; MeasureUp. All rigths reserved</p>
        </footer>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>