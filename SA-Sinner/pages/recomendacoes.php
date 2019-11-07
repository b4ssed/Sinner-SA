<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include("../template/styles.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title></title>
    <style media="screen">
    .container{
      width: 100vw;
      height: 100vh;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }
    .mx-auto{
      background: white;
      width: 30%;
      border-radius: 5px;
    }
    </style>
    <script>
      $(document).ready(function(){
        // $("#seila").click(function(){
        //   $("#a").addClass("active");
        // });
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $("#a").addClass("active");
            }
            else if($(this).prop("checked") == false){
                $("#a").removeClass("active");
            }
        });
      });
    </script>
  </head>
  <body>
    <div class="container">
      <div class="mx-auto">
        <ul class="list-group">
          <li class="list-group-item" id="a">
            <input type="checkbox" id="checkboxActive"  value="">Dapibus ac facilisis in</label>
          </li>
          <li class="list-group-item">
            <input type="checkbox" id="checkboxActive" value="">Dapibus ac facilisis in</label>
          </li>
          <li class="list-group-item">
            <input type="checkbox" id="checkboxActive" value="">Dapibus ac facilisis in</label>
          </li>
          <li class="list-group-item">
            <input type="checkbox" id="checkboxActive" value="">Dapibus ac facilisis in</label>
          </li>
          <li class="list-group-item">
            <input type="checkbox" id="checkboxActive" value="">Dapibus ac facilisis in</label>
          </li>
          <li class="list-group-item">
            <input type="checkbox" id="checkboxActive" value="">Dapibus ac facilisis in</label>
          </li>
          <li class="list-group-item">
            <input type="checkbox" id="checkboxActive" value="">Dapibus ac facilisis in</label>
          </li>
        </ul>
      </div>
    </div>
    <?php include("../template/js.php"); ?>
  </body>
</html>
