<?php
    // print_r($_POST['fname']."<br>".$_POST['email']);

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
    $regex = " /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/ "; 
    $upper = preg_match('@[A-Z]@', $pass);
    $lower = preg_match('@[a-z]@', $pass);
    $nmbr = preg_match('@[0-9]@', $pass);

    if(empty($name)){
        $err_msg = "nam den nai";
        header('location:index.php?nam_err='.$err_msg);
    }elseif(empty($email)){
        $err_msg = "email ta den";
        header('location:index.php?eml_err='.$err_msg);
    }
    // elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    //     $err_msg = "email thik nai";
    //     header('location:index.php?eml_err='.$err_msg);
    // }
    elseif(!preg_match($regex, $email)){
        $err_msg = "email thik nai";
        header('location:index.php?eml_err='.$err_msg);
    }
    elseif(empty($pass)){
        $err_msg = "pass ta den";
        header('location:index.php?pass_err='.$err_msg);
    }
    elseif(!$upper || !$lower || !$nmbr || strlen($pass) < 8){
        $err_msg = "pass thik nai";
        header('location:index.php?pass_err='.$err_msg);
    }
    elseif(empty($repass)){
        $err_msg = "repass ta den";
        header('location:index.php?repass_err='.$err_msg);
    }
    elseif($pass != $repass){
        $err_msg = "pass mele ni";
        header('location:index.php?repass_err='.$err_msg);
    }
    else{
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $pass;
        echo "<br>";
        echo $repass;
    }
?>