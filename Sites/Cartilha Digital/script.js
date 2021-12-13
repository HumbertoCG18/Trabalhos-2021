aumentado = 25;
normal = 17;
fontD= OpenDyslexic;

function myFunction() {
  var checkBox = document.getElementById("myCheck");

  if (checkBox.checked == true){
    document.body.style.fontSize=aumentado+"px";
    document.body.style.fontFamily= 'OpenDyslexic';
  } 

  if (checkBox.checked == false){
    document.body.style.fontSize=normal+"px";
    document.body.style.fontFamily= 'Poppins';
  } 
}