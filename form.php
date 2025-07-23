<?php
require './configpdo.php';

if(isset($_POST['submit'])){
 $email =trim($_POST['email']);
 $password= trim ($_POST['password']);

if(!empty($email)&& !empty($password)){

    $query=$pdo->prepare("INSERT INTO user (email,password) VALUES (:email , :password)");

    $result=$query->execute([
        ':email'=>$email,
        ':password'=>$password
    ]);

    if($result){
        echo "Data inserted";
    }
    else {
        echo "failed";
    }
}
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple form</title>
</head>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <form action="" method="POST">
        <label>Email</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

</html>