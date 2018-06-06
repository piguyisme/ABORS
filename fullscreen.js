var full = false
$('#toggle').on('click', function(){
  // if already full screen; exit
  // else go fullscreen
  if(full===false) {
    document.getElementById("timer").style.paddingtop = "500px";
    document.getElementById("timer").style.paddingbottom = "500px";
    full = true
  }
  else if(full===true) {
    document.getElementById("timer").style.paddingtop = "100px";
    document.getElementById("timer").style.paddingbottom = "100px";
  }
});