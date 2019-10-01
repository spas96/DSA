   

    function change_background(){
     $(window).on('beforeunload', function(){
       $(window).scrollTop(0);
     });
     var n=1;
     setInterval(function(){ 
      
     
     n=n+1;
     if(n<4){
      document.getElementById('parallax').style.backgroundImage="url(images/img"+n+".jpg)"; 
     }
     else{
      n=1;
      document.getElementById('parallax').style.backgroundImage="url(images/img"+n+".jpg)"; 
     }
     }, 3000);
     
     $('.scroll').click(function () {
      $('html, body').animate({scrollTop:$(document).height()}, 3000);
    });
       

    } 
 
  