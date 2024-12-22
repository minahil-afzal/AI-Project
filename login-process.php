<?php
    session_start();
    include('conf.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$roll_no=$_POST['roll_no'];
    
    $query = mysqli_query($connection,"select * from users as u join role as r on u.role_id=r.role_id where u.email='$email' and u.password='$password'");
    //$query1=mysql_query("select * from role where role_id=role");
    if(mysqli_num_rows($query) > 0){
      //  $role_id=mysql_insert_id();
            $row = mysqli_fetch_array($query);
            if($row['role_id']==1){
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['role_id'] = $row['role_id'];
                $_SESSION['name'] = $row['name'];
$_SESSION['image']="logo.jpg";
				$_SESSION['role']=$row['role'];
                header('location: webpages/students/home.php');
            }
            else {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['image']="logo.jpg";
                $_SESSION['role']=$row['role'];
                header('location: webpages/admin/home.php');
            }			
    }
    else{
        $_SESSION['error'] = 1;
        header('location: index.php');
    }