 function bindInfoWindow(marker, map, infowindow, text) {
     marker.addListener('mouseover', function() {
      infowindow.setContent(text);
      infowindow.open(map, this);
     });
     marker.addListener('click', function() {
      alert("Go to page");
     });
     infowindow.addListener('click', function() {
      alert("Go to page");
     });
    } 
    function initialize()
    {
     var locations = [
      ['Paris', 48.8566, 2.3522, 1],
      ['Lyon', 45.7640, 4.8357, 2],
      ['Marseille', 43.2965, 5.3698, 3],
      ['Rhone', 45.7351, 4.6108, 4],
      ['Asd', 46.5878, 2.8878,5],
     ];

     var latlng = new google.maps.LatLng(46.2276,2.2137);
     var latlng2 = new google.maps.LatLng(-25.4222191,133.8238387);
     var myOptions =
     {
      zoom: 5,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
     };
     var image = ["/DSA/pins/red.png","/DSA/pins/yellow.png","/DSA/pins/purple.png","/DSA/pins/green.png","/DSA/pins/blue.png"];
     var myOptions2 =
     {
      zoom: 4,
      center: latlng2,
      mapTypeId: google.maps.MapTypeId.ROADMAP
     };

     var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
     var map2 = new google.maps.Map(document.getElementById("map_canvas_2"), myOptions2);
     var marker, i;
     var infowindow = new google.maps.InfoWindow();;
     var infotext = [" <a href='/DSA/sub-result.php'><div style='max-width:250px;' id='box'> <h2>Alto Adige Pinot Nero DOC 2014 - Franz Haas</h2> <img src='https://photos-2.dropbox.com/t/2/AADsHq8q15t7wMbXQKoseYbVgMJxLvySu4qSl85hUyxLkQ/12/292714931/jpeg/32x32/1/_/1/2/billibilli.jpg/EIbGnYYFGGsgAigC/BaIhdxFX89PzKOcbPXytMABzKr4AZ1W2qoVK2cvWSPo?size=2048x1536&size_mode=3' style='margin-left:calc(50% - 66px);margin-bottom:30px;'/> </div></a>", "Hello World 2", "Hello World 3", "Hello World 4"];

     for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
       position: new google.maps.LatLng(locations[i][1], locations [i][2]),
       map:map,
       icon: image[i],
       size: new google.maps.Size(20, 32)
      });
      bindInfoWindow(marker, map, infowindow, infotext[i]); 
     }
  
     var legend = document.createElement('div');
     legend.id = 'legend';
     var content = [];
     content.push('<h3>Type of Wines*</h3>');
     content.push('<p><div class="color red"></div>Red</p>');
     content.push('<p><div class="color yellow"></div>White</p>');
     content.push('<p><div class="color purple"></div>Rose</p>');
     content.push('<p><div class="color green"></div>Fortified Wine</p>');
     content.push('<p><div class="color blue"></div>Sparkling Wine</p>');
     legend.innerHTML = content.join('');
     legend.index = 1;
     map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(legend);
          
     
     
     

     var myMarker2 = new google.maps.Marker(
        {
            position: latlng2,
            map: map2,
      title:"Italy"

     });

    }