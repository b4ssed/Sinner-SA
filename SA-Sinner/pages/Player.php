<!DOCTYPE html>
<html lang="en">
<head>
    <title>Player</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL"></script>
    <script src="https://unpkg.com/plyr@3"></script>
    <link rel="stylesheet" href="https://unpkg.com/plyr@3/dist/plyr.css"/>
    
    <style>
      ul{list-style: none;padding: 0px}
      a{text-decoration: none;color: #444;font-family: arial}
      li:hover{background: #eee;border-bottom: solid 1px #692273;}
      li{width: 20%; padding: 5px; border-bottom: solid 1px #ccc;}
      .active a{color:#692273; padding-left: 1px; font-style: italic;}

      /*   .music_player{
    position:relative;
    margin: 0 auto;
    background:$player_color;
    height:14rem;
    width:40rem;
    -webkit-box-shadow:10px 0px 20px -6px  rgba(0,0,0,0.75);
-moz-box-shadow: 10px 7px 20px -6px rgba(0,0,0,0.75);
box-shadow: 10px 0px 20px -6px rgba(0,0,0,0.75);
    .artist_img{
      img{
        width:298px
        
      }
    }
    .time_slider{
      background:#301643;
      height:2.5rem;
      width:18.7rem;
      position:absolute;
      bottom:0;
      span{
        position:absolute;
        font-size:12px;
        top:0.75rem;
      }
      .runing_time{
        left:1rem;
        color:#FECF7D;
      }
      .song_long{
        right:1rem;
        color:#775B8E;
      }
    }
    .controllers{
      background:#260F39;
      height:2.5rem;
      width:21.4rem;
      position:absolute;
      right:0;
      bottom:0;
      font-family:FontAwesome;
      text-align:center;
      color:#83649F;
      i{
        position:relative;
        bottom:-0.7rem;
        padding:0 15px 0 15px;
      }
    }
    .now_playing{
      top:0;
      right:0;
      height:2.5rem;
      width:21.4rem;
      position:absolute;
      background:#260F39;
      text-align:center;
      color:$font_color;
      i.fa-heart{
        top:0.5rem;
        right:4rem;
        position:absolute;
      }
       i.fa-refresh{
        top:0.5rem;
        left:4rem;
        position:absolute;
      }
      p{
         text-transform:uppercase;
         font-size:12px;
      }
    }
  }
   .music_info{
        top:2rem;
        right:0;
        position:absolute;
        width:21rem;
        h2{
          color:#fff;
          text-align:center;
          font-size:20px;
          text-transform:uppercase;
        }
       p{
        text-align:center; 
       }
       .date{
        color:#A384BD;
        font-weight:bold;
        font-size:13px; 
        margin-top:-0.8em; 
       }
       .song_title{
         color:#E7DF70;
       }
      }
  }
input[type=range] {
    -webkit-appearance: none;
    border: 1px solid white;
    border-radius:2px;
    width: 12rem;
    top:1rem;
    left:0;
    right:0;
    margin:auto;
    position:absolute;
}
input[type=range]::-webkit-slider-runnable-track {
    width: 300px;
    height: 5px;
    background: #8664A1;
    border: none;
    border-radius: 3px;
}
input[type=range]::-webkit-slider-thumb {
    -webkit-appearance: none;
    border: 3px solid #fff;
    height: 16px;
    width: 16px;
    border-radius: 50%;
    background: #9200FF;
    margin-top: -4px;
}
 */


    </style>
    <style>
      .Fks{
        width: 100%;
        background: black;
        bottom = 0;
        left = 0;
        position = fixed;
      }



    </style> 
</head>
<body>


<?php
	$con = mysqli_connect("localhost","root","","database_sinner");
	$query = mysqli_query($con, "SELECT * FROM musica");
	$arr = mysqli_fetch_all($query, MYSQLI_ASSOC);

  
?>
<!-- Lista de musica -->

<ul id="playlist"> 
<?php
    foreach ($arr as $key => $value) {
      echo "<li><a href='".$value["musica"]."'>".$value["descricao"]."</a></li>";
    }
 ?>

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

</ul>

<!-- Player-->

<footer>
  <div >
	<audio  id="audio" crossorigin playsinline>
		<source src="">
	</audio>
  </div>
</footer>



















<!-- <audio controls="controls">
  <source src="../css/music/Kalimba.mp3" type="audio/mp3" />

</audio> -->
    
</body>
</html>