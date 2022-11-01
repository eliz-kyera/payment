<?php
    //connect to the payment class
    require("./model/paymodel.php");

    function insert_pay($email, $fname, $lname, $amount){
        //create an instance of payment class
        $model = new pay_class();
        
        //run insert payment method
        $run = $model->pay_insert($email, $fname, $lname, $amount);
        if ($run) {
            //return query result 
            return $run;
        }else{
            return false;
        }
    }
?>