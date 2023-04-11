<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">
  <title>ulanyjy derejeleri</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 offset-md-3 col-sm-8 offset-sm-2">
      <div class="card card-info">
        <div class="card-header  bg-info">
          <h5 class="card-title text-white">Hasaba girmek</h5>

        </div>

        <div style="padding-top:30px" class="card-body">
          <form action="login_action.php" method="post">

            <div class="input-group py-1">
              <span class="input-group-text"><i class="fa fa-user"></i></span>
              <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Adyňyz">
            </div>

            <div class="input-group py-1">
              <span class="input-group-text"><i class="fa fa-lock"></i></span>
              <input id="login-password" type="password" class="form-control" name="password" placeholder="Parolyňyz">
            </div>

            <div style="margin-top:10px" class="form-group">
              <!-- Button -->

              <div class="col-sm-12 controls">
                <button type="submit" class="btn btn-success float-end"><span class="fa fa-check"></span>
                  Girmek</button>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- /container -->

</body>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>