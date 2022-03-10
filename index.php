<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- css -->
     <link rel="stylesheet" href="css/style.css">

     <!-- bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

     <!-- fontawesome -->
     <link rel="stylesheet" href="fontawesome/css/all.min.css">
     
     <title>Basic Banking System</title>
</head>
<body>
     <header  class="pb-2">
          <nav class="navbar navbar-expand-lg navbar-light">
               <a class="navbar-brand" href="#"><img src="imgs/logo.jpg" class="rounded-pill" width="100px" height="60px" alt=""></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                         <li class="mx-3 nav-item">
                              <a class="nav-link font-weight-bold" href="#home">Home</a>
                         </li>
                         <li class=" mx-3 nav-item">
                              <a class="nav-link font-weight-bold" href="#about">About</a>
                         </li>
                         <li class="mx-3 nav-item">
                              <a class="nav-link font-weight-bold" href="#services">Our Services</a>
                         </li>
                         <li class=" mx-3 nav-item">
                              <a class="nav-link font-weight-bold" href="#testimonial">Testmonials</a>
                         </li>
                         <li class="mx-3 nav-item">
                              <a class="nav-link font-weight-bold" href="#contact">Contact US</a>
                         </li>
                         <li class="mx-3 nav-item">
                              <a class="nav-link text-danger font-weight-bold" href="dashboard.php">DashBoard</a>
                         </li>
                    </ul>
               </div>
          </nav>

          <div id="home" class="d-flex flex-wrap justify-content-between">
               <div class="w-50 p-5 text-left">
                    <p class=" mt-5 font-weight-bold text-info">WELCOME TO OUR SITE</p>
                    <h3 class="mt-4">We have the best solution for<br> your business to grow.</h3>
                    <p class="mt-3">Far far away, behind the word mountains, far from<br> the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <button class=" mt-5 p-3 px-5 rounded-pill btn btn-info">Get Started...</button>
               </div>
               <div class="w-50">
                    <img src="imgs/header.webp" class="w-100 " alt="banner">
               </div>
          </div>
     </header>

     <!-- about us section -->
     <section id="about" class="my-5">
          <div class="d-flex flex-wrap justify-content-center">
               <!-- <div class="w-50">
                    <img src="imgs/about.webp" class="w-50 " alt="banner">
               </div> -->
               <div class=" p-5 text-center">
                    <p class=" mt-5 font-weight-bold text-info">About Our Company</p>
                    <h3 class="mt-4">Building a Brighter financial Future & Good Support.</h3>
                    <p class="mt-3">Far far away, behind the word mountains, far from<br> the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <button class=" mt-5 p-3 px-5 rounded-pill btn btn-dark">About US...</button>
               </div>
          </div>
     </section>

     <!-- our team section -->
     <section>

     </section>
     
     <!-- our servics section -->
     <section id="services" class="services py-1">
          <div class="d-flex flex-wrap justify-content-center mb-5">
               <div class="w-50">
                    <img src="imgs/service2.webp" class="w-75 " alt="banner">
               </div>
               <div class="w-50 p-2 text-center">
                    <p class=" mt-5 font-weight-bold text-info">Services that we are providing</p>
                    <h3 class="mt-4">High Performance Services<br> For All Industries.</h3>
                    <p class="mt-3">Far far away, behind the word mountains, far from<br> the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <button class=" mt-3 p-3 rounded-pill btn btn-info">Our Services </button>
               </div>
          </div>
          <div class="container">
               <div class="partial my-5 pt-5 row">
                    <div class="col-lg-4 col-md-6 col-sm-12 my-md-3 my-sm-3 my-xs-3">
                         <div class=" text-center rounded">
                              <img class=" mt-2" src="imgs/001-wallet.svg" width="80px" height="180px" alt="">
                              <h3>Business Consulting</h3>
                              <p class="p-2">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                              <a href="#" class="btn text-danger">Learn More</a>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-md-3 my-sm-3 my-xs-3">
                         <div class=" text-center  rounded">
                              <img class=" mt-2" src="imgs/006-credit-card.svg" width="80px" height="180px" alt="">
                              <h3>Credit Card</h3>
                              <p class="p-2">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                              <a href="#" class="btn text-danger">Learn More</a>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-md-3 my-sm-3 my-xs-3">
                         <div class=" text-center  rounded">
                              <img class=" mt-2" src="imgs/002-rich.svg" width="80px" height="180px" alt="">
                              <h3>Income Monitoring</h3>
                              <p class="p-2">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                              <a href="#" class="btn text-danger">Learn More</a>
                         </div>
                    </div>
               </div>
          </div>
          
          <div class="container">
          <div class="partial my-5 row ">
               <div class="col-lg-4 col-md-6 col-sm-12 my-md-3 my-sm-3 my-xs-3">
               <div class=" text-center  rounded">
               <img class=" mt-2" src="imgs/003-notes.svg" width="80px" height="180px" alt="">
                    <h3>Insurance Consulting</h3>
                    <p class="p-2">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <a href="#" class="btn text-danger">Learn More</a>
               </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 my-md-3 my-sm-3">
               <div class=" text-center  rounded">
                    <img class=" mt-2" src="imgs/004-cart.svg" width="80px" height="180px" alt="">
                    <h3>Financial Investment</h3>
                    <p class="p-2">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <a href="#" class="btn text-danger">Learn More</a>
               </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 my-md-3 my-sm-3">
                    
               <div class=" text-center  rounded">
                    <img class=" mt-2" src="imgs/005-megaphone.svg" width="80px" height="180px" alt="">
                    <h3>Financial Management</h3>
                    <p class="p-2">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <a href="#" class="btn text-danger">Learn More</a>
               </div>
               </div>
          </div>
          </div>
     </section>

        <!-- our testimonial section-->
        <section id="testimonial" class="my-5 p-5 bg-info">
          <div class="m-auto m-5 ">
               <h3 class="text-white mb-5 text-center">Testimonials</h3>
               <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
                    <div class="carousel-inner">
                         <div class="carousel-item mt-5 active">
                              <img src="imgs/person1.jpg" class="d-block rounded-circle mr-5" width="150px" height="150px" alt="...">
                              <div class="carousel-caption  d-none d-md-block">
                                   <p class="text-dark">“Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.”</p>
                                   <h6 class="">Carl Anderson</h6>
                                   <p class="">CEO, Co-Founder</p>  
                              </div>
                         </div>
                    <div class="carousel-item mt-5">
                    <img src="imgs/person2.jpg" class="d-block rounded-circle" width="150px" height="150px" alt="...">
                         <div class="carousel-caption d-none d-md-block">
                              <p class="text-dark">“Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.”</p>
                              <h6 class="">Carl Anderson</h6>
                              <p class="">CEO, Co-Founder</p>  
                         </div>
                    </div>
                    <div class="carousel-item mt-5">
                    <img src="imgs/person3.jpg" class="d-block rounded-circle" width="150px" height="150px" alt="...">
                         <div class="carousel-caption d-none d-md-block">
                              <p class="text-dark">“Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.”</p>
                              <h6 class="">Carl Anderson</h6>
                              <p class="">CEO, Co-Founder</p>  
                         </div>
                    </div>
                    </div>
                    <button class="carousel-control-next p-3" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                    <span class="carousel-control-next-icon rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </button>
               </div>
          </div>
     </section>
      

     <!-- contact us section -->
     <section id="contact">
          <div class=" my-5 container">
               <h3 class="text-center text-dark">Contact Us</h3>
               <div class="my-5 d-flex text-center justify-content-between">
                    <div class="w-25">
                         <i class="font-weight-bolder text-info mb-3 fas fa-map-marker-alt"></i>
                         <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
                    </div>
                    <div class="w-25">
                    <i class="font-weight-bolder text-info mb-3 fas fa-phone"></i>
                     <p>+1 232 3235 324</p>
                    </div>
                    <div class="w-25">
                    <i class="font-weight-bolder text-info mb-3 fas fa-envelope"></i>
                    <p>youremail@domain.com</p>
                    </div>
               </div>
          </div>
     </section>

     <!-- fontawesome -->
     <script src="fontawesome/js/all.min.js"></script>

     <!-- bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>