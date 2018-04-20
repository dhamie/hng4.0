<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Stage 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
   

    
    
<style>
  body{
        margin: 0;
        padding: 0;
        color: white;
        background:url(assets/diverse.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        font-family: "be";
  }


  #cover{
    width: 100%;
    background: rgba(0,0,0,.95);
    height: 100vh;
    text-align: center;
  }

  #date{
    font-family: none;
    margin: 0;
    font-family: "Allerta Stencil", Sans-serif;
  }

  #box{
    width: 70%;
    text-align: center;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    font-size: 5vmax;
  }

    @font-face {
      font-family: "be";
      src:url(assets/BEYNO.ttf)
      format("truetype");
    }



</style>
</head>

<body>

    <div id="cover">
      <div id="box">
        <p>WELCOME TO HOTELS.NG INTERNSHIP <span id="date">4.0</span></p>

        <?php 

            date_default_timezone_set('Africa/Lagos');
            echo date("l     ");
            echo "<span id='date'>";
            echo date('       Y.m.d');
            echo "</span>";
            echo "<br>";
            echo "Time: ";
            echo "<span id='date'>";
            echo date('H:i');
            echo "</span> pm";
            

        ?>
        
      </div>
    </div>

</body>
</html>