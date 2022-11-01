<?php
    //connect to the database
    require_once("./settings/db_class.php");

    class pay_class extends db_connection
    {

        public function pay_insert($email, $fname, $lname, $amount){
            //write the sql for insert
            $sql = "INSERT INTO `pay` (`email`, `fname`, `lname`, `amount`) VALUES ('$email', '$fname', '$lname', '$amount')";
            
            return $this ->db_query($sql);
        }
    }
?>