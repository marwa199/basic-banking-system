<?php
include('constants.php');

if(isset($_SESSION['transfer'])){
     echo $_SESSION['transfer'];
     unset($_SESSION['transfer']);
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
<body class=" bg-light">
     <article class=" container">
         <div class=" m-5 mx-auto">
          <a href="dashboard.php" class="btn btn-outline-dark m-4">Home</a>

          <form action="" method="POST">
          <table class="table text-center">
               <thead  class="thead-dark ">
                 <tr>
                   <th scope="col">S.N.</th>
                   <th scope="col">Customer_id</th>
                   <th scope="col">Customer Name</th>
                   <th scope="col">Customer Balance After Transfer</th>
                   <th scope="col">Transfer Amount</th>
                   <th scope="col">Referred_id</th>
                   <th scope="col">Referred_name</th>
                   <th scope="col">Referred Balance</th>
                   <th scope="col">Referred Balance After Transfer</th>

                 </tr>
               </thead>
               <tbody>
               
          <?php

               $sql2="UPDATE transfers_tbl t
                    JOIN customers_tbl c
                    ON t.reffered_id=c.id
                    SET t.referred_name=c.name";

               $res2=mysqli_query($con,$sql2);
               

               $sql3="UPDATE transfers_tbl t
                    JOIN customers_tbl c
                    ON t.reffered_id=c.id
                    SET t.referred_balance=c.current_balance";

               $res3=mysqli_query($con,$sql3);

               if($res2==true && $res3==true){
               }
               else{
                    echo "<div class='alert alert-danger'>Failed To Update Data</div>";
               }



                $sql="SELECT * FROM transfers_tbl ";
                $res=mysqli_query($con,$sql);
                $count=mysqli_num_rows($res);
                $id=1;
                if($count>0){
                     while($row=mysqli_fetch_assoc($res)){
                         $customer_id=$row['customer_id'];
                          $customer_name=$row['customer_name'];
                          $customer_balance_after_transfer=$row['customer_balance_after_transfer'];
                          $transfer_amount=$row['transfer_amount'];
                          $referred_id=$row['reffered_id'];
                         $referred_name=$row['referred_name'];
                         $referred_balance=$row['referred_balance'];
                         $reffered_balance_after_transfer=$referred_balance+$transfer_amount;

                    ?>
                          <tr>
                              <td><?php echo $id++; ?></td>
                              <td><?php echo $customer_id; ?></td>
                              <td><?php echo $customer_name; ?></td>
                              <td><?php echo $customer_balance_after_transfer; ?></td>
                              <td><?php echo $transfer_amount; ?></td>
                              <td><?php echo $referred_id; ?></td>
                              <td><?php echo $referred_name; ?></td>
                              <td><?php echo $referred_balance; ?></td>
                              <td><?php echo $reffered_balance_after_transfer; ?></td>
                         </tr>
                    <?php
                     }
                    }
                    ?>
                    
               </tbody>
          </form>
     </div>
</article>

     <!-- bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
