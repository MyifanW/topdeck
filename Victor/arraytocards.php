<html>
	<head>
	
	<script>
	var blah = "Carrier Pigeons;Exile;Inheritance;";
	
	
	function cardSearch2(string)
	{
 
	document.getElementById("test").innerHTML="";
 	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
 		xmlhttp=new XMLHttpRequest();
 	}else{// code for IE6, IE5
 		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 	}
 	xmlhttp.open("GET","cards.xml",false);
 	xmlhttp.send();
	xmlDoc=xmlhttp.responseXML; 
 	var x=xmlDoc.getElementsByTagName("card");
 	
 	var newHTML = "<table>";

 		

 	
 	//get name textBox info
	var nameArr = decodeURIComponent(string);
	var name = nameArr.split(";");
	
	for(j=0;j<name.length-1;j++){
		if(name[j] == null){
		
		}else{
			for (i=0;i<1000;i++){ //change 1000 to however many cards you want to search through in xml
				if(nameChecker()){ 
					var cname = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
					
					var ctype = x[i].getElementsByTagName("type")[0].childNodes[0].nodeValue;
					var urlString = "\""+x[i].getElementsByTagName("set")[0].getAttribute("picURL")+"\"";
					newHTML+="<tr><td align=\"center\">"+"<div id=\""+cname+"\" style=\"padding-left:100px;\">";
					newHTML+="</br></br>";
					newHTML+="<img src="+urlString+"alt=\"\">";
					
					
					var prev="";
					prev="";
					prev+="<b>Name:</b>  "+x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
					prev+="</br></br>";
					prev+="<b>Set:</b>  "+x[i].getElementsByTagName("set")[0].childNodes[0].nodeValue;
					prev+="</br></br>";
					prev+="<b>Mana Cost:</b>  "+x[i].getElementsByTagName("manacost")[0].childNodes[0].nodeValue;
					prev+="</br></br>";
					prev+="<b>Type:</b>  "+x[i].getElementsByTagName("type")[0].childNodes[0].nodeValue;
					prev+="</br></br>";
					prev+="<b>Card Text:</b>  "+x[i].getElementsByTagName("text")[0].childNodes[0].nodeValue;
					prev+="</br></br>";
					prev+="</div></td></tr>";
					
					
					newHTML+="<div style=\"float:bottom;\"><button type=\"button\" class=\"btn btn-default\" onclick=preview(";
					newHTML+="\""+encodeURIComponent(prev)+"\"";
					newHTML+=")>preview</button></div>";
					
					newHTML+="<div style=\"float:bottom;\"><button type=\"button\" class=\"btn btn-default btn-xs\" onclick=storeCard(";
					newHTML+="\""+encodeURIComponent(cname)+"\"";
					newHTML+=")>Add</button></div>";
					newHTML+="</td></tr></div>";
					
					break;
					
					
					
					
					
					
				}
			}
		}
	}
 	newHTML+="</table>";
	
 	document.getElementById("test").innerHTML = newHTML;
	
 	//technically the end of cardSearch2 function;
 	
 	
	function nameChecker(){
		var cardName = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
		if(name[j] == "" || cardName.search(name[j]) != -1){
			
			return true;
		}
		return false;
	}
  }
	</script>

	</head>
	<body>
	<div id="test">
	<button type="button" onclick=cardSearch2(encodeURIComponent(blah))>BUTTON</button>
	</div>
	</body>
</html>