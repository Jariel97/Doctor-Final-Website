<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/col.css">
    <link rel="stylesheet" href="../css/3cols.css">
    <link rel="stylesheet" href="../css/4cols.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/main.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php

    session_start();

    //TODO: do not hardcode, get from database
    const login = 'admin';
    const password = 'admin';

    if (isset($_POST['login']) && isset($_POST['password'])) //when form submitted
    {
      if ($_POST['login'] === login && $_POST['password'] === password)
      {
        $_SESSION['login'] = $_POST['login']; //write login to server storage
        header('Location: /doctor-final-master/php/index1.php'); //redirect to main
      }
      else
      {
        echo "<script>alert('Wrong login or password');</script>";
        echo "<noscript>Wrong login or password</noscript>";
      }
    }

    ?>

    <form method="post" class="card" style="width: 55%; margin: 64px auto;">
    <h1>Admin Login</h1>
      <div class="section group">
        <div class="col span_1_of_3"></div>
        <div class="col span_1_of_3">
          <label>Login</label>
          <input name="login" required>
        </div>
        <div class="col span_1_of_3"></div>
      </div>
      <div class="section group">
        <div class="col span_1_of_3"></div>
        <div class="col span_1_of_3">
          <label>Password</label>
          <input name="password" required>
        </div>
        <div class="col span_1_of_3"></div>
      </div>
      <div class="section group">
        <div class="col span_1_of_3"></div>
        <div class="col span_1_of_3">
              <input type="submit">
        </div>
        <div class="col span_1_of_3"></div>
      </div>



    </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
