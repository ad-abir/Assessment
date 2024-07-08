<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doin Tech</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../public/styles/index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
    <header id="navbar">
        <div class="navbar">
            <div class="logo">
                <a href="website.php">
                    <img src="../public/images/logo.jpg" alt="Logo">
                </a>
            </div>
            <div class="menu-toggle" id="menu-toggle">
                <i class="fa fa-fw fa-bars"></i>
            </div>
            <div class="menu-navbar">
                <a href="#home">Home</a>
                <a href="#services">Services</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </header>

    <div id="home" class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../public/images/pic1.jpg" alt="Slide 1"></div>
            <div class="swiper-slide"><img src="../public/images/pic2.jpg" alt="Slide 2"></div>
            <div class="swiper-slide"><img src="../public/images/pic3.jpg" alt="Slide 3"></div>
            <div class="swiper-slide"><img src="../public/images/pic4.jpg" alt="Slide 4"></div>
            <div class="swiper-slide"><img src="../public/images/pic5.JPG" alt="Slide 5"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <div id="services" class="container">
        <div class="contents">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos quas delectus atque excepturi a porro ullam amet ratione illo mollitia fugiat aliquam alias ex, corporis maxime rem tempore libero qui. Connect with us. You are one click away.</p>
        </div>

        <div class="container">
            <div class="content">
                <div class="form-container">
                    <form class="contact_form" action="website.php" method="POST">
                        <input class="contact_form_name" type="text" name="fname" placeholder="Name" required="">
                        <input class="contact_form_email" type="email" name="email" placeholder="Email" required="">
                        <textarea class="contact_form_message" id="message" rows="2" cols="25" name="message" placeholder="Your message" required aria-label="Message"></textarea>
                        <button class="send_button" type="submit" name="send">send</button>
                    </form>
                </div>
            </div>
        </div>

        <footer id="contact">
            <div class="main-content">
                <div class="left box">
                    <h2>About Us</h2>
                    <div class="content">
                        <p class="address">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit consequuntur sit reprehenderit neque. Voluptas fugit quam sed? Quaerat itaque magni quis, aliquid, laudantium quidem praesentium quisquam rem quasi quas culpa.</p>
                        <div class="social">
                            <a href="https://www.facebook.com/dointechltd"><span class="fab fa-facebook-f"></span></a>
                            <a href="https://www.instagram.com/dointechltd/"><span class="fab fa-instagram"></span></a>
                            <a href="https://www.linkedin.com/company/dointechltd/"><span class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div>

                <div class="right box">
                    <h2>Address</h2>
                    <div class="content">
                        <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text"><a href="https://maps.app.goo.gl/GrrSaAAvnMt5pR6KA?g_st=com.google.maps.preview.copy" target="_blank">Facilities Tower (12th Floor), Kha 199/2 Pragati Sarani, Dhaka–1212</a></span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text"><a href="tel:+8801880622975">01880-622975</a></span>
                        </div>
                        <div class="place">
                            <span class="fas fa-envelope"></span>
                            <span class="text"><a href="mailto:hello@doin.tech">hello@doin.tech</a></span>
                        </div>
                    </div>
                </div>

            </div>
        </footer>


        <?php
        include("../config/config.php");

        if (isset($_POST['send'])) {
            var_dump($_POST['send']);
            $your_name = mysqli_real_escape_string($connection, $_POST['fname']);
            $email      = mysqli_real_escape_string($connection, $_POST['email']);
            $your_message       = mysqli_real_escape_string($connection, $_POST['message']);

            if (!preg_match("/^[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*@gmail.com$/", $email)) {
                echo "<script>alert('Submission Failed.\\nPlease provide a valid Gmail address.');</script>";
            } else {

                $query = "INSERT INTO messages (`Name`, `Email`, `Message`) VALUES ('$your_name','$email','$your_message')";
                $data = mysqli_query($connection, $query);

                if ($data) {
                    echo "<script>alert('Submission Successful!\\nYour message has been sent.');</script>";
                    $_SESSION['email'] = $email;
                } else {
                    $error_message = mysqli_error($connection);
                    echo "<script>alert('Submission Failed.\\nError: " . addslashes($error_message) . "');</script>";
                }
            }
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="../public/js/swiper.js"></script>
        <script src="../public/js/popup.js"></script>
        <script src="../public/js/app.js"></script>
        <script src="../public/js/scroll.js"></script>
</body>

</html>