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
      <?php session_start(); ?>
      <!-- Fim Bar -->

      <!-- Começo CSS -->
      <style>
        
        .player ul{list-style: none;padding: 0px}
       
        .player a{text-decoration: none;color: #444;font-family: arial}
       
        .player li:hover{background: #eee;border-bottom: solid 1px #00b3ff;}
       
        .player li{width: 20%; padding: 5px; border-bottom: solid 1px #ccc;}
        
        

        .plyr--audio .plyr__controls{
          background:#000;
        }
        
        #rodape {
            position: absolute;
            bottom: 0;
            width: 93%;
            left: 7%;
          }

         #tracks {
            font-size:33.5px;
            bottom: 0px;
            position: absolute;
            width: 7%;
            
            
            


            }

          #btnPrev, #btnNext{
            width: 50%;
            float: left;
            border:0px;
            background:#000;
            color: #343a40;

          }


          .flavio button:hover{
            background: #00b3ff;
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
      
      var indexmusic;
      function inicio(){
        var corrente = 0;
        var audio = $("#audio");
        var playlist = $("#playlist");
        var totalmusics= playlist.find("li").length;
        var tracks = playlist.find("li a");
        var len = tracks.length -1;
        
        playlist.find("a").click(function(e){
            e.preventDefault();
            link = $(this);
            indexmusic = link.attr("id");
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

          $('#btnNext').on('click', function () {
           
            if(indexmusic < (totalmusics-1)){
              indexmusic++;
              var link = playlist.find("#"+indexmusic)
              corrente = link.parent().index();
              run(link, audio[0]);
            }
          })

          $('#btnPrev').on('click', function () {
            if(indexmusic > 0){
              indexmusic--;
              var link = playlist.find("#"+indexmusic)
              corrente = link.parent().index();
              run(link, audio[0]);
            }
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
      <?php include("../template/sidebar.php"); ?> 
      <div id="content" style="padding: 0px">
        <div style="padding: 40px">
          <?php include("../includes/btnNavbar.php"); ?> 
            <ul id="playlist" class="player"> 
              <?php
                  $idmusica = 0;
                  foreach ($arr as $key => $value) {
                    
                    echo "<a  class='player' id='". $idmusica."' href='".$value["musica"]."'><li class='player'>".$value["descricao"]."</li></a>";
                    $idmusica++;
                  }
              ?>
              </ul>
        </div>
    <!-- Começo Player-->
        <div id="rodape" >   
          <audio class="tu" id="audio" crossorigin playsinline >
            <source src="">
          </audio>  
       </div>
       <div id="tracks">
          <button class="flavio" id="btnPrev">&vltri;</button>
          <button id="btnNext" class="flavio">&vrtri;</button>
      </div>
    <!-- FIM Player-->
      </div>
    </div>
    <?php include("../template/js.php"); ?>
  </body>
</html>
