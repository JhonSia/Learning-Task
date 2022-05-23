<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">My Portfolio</a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div img src="banner.jpg" alt=""></div>
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Jhon Anthony Sia</div>
            </div>
        </div>
    </section>


    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="jats1.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Jhon Anthony Sia<span class="typing-2"></span></div>
                    <p>I am BSIT-1B Student.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Jhon Anthony Sia</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Negros Occidental, Philippines, Bacolod City, 6100</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">Jhonanthonysia@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>

  <h2>Portfolio</h2>
        <div class="row">
            <div class="column">
                <div class="content">
                    <img src="LT2.JPG"
                        alt="" style="width:100%">
                    <h3>
                        <a href ="/LT2/Indexx.html" target="_blank" rel="noopener noreferrer">Learning Task 2</a>
                    </h3>
                </div>
            </div>


            <div class="column">
                <div class="content">
                    <img src="LT3.JPG"
                        alt="" style="width:100%">
                    <h3>
                        <a href ="/LT3/index.html" target="_blank" rel="noopener noreferrer">Learning Task 3</a>
                    </h3>
                </div>
            </div>

            <div class="column">
                <div class="content">
                    <img src="LT4.JPG"
                        alt="" style="width:100%">
                    <h3>
                        <a href ="/LT4/index.html" target="_blank" rel="noopener noreferrer">Learning Task 4</a>
                    </h3>
                </div>
            </div>

            <div class="column">
                <div class="content">
                    <img src="LT5.JPG"
                        alt="" style="width:100%">
                    <h3>
                        <a href ="/LT5/index.html" target="_blank" rel="noopener noreferrer">Learning Task 5</a>
                    </h3>
                    </div>
                </div>

                        <div class="center">
                <div class="content">
                    <img src="CLE1.JPG"
                        alt="" style="width:30%">
                    <h3>
                          <a href ="/CLE1MT/index.html" target="_blank" rel="noopener noreferrer">CLE1MT</a>
                    </h3>
                    </div>
                </div>

        </div>
    </body>
</html>
