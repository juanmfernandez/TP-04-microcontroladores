function ajaxSend(){
  var xmlhttp=false;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
      }
  }

  if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}
function sendData(){
  var temperatura= document.forms[0].elements[0].value;
  var humedad= document.forms[0].elements[1].value;
  var api_key= document.forms[0].elements[2].value;
  console.log(humedad);
  if (temperatura === '' || humedad === '') {
    document.querySelector(".result").innerHTML  =  "Faltan temperatura o humedad";
    return false;
  }
  divResultado = document.getElementById('result');
  ajax=ajaxSend();
  ajax.open("POST", "subida.php",true);
  ajax.onreadystatechange=function() {
    if (ajax.readyState==4) {
      document.querySelector(".result").innerHTML  =  ajax.responseText;
      document.forms[0].elements[0].value = null
      document.forms[0].elements[1].value = null
    }else{
      console.log(ajax.readyState);
    }
  }
  ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  ajax.send("temperatura="+temperatura+"&humedad="+humedad+"&api_key="+api_key);
}
