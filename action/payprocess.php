<?php
// require('./controller/paycontroller.php');



// if (isset($_POST['submit'])) {
// 	$mail = $_POST['email'];
// 	$first = $_POST['fname'];
// 	$last = $_POST['lname'];
// 	$amount = $_POST['amount'];
	
// 	//run controller responsible for insert
// 	$insert = insert_pay($mail, $first, $last, $amount);

// 	if ($insert) {
// 		header("location:./view/paymentform.php");
// 		echo 'insert successful';
// 	} 
// 	else {
// 	echo 'insert failed'; 
// 	} 
// }


 $curl = curl_init();
 $data = $_GET["reference"];
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.paystack.com/transaction/verify/'.$data,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_d3fc7f3b0dc7415ddabac42889a1da1811e5d81d",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
 
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }
?>

?>

