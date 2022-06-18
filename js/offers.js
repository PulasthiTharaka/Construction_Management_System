var myIndex = 0;
imageSlider();
    
    function imageSlider() {
      var i;
      var x = document.getElementsByClassName("fade");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(imageSlider, 3000);    
    }