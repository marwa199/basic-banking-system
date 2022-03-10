<?php
include('constants.php');

$sql="SELECT *	 FROM transfers_tbl ";
$res=mysqli_query($con,$sql);
$count=mysqli_num_rows($res);
if($count>=0){
     while($row=mysqli_fetch_assoc($res)){
          $referred_id=$row['reffered_id'];
          $transfer_amount=$row['transfer_amount'];

          echo $referred_id;
          echo $transfer_amount;

                $sql2="INSERT INTO referred_tbl SET
                referred_id='$referred_id',
                transfer_amount='$transfer_amount'
                ";
                $res2=mysqli_query($con,$sql2);
                "<br>";
     }

    }
header('location:transfers-tbl.php');
    




?>