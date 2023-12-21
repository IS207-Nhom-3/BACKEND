
<?php 
function username_exists($username){
    global $connection;
    $query = "SELECT username FROM users WHERE username = '$username'";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0 ){
        return true;
    } else{
        return false;
    }
}

function email_exists($email){
    global $connection;
    $query = "SELECT user_email FROM users WHERE user_email = '$email'";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0 ){
        return true;
    } else{
        return false;
    }
}

function register_user($username,$email,$password){
    global $connection;
    
    $username = mysqli_real_escape_string($connection,$username);
    $email = mysqli_real_escape_string($connection,$email);
    $password = mysqli_real_escape_string($connection,$password);
    //Sử dụng mysqli_real_escape_string để bảo vệ trước các tấn công SQL injection 
    //bằng cách chuẩn bị các giá trị dữ liệu cho truy vấn SQL.

    $password = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));

    $query = "INSERT INTO users (username,user_email,user_password,user_role) ";
    //Truy vấn chèn dữ liệu người dùng mới vào bảng users.
    $query .= "VALUES ('{$username}','{$email}','{$password}','subscriber')";
    $registration_user_query = mysqli_query($connection,$query);
    } 
    
?>
