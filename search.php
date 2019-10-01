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
    <div class="searchbox" style="margin-top:200px;margin-bottom:50px;border:2px solid black;">
    <h2 style="text-align:center;">Search for Wines</h2>
    <hr>
    <div style="overflow-x:auto;">
     <form id="search-box" action="results.php" method="get">
      <section>
        <table style="margin:0 auto;">
         <tr>
          <td style="padding: 0 50px 0 0;">Region<input type="text" name="region" placeholder="Burgundy" /></td>
          <td>Model<input type="text" name="model" placeholder="Pinot Noir"/></td>
         </tr>
        </table>
      

      </section>

     
     <section style="margin-top:50px;">
     

    <label style="margin-right:50px;">
    By Type <br>
   
    <select name="type"> 
    <option value="">Any</option>
    <option value="White">White</option>
    <option value="Red">Red</option>
    <option value="Rose">Rose</option>
    <option value="Sparkling">Sparkling</option>
    <option value="Fortified">Fortified</option>
    </select> 
   </label>
   <label style="margin-right:50px;">
    By Country<br>
    <select name="country">
    <option value="">Any</option>
    <option value="France">France</option>
    <option value="Australia">Australia</option>
    </select><br>
   </label>
   <label>
    By Sweetness<br>
    <select name="sweetness">    
    <option value="">Any</option>
    <option value="Dry">Dry</option>
    <option value="Sweet">Sweet</option>
    </select><br>
   </label>
   <br>
   <br>
   <br>
    <button class="searchbutton">Search</button>
    </section>
    
    
    </form>
   </div>
  

    </div>

   </div>

   </div>
   <footer>Copyright &copy; UWE DSA Web Project</footer>
   </div>
  </body>
</html>