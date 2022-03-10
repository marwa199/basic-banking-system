<?php
include('constants.php');

if(isset($_SESSION['error'])){
     echo $_SESSION['error'];
     unset($_SESSION['error']);
}

if(isset($_SESSION['update'])){
     echo $_SESSION['update'];
     unset($_SESSION['update']);
}

if(isset($_SESSION['data_updated'])){
     echo $_SESSION['data_updated'];
     unset($_SESSION['data_updated']);
}

if(isset($_SESSION['add'])){
     echo $_SESSION['add'];
     unset($_SESSION['add']);
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
<body class="container bg-light">
     <article class=" ">
         <div class=" m-5 mx-auto">
              <a href="dashboard.php" class="btn btn-dark m-4">Home</a>

              <table class="table text-center">
               <thead  class="thead-dark ">
                 <tr>
                   <th scope="col">ID</th>
                   <th scope="col">Customer Name</th>
                   <th scope="col">Current Balance</th>
                   <th scope="col">Email</th>
                   <th scope="col">Phone</th>
                   <th scope="col">Address</th>
                   <th scope="col">Actions</th>
                 </tr>
               </thead>
               <tbody>
                    <?php
                    $sql="SELECT * FROM customers_tbl ";
                         $res=mysqli_query($con,$sql);
                         $count=mysqli_num_rows($res);
                         $sn=1;
                         if($count>0){
                              while($row=mysqli_fetch_assoc($res)){
                                   $id=$row['id'];
                                   $name=$row['name'];
                                   $current_balance=$row['current_balance'];
                                   $email=$row['email'];
                                   $phone=$row['phone'];
                                   $address=$row['address'];
                    ?>
                    
                  <tr>
                   <th><?php echo $sn++; ?></th>
                   <td><?php echo $name; ?></td>
                   <td><?php echo '$ '.$current_balance; ?></td>
                   <td><?php echo $email; ?></td>          
                   <td><?php echo $phone; ?></td>
                   <td><?php echo $address; ?></td>
                   <td>
                        <a href="transfer-oper.php?id=<?php echo $id; ?>" class="btn btn-success">Transfer Money</a>
                   </td>
                 </tr>
          <?php         
               }
          }
     
          else{
               ?>
               <tr>
                    <td colspan="7">
                         <?php
               echo "<div class='alert alert-danger'>NO Customers To Display</div>";
                         ?>
                    </td>
               </tr>
               <?php
          }
    
               ?>
          </tbody>
          </table>
     </div>
</article>

     <!-- bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>