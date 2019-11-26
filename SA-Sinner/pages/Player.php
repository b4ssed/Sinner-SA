<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Player</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL"></script>
      <script src="https://unpkg.com/plyr@3"></script>
      <link rel="stylesheet" href="https://unpkg.com/plyr@3/dist/plyr.css"/>
      <?php include("../template/styles.php"); ?>
      
      <style>

        ul{list-style: none;padding: 0px}
        a{text-decoration: none;color: #444;font-family: arial}
        li:hover{background: #eee;border-bottom: solid 1px #692273;}
        li{width: 20%; padding: 5px; border-bottom: solid 1px #ccc;}
        .active a{color:#692273; padding-left: 1px; font-style: italic;}


        .plyr--audio .plyr__controls{
          background:black;
          


        }
      </style>
      <style>
          #rodape {
            position: absolute;
            bottom: 0;
            width: 100%;
          }



      </style>
      <script>

      $(document).ready(function(){
        inicio();

        const player = new Plyr('audio', {});

        // Expose player so it can be used from the console
        window.player = player;

      });


      function inicio(){
        var corrente = 0;
        var audio = $("#audio");
        var playlist = $("#playlist");
        var tracks = playlist.find("li a");
        var len = tracks.length -1;
        audio[0].play();
        playlist.find("a").click(function(e){
          e.preventDefault();
          link = $(this);
          corrente = link.parent().index();
          run(link, audio[0]);
        });
          audio[0].addEventListener("ended", function(e){
            corrente++;
            if(corrente == len){
              corrente = 0;
              link = playlist.find("a")[0];
            }else{
              link = playlist.find("a")[corrente];
            }
            run($(link), audio[0]);
          })
      }
        function run(link, player){
          player.src = link.attr("href");
          par = link.parent();
          par.addClass("active").siblings().removeClass("active");
          player.load();
          player.play();
        }



      </script> 
  </head>
  <body>
    
    <?php
      $con = mysqli_connect("localhost","root","","database_sinner");
      $query = mysqli_query($con, "SELECT * FROM musica");
      $arr = mysqli_fetch_all($query, MYSQLI_ASSOC);

      
    ?>
    <!-- Lista de musica -->
    
    <!-- Player-->
    <div class="wrapper">
      <?php include("../template/navbar.php"); ?> 
      <div id="content">
      <?php include("../includes/btnNavbar.php"); ?> 
        <ul id="playlist"> 
          <?php
              foreach ($arr as $key => $value) {
                echo "<li><a href='".$value["musica"]."'>".$value["descricao"]."</a></li>";
              }
          ?>
          </ul>
          
      </div>
      <div id='content2'>
          <div id=rodape> 
            <audio class="tu" id="audio" crossorigin playsinline>
              <source src="">
            </audio>
          </div>
        </div>
    </div>
    <?php include("../template/js.php"); ?>
  </body>
</html>