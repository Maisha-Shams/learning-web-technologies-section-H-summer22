<?php

        function signup($user){
            $conn = getconnection();
            $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);

            if($count > 0){
                return true;
            }else{
                return false;
            }
        }


        function getAllUser(){

            $conn = getconnection();
            $sql = "select * from users";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);

            if($count > 0){
                while($data = mysqli_fetch_assoc($result)){
                    print_r($data);
                    echo "<br>";
                }
            }else{
                echo 'No Data Found!!!';
            }

        }



?>