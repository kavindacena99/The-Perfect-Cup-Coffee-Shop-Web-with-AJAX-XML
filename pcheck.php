<?php
    require_once 'connection.php';
?>
<?php
    session_start();

    $mail = mysqli_real_escape_string($connection,$_POST['mail']);
    $pswd = mysqli_real_escape_string($connection,$_POST['pswd']);

    $query = "SELECT * FROM users WHERE mail ='$mail' ";
    $result = mysqli_query($connection,$query);
    $num_row = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    if($num_row >= 1){
        if($pswd == $row['pswd']){
            $_SESSION['login'] = $row['id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];

            echo 'true';
        }else{
            echo 'false';
        }
    }else{
        echo 'false';
    }

?>