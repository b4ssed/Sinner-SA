
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title></title>
        <?php
          session_start(); 
          
          if (isset($_SESSION['usuario'])) {
            include("template/styles.php");
          }
        ?>

    </head>
    <body>
        <div class="wrapper">
            <?php
              if (isset($_SESSION['usuario'])) {
                include("template/navbar.php");
              }
            ?>
            <div id="content">
                <?php
                  if (isset($_SESSION['usuario'])) {
                    include("includes/btnNavbar.php");
                  }else{
                    include 'pages/newUser.php';
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
