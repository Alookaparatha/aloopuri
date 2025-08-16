   <?php

       $host = "sql303.ezyro.com";
       $user = "ezyro_39718623";
       $pass = "012f9a8f90";
       $db = "ezyro_39718623_login"

        $con = mysqli_connect($host , $user, $pass, $db );
         
        if (!$con) {
         die("Connection Failed: " . mysqli_connect_error());
               echo ="failed";
        }
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $other = $_POST['other'];

            $query = "INSERT INTO mydata (name, age, gender, email, phone, other) values('$name','$age','$gender','$email','$phone','$other' )";

            $execute = mysqli_query($con, $query);

            header("Location: index.html");
        
}

        mysqli_close($con);



        ?>

