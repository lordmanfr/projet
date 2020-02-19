<?php
require_once 'lip/validation.php';
$errormessage = '';


if (!empty($_REQUEST)) {
    //$username = $_REQUEST["username"];
    //$email    = $_REQUEST['email'];
    // $pwd      = $_REQUEST["password"];
    // $confirm_pwd  = $_REQUEST["confirm_pwd"];

    // $username=trim($username);
    // $username=htmlspecialchars($username);
    // $username=stripcslashes($username);

    //$username= stripslashes(htmlspecialchars(trim($_REQUEST)['username']));
    //$email= stripslashes(htmlspecialchars(trim($_REQUEST)['emai']));
    //$pwd= stripslashes(htmlspecialchars(trim($_REQUEST)['password']));
    // $confirm_pwd= stripslashes(htmlspecialchars(trim($_REQUEST)['confirm_pwd']));



    $username = validateinput($_REQUEST['username']);
    $email = validateinput($_REQUEST['email']);
    $pwd = validateinput($_REQUEST['password']);
    $confirm_pwd = validateinput($_REQUEST['confirm_pwd']);

    $match = comparePwd($pwd, $confirm_pwd);

    //var_dump($username);
    if (!$match) {
        $errormessage = "passwords don't match ! ";
    }
   

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <label for="use-rname">user name</label>
        <input type="text" name="username" id="user-name" required>(*)
        <label for="user-email">email</label>
        <input type="email" name="email" id="user-name" required>(*)
        <label for="user-passward">passward</label>
        <input type="password" name="password" id="user-password" required minlength="8">(*)
        <label for="user-confirm">confirm_pwd</label>
        <input type="password" name="confirm_pwd" id="user-confirm" required minlength="8">(*)
        <input type="submit" value="log in">



    </form>
    <?php echo $errormessage;
    ?>

</body>

</html>