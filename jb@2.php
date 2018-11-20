<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content="Adminlte-laravel - <?php echo e(trans('adminlte_lang::message.landingdescription')); ?> "> -->
<!--
    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - <?php echo e(trans('adminlte_lang::message.landingdescription')); ?>" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />
 -->
    <title>Juice bar</title>

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('/css/all-landing.css')); ?>" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body data-spy="scroll" data-target="#navigation" data-offset="50">
<div id="app" v-cloak>
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>Flavours Juice Bar</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home" class="smoothScroll"><?php echo e(trans('adminlte_lang::message.home')); ?></a></li>
                    <li><a href="#desc" class="smoothScroll"><?php echo e(trans('adminlte_lang::message.description')); ?></a></li>
                    <li><a href="#showcase" class="smoothScroll">What's new</a></li>
                    <li><a href="#contact" class="smoothScroll"><?php echo e(trans('adminlte_lang::message.contact')); ?></a></li>
                </ul>
                <!-- <ul class="nav navbar-nav navbar-right">
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>"><?php echo e(trans('adminlte_lang::message.login')); ?></a></li>
                        <li><a href="<?php echo e(url('/register')); ?>"><?php echo e(trans('adminlte_lang::message.register')); ?></a></li>
                    <?php else: ?>
                        <li><a href="/home"><?php echo e(Auth::user()->name); ?></a></li>
                    <?php endif; ?>
                </ul> -->
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <section id="home" name="home">
        <div id="headerwrap">
            <div class="container">
                <div id="home">
<!-- Slider Starts -->
<div class="showcase">
          <!-- <img src="<?php echo e(asset('/img/Mangosmoothie.jpg')); ?>" alt="banner" class="img-responsive"> -->
          <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <img src="<?php echo e(asset('/img/smoothie.jpg')); ?>" alt="" width="300" height="300">


                                                      </div>
                                <div class="item">
                                    <img src="<?php echo e(asset('/img/bar.jpg')); ?>" alt="" width="300" height="300">

                                </div>
                                <div class="item">
                                    <img src="<?php echo e(asset('/img/Mangosmoothie.jpg')); ?>" alt="" width="250" height="300">

                                </div>
                                                                           </div>
                        </div>
          <div class="caption">
            <div class="caption-wrapper">
              <div class="caption-info">
              <h1 class="animated bounceInUp">Flavours Juice Bar</h1>
              <p class="animated bounceInLeft">Fresh, Tasty and Healthy </p>
             <a href="#menu" class="explore animated bounceInDown"><i class="fa fa-angle-down  fa-3x"></i></a>
              </div>
            </div>
          </div>
</div>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->
    </section>


    <div class=" col-sm-3 col-xs-6">
    <figure class="effect-chico">
        <img class="img-responsive" src="<?php echo e(asset('/img/animation.jpg')); ?>" alt="">
        <br>
        <form action="oopcrud">
<input type="submit" value="Make your drink">
</form>

    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
    <figure class="effect-chico">
        <img class="img-responsive" src="<?php echo e(asset('/img/wizard.jpg')); ?>" alt="">
     <form action="packages">
<input type="submit" value="Our Packages">
</form>
    </figure>
    </div>
    <div class="row grid team  wowload fadeInUpBig">
    <div class=" col-sm-3 col-xs-6">
    <figure class="effect-chico">
         <img class="img-responsive" src="<?php echo e(asset('/img/witch.jpg')); ?>" alt="">
           <br>
           <br>
         <br>
         <form action="Feedback">
<input type="submit" value="Feedback">
</form>
    </figure>


    </div>
<div class=" col-sm-3 col-xs-6">
    <figure class="effect-chico">
        <img class="img-responsive" src="<?php echo e(asset('/img/like.jpg')); ?>" alt="" width="200">
        <br>
        <form action="oopcrud">
<input type="submit" value="Follow us">
</form>

    </figure>
    </div>
    </div>
    <section id="desc" name="desc">
        <!-- INTRO WRAP -->
        <div id="intro">

<h2 class="text-center wowload fadeInUp">Flavours Juice Bar</h2>

    <h4><i class="fa fa-camera-retro"></i> Introduction </h4>
    <p>Flavours juice bar was founded in February 14th 2016 by Ian Chomba and Ryan Kithinji.The two combined capital and after a month’s research of how certain desirables would be used in starting up and satisfying juice lovers within the city the business had its inception rightfully recognized as by the law and a few admirers.
    In no time they received a huge boost by partnering with Wambui Kinyanjui and Joanne Kibatia on 26th of April of the same year. The four combined provided a more stable axis in providing a more solute direction in achieving the short and long-term obligations of the business.</p>
    <p>The idea over time has always been to run a chain of juice bars in the city and beyond that serve fresh juice just like other urban restaurants offering exclusivity customer treatment for example membership deals and home and office deliveries.
    </p>


  </div>
 <div class="col-sm-6 wowload fadeInRight">

  </div>
  </div>
</div>
        <!-- FEATURES WRAP -->
        <div id="features">
            <div class="container">
                <div class="row">
                    <h1 class="centered"><?php echo e(trans('adminlte_lang::message.whatnew')); ?></h1>
                    <br>
                    <br>
                    <h3 class="text-center  wowload fadeInUp">Our Team</h3>
<p class="text-center  wowload fadeInLeft">#TeamFJB</p>
<div class="row grid team  wowload fadeInUpBig">
    <div class=" col-sm-3 col-xs-6">
    <figure class="effect-chico">
         <img class="img-responsive" src="<?php echo e(asset('/img/ian.jpeg')); ?>" alt="">

        <figcaption>
            <p><b>Ian Chomba</b><br>Managing Director</p>
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
    <figure class="effect-chico">
        <img class="img-responsive" src="<?php echo e(asset('/img/wambui.jpg')); ?>" alt="">
        <figcaption>
            <p><b>Wambui Kinyanjui</b><br>Logistics Director</p>
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
    <figure class="effect-chico">
        <img class="img-responsive" src="<?php echo e(asset('/img/joan.jpg')); ?>" alt="">
        <figcaption>
            <p><b>Joanne Kibatia</b><br>Finance Director</p>
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
    <figure class="effect-chico">
         <img class="img-responsive" src="<?php echo e(asset('/img/ryan.jpeg')); ?>" alt="">
        <figcaption>
            <p><b>Ryan Kithinji</b><br>Marketing Director</p>
        </figcaption>
    </figure>
    </div>


</div>
                    <!--  -->
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>
                        </div><!-- Accordion -->
                    </div>
                </div>
            </div><!--/ .container -->
        </div><!--/ #features -->
    </section>

    <section id="showcase" name="showcase">
        <div id="showcase">
            <div class="container">
                <div class="row">
                    <h1 class="centered">Some of our Esteemed customers</h1>
                    <br>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo e(asset('/img/cindy.jpg')); ?>" alt="" width="100">
                                     <p> Flavours Juice Bar is the complete definition of healthy and freshness. It has grown so much in such a short while and it has huge potential and I just can't wait for the future. We are here to grow with you.</p>
                                  <span>Cindy Kitusa</span>
                                </div>
                                <div class="item">
                                    <img src="<?php echo e(asset('/img/maxin.jpg')); ?>" alt="" width="100">
                                    <p>The potential that Flavours Juice Bar has is so immense I can not quantify it. You guys have a bright future ahead and the quality of service is out of this world.</p>
                                    <span>Michelle Maxin</span>
                                </div>
                                <div class="item">
                                    <img src="<?php echo e(asset('/img/evans.jpg')); ?>" alt="" width="100">
                                    <p>The world better be ready for Flavours because they will cause a serious amount of disruption in the food and beverage industry with their business model and plan. Bonne Chance.</p>
                                     <span>Evans Toroitich</span>
                                </div>
                                                                           </div>
                        </div>
                    </div>
                </div>
                <br>

    </div>
                <br>

            </div><!-- /container -->
        </div>
    </section>

    <section id="contact" name="contact">
        <div id="footerwrap">
            <div class="container">
                <div class="col-lg-5">
                    <h3><?php echo e(trans('adminlte_lang::message.address')); ?></h3>
                    <p>        <br/>
                       Phone:+254 708 000311<BR>
                        ADDRESS:Strathmore university<br/>
                      Nairobi,Kenya
                    </p>
                </div>

                <div class="col-lg-7">
                    <h3>Drop us a comment/Order</h3>
                    <br>
                    <form role="form" action="#" method="post" enctype="plain">
                        <div class="form-group">
                            <label for="name1"><?php echo e(trans('adminlte_lang::message.yourname')); ?></label>
                            <input type="name" name="Name" class="form-control" id="name1" placeholder="<?php echo e(trans('adminlte_lang::message.yourname')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="email1"><?php echo e(trans('adminlte_lang::message.emailaddress')); ?></label>
                            <input type="email" name="Mail" class="form-control" id="email1" placeholder="<?php echo e(trans('adminlte_lang::message.enteremail')); ?>">
                        </div>
                        <div class="form-group">
                            <label><?php echo e(trans('adminlte_lang::message.yourtext')); ?></label>
                            <textarea class="form-control" name="Message" rows="3"></textarea>
                        </div>
                        <br>


                        <button type="submit" class="btn btn-large btn-success"><?php echo e(trans('adminlte_lang::message.submit')); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div id="c">
            <div class="container">
                <p>

                    <strong>Copyright &copy; 2018 </strong> <?php echo e(trans('adminlte_lang::message.createdby')); ?>
                <a href="https://github.com/nkirotekithinji"> Florence Kithinji </a>
                    Use of Acacha AdminLte Work <?php echo e(trans('adminlte_lang::message.seecode')); ?> <a href="https://github.com/acacha/adminlte-laravel">Github</a>



            </div>
        </div>
    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo e(url (mix('/js/app-landing.js'))); ?>"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
