var subbton1 = document.getElementById('subbton');


subbton1.addEventListner('click', function(e)){

var xhttp;
var  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
    if(xhttp.readyState == 4 && xhttp.status == 200 ){
      var answer = document.getElementById("result");
      answer.innerHTML = xhttp.responseText;
    }
  }
  xhttp.open ("GET", "traitement.ajax.php", true);
  xhttp.send(null);


}
