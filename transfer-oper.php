<?php
include('constants.php');

if(isset($_GET['id'])){
     $id=$_GET['id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
     
     <!-- css file -->
     <link rel="stylesheet" href="css/style.css">

     <title>Basic Banking System</title>
</head>
<body class="bg-light ">
    <article class="container">
         <div class=" m-5 p-3">
          <a href="dashboard.php" class="btn btn-dark mb-5">Home</a>
          <?php
               $sql="SELECT * FROM customers_tbl WHERE id=$id";
               $res=mysqli_query($con,$sql);
               if($res == true){
                    $count=mysqli_num_rows($res);
                    if($count == 1){
                         $row=mysqli_fetch_assoc($res);
                         $id=$row['id'];
                         $name=$row['name'];
                         $current_balance=$row['current_balance'];
                    }

               }
          ?>
          <form action="" method="POST">
               <table class="table w-50">
                    <tr>
                         <td>
                              <label for="exampleInputEmail1">Full Name: </label>
                         </td>
                         <td>
                              <label for="exampleInputEmail1"><?php echo $name; ?></label>
                         </td>
                    </tr>
                    <tr>
                         <td>
                              <label for="exampleInputEmail1">Current Balance: </label>
                         </td>
                         <td>
                              <label for="exampleInputEmail1"><?php echo "$ ".$current_balance;?></label>
                         </td>
                    </tr>
                    <tr>
                         <td>
                              <label for="exampleInputEmail1">Transfer Amount: </label>
                         </td>
                         <td>
                              $ <input type="number" class="p-2 rounded w-100" name="transfer_amount" value="0" id="exampleInputPassword1"> 
                         </td>
                    <tr>   
                         <td>
                              <label for="exampleInputEmail1">Transfer Money To: </label>
                         </td>
                         <td>
                              <select  class="p-2 rounded w-100" name="selected" >
                                   <option value="" disabled selected>Choose option</option>

                                   <?php
                                   $sql2="SELECT * FROM customers_tbl WHERE current_balance>0 AND id<>$id";
                                   $res2=mysqli_query($con,$sql2);
                                        $count2=mysqli_num_rows($res2);
                                        if($count2 > 0){
                                             while($row2=mysqli_fetch_assoc($res2)){
                                             $id2=$row2['id'];
                                             $selected_customer=$row2['name'];
                                             
                              ?>    
                                        <option value="<?php echo $id2; ?>">
                                             <?php echo $selected_customer; ?>  
                                        </option>
                         <?php
                                        }
                                   }
                         ?>
                              </select> 
                              
                         </td>
                    </tr>
                    <tr >
                         <td colspan="2">
                              <input type="hidden" name="id" value="<?php echo $id;?>">
                              <input type="hidden" name="name" value="<?php echo $name;?>">
                              <input type="hidden" name="current_balance" value="<?php echo $current_balance;?>">
                              <input type="submit" name="submit" class="btn btn-info w-100" value="Transfer Money">
                         </td>
                    </tr>
               </table>
          </form>
          

    <?php

          if(isset($_POST['submit'])){
               // echo "clicked";
               $current_balance=$_POST['current_balance'];
               $transfer_amount=$_POST['transfer_amount'];
               $referred_id=$_POST['selected'];
               $customer_name=$_POST['name'];
               $customer_id=$_POST['id'];
               $remaining_balance=$current_balance-$transfer_amount;

               // echo $customer_id."<br>";
               // echo $customer_name."<br>";
               // echo $current_balance."<br>";
               // echo $transfer_amount."<br>";
               // echo $remaining_balance."<br>";
               // echo $referred_id."<br>";
          
                     
           if($transfer_amount >= $current_balance){
                $_SESSION['error']="<div class='alert alert-danger m-3'>Transfer amount must be less than the current balance</div>";
                header('location:customers.php');
           }
           elseif($transfer_amount == 0 ){
                echo "<div class='alert alert-danger'>Transfer amount is required</div>";
           }
           elseif($referred_id == 0){
               echo "<div class='alert alert-danger'>Referred Name is required</div>";
           }
           else{
                 $sql3="INSERT INTO transfers_tbl SET
                     customer_id='$customer_id',
                     customer_name='$customer_name',
                     transfer_amount='$transfer_amount',
                     customer_balance_after_transfer='$remaining_balance',
                     reffered_id='$referred_id'
                 ";

                 $res3=mysqli_query($con,$sql3);

          

                 if($res3 == true){
                      $_SESSION['transfer']="<div class='alert alert-success  m-3'>money transferd successfully</div>";
                      header('location:transfers-tbl.php');
                 }
                 else{
                      $_SESSION['transfer']="<div class='alert alert-danger m-3'>failed to transfer money</div>";
                      header('location:transfers-tbl.php');
               }

                 
               }
     }
?>

</div>
    </article>
     <!-- bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>