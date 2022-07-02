<html>
    <head>
        <title>Delete Profile</title>
    </head>
    <body>
        <?php

            $email = $_REQUEST['email'];
            $userName = $_REQUEST['userName'];

        ?>
    <form action="Delete.php" method="post">

        <fieldset>
            <legend>Delete</legend>

                <input type="hidden" name="filename" value="employee.txt">
                <input type="hidden" name="email" value="<?=$email?>">
                <input type="hidden" name="userName" value="<?=$userName?>">
                 Username : <br>
                <input type="text" name="name" value="<?php echo $userName; ?>">
                <br> <br>
                 Email : <br>
                <input type="text" name="accNo" value="<?php echo $email; ?>">
                <br>
                <p>Are you sure want to DELETE your account?</p>
                <input type="submit" name="submit" value="Delete" >
                <input type="submit" name="cancel" value="Cancel" >	
        </fieldset>
    
    </form>

    <?php 

            $file = fopen('employee.txt', 'r');

            while (!feof($file)) {
            $data = fgets($file);
            echo $data;
            $user = explode("||", $data); 

            if($email == trim($user[2])) {
                $userName = trim($user[0]);
                $email = trim($user[2]);
                $phnNum = trim($user[3]);
                $nid = trim($user[4]);
                $DOB = trim($user[5]);
                $gender = trim($user[6]);
                $status = trim($user[7]);
                $bGroup = trim($user[8]);
                $religion = trim($user[9]);
                $address = trim($user[10]);
                break;
            }	
}
    ?>

            <?php

                if(isset($_POST['submit'])){

                $filename = $_REQUEST['filename'];
                unlink($filename);
                unlink('Files/History.txt');
                unlink('Files/balance.txt');
                header('location: Login.html');

                }elseif(isset($_POST['cancel'])){
                    header('location: Profile.php?email='.$email);
                }

            ?>
            
    </body>
</html>