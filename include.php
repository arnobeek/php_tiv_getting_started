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
            $stmt = $conn->prepare("insert into company set first_name = '$fname', last_name = '$lname', email = '$email', phone_number = '$pnumber', password = '$password', confirm_password = '$cpassword', user_role = '$user', fpo = '$fpo'");
            $stmt->execute();  
            echo'Registration successful';
            $stmt->close();
            $conn->close();
        }
       
    ?>