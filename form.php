<?php

    $data = $_POST;
    $db = mysqli_connect("localhost","root","root","martaup_users");
    $my_query = "INSERT INTO users(`user`,`number`,`message`) VALUES('$data[name]','$data[number]','$data[message]');";
    $error = array();


    if(isset($_POST['send']))
    {
        if($data['name'] == null)
        {
            echo "<p class=error>Please , enter valid name!!!<p>";
            $error[] = "<p class=error>Please , enter valid name!!!<p>";
        }
        if($data['number'] == null)
        {
            echo "<p class=error>Please , enter valid number!!!<p>";
            $error[] = "<p class=error>Please , enter valid number!!!<p>";
        }
        if($data['message'] == null)
        {
            echo "<p class='error'>Sorry , but you must write a message!!!<p>";
            $error[] = "<p class='error'>Sorry , but you must write a message!!!<p>";
        }
        if(empty($error))
        {
            mysqli_query($db , $my_query);
            echo "<p class='sended'>Your information was sended to my email!!!</p>";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/form.css">
    <title>Document</title>
</head>
<body>
    <form action="form.php" class="form" method="POST">
        <div class="title__box">
               <h3 class="title__text">registration</h3> 
        </div>
        <div class="form__input container">
            <input name="name" class="input" placeholder="          name"  type="text">
            <input name="number" class="input" placeholder="          number of phone" type="text">
            <input name="message" class="message" placeholder="      your message">
        </div>
        <div class="form__button container">
            <button class="button__send" name="send">send</button>
        </div>
    </form>
</body>
</html>