<?php
require_once("../includes/connection.php");
if (isset($_POST['share_trans'])) { 
$user_id=$_POST['user_id'];
$shares=$_POST['shares'];
$amount=$_POST['amount'];
$maturity=$_POST['maturity'];
$intreast=$_POST['intreast'];
$gross_amount=$_POST['gross_amount'];
//$status=$_POST['status'];
$maturity_time=$_POST['maturity_time'];
$date = date("M-d-Y h:i A",strtotime("+0 HOURS"));
$maturity_date=date('Y-m-d H:i',strtotime($maturity_time,strtotime($date)));
$remaining_shares=$_POST['remaining_shares'];
  mysqli_query($conn,"UPDATE shares SET available_shares=$remaining_shares-$shares WHERE status='1'")or die(mysqli_error($conn));
  $sql1 = "INSERT INTO share_transactions (user_id,shares,amount,maturity,intreast,gross_amount,status,maturity_date) VALUES ('$user_id','$shares','$amount','$maturity','$intreast','$gross_amount','1','$maturity_date')";
            if (mysqli_query($conn, $sql1)) {
                   echo '
                     <script type = "text/javascript">
                    window.location = "../buy_shares.php";
                </script>';
                


            }

}
?>