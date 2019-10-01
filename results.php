<html>
 <head>
  <meta charset="utf-8">
  <link rel="StyleSheet" href="Design.css" type="text/css" media="screen">
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBODinD-y0Bmyd-ndlRsyMvlOo9IkzRqk8&libraries=places&sensor=false"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 </head>
 <body>
  <div class="container">
   <header class="header-shadow">
     <a href="/DSA"><img src="images/logo.png" style="position:absolute;width:300px;height:100px;margin-right:1000px;margin-top:5px;"></a>
    <H1 align="center">Vineyards & wines</h1>
    <a href="/DSA/search.php"><img src="images/search.png" style="position:absolute;width:100px;height:50px;right:0;top:0;margin-top:30px;margin-right:20px;"></a>
   </header>


   
   <div class="wrap" style="min-height:100%;margin-bottom:-50px;z-index:0;">
    <div class="resultbox" style="margin-top:200px;margin-bottom:50px;border:0px solid black;">
    <h2 style="text-align:center;">Search Results</h2>
   
   
    <?php
     error_reporting(0);
     $region = $_GET["region"];
     $model = $_GET["model"];
     $type = $_GET["type"];
     $country = $_GET["country"];
     $sweetness = $_GET["sweetness"];
     echo "<p style='text-align:center;color:red;font-family:Arial;font-size:13;'>";
     echo $region;
     if ($region != null && ($model != null || $type != null || $country != null || $sweetness != null)){
      echo "&nbsp;&nbsp;&nbsp";}
     echo $model;
     if ($model != null && ($type != null || $country != null || $sweetness != null)){
      echo "&nbsp;&nbsp;&nbsp";}
     echo $type;
     if ($type != null && ($country != null || $sweetness != null)){
      echo "&nbsp;&nbsp;&nbsp";}
     echo $country;
     if ($country != null && $sweetness != null){
      echo "&nbsp;&nbsp;&nbsp";}
     echo $sweetness;
     echo "</p>";
      
    ?>
    <hr>
    
    <div style="width: 100%;border: 0px solid red;display:table;display: flex; justify-content: center;flex-wrap: wrap;">
<div class="floating-box"><img src="https://photos-2.dropbox.com/t/2/AADsHq8q15t7wMbXQKoseYbVgMJxLvySu4qSl85hUyxLkQ/12/292714931/jpeg/32x32/1/_/1/2/billibilli.jpg/EIbGnYYFGGsgAigC/BaIhdxFX89PzKOcbPXytMABzKr4AZ1W2qoVK2cvWSPo?size=2048x1536&size_mode=3" style="width:150px;height:225px;">
 <div class="label">
  <p>Alto Adige Pinot Nero DOC 2014<p>
  <div class="over"  style="cursor: pointer;" onclick="window.location='/DSA/sub-result.php';"></div>
 </div>
</div>
<div class="floating-box" style="border: 3px solid #AAD876;">Floating box</div>
<div class="floating-box">Floating box</div>
<div class="floating-box">Floating box</div>
<div class="floating-box">Floating box</div>
<div class="floating-box">Floating box</div>
<div class="floating-box">Floating box</div>
<div class="floating-box">Floating box</div>
</div>
    
    
    
    
    
    
    
    
   </div>
   
   
   </div>
   <footer id="footer-position">Copyright &copy; UWE DSA Web Project</footer>
   </div>
   
  </body>
</html>