<?php
 include('constants.php');
?>

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
<header>
          <nav class="navbar navbar-expand-lg navbar-light">
               <a class="navbar-brand" href="#"><img src="imgs/logo.jpg" class="rounded-pill" width="100px" height="60px" alt=""></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                         <li class="mx-3 nav-item">
                              <a class="nav-link font-weight-bold" href="index.php">Home</a>
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
      </header>

     <section class="heading">                      
          <div class="h-100 d-flex justify-content-center  align-items-center">
                    <div class="px-5 ">
                         <a href="add-customer.php" class="my-3 px-5 p-3 mx-auto btn  font-weight-bolder d-block">Add New Customer</a>
                         <a href="customers-tbl.php" class="my-3 px-5 p-3 mx-auto btn  font-weight-bolder d-block">View All Customers</a>
                         <a href="transfers-tbl.php" class="my-3 px-5 p-3 mx-auto btn  font-weight-bolder d-block">View All Transfers</a>
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