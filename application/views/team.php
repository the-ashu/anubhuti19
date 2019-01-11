<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Our Team</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/team/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/team/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/team/css/resume.css" rel="stylesheet">

    <style>
    body {
      background-image:linear-gradient(to right, white, grey);
    }

    nav1 {
      --duration: .5s;
      --easing: ease-in-out;
      position: relative;
      width: 220px;
      margin: 20px;
      position: fixed;
      right:0;
      z-index:999;
    }
    nav1 ol {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    nav1 li {
      margin: -4px 0 0 0;
    }
    nav1 a {
      display: block;
      text-decoration: none;
      background: #fff;
      transform-origin: 0 0;
      transition: transform var(--duration) var(--easing), color var(--duration) var(--easing);
      transition-delay: var(--delay-out);
      border-radius: 4px;
      padding: 1em 1.52em;
    }
    nav1 a:hover {
      background: #efefef;
    }
    nav1 .sub-menu a {
      font-size: .9em;
      color: #666666;
      border-left: 2em solid white;
      padding: .75em;
      background: linear-gradient(to right, #dddddd 2px, #ffffff 2px);
    }
    nav1 .sub-menu a:hover {
      background: linear-gradient(to right, #dddddd 2px, #efefef 2px);
    }
    nav1 header {
      font-weight: 600;
      display: block;
      background: rgba(255, 255, 255, 0.5);
      transform-origin: 0 0;
      transition: transform var(--duration) var(--easing), color var(--duration) var(--easing);
      transition-delay: var(--delay-out);
      border-radius: 4px;
      padding: 1em 1.52em;
    }
    nav1 header span {
      border: none;
      background: transparent;
      font-size: 1.5em;
      padding: 0;
      cursor: pointer;
      line-height: 1;
      float: right;
    }
    nav1 footer button {
      position: absolute;
      top: 0;
      left: 0;
      border: none;
      padding: calc(1em - 2px);
      width: 100%;
      transform-origin: 0 0;
      transition: transform var(--duration) var(--easing);
      transition-delay: calc(var(--duration) + (.1s * (var(--count) / 2)));
      cursor: pointer;
      outline: none;
      background: #cdcdcd;
      opacity: 0;
    }
    nav1.closed a,
    nav1.closed header {
      transform: translateY(calc(var(--top) * -1)) scaleY(0.1) scaleX(0.2);
      transition-delay: var(--delay-in);
      color: transparent;
    }
    nav1.closed footer button {
      transition-delay: 0s;
      transform: scaleY(0.7) scaleX(0.2);
    }

    </style>

  </head>

  <body id="page-top">

  <div>
      <nav1 class="menu">
          <header>Menu <span>×</span></header>
          <ol>
              <li class="menu-item"><a href="<?php echo base_url();?>">Home</a></li>
              <li class="menu-item"><a href="<?php echo base_url();?>welcome/events">Events</a></li>
              <li class="menu-item">
                  <a href="<?php echo base_url();?>welcome/prevent">Past Events</a>
              </li>
              <li class="menu-item">
                  <a href="<?php echo base_url();?>welcome/brochure">Brochure</a>
              </li>
              <li class="menu-item"><a href="<?php echo base_url();?>welcome/team">Team</a></li>
              <footer><button aria-label="Toggle Menu">Toggle</button></footer>
      </nav1>
  </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#events">Our Inspiration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#web">Our Mentors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#app">Events And Competition head</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#designing">Designing & Publicity Head</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#media">Hospitality And Public Relations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#public">Development Team</a>
          </li>

        </ul>
      </div>
    </nav>
      <section class="resume-section p-3 p-lg-5 d-flex d-column team t-m" id="events">
          <div class="container">

              <h1 style="text-align: center;margin-bottom: 20px">Our Inspiration</h1>
              <div class="row" >
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                      <div class="our-team ">
                          <img src="<?php echo base_url();?>assets/team/JP_Pandey.jpg" alt="">
                          <div class="team-content">
                              <h3 class="title">Prof. JP Pandey</h3>
                              <span class="post">Director</span>
                              <ul class="social row">
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4"></div>
              </div>
              <div class="row" style="margin-bottom: 10px">
                  <div class="col-md-1"></div>
                  <div class="col-md-4 ">
                      <div class="our-team">
                          <img src="<?php echo base_url();?>assets/team/LUB_Pandey.jpg" alt="">
                          <div class="team-content">
                              <h3 class="title">Prof.LUB Pandey</h3>
                              <span class="post">Chairman</span>
                              <ul class="social">
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-4 ">
                      <div class="our-team">
                          <img src="<?php echo base_url();?>assets/team/Aruni.JPG" alt="">
                          <div class="team-content">
                              <h3 class="title">Dr. Aruni Singh</h3>
                              <span class="post">Conveynor</span>
                              <ul class="social">
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </section>

      <hr class="m-0" id="web">

      <section class="resume-section p-3 p-lg-5 d-flex d-column team" id="about" >
          <div class="container">
              <h1 style="text-align: center;margin-bottom: 50px">Our Mentors</h1>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-3 ">
                      <div class="our-team">
                          <img src="<?php echo base_url();?>assets/team/ap1.jpg" alt="">
                          <div class="team-content">
                              <h6 class="title">Nikhil</h6>
                              <span class="post">Web Developer</span>
                              <span class="contact">+91-9450696003</span>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-3 ">
                      <div class="our-team">
                          <img src="<?php echo base_url();?>assets/team/toshendra.jpeg" alt="">
                          <div class="team-content">
                              <h3 class="title">Toshendra</h3>
                              <span class="post">Web Designer</span>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-3">
                      <div class="our-team">
                          <img src="<?php echo base_url();?>assets/team/gargi.jpeg" alt="">
                          <div class="team-content">
                              <h3 class="title">Gargi</h3>
                              <span class="post">Web Designer</span>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <br><br>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-3 ">
                      <div class="our-team">
                          <img src="<?php echo base_url();?>assets/team/shivesh.jpeg" alt="">
                          <div class="team-content">
                              <h3 class="title">Shivesh</h3>
                              <span class="post">Web Developer</span>
                              <span class="post">9450696003</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-3 ">
                      <div class="our-team">
                          <img src="<?php echo base_url();?>assets/team/anuradha.jpeg" alt="">
                          <div class="team-content">
                              <h3 class="title">Anuradha</h3>
                              <span class="post">Web Designer</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-3">
                      <div class="our-team">
                          <img src="<?php echo base_url();?>assets/team/shubham.jpeg" alt="">
                          <div class="team-content">
                              <h3 class="title">Shubham</h3>
                              <span class="post">Web Designer</span>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
  </section>

  <hr class="m-0" id="app">

  <section class="resume-section p-3 p-lg-5 d-flex d-column team" id="about">
      <div class="container">
          <h1 style="text-align: center;margin-bottom: 50px">Events & Competition Head</h1>
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3 ">
                  <div class="our-team">
                      <img src="<?php echo base_url();?>assets/team/amit.jpg" alt="">
                      <div class="team-content">
                          <h6 class="title">Shaurya</h6>
                          <span class="post">Cultural Events</span>
                          <ul class="social row">
                              <li><a class="fab fa-facebook" href="#"></a></li>
                              <li><a class="fab fa-twitter" href="#"></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 ">
                  <div class="our-team">
                      <img src="<?php echo base_url();?>assets/team/prashant.jpg" alt="">
                      <div class="team-content">
                          <h3 class="title">Mohsin</h3>
                          <span class="post">Literary Events</span>
                          <ul class="social">
                              <li><a class="fab fa-facebook" href="#"></a></li>
                              <li><a class="fab fa-twitter" href="#"></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3">
                  <div class="our-team">
                      <img src="<?php echo base_url();?>assets/team/harvendra.jpg" alt="">
                      <div class="team-content">
                          <h3 class="title">Harvendra</h3>
                          <span class="post">PFAC Events</span>
                          <ul class="social">
                              <li><a class="fab fa-facebook" href="#"></a></li>
                              <li><a class="fab fa-twitter" href="#"></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <br><br>
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3 ">
                  <div class="our-team">
                      <img src="<?php echo base_url();?>assets/team/nimisha.jpg" alt="">
                      <div class="team-content">
                          <h3 class="title">Nimisha</h3>
                          <span class="post">Cultural Events</span>
                          <ul class="social">
                              <li><a class="fab fa-facebook" href="#"></a></li>
                              <li><a class="fab fa-twitter" href="#"></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 ">
                  <div class="our-team">
                      <img src="<?php echo base_url();?>assets/team/anshi.jpg" alt="">
                      <div class="team-content">
                          <h3 class="title">Anshi</h3>
                          <span class="post">Literary Events</span>
                          <ul class="social">
                              <li><a class="fab fa-facebook" href="#"></a></li>
                              <li><a class="fab fa-twitter" href="#"></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3">
                  <div class="our-team">
                      <img src="<?php echo base_url();?>assets/team/isha.jpg" alt="">
                      <div class="team-content">
                          <h3 class="title">Isha</h3>
                          <span class="post">PFAC Events</span>
                          <ul class="social">
                              <li><a class="fab fa-facebook" href="#"></a></li>
                              <li><a class="fab fa-twitter" href="#"></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>

      </div>
</section>

<hr class="m-0" id="designing">

<section class="resume-section p-3 p-lg-5 d-flex d-column team" id="about" >
    <div class="container">
        <h1 style="text-align: center;margin-bottom: 20px">Designing and Publicity Head</h1>
        <div class="row" >
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <div class="our-team ">
                    <img src="<?php echo base_url();?>assets/team/anurag.jpg" alt="">
                    <div class="team-content">
                        <h3 class="title">Anurag</h3>
                        <span class="post">Media & Publicity</span>
                        <ul class="social">
                            <li><a class="fab fa-facebook" href="#"></a></li>
                            <li><a class="fab fa-twitter" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <br><br>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-1"></div>
            <div class="col-md-3 ">
                <div class="our-team">
                    <img src="<?php echo base_url();?>assets/team/ashwani.jpg" alt="">
                    <div class="team-content">
                        <h3 class="title">Ashwani</h3>
                        <span class="post">Designing & Photography</span>
                        <ul class="social">
                            <li><a class="fab fa-facebook" href="#"></a></li>
                            <li><a class="fab fa-twitter" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-sm-1"></div>
            <div class="col-md-3 ">
                <div class="our-team">
                    <img src="<?php echo base_url();?>assets/team/shreya.jpg" alt="">
                    <div class="team-content">
                        <h3 class="title">Shreya</h3>
                        <span class="post">Designing & Photography</span>
                        <ul class="social">
                            <li><a class="fab fa-facebook" href="#"></a></li>
                            <li><a class="fab fa-twitter" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<hr class="m-0" id="media">

<section class="resume-section p-3 p-lg-5 d-flex d-column team" id="about" >
    <div class="container">
        <h1 style="text-align: center;margin-bottom: 50px">Hospitality & Public Relations</h1>
        <div class="row">
            <div class="col-md-3 ">
                <div class="our-team">
                    <img src="<?php echo base_url();?>assets/team/vivek.jpg" alt="">
                    <div class="team-content">
                        <h6 class="title">Vivek</h6>
                        <span class="post">Hospitality</span>
                        <ul class="social row">
                            <li><a class="fab fa-facebook" href="#"></a></li>
                            <li><a class="fab fa-twitter" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3 ">
                <div class="our-team">
                    <img src="<?php echo base_url();?>assets/team/shiva.jpg" alt="">
                    <div class="team-content">
                        <h3 class="title">Shiva</h3>
                        <span class="post">Hospitality</span>
                        <ul class="social">
                            <li><a class="fab fa-facebook" href="#"></a></li>
                            <li><a class="fab fa-twitter" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div></div>
            <div class="row">
                <div class="col-md-3"></div>
            <div class="col-md-3">
                <div class="our-team">
                    <img src="<?php echo base_url();?>assets/team/vartika.jpg" alt="">
                    <div class="team-content">
                        <h3 class="title">Vartika</h3>
                        <span class="post">Media & Public Relations</span>
                        <ul class="social">
                            <li><a class="fab fa-facebook" href="#"></a></li>
                            <li><a class="fab fa-twitter" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3 ">
                <div class="our-team">
                    <img src="<?php echo base_url();?>assets/team/shivali.jpg" alt="">
                    <div class="team-content">
                        <h3 class="title">Shivali</h3>
                        <span class="post">Media & Public Relations</span>
                        <ul class="social">
                            <li><a class="fab fa-facebook" href="#"></a></li>
                            <li><a class="fab fa-twitter" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

    </div>
    </div>

</section>

<hr class="m-0" id="public">

<section class="resume-section p-3 p-lg-5 d-flex d-column team" id="about" >
    <div class="container">
        <h1 style="text-align: center;margin-bottom: 50px">Development Team</h1>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 ">
                <div class="our-team">
                    <img src="<?php echo base_url();?>assets/team/sajag.jpg" alt="">
                    <div class="team-content">
                        <h6 class="title">Sajag</h6>
                        <span class="post">Web Development</span>
                        <ul class="social row">
                            <li><a class="fab fa-facebook" href="#"></a></li>
                            <li><a class="fab fa-twitter" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3 ">
                <div class="our-team">
                    <img src="<?php echo base_url();?>assets/team/Ashutosh.jpg" alt="">
                    <div class="team-content">
                        <h3 class="title">Ashutosh</h3>
                        <span class="post">Web Development</span>
                        <ul class="social">
                            <li><a class="fab fa-facebook" href="#"></a></li>
                            <li><a class="fab fa-twitter" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <div class="our-team">
                    <img src="<?php echo base_url();?>assets/team/siddiqui.JPG" alt="">
                    <div class="team-content">
                        <h3 class="title">Mashhood Siddiqui</h3>
                        <span class="post">Web Development</span>
                        <ul class="social">
                            <li><a class="fab fa-facebook" href="#"></a></li>
                            <li><a class="fab fa-twitter" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-1"></div>
            <div class="col-md-3 ">
                <div class="our-team">
                    <img src="<?php echo base_url();?>assets/team/atharva.jpg" alt="">
                    <div class="team-content">
                        <h3 class="title">Atharva</h3>
                        <span class="post">App Development</span>
                        <ul class="social">
                            <li><a class="fab fa-facebook" href="#"></a></li>
                            <li><a class="fab fa-twitter" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-sm-1"></div>
            <div class="col-md-3 ">
                <div class="our-team">
                    <img src="<?php echo base_url();?>assets/team/puneet.JPG" alt="">
                    <div class="team-content">
                        <h3 class="title">Puneet</h3>
                        <span class="post">App Development</span>
                        <ul class="social">
                            <li><a class="fab fa-facebook" href="#"></a></li>
                            <li><a class="fab fa-twitter" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>

</section>

<hr class="m-0" id="hospitality">


<section class="resume-section p-3 p-lg-5 d-flex d-column team" id="about" >

</section>


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/team/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/team/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/team/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>assets/team/js/resume.min.js"></script>
    <script src="<?php echo base_url();?>assets/team/js/jquery.hover3d.min.js"></script>
    <script>
        $(".hover3d").hover3d({
            selector: ".hover3d-child",
            invert: true
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>

       var $els = $('.menu a, .menu header');
    var count = $els.length;
    var grouplength = Math.ceil(count/3);
    var groupNumber = 0;
    var i = 1;
    $('.menu').css('--count',count+'');
    $els.each(function(j){
        if ( i > grouplength ) {
            groupNumber++;
            i=1;
        }
        $(this).attr('data-group',groupNumber);
        i++;
    });

    $('.menu footer button').on('click',function(e){
        e.preventDefault();
        $els.each(function(j){
            $(this).css('--top',$(this)[0].getBoundingClientRect().top + ($(this).attr('data-group') * -15) - 20);
            $(this).css('--delay-in',j*.1+'s');
            $(this).css('--delay-out',(count-j)*.1+'s');
        });
        $('.menu').toggleClass('closed');
        e.stopPropagation();
    });

    // run animation once at beginning for demo
    setTimeout(function(){
        $('.menu footer button').click();
        setTimeout(function(){
            $('.menu footer button').click();
        }, (count * 100) + 500 );
    }, 1000);


    </script>

  </body>

</html>
