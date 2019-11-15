  function timer() {
    var min = sec / 60;
    var hour = min / 60;
    var day = hour / 24;

    var days = Math.floor(hour / 24);
    var hours = Math.floor(hour % 24);
    var minutes = Math.floor(min % 60);
    var seconds = Math.floor(sec % 60);

    function addzero(n) {
      if (n < 10) {
        return ("0" + n);
      } else {
        return n;
      }
    };
    days = addzero(days);
    hours = addzero(hours);
    minutes = addzero(minutes);
    seconds = addzero(seconds);



    document.getElementById("d").innerHTML = days + ":";
    document.getElementById("h").innerHTML = hours + ":";
    document.getElementById("m").innerHTML = minutes + ":";
    document.getElementById("s").innerHTML = seconds;
    sec = sec - 1;

    if (sec < 0) {
      sec = false;
    };
  };
  
  
  window.onload = function() {
    timer(); 
    setInterval('timer()', 1000);
  }; 