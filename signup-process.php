<?php
    session_start();
    include('conf.php');
    
    
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $cnic = $_POST['cnic'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $contact = $_POST['contact'];
    
    

    $query = mysqli_query($connection,"insert into users(role_id, name,fname,cnic,email,password,contact,is_active)values(1, '$name','$fname','$cnic','$email','$pass','$contact',1)") or die(mysqli_error($connection));
		
        if($query)
        {
            $_SESSION['msg']="1";
            header('location:index.php');
        }
        else
        {
            $_SESSION['msg']="2";
            header('location:index.php');
        }