    <?php
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $user = $_POST['user'];
        $fpo = $_POST['fpo'];

        //Database connection
        $conn = new mysqli('localhost','root','password','php_crash');
        if ($conn->connect_error) {
            die('Connection Failed : '. $conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into user set first_name='$fname', last_name='$lname'");
            //$stmt->bind_param("sssissss",$fname, $lname, $email, $pnumber, $password, $cpassword, $user, $fpo);
            $stmt->execute();
            echo"\nregistration successful";
            $stmt->close();
            $conn->close();

        }    

    ?>

