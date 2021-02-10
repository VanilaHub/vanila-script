<!DOCTYPE html>

<html lang="es">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Vanila-Anime</title>
        <link rel="icon" 
        type="image/png" 
        href="covers/vanilahub.png">
        </link>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {box-sizing: border-box;}
        
        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        
        .topnav {
          overflow: hidden;
          background-color: #ffffff;
        }
        
        .topnav a {
          float: left;
          display: block;
          color: rgb(0, 0, 0);
          text-align: center;
          padding: 20px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        
        .topnav a:hover {
          background-color: rgb(255, 81, 0);
          color: rgb(255, 255, 255);
        }
        
        .topnav a.active {
          background-color: #ff6600;
          color: white;
        }
        
        .topnav .search-container {
          float: right;
          color: white; 
        }
        
        .topnav input[type=text] {
          padding: 5px;
          width: 400px;
          margin-top: 14px;
          font-size: 17px;
          border: 10px;
          color: black;
        }
        
        .topnav .search-container button {
          float: right;
          padding: 6px 10px;
          margin-top: 13px;
          margin-right: 98px;
          background: rgb(255, 81, 0);
          font-size: 17px;
          border: 1px;
          cursor: pointer;
        }
        
        .topnav .search-container button:hover {
          background: rgb(255, 50, 0);
        }
        
        @media screen and (max-width: 600px) {
          .topnav .search-container {
            float: none;
          }
          .topnav a, .topnav input[type=text], .topnav .search-container button {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
          }
          .topnav input[type=text] {
            border: 1px solid rgb(0, 0, 0);
            background: rgb(255, 50, 0);  
          }
        }
    </style>  
    </head>
    <body style="background: 0px 0px rgb(255, 255, 255);"class="dark">

    <script type="text/javascript" >
      function active(){
        var searchBar = document.getElementById('searchBar');
          if(searchBar.value == 'Search...'){
            searchBar.value=''
            searchBar.placeholder = 'Search...'

           }
      }

      function inactive(){
        var searchBar = document.getElementById('searchBar');
          if(searchBar.value == ''){
            searchBar.value='Search...'
            searchBar.placeholder = ''

           }
  </script>
        <div class="topnav">
            <img><img>
            <a  href="http://localhost/blog/">Movies</a>
            <a class="active" href="anime.html">Anime</a>
            <a href="manga.html">Manga</a>
            <div class="search-container">
              <form method="post">
                <input type="text" placeholder="Search..." name="search">
                <button type="submit" name="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
        </div>
          
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <h2></h2>
 
        <div style="margin-left:5.9%;padding:1px 16px;height:1000px;">
        
    </body>
</html>

<?php
$con = new PDO("mysql:host=localhost;dbname=vanila-script",'root','');

if(isset($_POST["submit"])){
  $str = $_POST["search"];
  $sth = $con->prepare("SELECT * FROM `anime` WHERE nombre LIKE '%$str%' or imagenes LIKE  '%$str%' ");

  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth -> execute();
  echo '<br></br>';
  echo '<h4>Busquedas que contengan ' . $str .  ':' . '</p><br />';
    
  while($row = $sth->fetch())
  {
    
     ?>
     
     <table>
        <tr>
        <h3> <?php    ?></h3>
        <h4> </h4>
        <h5> <?php $imgdir= $row->imagenes;?></h5>
        <h5> <?php $href= $row->pagina;?></h5>
        
           
        </tr>
        <tr>
        
        
        <?php 
        echo  "<a href=\"$href\"><img src=\"$imgdir\" width=\" \" height=\"616\ /></a>";?>
         ; 
          '<a href=""> </a>' 
        
          
        </tr>
     </table>
<?php    
}


 {
    

  }

}
?>