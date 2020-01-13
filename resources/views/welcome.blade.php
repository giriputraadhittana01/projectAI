<style type='text/css'>
.modal {
    display:    none;
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba( 255, 255, 255, .8 ) 
                url('https://flevix.com/wp-content/uploads/2019/07/Ring-Loading.gif') 
                50% 50% 
                no-repeat;
}

/* When the body has the loading class, we turn
   the scrollbar off with overflow:hidden */
body.loading .modal {
    overflow: hidden;   
}

/* Anytime the body has the loading class, our
   modal element will be visible */
body.loading .modal {
    display: block;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GOLDY PROJECT</title>

  <!-- Custom fonts for this theme -->
  
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="assets/css/freelancer.min.css" rel="stylesheet">
  <script src="assets/js/sweetalert2.min.js"></script>
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
  
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">GOLDY</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button> 
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a id='headerLogin'class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">LOGIN</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a id='headerRegister'class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">REGISTER</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a id='headerContact'class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <h2 class="page-section-heading text-center text-uppercase text-white">CHECK YOUR BODY</h2>&nbsp;&nbsp;
      <!-- Masthead Avatar Image -->
      <div class='card' style="margin:auto;width:350px;">
        <form class="text-center border border-light p-5" action="#!">
          <p class="h4 mb-4"></p>
          <input type="text" id="weight" class="form-control mb-4" placeholder="weight" style='width:45%;float:left;margin:2px;'>
          <input type="text" id="height" class="form-control mb-4" placeholder="height" style='width:45%;float:right;margin:2px;'>
          <div class='select-bound' style='margin-bottom:10px;'> 
            <select class="selectpicker" dropup="false" id='gender'>
              <option value=''>Gender</option>
              <option value='1'>Male</option>
              <option value='2'>Female</option>
            </select>
          </div>
          <div class='select-bound'>
            <select class="selectpicker" dropup="false" id='bodyType'>
              <option value=''>Body Type</option>
              <option value='1'>Small</option>
              <option value='2'>Medium</option>
              <option value='2'>Large</option>
            </select>
          </div>
          <button class="btn btn-info btn-block my-4" onclick="getBodyInformation()">CHECK</button>        
        </form>
      </div>
      
      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Get Your Food Suggestion Now!!!</p>

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">LOGIN</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">
        <div class='card' style="margin:auto;">
          <form class="text-center border border-light p-5" action="#!">
            <p class="h4 mb-4"></p>
            <input type="text" id="emailLogin" class="form-control mb-4" placeholder="E-mail">
            <input type="password" id="passwordLogin" class="form-control mb-4" placeholder="Password">
            <button class="btn btn-info btn-block my-4" type="submit" onclick='signIn()'>Sign In</button>
            <p>Not a member?
                <a class="js-scroll-trigger" href="#about">Register</a>
            </p>
        </form>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">REGISTER</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class='card' style="margin:auto;">
          <form class="text-center border border-light p-5" action="#!">
            <p class="h4 mb-4"></p>
            <input type="text" id="username" class="form-control mb-4" placeholder="Username">
            <input type="text" id="email" class="form-control mb-4" placeholder="E-mail">
            <input type="password" id="password" class="form-control mb-4" placeholder="Password">
            <div class='select-bound' style='margin-bottom:10px;'> 
              <select class="selectpicker" dropup="false" id='genderRegis'>
                <option value=''>Gender</option>
                <option value='1'>Male</option>
                <option value='2'>Female</option>
              </select>
            </div>
            <div class='select-bound' style='margin-bottom:10px;'>
              <select class="selectpicker" dropup="false" id='bodyTypeRegis'>
                <option value=''>Body Type</option>
                <option value='1'>Small</option>
                <option value='2'>Medium</option>
                <option value='2'>Large</option>
              </select>
            </div>
            <div class='select-bound' style='margin-bottom:10px;'> 
              <select class="selectpicker" dropup="false" id='ageRegis' data-dropup-auto="false" data-size="5">
                <option value="">Age</option>
              </select>
            </div>
            <button class="btn btn-info btn-block my-4" type="submit" onclick='signUp()'>Sign Up</button>        
        </form>
        </div>

    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Feedback</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          {{-- <form name="sentMessage" id="contactForm" novalidate="novalidate"> --}}
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="FbName" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" id="FbEmail" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" id="FbPhone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="FbMessage" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" onclick='sendEmail()'>Send</button>
            </div>
          {{-- </form> --}}
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">2215 John Daniel Drive
            <br>Clark, MO 65243</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">About Freelancer</h4>
          <p class="lead mb-0">Freelance is a free to use, MIT licensed Bootstrap theme created by
            <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Your Website 2019</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="assets/js/jqBootstrapValidation.js"></script>
  <script src="assets/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="assets/js/freelancer.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
  <script src="assets/js/jquery.mask.js"></script>
  <script src="assets/GlobalFunc/script.js"></script>

  <div class="modal">
</body>

</html>
<script type='text/javascript'>
$(document).ready(function(){
  $('#weight').mask('000');
  $('#height').mask('000');
  setAge();
});

function setAge()
{
  strAge="";
  for(var i=10;i<=80;i++)
  {
    strAge+="<option value="+i+">"+i+"</option>";
  }
  $('#ageRegis').html(strAge);
}
function getBodyInformation()
{
  if($('#weight').val()==''||$('#weight').val()<54||$('#weight').val()>86)
  {
    customError('Weight Invalid');
    return false;
  }
  if($('#height').val()==''||$('#height').val()<157||$('#height').val()>195)
  {
    customError('Height Invalid');
    return false;
  }
  if($('#gender').val()=='')
  {
    customError('Gender Invalid');
    return false;
  }
  if($('#bodyType').val()=='')
  {
    customError('Body Type Invalid');
    return false;
  }
  $.ajax({
		type  : "GET",
    url   : "{{route('getBodyInformation-01')}}",
    dataType: "json",
    data :{
      weight    : $('#weight').val(),
      height    : $('#height').val(),
      gender    : $('#gender').val(),
      body_type : $('#bodyType').val()
    },
    success : function(response){
      showBodyInformation(response);
    }       
	});
}

function showBodyInformation(datacall)
{ 
  if($('#weight').val()>=datacall[0].start_weight&&$('#weight').val()<=datacall[0].end_weight)
  {
    customModal('IDEAL','You Look Cool !!!','https://media.giphy.com/media/3j0XszWA7pQkmsjhgy/giphy.gif');
  }
  else if($('#weight').val()<datacall[0].start_weight)
  {
    customModal('THIN','Dont Forget To Eat !!!','http://irigoyendesign.com/images/portfolio/monsters-proj/Monster2-Dancing_v2.gif');
  }
  else
  {
    customModal('OVERWEIGHT','You Mush Have A Diet !!!','https://media0.giphy.com/media/5QTNv6tPC2QnYSU7c6/source.gif');
  }
}
function signUp()
{
  if($('#username').val()=="")
  {
    customError('Username Tidak Valid');
    return false;
  }
  if($("#email").val()=="")
  {
    customError('Email Tidak Valid');
    return false;
  }
  if($("#password").val()=="")
  {
    customError('Password Tidak Valid');
    return false;
  }
  if($("#genderRegis").val()=="") 
  {
    customError('Gender Tidak Valid');
    return false;
  }
  if($("#bodyTypeRegis").val()=="") 
  {
    customError('Body Type Tidak Valid');
    return false;
  }
  if($("#ageRegis").val()=="") 
  {
    customError('Umur Tidak Valid');
    return false;
  }
  $.ajax({
		type  : "GET",
    url   : "{{route('signUp-02')}}",
    dataType: "json",
    data :{
      username  : $('#username').val(),
      email     : $('#email').val(),
      password  : $('#password').val(),
      gender    : $('#genderRegis').val(),
      age       : $('#ageRegis').val(),
      body_type : $('#bodyTypeRegis').val()
    },
    success : function(response){
      if(response[0].disp_error==1)
      {
        customError(response[0].msg);
        return false;
      }
      customSuccess(response[0].msg);
      clearInput();
      $('#headerLogin').click();
    }       
	});
}
function clearInput()
{
  //CheckBodyInformation
  $('#weight').val('');
  $('#height').val('');
  $('#gender').val('');
  $('#bodyType').val('');
  //Login
  $('#emailLogin').val('');
  $('#passwordLogin').val('');
  //Register
  $('#username').val('');
  $('#email').val('');
  $('#password').val('');
  $('#genderRegis').val('').change();
  //Email
  $('#FbName').val('');
  $('#FbEmail').val('');
  $('#FbPhone').val('');
  $('#FbMessage').val('');
}
  
function signIn()
{
  $.ajax({
		type  : "GET",
    url   : "{{route('signIn-03')}}",
    dataType: "json",
    data :{
      email     : $('#emailLogin').val(),
      password  : $('#passwordLogin').val()
    },
    success : function(response){
      if(response[0].disp_error==1)
      {
        customError(response[0].msg);
        return false;
      }
      window.location.href="{{ route('login-04') }}?id="+response[0].msg;
    }       
	});
}
function sendEmail()
{ 
  $.ajax({
		type  : "GET",
    url   : "{{route('sendEmail-09')}}",
    dataType: "json",
    data :{
      name     : $('#FbName').val(),
      email    : $('#FbEmail').val(),
      phone    : $('#FbPhone').val(),
      message  : $('#FbMessage').val()
    },
    success : function(response){
      if(response[0]=='F')
      {
        customError(response);
        return false;
      }
      customSuccess(response);
      clearInput();
    }       
	});
}
</script>