<!DOCTYPE html>
<html>
<body>

<script>
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","cards.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 

document.write("<table border='1'>");
var x=xmlDoc.getElementsByTagName("card");
for (i=0;i<100;i++)
  { 
  var urlString = "\""+x[i].getElementsByTagName("set")[0].getAttribute("picURL")+"\"";
  document.write("<tr><td>");
  document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
  document.write("</td><td>");
  document.write("<img src="+urlString+" alt=\"\">");
  document.write("</td></tr>");
  }
document.write("</table>");
</script>
</body>
</html>
