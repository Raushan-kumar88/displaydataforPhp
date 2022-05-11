<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>link database form</title>
   
</head>
<body>
    <div class="container">
       
        <div class="body">
        <form method="post" action="index.php">
            <div class="title">
                <h1>Registration form</h1>
            </div>
            <div class="section">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="section">
                <input type="text" placeholder="email" name="email" required>
            </div>
            <div class="section">
                <input type="text" placeholder="phone number" name="phone" required>
            </div>
            <div class="section">
                <input type="text" placeholder="password" name="password" required>
            </div>
            <div class="section">gender: <br>
                <input type="radio" name="gender" value="male"> <span>male</span>
                <input type="radio" name="gender" value="female"> <span>female</span>
            </div>
            <div class="section"> Eduction: <br>
                <input type="checkbox" name="edu[]"  value="10th"><span>10th</span>
                <input type="checkbox" name="edu[]"  value="12th"><span>12th</span>
                <input type="checkbox" name="edu[]"  value="B.tech"><span>B.tech</span>
            </div>
            <div class="btn">
                <input type="submit" value="Register" name="submit">
            </div>

            </form>
        </div>
        
    </div>
    
    <?php

    
    if(isset($_POST['submit']))
    {
        print_r($_POST);
        echo "<br>";
        $name=$_POST['username'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
        $education=$_POST['edu'];

        echo "form data output........................... <br><br>";
        echo "<b>Name</b>:$name <br>";
        echo "<b>Email</b>:$email <br>";
        echo "<b>Phone</b>:$phone <br>";
        echo "<b>Password</b>:$password <br>";
        echo "<b>Gender</b>:$gender <br>";

    
    foreach($education as $me)
    {
        echo "<b>Education</b>: $me<br>";
    }

}
    ?>
</body>
</html>