<?php ;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mr. and Mrs.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600|Montserrat:500,600,700&display=swap" rel="stylesheet">
    <style media="screen">
      .hero{
        padding-bottom: 80px;
        min-height: 100vh;
        background-size: 100% auto;
        background-image: url('assets/img/hero-bg.jpg');
      }
      .request-form input[type="submit"]{
        background-color: #61a6d5;
        border-radius: 24px;
        color: #fff;
      }
      a.navbar-brand{
        margin: 35px 36px;
        font-family: 'Josefin Sans', sans-serif !important;
        font-weight: 600;
        font-size: 31px;
        line-height: 36px;
        color: #61A6D5 !important;
      }
      .navbar a{
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
      }
      a.signup-btn{
        background-color: #fff;
        border-radius: 29px;
        padding-right: 25px !important;
        padding-left: 25px !important;
        font-weight: 400;
        color: #000 !important;
        box-shadow: none;
      }
      .tagline{
        margin: 226px 0 89px;
        padding-left: 36px;
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 31px;
      }
      .tagline h1{
        font-family: 'Josefin Sans', sans-serif;
        font-size: 54px;
      }
      .request-form{
        margin-left: 36px;
        justify-content: space-between;
        font-family: 'Josefin Sans', sans-serif;
        background: #fff;
        box-shadow: 1px 3px 5px 0px rgba(0,0,0,0.49);
        -webkit-box-shadow: 1px 3px 5px 0px rgba(0,0,0,0.49);
        -moz-box-shadow: 1px 3px 5px 0px rgba(0,0,0,0.49);
        padding: 10px 27.5px;
        border: 2px solid #2C88C7;
        box-sizing: border-box;
        box-shadow: 0px 15px 15px rgba(0, 0, 0, 0.5);
        border-radius: 24px;
      }
      .request-form .input-div:not(:last-child){
        padding-top: 12.5px;
        padding-bottom: 12.5px;
        padding-right: 17px;
        margin-right: 17px;
        border-right: 1px solid #c4c4c4;
      }
      .input-div input{
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        line-height: 19px;
        outline: none;
        font-size: 12px;
        width: 200px;
      }
      .highlight{
        padding-top: 58px;
        padding-bottom: 175px;
        background: #fff;
      }
      .highlight .heading{
        max-width: 687px;
        color: #000;
        font-family: 'Montserrat', sans-serif;
      }
      .highlight .heading h3{
        font-weight: 600;
        font-size: 31px;
        line-height: 44px;
      }
      .highlight .heading p{
        margin-bottom: 70px;
        font-size: 11px;
        line-height: 24px;
      }
      .highlight-item img{
        margin-bottom: 40px;
        width: 235px;
        height: 235px;
        border-radius: 100%;
        box-shadow: 0px 15px 15px rgba(0, 0, 0, 0.25);
      }
      .highlight-items{
        max-width: 100%;
        justify-content: space-between;
      }
      .highlight-item-dash{
        position: relative;
        top: 117.5px;
        width: 100px;
        border-top: 1px solid #000;
      }
      .highlight-item h4{
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 20px;
        line-height: 37px;
      }
      .contact{
        padding: 33px 0 174px;
        background: rgba(97, 166, 213, 0.5);
      }
      .contact h4{
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        font-size: 26px;
        line-height: 37px;
        color: #434343;
      }
      .contact p{
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        font-size: 18px;
        line-height: 37px;
        color: #434343;
      }
      .contact .socials i{
        color: #6A6A6A;
        font-size: 20px;
      }
      .overlay{
        top: 0;
        z-index: 9;
        display: none;
        position: fixed;
        background-color: rgba(0, 0, 0, 0.6)
      }
      .modal{
        display: none;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: fixed;
        z-index: 999;
        width: 383px;
        height: max-content;
        background: #FFFFFF;
        border-radius: 12px;
        margin: auto;
      }
      .signup-div{
        width: 430px
      }
      .modal input{
        padding: 5px 10px;
        height: 57px;
        margin-bottom: 30px;
        background: #FFFFFF;
        border: 1px solid #434343;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 18px;
        line-height: 22px;
      }
      .modal input[type="submit"]{
        background: #61A6D5;
        color: #fff;
      }
      .modal p, .modal h4{
        font-family: 'Montserrat', sans-serif;
      }
      .modal h4{
        font-weight: 600;
        font-size: 20px;
        line-height: 24px;
      }
      .modal p{
        font-weight: 500;
        font-size: 12px;
        line-height: 17px;
      }
    </style>
  </head>
  <body>
    <div class="overlay w-100 h-100"></div>
    <div class="login-div modal p-5 mx-auto">
      <h4 class="mb-5 text-center">Log into MRandMRS</h4>
      <form class="" action="form.php" method="post">
        <input type="email" name="email" class="w-100" placeholder="Your email address">
        <input type="password" name="password" class="w-100" placeholder="Password">
        <input type="submit" name="submit" class="w-100 border-0" value="GO">
        <div class="text-center">
          <p>Forgot password?</p>
          <p>Not a member yet? <a href="#" class="signup-link">Join now!</a> </p>
        </div>
      </form>
    </div>
    <div class="signup-div modal p-5 mx-auto">
      <h4 class="mb-3 text-center">Your personal wedding planning begins right now!</h4>
      <p class="text-center">The bets local vendors, curated venues and all the advice you need to have a unique wedding for you!</p>
      <form class="" action="save_details.php" method="post">
        <input type="email" name="email" class="w-100" placeholder="Email">
        <input type="password" name="password" class="w-100" placeholder="Password">
        <input type="submit" name="submit" class="w-100 border-0" value="Sign Up">
        <div class="text-center">
          <p>By signing up, you agree to our <a href="#">Terms</a> and <a href="#">Privacy Policy.</a></p>
          <p>Already a member of MRandMRS? <a href="#" class="sign-in-link">Log In</a></p>
        </div>
      </form>
    </div>
    <section class="hero">
      <nav class="navbar navbar-expand-lg px-0">
        <a class="navbar-brand mr-0" href="index.html">
          MR<span style="color:#fff;">and</span>MRS
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-5 ml-auto">
            <li class="nav-item mr-3">
              <a class="nav-link sign-in-link" href="#">Sign In</a>
            </li>
            <li class="nav-item ml-0">
              <a class="nav-link btn signup-btn signup-link" href="">SIGN UP</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="row mx-0">
        <div class="col-12 tagline">
          <h1>Wedding Planner for<br>African Couples</h1>
        </div>
        <div class="col-md-9">

        </div>
      </div>
      <form class="" action="index.html" method="post">
      <div class="row mx-0">
        <div class="col-xs-12 request-form position-relative">
          <div class="d-inline-flex input-div align-middle">
            <input class="d-block border-0" type="text" name="budget" placeholder="What is your Budget?">
          </div>
          <div class="d-inline-flex input-div align-middle">
            <input class="d-block border-0" type="text" name="location" placeholder="Where do you wanna have your wedding?">
          </div>
          <div class="d-inline-flex input-div align-middle">
            <input type="text" class="d-block border-0" placeholder="When are you getting married?">
            <!-- <input class="d-block border-0" type="date" name="date" placeholder="Wedding Date"> -->
          </div>
          <div class="d-inline-flex input-div align-middle">
            <input type="submit" class="px-2 border-0" value="Tie the Knot">
          </div>
        </div>
      </div>
    </form>
    </section>
    <section class="highlight">
      <div class="row mx-0">
        <div class="col-12 text-center heading mx-auto">
          <h3>Plan the Wedding of Your Dreams</h3>
          <p>Let us match you based on your budget from our list of professional vendors,<br>venues you’d love and even assist you in saving for your big day.</p>
        </div>
      </div>
      <div class="row highlight-items mx-auto">
        <div class="col-xs-12 col-md-3 text-center highlight-item">
          <img src="assets/img/highlight1.jpg" alt="">
          <h4>Local Vendors</h4>
          <p>Choose from a variety of professional Vendors.</p>
        </div>
        <span class="highlight-item-dash"></span>
        <div class="col-xs-12 col-md-3 text-center highlight-item">
          <img src="assets/img/highlight2.jpg" alt="">
          <h4>Find Venues</h4>
          <p>Choose from a variety of professional Vendors.</p>
        </div>
        <span class="highlight-item-dash"></span>
        <div class="col-xs-12 col-md-3 text-center highlight-item">
          <img src="assets/img/highlight3.jpg" alt="">
          <h4>Wedding Savings</h4>
          <p>Choose from a variety of professional Vendors.</p>
        </div>
      </div>
    </section>
    <section class="contact text-center">
      <div class="row mx-0">
        <div class="col-12">
          <h4 class="mb-4">Contact us today</h4>
          <p class="mb-4">Let us help your best day get better.</p>
          <div class="socials mb-4">
            <i class="mr-2 fab fa-twitter"></i>
            <i class="mr-2 fab fa-instagram"></i>
            <i class="mr-2 fab fa-facebook-f"></i>
          </div>
        </div>
      </div>
      <form class="" action="index.html" method="post">
      <div class="row mx-0">
        <div class="col-xs-12 request-form position-relative mx-auto">
          <div class="d-inline-flex input-div align-middle">
            <input class="d-block border-0" type="text" name="budget" placeholder="What is your Budget?">
          </div>
          <div class="d-inline-flex input-div align-middle">
            <input class="d-block border-0" type="text" name="location" placeholder="Where do you wanna have your wedding?">
          </div>
          <div class="d-inline-flex input-div align-middle">
            <input type="text" class="d-block border-0" name="date" placeholder="When are you getting married?">
            <!-- <input class="d-block border-0" type="date" name="date" placeholder="Wedding Date"> -->
          </div>
          <div class="d-inline-flex input-div align-middle">
            <input type="submit" class="px-2 border-0" value="Tie the Knot">
          </div>
        </div>
      </div>
    </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(".sign-in-link").click((e) => {
        console.log('ssdkds');
        e.preventDefault();
        $(".overlay").show();
        $(".modal").hide();
        $(".login-div").show();
      });

      $(".signup-link").click((e) => {
        e.preventDefault();
        $(".overlay").show();
        $(".modal").hide();
        $(".signup-div").show();
      })

      $(".overlay").click(() => {
        $(".overlay").hide();
        $(".modal").hide();
      });
    </script>
  </body>
</html>
