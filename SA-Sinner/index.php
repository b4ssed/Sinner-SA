<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <?php session_start(); ?>
        <title></title>
        <?php
          if (isset($_SESSION['usuario'])) {
            include("template/styles.php");
          }
        ?>

    </head>
    <body>
        <div class="wrapper">
            <?php
              if (isset($_SESSION['usuario'])) {
                include("template/sidebar.php");
              }
            ?>
            <div id="content">
                <?php
                  if (isset($_SESSION['usuario'])) {
                    include("template/navbar.php");
                    include("pages/home.php");
                  }else{
                    include('pages/newUser.php');
                  }
                ?>
            </div>
        </div>
        <?php
          if (isset($_SESSION['usuario'])) {
            include("template/js.php");
          }
        ?>
    </body>
</html>
