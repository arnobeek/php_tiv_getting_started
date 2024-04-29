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
        $conn = new mysqli('localhost','root','','sample_php');
        if ($conn->connect_error) {
            die('Connection Failed : '. $conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into registration values($fname,$lname,$email,$pnumber,$password,    $cpassword,$user,$fpo)");
            $stmt->bind_param("sssissss",$fname, $lname, $email, $pnumber, $password, $cpassword, $user, $fpo);
            $stmt->execute();
            echo"registration successful";
            $stmt->close();
            $conn->close();

        }    

    ?>

