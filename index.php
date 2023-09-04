<?php

$host = "localhost";
$username = "cornerpc";
$password = "IamEhsaas@2003";
$dbname = "cornerpc_gdsc";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//
//if (isset($_POST['form'])) {
//  $name = $_POST['name'];
//  $email = $_POST['email'];
//  $num = $_POST['num'];
//  $prn = $_POST['prn'];
//  $year = $_POST['year'];
//  $sec = $_POST['sec'];
//  $event = $_POST['event'];
//
//    if (strtoupper($event) == "GG2023-SITNGP") {
//        echo '<script>alert("Registrations Are Closed")</script>';
//    } else {
//        $sql = "INSERT INTO `event_regs` (`name`, `email`, `num`, `prn`, `year`, `sec`, `event`) VALUES ('$name', '$email', '$num', '$prn', '$year', '$sec', '$event')";
//        $result = mysqli_query($conn, $sql);
//        echo '<script>alert("Registered Successfully.")</script>';
//    }
//}

if (isset($_POST['contact'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $num = $_POST['num'];
  $message = $_POST['message'];

  $insertquery = "insert into contact(name, email, num, msg) values('$name', '$email', '$num', '$message')";
  $res = mysqli_query($conn, $insertquery);
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
  <meta name="author" content="GDSC SITNGP" />
  <meta property="og:image" content="./img/DSC_Chapter_Logos/gdsc-sitngp.png" />
  <meta name="description"
    content="Developer Student Clubs (GDSC) is a Google Developers program for university students to learn skills like development, programming, open source projects, designing and many other." />
  <meta name="keywords"
    content="clubs in nagpur, GDSC sit, coding, google developers, sit, india, Nagpur, sit nagpur, sit pune, computer science" />
  <meta name="theme-color" content="#2F5BE7" />
  <title>GDSC | SITNGP</title>

  <link rel="icon" href="img/favicon.png" type="image/png" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" />
  <link rel="manifest" href="manifest.json">
  <link href="https://fonts.googleapis.com/css?family=Google+Sans:400,500,700|Material+Icons" rel="stylesheet"
    type="text/css" />

  <!-- CSS -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- JS -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4957680970183461"
            crossorigin="anonymous"></script>
  <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <style>
        .demo-preview {
            padding-top: 20px;
            padding-bottom: 10px;
            width: 70%;
            margin: auto;
            text-align: center;
        }

        .alert {
            padding: .7143rem 1.071rem;
            margin-bottom: 1.429rem;
            border-radius: 2px;
            border: 1px solid transparent;
            color: #FFF
        }

        .alert.alert-square {
            border-radius: 0
        }

        .alert .close {
            position: relative
        }

        .alert.alert-dismissable,
        .alert.alert-dismissible {
            padding-right: 2.5rem
        }

        .alert.alert-dismissable .close,
        .alert.alert-dismissible .close {
            top: -2px;
            right: -20px;
            color: inherit
        }

        .alert.alert-primary {
            background-color: #2196F3;
            border-color: #2196F3
        }

        .alert.alert-secondary {
            background-color: #323a45;
            border-color: #323a45
        }

        .alert.alert-success {
            background-color: #64DD17;
            border-color: #64DD17
        }

        .alert.alert-info {
            background-color: #29B6F6;
            border-color: #29B6F6
        }

        .alert.alert-warning {
            background-color: #FFD600;
            border-color: #FFD600
        }

        .alert.alert-danger {
            background-color: #ef1c1c;
            border-color: #EF5350
        }
    </style>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KHGLPE5N5K"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-KHGLPE5N5K');
</script>
<body>
  <!-- style="position: fixed; width: 100%; background-color: #fff" -->
  <header id="header" class="nav-header">
    <div class="container">
      <nav id="main-nav" class="navbar" role="navigation" aria-label="main navigation">
        <!-- navigation pane goes here -->
        <div class="navbar-brand">
          <a class="navbar-item" href="/">
            <img src="img/DSC_Chapter_Logos/DSC_Sit_Light_Horizontal_Logo.png" width="300px" alt="GDSC logo" />
          </a>
          <a role="button" onclick="toggleMenu()" class="navbar-burger burger" style="padding-top: 1.2rem"
            aria-label="menu" aria-expanded="false" data-target="navbarLinks">
            <i class="fas fa-bars fa-2x"></i>
          </a>
        </div>

        <div id="navbarLinks" class="navbar-menu">
          <div class="navbar-end">
            <a href="#overview" class="navbar-item" onclick="change('#home')">Overview</a>
            <a href="#technologies" class="navbar-item" onclick="change('#tech')">Technologies</a>
            <a href="#event" class="navbar-item" onclick="change('#events')">Events</a>
            <a href="#team" class="navbar-item" onclick="change('#teamSec')">Team</a>
            <a href="#faq" class="navbar-item" onclick="change('#faqs')">FAQ</a>
            <a href="#contact" class="navbar-item" onclick="change('#contact')">Contact</a>
            <!--            <div class="navbar-item">-->
            <!--              <a href="https://discord.gg/m7Zh8HJ" target="_blank" class="btn event-btn">Join Us</a>-->
            <!--            </div>-->
          </div>
        </div>
      </nav>
    </div>
  </header>
  <main id="splash">
    <div class="site" id="page">
      <a class="skip-link sr-only" href="#main">Skip to content</a>

      <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
      <section class="hero-section hero-section--color clearfix zoom">
        <div class="hero-section__wrap">
          <div class="hero-section__option"></div>
          <!-- .hero-section__option -->

          <div class="container">
            <div class="row">
                <a href="#event" onclick="change('#events')">
<!--                    add featured image thumbnail-->
                <div class="demo-preview ">
                    <div class="">
<!--                        <img src="img/Event/PP2023-SITNGP(cover).png" alt="featured image" style="width: auto; height: auto">-->
                    </div>
                    <br/>
                    <div class="alert alert-secondary alert-dismissable fade in">
                        <strong>Welcome! </strong>Check The Latest Events Updates</div>
                    <strong>Click Here And Goto Events Page!</strong>
                </div>
                </div>
                </a>
              <div class="offset-lg-1 col-lg-10">
                <div class="title-01 title-01--11 text-center">
                  <h2 class="title__heading">
                    <div class="hero-section__words text-center">
                      <div class="title__effect is-visible">We are Developers</div>
                      <div class="title__effect">We are Creative</div>
                      <div class="title__effect">We are Tech Heads</div>
                    </div>
                  </h2>
                  <div class="title__description">It is putting your imagination to work, and it's produced the most
                    extraordinary results in tech culture.</div>

                  <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                  <div class="title__action"><a href="#home" class="btn btn-primary"
                      onclick="change('#home')">Explore</a></div>
                </div>
                <!-- .title-01 -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- .hero-section -->
    </div>
  </main>
  <main id="home" hidden>
    <section id="overview" class="section-spacer">
      <div class="container">
        <div class="cols">
          <div class="welcome col-sm-6 col-5">
            <h2>
              Google Developer Student Club<br />Symbiosis Institute of Technology, Nagpur
            </h2>
            <div>
              <p>
                Developer Student Clubs is a <span class="first-letter">G</span><span
                  class="second-letter">o</span><span class="third-letter">o</span><span
                  class="first-letter">g</span><span class="fourth-letter">l</span><span class="second-letter">e</span>
                Developers program for
                university students to learn skills like<span class="third-letter">
                  development</span>,
                <span class="first-letter">programming</span>,
                <span class="second-letter">design thinking skills</span> and
                <span class="fourth-letter"> open source</span>.
              </p>
              <br />
              <a href="https://chat.whatsapp.com/LvA6OtQAZF4FCVS6bfKTlJ" class="btn" style="border-radius: 1.4rem"
                target="_blank"><i class="fab fa-whatsapp"></i>
                &nbsp; Join WhatsApp Group
              </a>
            </div>
          </div>
          <div class="col-sm-5 ml-auto">
            <img class="section-img" src="img/diversity.png" alt="diversity" />
          </div>
        </div>
      </div>
    </section>

    <section id="overview-cards" class="section-spacer">
      <div class="container">
        <div class="cols center-items">
          <div class="col-4">
            <div class="card overview-card">
              <i class="fas fa-rocket ghost-blue"></i>
              <div class="card-body">
                <h4>Concept of GDSC</h4>
                <p>
                  The GDSC program is a grassroots channel through which Google
                  provides development skills, mobile and web development skills
                  for students.
                </p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card overview-card">
              <i class="fas fa-lightbulb ghost-green"></i>
              <div class="card-body">
                <h4>Why GDSC?</h4>
                <p>
                  For students to learn development skills, solve problems
                  through technology and inspire them to be world-class
                  developers and changemakers.
                </p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card overview-card">
              <i class="fas fa-users ghost-red"></i>
              <div class="card-body">
                <h4>Target audience</h4>
                <p>
                  GDSC activities are targeted at University students and any
                  others including faculty members who want to learn development
                  skills & work to solve real-life problems.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <main id="tech" hidden>
    <section id="technologies" class="section-spacer gray-bg">
      <div class="container">
        <header class="section-header text-center">
          <h2 class="section-title">Technologies we're excited about</h2>
          <p class="section-subtitle">
            Opportunities to learn &amp; access deep technical content.
          </p>
          <br />
        </header>
        <div class="cols center-items">
          <div class="col-6">
            <div class="feature-list-image">
              <img class="section-img" src="img/android.jpg" alt="diversity" />
            </div>
          </div>
          <div class="col-5 ml-auto">
            <div class="feature-list-wrapper">
              <div class="content-header">
                <h2 class="content-title">Android Development</h2>
                <p>
                  Every year Google developers release exciting new updates to
                  the world's most popular operating system. We always have
                  sessions to keep you updated and mastering the latest trends
                  in modern Android development.
                </p>
              </div>
              <br />
              <!-- <a href="https://codelabs.developers.google.com/?cat=Android" class="hero-button"
                style="border-radius: 1.4rem" target="_blank">Codelabs &nbsp; &nbsp;<i
                  class="fas fa-external-link-alt"></i></a> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="web-technologies" class="">
      <div class="container">
        <div class="cols center-items">
          <div class="col-5">
            <div class="feature-list-wrapper">
              <div class="content-header">
                <h2 class="content-title">Web Development</h2>
                <p>
                  Learn the core foundations of a delightful web experience both
                  for the user and developer. Stay up to tabs with emerging and
                  trending technologies. Get access to a guided, tutorial and
                  hands-on coding experience.
                </p>
              </div>
              <br />
              <!-- <a href="https://codelabs.developers.google.com/?cat=Web" class="hero-button" target="_blank"
                style="border-radius: 1.4rem">Codelabs &nbsp; &nbsp;<i class="fas fa-external-link-alt"></i></a> -->
            </div>
          </div>
          <div class="col-6 ml-auto">
            <div class="feature-list-image">
              <img class="section-img" src="img/web.webp" alt="diversity" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="ml-technologies" class=" gray-bg">
      <div class="container">
        <div class="cols center-items">
          <div class="col-6">
            <div class="feature-list-image">
              <img class="section-img" src="img/ml.svg" alt="diversity" />
            </div>
          </div>
          <div class="col-5 ml-auto">
            <div class="feature-list-wrapper">
              <div class="content-header">
                <h2 class="content-title">Machine Learning</h2>
                <p>
                  Learn how to drive user engagement and retention with
                  intelligent apps that are able to effectively serve users what
                  they need without the fuss by providing these systems with the
                  ability to automatically learn and improve from experience
                  without being explicitly programmed.
                </p>
              </div>
              <br />
              <!-- <a href="https://codelabs.developers.google.com/" class="hero-button" style="border-radius: 1.4rem"
                target="_blank">Codelabs &nbsp; &nbsp;<i class="fas fa-external-link-alt"></i></a> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="web-technologiesC" class="">
      <div class="container">
        <div class="cols center-items">
          <div class="col-5">
            <div class="feature-list-wrapper">
              <div class="content-header">
                <h2 class="content-title">UI/UX and Graphic Designing</h2>
                <p>
                  UI/UX and Graphic Designing are integral for creating visually appealing and user-friendly experiences
                  in digital products. UI focuses on intuitive interfaces, while UX ensures overall user satisfaction.
                  Graphic Designing enhances visuals and branding materials for effective communication.
                </p>
              </div>
              <br />
              <!-- <a href="https://codelabs.developers.google.com/?cat=cloud" class="hero-button"
                style="border-radius: 1.4rem" target="_blank">Codelabs &nbsp; &nbsp;<i
                  class="fas fa-external-link-alt"></i></a> -->
            </div>
          </div>
          <div class="col-6 ml-auto">
            <div class="feature-list-image">
              <img class="section-img" src="img/cloud.png" alt="diversity" />
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <main id="events" hidden>
    <!--    create a event showcase section with cards and a hero banner-->
    <section id="event" class="section-spacer">
      <header class="section-header text-center">
        <h2 class="section-title">Events</h2>
        <p class="section-subtitle">
          Explore the events happening around you
        </p>
        <br />
      </header>


      <div class="container">
          <div class="item-container">
              <div class="img-container">
                  <img src="./img/Event/info.png" alt="Event image">
              </div>

              <div class="body-container">
                  <div class="overlay"></div>

                  <div class="event-info">
                      <p class="title">Info Session</p>
                      <div class="separator"></div>
                      <p class="info">Event Code: INFO2023-SITNGP</p>
                      <p class="price">Free</p>

                      <div class="additional-info">
                          <p class="info">
                              <i class="fas fa-map-marker-alt"></i>
                              Online
                          </p>
                          <p class="info">
                              <i class="far fa-calendar-alt"></i>
                              Mon, Aug 27, 4:00 PM IST
                          </p>

                          <p class="info description">
                              Join us this Sunday for an exciting Google Developer Student Club Info Session, featuring discussions on Google Cloud, hackathons, open source, and more!
                          </p>
                      </div>
                  </div>
                  <button class="action"><a href="https://gdsc.community.dev/e/mm5dqx/">Register</a></button>
              </div>
          </div>
          <div class="item-container">
              <div class="img-container">
                  <img src="./img/Event/PP2023-SITNGP.png" alt="Event image">
              </div>

              <div class="body-container">
                  <div class="overlay"></div>

                  <div class="event-info">
                      <p class="title">PixelPerfect</p>
                      <div class="separator"></div>
                      <p class="info">Event Code: PP2023-SITNGP</p>
                      <p class="price">Free</p>

                      <div class="additional-info">
                          <p class="info">
                              <i class="fas fa-map-marker-alt"></i>
                              Online
                          </p>
                          <p class="info">
                              <i class="far fa-calendar-alt"></i>
                              Mon, Aug 21, 7:00 PM IST
                          </p>

                          <p class="info description">
                              PixelPerfect: Elevate your UI/UX skills over 5 days—research user needs, sketch innovative ideas, design with flair, master wireframing, and craft interactive prototypes.
                          </p>
                      </div>
                  </div>
                  <button class="action"><a href="https://gdsc.community.dev/e/mydze9/">Register</a></button>
              </div>
          </div>
          <div class="item-container">
              <div class="img-container">
                  <img src="./img/Event/PS2023-SITNGP.png" alt="Event image">
              </div>

              <div class="body-container">
                  <div class="overlay"></div>

                  <div class="event-info">
                      <p class="title">Photoshop Unbound</p>
                      <div class="separator"></div>
                      <p class="info">Event Code: PS2023-SITNGP</p>
                      <p class="price">Free</p>

                      <div class="additional-info">
                          <p class="info">
                              <i class="fas fa-map-marker-alt"></i>
                              Online
                          </p>
                          <p class="info">
                              <i class="far fa-calendar-alt"></i>
                              Mon, Aug 14, 7:30 PM IST
                          </p>

                          <p class="info description">
                              Discover digital artistry in our immersive 5-day Photoshop workshop. From basics to advanced manipulation, unlock your creativity. Perfect for photographers, designers, and artists.
                          </p>
                      </div>
                  </div>
                  <button class="action"><a href="https://gdsc.community.dev/e/m9ph2g/">Register</a></button>
              </div>
          </div>
          <div class="item-container">
              <div class="img-container">
                  <img src="./img/Event/AGH2023-SITNGP.png" alt="Event image">
              </div>

              <div class="body-container">
                  <div class="overlay"></div>

                  <div class="event-info">
                      <p class="title">All About Github</p>
                      <div class="separator"></div>
<!--                      <p class="info">Event Code: AGH2023-SITNGP</p>-->
                      <p class="price">Free</p>

                      <div class="additional-info">
                          <p class="info">
                              <i class="fas fa-map-marker-alt"></i>
                              SIT Nagpur Seminar Hall
                          </p>
                          <p class="info">
                              <i class="far fa-calendar-alt"></i>
                              Sat, Aug 11, 4:30 PM IST
                          </p>

                          <p class="info description">
                              GitHub: Essential for devs. Version control, code hosting, and collaboration. Track changes, manage
                              projects. Open-source and team-friendly.
                          </p>
                      </div>
                  </div>
                  <button class="action"><a href="https://gdsc.community.dev/e/mcag5s/">Gallery</a></button>
              </div>
          </div>
        <div class="item-container">
          <div class="img-container">
            <img src="./img/Event/GG2023-SITNGP.png" alt="Event image">
          </div>

          <div class="body-container">
            <div class="overlay"></div>

            <div class="event-info">
              <p class="title">Graphics Guru</p>
              <div class="separator"></div>
<!--              <p class="info">Event Code: GG2023-SITNGP</p>-->
              <p class="price">Free</p>

              <div class="additional-info">
                <p class="info">
                  <i class="fas fa-map-marker-alt"></i>
                  SIT Nagpur Seminar Hall
                </p>
                <p class="info">
                  <i class="far fa-calendar-alt"></i>
                  Sat, Aug 5, 2:30 PM IST
                </p>

                <p class="info description">
                  GraphicsGuru workshop: Level up design skills. Create captivating visuals, illustrations, and
                  branding. Unleash creativity. Join now!
                </p>
              </div>
            </div>
              <button class="action"><a href="https://gdsc.community.dev/e/mj3bzm/">Gallery</a></button>
          </div>
        </div>
      </div>
    </section>
  </main>
  <main id="teamSec" hidden>
    <section id="team" class="section-spacer">
      <div class="container">
        <header class="section-header text-center">
          <h2 class="section-title">Meet The GDSC SITNGP Team</h2>
          <p class="section-subtitle">
            Passionate students and faculty staff driving the success of the
            program.
          </p>
        </header>
        <section id="overview-pcards" class="section-spacer">
          <div class="container" style="display: flex">
            <div class="cols center-items" style="justify-content: center">
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/Lead.jpg" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Prathamesh Yadav</h3>
                    <h4>GDSC Lead</h4>
                    <div>WAMP Stack and Python Developer</div>
                    <div>Android Developer</div>
                    <div>Mentor</div>
                  </div>
                  <div class="card-footer" style="
                        font-size: 1.2rem;
                        display: flex;
                        justify-content: center;
                      ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://www.linkedin.com/in/devpro-pratham/" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/creator-ehsaas" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                      <a href="https://www.instagram.com/devpro__pratham/" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/LakshyaKhanna.jpg" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Lakshya Khanna</h3>
                    <h4>GDSC Co-Lead</h4>
                    <div>Web Developer</div>
                    <div>Data Science Enthusiast</div>
                  </div>
                  <div class="card-footer" style="
                        font-size: 1.2rem;
                        display: flex;
                        justify-content: center;
                      ">
                    <div style="justify-content: space-around" class="social-links">

                      <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                      <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
                      <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/DeepankarDhawale.png" style="border-radius: 50%" width="100" height="100"
                    alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Deepankar Dhawale</h3>
                    <h4>Marketing & Graphics Lead</h4>
                    <div>Graphics Designer</div>
                    <div>Marketing Manager</div>
                    <div>AI/ML Enthusiast</div>
                  </div>
                  <div class="card-footer" style="
                        font-size: 1.2rem;
                        display: flex;
                        justify-content: center;
                      ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                      <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
                      <a href="#" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-male.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Ambar Kumar</h3>
                    <h4>Social Media Lead</h4>
                    <div>Java Programmer</div>
                    <div>Coding Enthusiast</div>
                    <div>Social Media Manager </div>
                  </div>
                  <div class="card-footer" style="
                        font-size: 1.2rem;
                        display: flex;
                        justify-content: center;
                      ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://www.linkedin.com/in/tathagata-ghosh-2a9866247/" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/ghoshtathagata558" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                      <a href="https://www.instagram.com/tathagata__ghosh/" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-male2.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Sharvil Sadafale</h3>
                    <h4>Management Lead</h4>
                    <div>Event Manager</div>
                    <div>Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                        font-size: 1.2rem;
                        display: flex;
                        justify-content: center;
                      ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://www.linkedin.com/in/harsh-kr-tiwari-a59abb21b/" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/iamharsh42" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                      <a href="https://www.instagram.com/harshtiwari0421/" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-male.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Padmanabh Wanikar</h3>
                    <h4>Management Lead</h4>
                    <div>Event Manager</div>
                    <div>Coding Enthusiast</div>
                    <div>Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                        font-size: 1.2rem;
                        display: flex;
                        justify-content: center;
                      ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://www.linkedin.com/in/sudipta-das-ece-b82408220/" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/Sudipto08" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                      <a href="https://www.instagram.com/its__sudipto/" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-male2.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Vedant Shrirao</h3>
                    <h4>Technical Lead</h4>
                    <div>AI/ML Enthusiast</div>
                    <div>Competitive Coder</div>
                  </div>
                  <div class="card-footer" style="
                        font-size: 1.2rem;
                        display: flex;
                        justify-content: center;
                      ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://www.linkedin.com/in/abhishek-kundu-05325421a/" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/abhishekkundu2002" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                      <a href="https://www.instagram.com/Abhishek_6paths_sage/" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-male.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Krunal Dhapodkar</h3>
                    <h4>Android Developer</h4>
                    <div>Native Application Developer</div>
                    <div>Open-source Enthusiast</div>
                    <div>Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                        font-size: 1.2rem;
                        display: flex;
                        justify-content: center;
                      ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://www.linkedin.com/in/krunal-dhapodkar-23b3411a1/" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/Krunal-375" target="_blank" rel="noopener noreferrer"><i
                        class="fab fa-github"></i></a>
                    <a href="https://www.instagram.com/krunal_dhapodkar_/" target="_blank"
                      rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-male2.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Saumitra Patil</h3>
                    <h4>Frontend Developer</h4>
                    <div>Python Beginner</div>
                    <div>Shell scripting</div>
                    <div>Linux friendly</div>
                  </div>
                  <div class="card-footer" style="
                      font-size: 1.2rem;
                      display: flex;
                      justify-content: center;
                    ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://www.linkedin.com/in/saumitra-patil-b2229b218" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/saumitrapatil" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/RohitMandal.jpg" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Rohit Mandal</h3>
                    <h4>Frontend Developer</h4>
                    <div>Python Beginner</div>
                    <div> Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                      font-size: 1.2rem;
                      display: flex;
                      justify-content: center;
                    ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://instagram.com/programmer__lifestyle?igshid=NTc4MTIwNjQ2YQ==" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                      <a href="https://www.linkedin.com/in/rohit-mandal-97535a259" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/Ro706" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-female2.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Devanshi Nagarkar</h3>
                    <h4>UI/UX Designer</h4>
                    <div>Creative Thinker</div>
                    <div>Python Beginner</div>
                    <div> Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                      font-size: 1.2rem;
                      display: flex;
                      justify-content: center;
                    ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://twitter.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/in/hasibul12" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-female.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Vithika Shrouty</h3>
                    <h4>UI/UX Designer</h4>
                    <div>Creative Thinker</div>
                    <div>Python Beginner</div>
                    <div> Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                      font-size: 1.2rem;
                      display: flex;
                      justify-content: center;
                    ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://twitter.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/in/hasibul12" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-male.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Shivam Verma</h3>
                    <h4>Creative Planner</h4>
                    <div>Creative Thinker</div>
                    <div> Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                      font-size: 1.2rem;
                      display: flex;
                      justify-content: center;
                    ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://instagram.com/shivamverma9808?igshid=ZDc4ODBmNjlmNQ" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                      <a href="http://www.linkedin.com/in/shivamverma9808" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-linkedin"></i></a>
                      <!--                  <a-->
                      <!--                          href="https://github.com/starhasibul"-->
                      <!--                          target="_blank"-->
                      <!--                          rel="noopener noreferrer"-->
                      <!--                  ><i class="fab fa-github"></i-->
                      <!--                  ></a>-->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/SaumyaDeshmukh.png" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Saumya Deshmukh</h3>
                    <h4>Programmer</h4>
                    <div>C/C++ Programmer</div>
                    <div>Python Beginner</div>
                    <div> Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                      font-size: 1.2rem;
                      display: flex;
                      justify-content: center;
                    ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://twitter.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/in/hasibul12" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/Pranitadadhe.png" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Pranita Dadhe</h3>
                    <h4>Editor</h4>
                    <div>Video Editing</div>
                    <div>Photo Editing</div>
                    <div>Python Beginner</div>
                    <div> Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                      font-size: 1.2rem;
                      display: flex;
                      justify-content: center;
                    ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://instagram.com/itz_pdz23?utm_source=qr&igshid=NGExMmI2YTkyZg%3D%3D"
                        target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                      <a href="https://www.linkedin.com/in/pranita-dadhe-85447b254" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/pranitadadhe23" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-male.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Kaushik Tamgade</h3>
                    <h4>Video Editor</h4>
                    <div>Video Editing</div>
                    <div> Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                      font-size: 1.2rem;
                      display: flex;
                      justify-content: center;
                    ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://twitter.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/in/hasibul12" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-male2.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Ankush Nagwekar</h3>
                    <h4>Photographer & Videographer</h4>
                    <div>Python Beginner</div>
                    <div> Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                      font-size: 1.2rem;
                      display: flex;
                      justify-content: center;
                    ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://twitter.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/in/hasibul12" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-male.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Paneri Fulbandhe</h3>
                    <h4>Photographer</h4>
                    <div>Photography</div>
                    <div>Photo Editing</div>
                    <div> Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                      font-size: 1.2rem;
                      display: flex;
                      justify-content: center;
                    ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://twitter.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/in/hasibul12" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-male.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Aryan Paratakke</h3>
                    <h4>Photographer</h4>
                    <div>Python Beginner</div>
                    <div> Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                      font-size: 1.2rem;
                      display: flex;
                      justify-content: center;
                    ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://twitter.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/in/hasibul12" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="https://github.com/Priyanshu-Khandelwal.png" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Priyanshu Khandelwal</h3>
                    <h4>Coder</h4>
                    <div>Python Beginner</div>
                    <div>C/C++ Programmer</div>
                    <div> Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                      font-size: 1.2rem;
                      display: flex;
                      justify-content: center;
                    ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://instagram.com/priyanshukhandelwal15" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-instagram"></i></a>
                      <a href="https://www.linkedin.com/in/priyanshu-khandelwal-32a6a1257" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/Priyanshu-Khandelwal" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="img/teams/avatar-female.avif" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Arya Kashikar</h3>
                    <h4>Coder</h4>
                    <div>Python Beginner</div>
                    <div> Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                      font-size: 1.2rem;
                      display: flex;
                      justify-content: center;
                    ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://twitter.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/in/hasibul12" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/starhasibul" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4" style="width: 100%">
                <div class="card overview-card text-center">
                  <img src="https://github.com/sharvit18.png" style="border-radius: 50%" width="100" height="100" alt="" />
                  <div class="card-body" style="font-size: 0.8rem; padding-bottom: 1.2rem">
                    <h3>Sharvit Kashikar</h3>
                    <h4>Coder</h4>
                    <div>Python Beginner</div>
                    <div> Conscientious learner</div>
                  </div>
                  <div class="card-footer" style="
                        font-size: 1.2rem;
                        display: flex;
                        justify-content: center;
                      ">
                    <div style="justify-content: space-around" class="social-links">
                      <a href="https://instagram.com/sharvit.kashikar?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-instagram"></i></a>
                      <a href="https://www.linkedin.com/in/sharvit-kashikar" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-linkedin"></i></a>
                      <a href="https://github.com/sharvit18" target="_blank" rel="noopener noreferrer"><i
                          class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    </div>
    </section>
  </main>
  <main id="faqs" hidden>
    <section id="faq" class="section-spacer section-faq">
      <div class="container">
        <header class="section-header text-center">
          <h2 class="section-title">Frequently Asked Questions</h2>
        </header>
        <div class="row" style="display: flex">
          <div class="col-6">
            <h3>Who can become a member?</h3>
            <p>
              The clubs is open to any student, ranging from novice developers
              who are just starting, to advanced developers who want to further
              their skills.
            </p>
          </div>
          <div class="col-6">
            <h3>How frequently do events and workshops occur?</h3>
            <p>
              We hold workshops and showcases at
              <strong>Symbiosis Institute Of Technology, Nagpur</strong>
              &amp; we would recommend you to join our community by becoming a
              member to get updates.
            </p>
          </div>
        </div>
        <div class="row" style="display: flex">
          <div class="col-6">
            <h3>What should I carry when attending a workshop?</h3>
            <p>
              We recommend you carry with you a notebook, pen and a laptop
              because more often than not we make our hands dirty with code.
              Most importantly, carry along a healthy dose of curiosity and
              enthusiasm.
            </p>
          </div>
          <div class="col-6">
            <h3>Who should I reach out to if I have any questions?</h3>
            <p>
              If you have any questions or comments, please don't hesitate to
              contact us by clicking the button below. We would be happy to stay
              engaged via email even after the event
            </p>
          </div>
        </div>
      </div>
      <br />
      <div class="mt-40 text-center">
        <a href="mailto:gdsc@sitnagpur.siu.edu.in" class="hero-button" style="border-radius: 1.4rem">Send us an
          email</a>
      </div>
    </section>
  </main>
  <main id="contact" hidden>
    <section id="contactForm" class="section-spacer bg-contact">
      <div class="background">
        <div class="container">
          <div class="screen">
            <div class="screen-header">
              <div class="screen-header-left">
                <div class="screen-header-button close"></div>
                <div class="screen-header-button maximize"></div>
                <div class="screen-header-button minimize"></div>
              </div>
              <div class="screen-header-right">
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
              </div>
            </div>
            <div class="screen-body">
              <div class="screen-body-item left">
                <div class="app-title">
                  <span>CONTACT</span>
                  <span>US</span>
                </div>
                <div class="app-contact">CONTACT INFO : gdsc@sitnagpur.siu.edu.in</div>
              </div>
              <div class="screen-body-item">
                <form action="index.php" method="post">
                  <div class="app-form">
                    <div class="app-form-group">
                      <input class="app-form-control" placeholder="NAME" value="" name="name">
                    </div>
                    <div class="app-form-group">
                      <input class="app-form-control" placeholder="EMAIL" name="email">
                    </div>
                    <div class="app-form-group">
                      <input class="app-form-control" placeholder="CONTACT NO" name="num">
                    </div>
                    <div class="app-form-group message">
                      <input class="app-form-control" placeholder="MESSAGE" name="message">
                    </div>
                    <div class="app-form-group buttons">
                      <button class="app-form-button" type="submit" name="contact">SEND</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </main>
<!--  <main id="register" hidden>-->
<!--    <div class="background">-->
<!--      <div class="container">-->
<!--        <div class="screen">-->
<!--          <div class="screen-header">-->
<!--            <div class="screen-header-left">-->
<!--              <div class="screen-header-button close"></div>-->
<!--              <div class="screen-header-button maximize"></div>-->
<!--              <div class="screen-header-button minimize"></div>-->
<!--            </div>-->
<!--            <div class="screen-header-right">-->
<!--              <div class="screen-header-ellipsis"></div>-->
<!--              <div class="screen-header-ellipsis"></div>-->
<!--              <div class="screen-header-ellipsis"></div>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="screen-body">-->
<!--            <div class="screen-body-item left">-->
<!--              <div class="app-title">-->
<!--                <span>EVENT</span>-->
<!--                <span>REGISTER</span>-->
<!--              </div>-->
<!--              <div class="app-contact">CONTACT INFO : gdsc@sitnagpur.siu.edu.in</div>-->
<!--            </div>-->
<!--            <div class="screen-body-item">-->
<!--              <form action="index.php" method="post">-->
<!--                <div class="app-form">-->
<!--                  <div class="app-form-group">-->
<!--                    <input class="app-form-control" placeholder="NAME" value="" name="name">-->
<!--                  </div>-->
<!--                  <div class="app-form-group">-->
<!--                    <input class="app-form-control" placeholder="EMAIL" name="email">-->
<!--                  </div>-->
<!--                  <div class="app-form-group">-->
<!--                    <input class="app-form-control" placeholder="CONTACT NO" name="num">-->
<!--                  </div>-->
<!--                  <div class="app-form-group">-->
<!--                    <input class="app-form-control" placeholder="PRN" name="prn">-->
<!--                  </div>-->
<!--                  <div class="app-form-group">-->
<!--                    <input class="app-form-control" placeholder="YEAR" name="year">-->
<!--                  </div>-->
<!--                  <div class="app-form-group">-->
<!--                    <input class="app-form-control" placeholder="SECTION" name="sec">-->
<!--                  </div>-->
<!--                  <div class="app-form-group">-->
<!--                    <input class="app-form-control" placeholder="EVENT CODE" name="event">-->
<!--                  </div>-->
<!--                  <div class="app-form-group buttons">-->
<!--                    <button class="app-form-button" type="submit" name="form">REGISTER</button>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </form>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </main>-->
  <footer id="footer" class="section-spacer" hidden>
    <div class="container">
      <div class="cols">
        <div class="col-4">
          <div class="footer-widget">
            <img class="logo-sm mb-10" alt="GDSC SITNGP logo"
              src="img/DSC_Chapter_Logos/DSC_Sit_Light_Vertical_Logo.png" />
            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              | All Rights Reserved.
            </p>
            <span>Feel free to drop us an email at </span>
            <a href="mailto:gdsc@sitnagpur.siu.edu.in">gdsc@sitnagpur.siu.edu.in</a>
            <ul class="social-list mt-10">
              <li>
                <a href="https://github.com/gdscsitngp/" target="_blank" rel="noopener"><i
                    class="fab fa-github"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/gdsc.sitngp/"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="https://www.youtube.com/@GDSCSIT-NGP"><i class="fab fa-youtube"></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/gdsc-sitngp/"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-8 col-sm-10">
          <div class="cols">
            <div class="col-4 col-sm-6">
              <div class="footer-widget">
                <h4 class="title">Programs</h4>
                <ul class="list-unstyled">
                  <li>
                    <a href="https://www.womentechmakers.com/" target="_blank">Women Techmakers</a>
                  </li>
                  <li>
                    <a href="https://developers.google.com/experts/" target="_blank">Google Developer Experts</a>
                  </li>
                  <li>
                    <a href="https://developers.google.com/programs/community/" target="_blank">Google Developer
                      Groups</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-4 col-sm-6">
              <div class="footer-widget">
                <h4 class="title">Developers</h4>
                <ul class="list-unstyled">
                  <li>
                    <a href="https://console.firebase.google.com/" target="_blank">Firebase console</a>
                  </li>
                  <li>
                    <a href="https://console.cloud.google.com/" target="_blank">Google Cloud Platform</a>
                  </li>
                  <li>
                    <a href="https://console.actions.google.com/" target="_blank">Actions on Google</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-4">
              <div class="footer-widget">
                <h4 class="title">Contribute</h4>
                <ul class="list-unstyled">
                  <li>
                    <a href="mailto:gdsc@sitnagpur.siu.edu.in" target="_blank">Found a bug</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="margin-top-md text-center flex flex-column flex-center">

        Made with <b style="color: red;">&#x2764;&#xfe0f;</b> by
        <a href="https://www.sagnik.engineer/" style="color: black;">GDSC SITNGP</a>
      </p>
    </div>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4957680970183461"
              crossorigin="anonymous"></script>
      <!-- gdssitngp -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-4957680970183461"
           data-ad-slot="5251386398"
           data-ad-format="auto"
           data-full-width-responsive="true"></ins>
      <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
  </footer>
  <a href="#" id="scroll" style="display: inline"><i class="fas fa-angle-up"></i></a>
  <script>
    function change(id) {
      if (id == "#home") {
        document.getElementById("header").hidden = false;
        document.getElementById("splash").hidden = true;
        document.getElementById("home").hidden = false;
        document.getElementById("footer").hidden = false;
        document.getElementById("register").hidden = true;
        document.getElementById("tech").hidden = true;
        document.getElementById("teamSec").hidden = true;
        document.getElementById("events").hidden = true;
        document.getElementById("faqs").hidden = true;
        document.getElementById("contact").hidden = true;
      } else if (id == "#tech") {
        document.getElementById("header").hidden = false;
        document.getElementById("splash").hidden = true;
        document.getElementById("tech").hidden = false;
        document.getElementById("footer").hidden = false;
        document.getElementById("home").hidden = true;
        document.getElementById("teamSec").hidden = true;
        document.getElementById("events").hidden = true;
        document.getElementById("register").hidden = true;
        document.getElementById("faqs").hidden = true;
        document.getElementById("contact").hidden = true;
      } else if (id == "#teamSec") {
        document.getElementById("header").hidden = false;
        document.getElementById("splash").hidden = true;
        document.getElementById("teamSec").hidden = false;
        document.getElementById("footer").hidden = false;
        document.getElementById("home").hidden = true;
        document.getElementById("tech").hidden = true;
        document.getElementById("events").hidden = true;
        document.getElementById("faqs").hidden = true;
        document.getElementById("register").hidden = true;
        document.getElementById("contact").hidden = true;
      } else if (id == "#events") {
        document.getElementById("header").hidden = false;
        document.getElementById("splash").hidden = true;
        document.getElementById("events").hidden = false;
        document.getElementById("footer").hidden = false;
        document.getElementById("home").hidden = true;
        document.getElementById("tech").hidden = true;
        document.getElementById("teamSec").hidden = true;
        document.getElementById("faqs").hidden = true;
        document.getElementById("register").hidden = true;
        document.getElementById("contact").hidden = true;
      } else if (id == "#contact") {
        document.getElementById("splash").hidden = true;
        document.getElementById("contact").hidden = false;
        document.getElementById("footer").hidden = false;
        document.getElementById("home").hidden = true;
        document.getElementById("tech").hidden = true;
        document.getElementById("teamSec").hidden = true;
        document.getElementById("events").hidden = true;
        document.getElementById("register").hidden = true;
        document.getElementById("faqs").hidden = true;
      } else if (id == "#faqs") {
        document.getElementById("header").hidden = false;
        document.getElementById("splash").hidden = true;
        document.getElementById("faqs").hidden = false;
        document.getElementById("footer").hidden = false;
        document.getElementById("home").hidden = true;
        document.getElementById("tech").hidden = true;
        document.getElementById("teamSec").hidden = true;
        document.getElementById("contact").hidden = true;
        document.getElementById("register").hidden = true;
        document.getElementById("events").hidden = true;
      } else if (id == "#register") {
        document.getElementById("splash").hidden = true;
        document.getElementById("header").hidden = false;
        document.getElementById("register").hidden = false;
        document.getElementById("footer").hidden = false;
        document.getElementById("faqs").hidden = true;
        document.getElementById("home").hidden = true;
        document.getElementById("tech").hidden = true;
        document.getElementById("teamSec").hidden = true;
        document.getElementById("contact").hidden = true;
        document.getElementById("events").hidden = true;
      } else {
        document.getElementById("header").hidden = true;
        document.getElementById("splash").hidden = false;
        document.getElementById("home").hidden = true;
        document.getElementById("tech").hidden = true;
        document.getElementById("teamSec").hidden = true;
        document.getElementById("events").hidden = true;
        document.getElementById("faqs").hidden = true;
        document.getElementById("contact").hidden = true;
        document.getElementById("register").hidden = true;
        document.getElementById("footer").hidden = true;
      }
    }


    function toggleMenu() {
      let menu = document.querySelector(".navbar-menu");
      // if (menu.classList.contains("is-active")) {
      //   menu.classList.remove("is-active");
      // } else {
      //   menu.classList.add("is-active");
      // }
      $(".navbar-menu").slideToggle();
    }

    $(document).ready(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          $("#scroll").fadeIn();
        } else {
          $("#scroll").fadeOut();
        }
      });
      $("#scroll").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
      });
    });
  </script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="/pwa.js"></script>
</body>

</html>