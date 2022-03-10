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
     <div class="container">
          <a href="dashboard.php" class="btn btn-dark mt-5">Home</a>
          <form action="" method="post">
               <table class="table text-center mt-5 w-50">
                    <tr>
                    <td>Customer Name</td>
                    <td>
                         <input type="text" name="customer_name" id="">
                    </td>
                    </tr>
                    <tr>
                    <td>Balance </td>
                    <td>
                         <input type="text" name="balance" id=""> $
                    </td>
                    </tr>
                    <tr>
                    <td>Email</td>
                    <td>
                         <input type="email" name="email" id="">
                    </td>
                    </tr>
                    <tr>
                    <td>Phone Number</td>
                    <td>
                         <input type="text" name="phone" id="">
                    </td>
                    </tr>
                    <tr>
                    <td>Address</td>
                    <td>
                         <input type="text" name="address" id="">
                    </td>
                    </tr>
                    <tr >
                    <td colspan="2">
                         <input type="submit" name="submit" value="Add Customer" class="btn btn-success w-100">
                    </td>
                    </tr>
</table>   
          </form>
          
</div>                    

              
</body>
</html>

          
     <?php
          if(isset($_POST['submit'])){
               $name=$_POST['customer_name'];
               $balance=$_POST['balance'];
               $email=$_POST['email'];
               $phone=$_POST['phone'];
               $address=$_POST['address'];

               $sql="INSERT INTO customers_tbl SET
                    name='$name',
                    current_balance='$balance',
                    email='$email',
                    phone='$phone',
                    address='$address'
                    ";
               $res=mysqli_query($con,$sql);
               if($res==true){
                    $_SESSION['add']="<div class='alert alert-success px-3'>Customer Added Successfully</div>";
                    header('location:customers-tbl.php');
               }
               else{
                    $_SESSION['add']="<div class='alert alert-danger px-3'>Failed To Add Customer</div>";
                    header('location:customers-tbl.php');
               }
          }

     ?> 

         






