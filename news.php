<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="home.css">
      <style>
        html{
          background: #262626;
        }
        .newsname{
          width:80%;
          margin-left: 2.5%;
          margin-right: 2.5%;
        }
        #wrapper {
            width: 100%;
            overflow: auto; /* so the size of the wrapper is alway the size of the longest content */
        }
        #first {
            float: left;
            width: 44%;
            margin-left: 2.5%;
            margin-right:2.5%;
        }
        #second {
            margin-left: 2.5%;
            margin-right:2.5%;
            width: 44%;
            float:left;
        }
        .newshead{
            font-family: Futura, "Trebuchet MS";
            font-size: 70px;
            color:white;
            margin-top: 0px;
            margin-left: 0px;
            margin-bottom: 0px;
            margin-right: 0px;
            text-align: center;
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
          }
      </style>
      <script>
        function loadNews(){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
              var newsjson = JSON.parse(this.responseText);
              for(var i=0; i<newsjson.articles.length-1; ++i){
                //if(newsjson.articles[i].source.name=="TechCrunch"){
                 document.getElementById("vergenews").innerHTML += "<br><div class='art-boxed'><a href=" + newsjson.articles[i].url +">" + newsjson.articles[i].title +"</a></div>";
                //}
              }
            }
          };
          xhttp.open("GET", "https://newsapi.org/v2/top-headlines?sources=the-verge&apiKey=091bc7dbcc53498eba20900e0f1974e5");
          xhttp.send();


          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
              var newsjson = JSON.parse(this.responseText);
              for(var i=0; i<newsjson.articles.length-1; ++i){
                //if(newsjson.articles[i].source.name=="TechCrunch"){
                 document.getElementById("polygonnews").innerHTML += "<br><div class='art-boxed'><a href=" + newsjson.articles[i].url +">" + newsjson.articles[i].title +"</a></div>";
                //}
              }
            }
          };
          xhttp.open("GET", "https://newsapi.org/v2/top-headlines?sources=polygon&apiKey=091bc7dbcc53498eba20900e0f1974e5");
          xhttp.send();
        }
      </script>
    </div>
      <div id="box5">
        <div class="topnav" id= "navbar">
          <!-- Centered link -->
          <div class="topnav-centered">
            <a href="home.php" ><img src="omnigames logo.png" width="60" height="37.5"></a>
          </div>

          <!-- Left-aligned links (default) -->
          <a href="pong.php">Pong</a>
          <a href="snake.php">Snake</a>
          <a href="tetris.php">Tetris</a>

          <!-- Right-aligned links -->
          <div class="topnav-right">
            <a> Hello <?php session_start(); echo $_SESSION['user']; ?></a>
            <a href="news.php" class="active">News</a>
            <a href="contact.php">About Us</a>
          </div>
        </div>
      </div>
    </head>

    <body onload="javascript:loadNews()">
      <h1 class="newshead" style="">Tech & Gaming News:</h1>
      <div id = "first">
      <h2 style="color:white;">The Verge News:</h2>
        <div class="newsname" id="vergenews"></div>
      </div>

      <div id="second">
      <h2 style="color:white;">Polygon News:</h2>
      <div class="newsname" id="polygonnews"></div>
    </div>
    </body>
</html>
