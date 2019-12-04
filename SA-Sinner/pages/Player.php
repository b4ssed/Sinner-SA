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
          #btnPrev:hover, #btnNext:hover{
            background: #00b3ff;
            color: white;


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
      <style media="screen">
      .responsive {
        width: 100%;
        height: 200PX;
        background: black;
        }
        .lead{
           width: 75%;
        }
        .imgbanda{
          margin-top: 40px;
          width: 200px;
          height: 200px;
          border-radius: 50%;
          margin-left: 5%;
        }
      </style>
  </head>

  <body>
  <!-- Começo interação no BD -->
  <?php
    $id = $_GET['id'];
    //Conexão com o BD
    $con = mysqli_connect("localhost", "root", "", "database_sinner");
    //Select e armazenamento em arrays
    //Banda
    $query_banda = mysqli_query($con,"SELECT * FROM banda WHERE id_banda=$id");
    $array_banda = mysqli_fetch_assoc($query_banda);
    //Album
    $query_album = mysqli_query($con,"SELECT * FROM album WHERE id_album = $array_banda[id_banda]");
    $array_album = mysqli_fetch_assoc($query_album);
    //Musica
    $query_musica = mysqli_query($con,"SELECT * FROM musica WHERE id_musica = $array_album[id_album]");
    $array_musica = mysqli_fetch_assoc($query_musica);
    $arr[] = $array_musica;
  ?>
    <!-- FIM interação no BD -->

    <div class="wrapper">
      <?php include("../template/sidebar.php"); ?>
      <div id="content" style="padding: 0px">
        <div class="responsive">
          <?php
            echo "<img class='imgbanda'src='".$array_banda['img']."'>";
           ?>
        </div>
        <div style="padding: 40px">
          <h1><?php echo $array_banda["descricao"] ?></h1>
          <h2><?php echo $array_album["descricao"]; ?></h2>
            <ul id="playlist" class=" list-group player">
              <?php
                  $idmusica = 0;
                  foreach ($arr as $key => $value) {

                    echo "<a  class='player' id='". $idmusica."' href='".$value["musica"]."'><li class=' list-group-item player'>".$value["descricao"]."</li></a>";
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
          <button id="btnPrev">&vltri;</button>
          <button id="btnNext">&vrtri;</button>
      </div>
    <!-- FIM Player-->
      </div>
    </div>
    <?php include("../template/js.php"); ?>
  </body>
</html>
