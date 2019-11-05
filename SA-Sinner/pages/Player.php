<!DOCTYPE html>
<html lang="en">
<head>
    <title>Player</title>
    <style>
      ul{list-style: none;padding: 0px}
      a{text-decoration: none;color: #444;font-family: arial}
      li:hover{background: #eee;border-bottom: solid 1px #f60;}
      li{width: 20%; padding: 5px; border-bottom: solid 1px #ccc;}
      .active a{color:#f60; padding-left: 1px; font-style: italic;}


    </style>
    <script>src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"</script>
   <style>
    .Fks{
      width: 100%;
      height: 20%;
      background: WhiteSmoke   ;
    }
    </style> 
</head>
<body>


<div class="Fks">
  <audio id="audio" preload="auto" tadindex="0" controls="">
    <source src="">
  </audio>
</div>


<ul id="playlist"> 
  <li><a href="../css/music/1.mp3">Musica1</a></li>
  <li><a href="../css/music/2.mp3">Musica2</a></li>
  <li><a href="../css/music/3.mp3">Musica3</a></li>

  <script>
    inicio();
    function inicio(){
      var corrente = 0;
      var audio = $("#audio");
      var playlist = $("#playlist");
      var tracks; = playlist.find("li a");
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


















<!-- <audio controls="controls">
  <source src="../css/music/Kalimba.mp3" type="audio/mp3" />

</audio> -->
    
</body>
</html>