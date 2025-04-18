
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learning Cast</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styless.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="imgs/favicon.png">
  </head>
  <body>
    <!-- Start Header -->
    <div class="header" id="header">
      <div class="container">
        <a href="#" class="logo">Learning Cast</a>
        <ul class="main-nav">
          <li><a href="#Courses">Podcact</a></li>
          <li><a href="#features">Features</a></li>
          <li>
            <a href="#">Categories</a>
            <!-- Start Megamenu -->
            <div class="mega-menu">
              <div class="image">
                <img src="imgs/megamenu.png" alt="" />
              </div>
                <ul class="links">
                <li>
                  <a href="test.php?section=1"><i class="fas fa-language"></i> English</a>
                </li>
                <li>
                  <a href="test.php?section=3"><i class="fas fa-language"></i> German</a>
                </li>
                <li>
                  <a href="test.php?section=2"><i class="fas fa-globe-europe"></i> French</a>
                </li>
                <li>
                  <a href="test.php?section=5"><i class="fas fa-laptop-code"></i> Ask Developer</a>
                </li>
                <li>
                  <a href="test.php?section=9"><i class="fas fa-briefcase"></i> Freelancer</a>
                </li>
              </ul>
              
              <ul class="links">
                <li>
                  <a href="test.php?section=6"><i class="fas fa-code"></i> Programming</a>
                </li>
                <li>
                  <a href="test.php?section=4"><i class="fas fa-robot"></i> AI Chitchat</a>
                </li>
                <li>
                  <a href="test.php?section=10"><i class="fas fa-paint-brush"></i> Design</a>
                </li>
                <li>
                  <a href="test.php?section=7"><i class="fas fa-user-graduate"></i> Self Development</a>
                </li>
                <li>
                  <a href="test.php?section=8"><i class="fas fa-road"></i> The Way to Success</a>
                </li>
              </ul>
              <li class="menu1-item1">
                <a href="#">Get Started with Us</a>
                <!-- Start Megamenu -->
                <div class="megamenu1">
                  <div class="megamenu-content">
                    <div class="image">
                      <img src="imgs/megamenu1.png" alt="Megamenu Image" />
                    </div>
                    <ul class="links">
                      <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                      <li><a href="../New/signup.php"><i class="fas fa-user-plus"></i> Register</a></li>
                    </ul>
                  </div>
                </div>
                <!-- End Megamenu -->
              </li>
        </ul>
      </div>
    </div>
    <!-- End Header -->
    <!-- Start Landing -->
    <div class="landing">
      <div class="container">
        <div class="text">
          <h1>Welcome, To Learning cast</h1>
          <p>
            Your ultimate learning platform where education becomes easier and more engaging. We provide diverse educational content, enhanced with interactive podcasts, allowing you to gain knowledge anytime, anywhere.
            Join us and start your learning journey in a new, flexible way!
            </p>
        </div>
        <div class="image">
          <img src="imgs/landing-image.png" alt="" />
        </div>
      </div>
      <a href="#Courses" class="go-down">
        <i class="fas fa-angle-double-down fa-2x"></i>
      </a>
    </div>







    <!-- Start Courses -->
    <div class="Courses" id="Courses">
  <h2 class="main-title">Choose Podcast</h2>
  <div class="container">
      <div class="box">
          <img src="imgs/English.jpg" alt="English Course">
          <div class="content">
            <h3>English</h3>
              <p>This course enhances your English skills in speaking, reading, and writing</p>
          </div>
          <div class="info">
            <a href="test.php?section=1">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
      </div>
      <div class="box">
          <img src="imgs/French.jpg" alt="French Course">
          <div class="content">
            <h3>French</h3>
            <p>Master French communication through structured lessons and practical usage</p>
          </div>
          <div class="info">
              <a href="test.php?section=2">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
          </div>
      </div>
      <div class="box">
          <img src="imgs/German.jpg" alt="German Course">
          <div class="content">
              <h3>German</h3>
              <p>Learn German fluently with lessons on grammar, vocabulary, and daily usage</p>
          </div>
          <div class="info">
              <a href="test.php?section=3">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
      </div>
      <div class="box">
          <img src="imgs/Ai Chitchat.jpg" alt="AI Chitchat Course">
          <div class="content">
            <h3>AI Chitchat</h3>
            <p>Explore AI conversations, chatbots, and automation in this unique course</p>
          </div>
          <div class="info">
            <a href="test.php?section=4">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
          </div>
      </div>
      <div class="box">
          <img src="imgs/Ask Developer.jpg" alt="Ask Developer Course">
          <div class="content">
            <h3>Ask Developer</h3>
              <p>Gain insights from developers on coding, problem-solving, and debugging</p>
            </div>
          <div class="info">
              <a href="test.php?section=5">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
      <div class="box">
          <img src="imgs/Programming.jpg" alt="Programming Course">
          <div class="content">
            <h3>Programming</h3>
              <p>Develop coding skills with hands-on projects in various programming languages</p>
          </div>
          <div class="info">
              <a href="test.php?section=6">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
      <div class="box">
        <img src="imgs/self development.jpg" alt="Self Development Course">
          <div class="content">
            <h3>Self Development</h3>
              <p>Enhance personal growth, productivity, and mindset for successful living</p>
          </div>
          <div class="info">
              <a href="test.php?section=7">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
      </div>
      <div class="box">
          <img src="imgs/The way to success.jpg" alt="The Way to Success Course">
          <div class="content">
              <h3>The Way to Success</h3>
              <p>Discover strategies and habits to achieve goals and long-term success</p>
            </div>
            <div class="info">
              <a href="test.php?section=8">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
      </div>
      <div class="box">
        <img src="imgs/freelancer.jpg" alt="Freelancer Course">
          <div class="content">
              <h3>Freelancer</h3>
              <p> Learn freelancing basics, portfolio building,    and    client attraction</p>
            </div>
          <div class="info">
              <a href="test.php?section=9">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
          </div>
      </div>
      <div class="box">
          <img src="imgs/Designer.jpg" alt="Designer Course">
          <div class="content">
              <h3>Designer</h3>
              <p>The Learn graphic principles, UI/UX design, and digital creativity tools</p>
          </div>
          <div class="info">
              <a href="test.php?section=10">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
      </div>
  </div>
</div>
<!-- End Courses -->
<!-- Start Features -->
<div class="features" id="features">
  <h2 class="main-title">Features</h2>
  <div class="container">
    <div class="box interactive">
      <div class="img-holder"><img src="imgs/features-01.jpg" alt="Interactive Learning" /></div>
      <h2>Interactive Learning</h2>
      <p>Engage with dynamic content, hands-on exercises, and interactive lessons for an effective learning experience.</p>
    </div>
    <div class="box flexibility">
      <div class="img-holder"><img src="imgs/features-02.jpg" alt="Flexible Learning" /></div>
      <h2>Flexible Learning</h2>
      <p>Learn at your own pace, anytime and anywhere, with structured courses that fit your schedule.</p>
    </div>
    <div class="box expert">
      <div class="img-holder"><img src="imgs/features-03.jpg" alt="Expert-Led Courses" /></div>
      <h2>Expert-Led Courses</h2>
      <p>Gain insights from industry professionals and educators who bring real-world experience to your learning journey.</p>
    </div>
    <div class="box time-management">
      <div class="img-holder"><img src="imgs/features-04.jpg" alt="Time Management" /></div>
      <h2>Time Management</h2>
      <p>Enhance your productivity with effective time management strategies and smart scheduling techniques.</p>
    </div>
    <div class="box self-development">
      <div class="img-holder"><img src="imgs/features-05.jpg" alt="Self Development" /></div>
      <h2>Self Development</h2>
      <p>Unlock your full potential with courses on personal growth, motivation, and success strategies.</p>
    </div>
  </div>
</div>
<!-- End Features -->
<!-- Start Team -->
<div class="creators" id="creators">
  <h2 class="main-title">Content Creators</h2>
  <div class="container">
        <div class="box">
          <div class="data">
            <!--Ibrahim ElFiky start-->
            <img src="imgs/team-01.jpg" alt="" />
            <div class="social">
              <a href="https://www.facebook.com/grandson.ibrahim.elfiky">
                <i class="fab fa-facebook-f"></i>
              </a>
              
              <a href="https://www.youtube.com/@Dr.Ibrahim_Al-Fiqi">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
          <div class="info">
            <h3>Dr Ibrahim ElFiky</h3>
            <p>Human development and NLP expert, Chairman of the Canadian Training Center.</p>
          </div>
        </div>
<!--Ibrahim ElFiky end-->
<!--osama elzero start-->
        <div class="box">
          <div class="data">
            <img src="../New/imgs/osama elzero.jpeg" alt="" />
            <div class="social">
              <a href="https://www.facebook.com/OsElzero/">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="linkedin.com/in/osamaelzero">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://www.youtube.com/@ElzeroWebSchool">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
          <div class="info">
            <h3>osama elzero</h3>
            <p>Simple Short Description</p>
          </div>
        </div>
        <!--osama elzero end-->
        <!--yahia tech start-->
        <div class="box">
          <div class="data">
            <img src="../New/imgs/yahia.jpg" alt="" />
            <div class="social">
              <a href="https://www.facebook.com/yehia.tech/?locale=ar_AR">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.linkedin.com/in/yahyaelarabi/">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://www.youtube.com/@yehiatech">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
          <div class="info">
            <h3>yehia.tech</h3>
            <p>Simple Short Description</p>
          </div>
        </div>
        <!--yahia tech end-->
        <!--english start-->
        <div class="box">
          <div class="data">
            <img src="../New/imgs/michael english.jpeg" alt="" />
            <div class="social">
              <a href="https://www.facebook.com/michael.k.lavers/">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.linkedin.com/in/mklavers/">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://youtube.com/@levelupenglishpodcast?si=45i2qoS7ntV606rP">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
          <div class="info">
            <h3>Michael Lavers</h3>
            <p>Michael Lavers is the author of After Earth His poems have appeared in The Best New Poets, </p>
          </div>
        </div>
         <!--english end-->
         <!--franch start-->
        <div class="box">
          <div class="data">
            <img src="../New/imgs/french contet.jpeg" alt="" />
            <div class="social">
              <a href="https://www.facebook.com/people/Fran%C3%A7ais-facile-avec-yasmine/61552591604939/?_rdr">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.linkedin.com/in/yasmine-lesire-ilearnfrench/">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://www.youtube.com/@lefrancaisavecyasmine">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
          <div class="info">
            <h3>Yasmine Lesire</h3>
            <p>Rebel 🇫🇷 teache Podcast Host & Author “le français avec Yasmine”</p>
          </div>
        </div>
           <!--franch end-->
           <!--german start-->
        <div class="box">
          <div class="data">
            <img src="../New/imgs/german contet.png" alt="" />
            <div class="social">
              <a href="https://www.facebook.com/definitelygerman">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.linkedin.com/in/david-durden-0b6a9725/">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://www.youtube.com/channel/UCnZ0C4deOyB_TUFSJK3L4lg/join">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
           <div class="info">
             <h3>Dave Durden</h3>
             <p>Simple Short Description</p>
            </div>
          </div>
          <!--german end-->
        </div>
        </div>
          
      </div>
    </div>
    <div class="spikes"></div>
    <!-- End Team -->
 <!-- Start Services -->
 <div class="services" id="services">
  <h2 class="main-title">Services</h2>
  <div class="container">
    <div class="box">
      <i class="fas fa-language fa-4x"></i>
      <h3>Language Learning</h3>
      <p>Master English, German, and French with expert-led courses.</p>
      <div class="info">
      </div>
    </div>
    <div class="box">
      <i class="fas fa-user-clock fa-4x"></i>
      <h3>Personal Development</h3>
      <p>Improve time management, success strategies, and self-growth skills.</p>
      <div class="info">
        </div>
    </div>
    <div class="box">
      <i class="fas fa-laptop-code fa-4x"></i>
      <h3>Programming & AI</h3>
      <p>Learn coding, web development, and artificial intelligence.</p>
      <div class="info">
      </div>
    </div>
    <div class="box">
      <i class="fas fa-paint-brush fa-4x"></i>
      <h3>Design & Creativity</h3>
      <p>Enhance your skills in graphic design and creative arts.</p>
      <div class="info">
      </div>
    </div>
    <div class="box">
      <i class="fas fa-podcast fa-4x"></i>
      <h3>Educational Podcasts</h3>
      <p>Engage with insightful discussions on various educational topics.</p>
      <div class="info">
      </div>
    </div>
    <div class="box">
      <i class="fas fa-users fa-4x"></i>
      <h3>Community & Content Creation</h3>
      <p>Connect with learners and educators to share knowledge and create content.</p>
      <div class="info">
      </div>
    </div>
  </div>
</div>

<!-- Start Benefits Section -->
<div class="work-steps" id="benefits">
  <h2 class="main-title">What Will You Gain?</h2>
  <div class="container">
    <img src="imgs/podcast-benefits.png" alt="Podcast Benefits" class="image" />
    <div class="info">
      <div class="box">
        <img src="imgs/benefit-1.png" alt="Learn Anytime" />
        <div class="text">
          <h3>Learn Anytime, Anywhere</h3>
          <p>
            With our audio courses, you can learn on the go—whether you're commuting, exercising, or relaxing at home.
          </p>
        </div>
      </div>
      <div class="box">
        <img src="imgs/benefit-2.png" alt="Save Time" />
        <div class="text">
          <h3>Save Time & Boost Productivity</h3>
          <p>
            No need to sit in front of a screen! Maximize your time by learning while doing other tasks.
          </p>
        </div>
      </div>
      <div class="box">
        <img src="imgs/benefit-3.png" alt="Enhance Understanding" />
        <div class="text">
          <h3>Enhance Your Understanding</h3>
          <p>
            Audio learning helps you focus, absorb information better, and improve retention compared to traditional reading.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Benefits Section -->
<!-- End Services -->










<!-- Start Footer -->
<div class="footer">
  <div class="container">
    <!--one-->
    <div class="box">
      <h3>Learning Cast</h3>
      <ul class="social">
        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
      </ul>
      <p class="text">
        "We are here to help you learn and create. Join us and start your educational journey today!"
      </p>
    </div>

    <!--two-->
    <div class="box">
      <ul class="links">
        <li><a href="#services">Services</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#creators">Content Creators</a></li>
        <li><a href="#Courses">Courses</a></li>
      </ul>
    </div>

    <!--three-->
    <div class="box">
      <div class="line">
        <i class="fas fa-map-marker-alt"></i>
        <div class="info">Egypt, Giza, Inside The Sphinx, Room Number 220</div>
      </div>
      <div class="line">
        <i class="far fa-clock"></i>
        <div class="info">Business Hours: From 10:00 To 18:00</div>
      </div>
      <div class="line">
        <i class="fas fa-phone-volume"></i>
        <div class="info">
          <span>+20123456789</span>
          <span>+20198765432</span>
        </div>
      </div>
    </div>
  </div>
  <p class="copyright">
    &copy; <span id="year"></span> Learning Cast - All Rights Reserved
  </p>
  <!--refrech year otomatic-->
  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
</div>
<!-- End Footer -->

<!--search-->
<div class="search-wrapper">
  <button class="search-btn" onclick="toggleSearch()">
      <i class="fas fa-search"></i>
  </button>
  <div class="search-container" id="search-box">
      <input type="text" id="search-input" placeholder=" search now..." onkeyup="performSearch()" />
      <div id="search-results"></div>
  </div>
</div>    
    <script src="js/main.js"></script>
  </body>
</html>
