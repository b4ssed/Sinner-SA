<!DOCTYPE html>
<html lang="en">
<!--//https://codepen.io/markhillard/pen/Hjcwu -->
  <head>
      <title>Player</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL"></script>
      <script src="https://unpkg.com/plyr@3"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src=>"https://cdnjs.cloudflare.com/ajax/libs/html5media/1.1.8/html5media.min.js"</script>
      <script src=>"https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.6/plyr.min.js"</script>
      <script src=>""</script>
      <link rel="stylesheet" href="https://unpkg.com/plyr@3/dist/plyr.css"/>
      <!-- Nav Bar -->
      <?php include("../template/styles.php"); ?>
      <!-- Fim Bar -->

      <!-- Começo CSS -->
      <style>

        ul{list-style: none;padding: 0px}
       
        a{text-decoration: none;color: #444;font-family: arial}
       
        li:hover{background: #eee;border-bottom: solid 1px #692273;}
       
        li{width: 20%; padding: 5px; border-bottom: solid 1px #ccc;}
        
        .active a{color:#692273; padding-left: 1px; font-style: italic;}

        .plyr--audio .plyr__controls{
          background:black;
        }
        
        #rodape {
            position: absolute;
            bottom: 0;
            width: 100%;
          }

         #tracks {
            font-size:60px;
            position:relative;
            text-align:center;
            }
      </style>
      <!-- Fim CSS -->

      <!-- Começo JavaScript -->
      <script>
      $(document).ready(function(){
        inicio();
        const player = new Plyr('audio', {});
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

        btnNext = $('#btnNext').on('click', function () {
                if ((index + 1) < trackCount) {
                    index++;
                    loadTrack(index);
                    if (playing) {
                        audio.play();
                    }
                } else {
                    audio.pause();
                    index = 0;
                    loadTrack(index);
                }
              })


      </script> 
      <!-- FIM JavaScript -->
  </head>

  <body>
  <!-- Começo interação no BD -->
    <?php
      $con = mysqli_connect("localhost","root","","database_sinner");
      $query = mysqli_query($con, "SELECT * FROM musica");
      $arr = mysqli_fetch_all($query, MYSQLI_ASSOC);
    ?>
    <!-- FIM interação no BD -->

    <div class="wrapper">
      <?php include("../template/navbar.php"); ?> 
      <div id="content" style="padding: 0px">
        <div style="padding: 40px">
          <?php include("../includes/btnNavbar.php"); ?> 
            <ul id="playlist"> 
              <?php
                  $idmusicaatual;
                  $idmusicaatual+=1;
                  $idmusicaatual-=1;
                  foreach ($arr as $key => $value) {
                    
                    echo "<a href='".$value["musica"]."'><li>".$value["descricao"]."</li></a>";
                  }
              ?>
              </ul>
        </div>
    <!-- Começo Player-->
        <div id="tracks">
           <button id="btnPrev">&vltri;</button><button id="btnNext">&vrtri;</button>
        </div> 

        <div id="rodape" >   
          <audio class="tu" id="audio" crossorigin playsinline >
            <source src="">
          </audio>
        </div>
    <!-- FIM Player-->
      </div>

    </div>
    <?php include("../template/js.php"); ?>
  </body>
</html>