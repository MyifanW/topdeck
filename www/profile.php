<!DOCTYPE html>
<html lang=en>
<head>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles f
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">
	<link href="body.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	

   


	
<script>
var currentVisable = "myWishlist";
 function toggle_visibility(id) {
       
       var e = document.getElementById(id);
       var b;
	   
	   if( id == "myCollection"){
			b = document.getElementById("myWishlist");
			currentVisable = "myCollection";
			
	   } else {
			b = document.getElementById("myCollection");
			currentVisable = "myWishlist";
	   }
          e.style.display = 'block';
		  b.style.display = 'none';
    
    }
	
	
function storeCard(str1){
	var str = decodeURIComponent(str1);
	 alert(str);
	  if (str=="") {
		document.getElementById("txtHint").innerHTML="";
		return;
	  } 
	  alert(str);
	  if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
	 {
		  document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	  }
	  xmlhttp.open("GET","storecard.php?q="+str,true);
	  xmlhttp.send();
}
  function preview(string){
	document.getElementById("rightSquare").innerHTML=decodeURIComponent(string);
  }
  
  //cardSearch used for main search
 function cardSearch(){
 
	document.getElementById("rightSquare").innerHTML="";
 	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
 		xmlhttp=new XMLHttpRequest();
 	}else{// code for IE6, IE5
 		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 	}
 	xmlhttp.open("GET","cards.xml",false);
 	xmlhttp.send();
	xmlDoc=xmlhttp.responseXML; 
 	var x=xmlDoc.getElementsByTagName("card");
 	
 	var radios = document.getElementsByName('optionsRadios');
 	var newHTML = "<table>";
 	var color = null;
 	var name = "";
 	var type = "None";
 		
 	var x=xmlDoc.getElementsByTagName("card");
 	
 	//get Check Box info
		//figure out how to do multicolor
	if(document.getElementById('RedBox').checked){
		color = "R";
	}else if(document.getElementById('BlackBox').checked){
		color = "B";
	}else if(document.getElementById('BlueBox').checked){
		color = "U";
	}else if(document.getElementById('GreenBox').checked){
		color = "G";
	}else if(document.getElementById('WhiteBox').checked){
		color = "W";
	}else if(document.getElementById('ColorlessBox').checked){
		color = "colorless";
	}else{
		color = null;
	}
 
 	//get drop down info
	
 	type = document.getElementById("typeDropDown").value;
 	
 	//get name textBox info
 	name = document.getElementById("cardName").value;
	
 	
 	if(color == null && type == "None" && name == null){
 	
 	}else{
 		for (i=0;i<1000;i++){ //change 1000 to however many cards you want to search through in xml
 			if(colorCheck() && typeCheck() && nameCheck()){ 
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
				
				
				newHTML+="<div style=\"float:bottom;\"><button type=\"button\" onclick=preview(";
				newHTML+="\""+encodeURIComponent(prev)+"\"";
				newHTML+=")>preview</button></div>";
				
				newHTML+="<div style=\"float:bottom;\"><button type=\"button\" onclick=storeCard(";
				newHTML+="\""+encodeURIComponent(cname)+"\"";
				newHTML+=")>Add</button></div>";
				newHTML+="</td></tr></div>";
 				continue;
				
				
				
				
 				
				
 			}
 		}
 	}
 	newHTML+="</table>";
	
 	document.getElementById("middleSquare").innerHTML = newHTML;
	
 	//technically the end of cardSearch function;
 	
 	function colorCheck(){
 		if(color != null){
 			var el = x[i].getElementsByTagName("color")[0];
 			if (el == null){  //colorless cards only
 				if(color == "colorless"){  
 					return true;
 				}
 			}else {  //colored cards
 				if(color == x[i].getElementsByTagName("color")[0].childNodes[0].nodeValue){
 					el = x[i].getElementsByTagName("color")[1];
 					if (el == null) {
 							return true;
 					}
 				}
 			}
 		}else{
 			return true;
 		}
 		return false;
 	}
	
	function typeCheck(){
		var cardType = x[i].getElementsByTagName("type")[0].childNodes[0].nodeValue;
		if(type == "None" || cardType.search(type) != -1){
			return true;
		}
		return false;
	}
	
	function nameCheck(){
		var cardName = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
		if(name == "" || cardName.search(name) != -1){
			return true;
		}
		return false;
	}
  }
  
  //card Filter used for myCollection and myWishlist
  function cardFilter(divSquare){
	document.getElementById("rightSquare").innerHTML="";
 	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
 		xmlhttp=new XMLHttpRequest();
 	}else{// code for IE6, IE5
 		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 	}
 	xmlhttp.open("GET","cards.xml",false);
 	xmlhttp.send();
	xmlDoc=xmlhttp.responseXML; 
 	var x=xmlDoc.getElementsByTagName("card");
 	
 	var radios = document.getElementsByName('optionsRadios');
 	var newHTML = "<table border=1>";
 	var color = null;
 	var name = "";
 	var type = "None";
 		
 	var x=xmlDoc.getElementsByTagName("card");

 	//get Check Box info
		//figure out how to do multicolor
	if(document.getElementById('RedBox2').checked){
		color = "R";
	}else if(document.getElementById('BlackBox2').checked){
		color = "B";
	}else if(document.getElementById('BlueBox2').checked){
		color = "U";
	}else if(document.getElementById('GreenBox2').checked){
		color = "G";
	}else if(document.getElementById('WhiteBox2').checked){
		color = "W";
	}else if(document.getElementById('ColorlessBox2').checked){
		color = "colorless";
	}else{
		color = null;

 
 	//get drop down info
	
 	type = document.getElementById("typeDropDownLeft").value;
 	
 	//get name textBox info
 	name = document.getElementById("cardNameLeft").value;
	
 	}
 	if(color == null && type == "None" && name == null){
 	
 	}else{
 		for (i=0;i<1000;i++){ //change 1000 to however many cards you want to search through in xml
 			if(colorCheck() && typeCheck() && nameCheck()){ 
				var cname = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
				
				var ctype = x[i].getElementsByTagName("type")[0].childNodes[0].nodeValue;
 				var urlString = "\""+x[i].getElementsByTagName("set")[0].getAttribute("picURL")+"\"";
 				newHTML+="<tr><td align=\"center\">"+"<div id=\""+cname+"\" style=\"padding-left:100px;\">";
 				newHTML+="</br></br>";
 				
				
				
				
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
				
				newHTML+="<button id=cardButton type=\"button\" style=\"float:left;\" class=\"btn btn-default btn-lg\" onclick=preview(\""+encodeURIComponent(prev)+"\")>"+cname+"</button>";
				newHTML+="<td>";
				newHTML+="<div style=\"float:bottom;\"><button type=\"button\" onclick=storeCard(";
				newHTML+="\""+encodeURIComponent(cname)+"\"";
				newHTML+=")>Remove</button></div>";
				newHTML+="</td></tr></div>";
 				continue;
				
				
				
				
 				
				
 			}
 		}
 	}
 	newHTML+="</table>";
	
 	document.getElementById(divSquare).innerHTML = newHTML;
	
 	//technically the end of cardSearch function;
 	
 	function colorCheck(){
 		if(color != null){
 			var el = x[i].getElementsByTagName("color")[0];
 			if (el == null){  //colorless cards only
 				if(color == "colorless"){  
 					return true;
 				}
 			}else {  //colored cards
 				if(color == x[i].getElementsByTagName("color")[0].childNodes[0].nodeValue){
 					el = x[i].getElementsByTagName("color")[1];
 					if (el == null) {
 							return true;
 					}
 				}
 			}
 		}else{
 			return true;
 		}
 		return false;
 	}
	
	function typeCheck(){
		var cardType = x[i].getElementsByTagName("type")[0].childNodes[0].nodeValue;
		if(type == "None" || cardType.search(type) != -1){
			return true;
		}
		return false;
	}
	
	function nameCheck(){
		var cardName = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
		if(name == "" || cardName.search(name) != -1){
			return true;
		}
		return false;
	}
  }
  
  
  </script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TopDeck Traders</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Profile</a></li>
          </ul>
        </div>
      </div>
    </div>

	<div class="masthead">
        <h3 class="text-muted">TopDeck Traders</h3>
        <ul class="nav nav-justified">
		  
          <li class="active"><a href="#">Profile</a></li>
          <li><a href="#">Search Traders</a></li>
          <li><a href="#">Search Events</a></li>
          <li><a href="#">About</a></li>
        </ul>
    </div>
	
	
<body>
<div class="mini-layout fluid">
		<div  class="mini-layout-sidebar">
			
				<button type="button" style="float:right;" class="btn btn-default btn-lg" onclick=toggle_visibility("myCollection")>My Collection</button>
				<button type="button" style="float:right;"class="btn btn-default btn-lg" onclick=toggle_visibility("myWishlist")>My Wishlist</button>
			
		</div>
        <div id ="middleSquare" class="mini-layout-body">
		
		</div>
		
		<div class="search">
			
			<input type="text" id="cardName" placeholder="Name">
		<br><br>
		Type : 
		<select id="typeDropDown">
			<option value="None">None</option>
			<option value="Sorcery">Sorcery</option>
			<option value="Instant">Instant</option>
			<option value="Creature">Creature</option>
			<option value="Artifact">Artifact</option>
			<option value="Enchantment">Enchantment</option>
		</select>
			
		<div class="searchButton">
		<button onclick=cardSearch()>Search</button>
		</div>
		
	</div>
			
		<div id="rightSquare" class="mini-layout-sidebar-right">
		
		</div>
	</div>
	
	<div class="checkboxes">
		
		<div class="topcheck">
		<label>
			<input type="checkbox" id="WhiteBox" value="White">
			White
		</label>
		
		<label>
			<input type="checkbox" id="BlackBox" value="Black">
			Black
		</label>
		
		<label>
			<input type="checkbox" id="ColorlessBox" value="colorless">
			Colorless
		</label>
		</div>
		
		
		<div>
		<label>
			<input type="checkbox" id="RedBox" value="Red">
			Red
		</label>
		
		<label>
			<input type="checkbox" id="BlueBox" value="Blue">
			Blue
		</label>
		
		<label>
			<input type="checkbox" id="GreenBox" value="Green">
			Green
		</label>
		</div>
		
	</div>
	
	
	
	
	
	<div class="leftSearch" id="leftSquare">
		<input type="text" id="cardNameLeft" placeholder="Name">
		<br><br>
		Type : 
		<select id="typeDropDownLeft">
			<option value="None">None</option>
			<option value="Sorcery">Sorcery</option>
			<option value="Instant">Instant</option>
			<option value="Creature">Creature</option>
			<option value="Artifact">Artifact</option>
			<option value="Enchantment">Enchantment</option>
		</select>
			
		<div class="searchButton">
		<button onclick=cardFilter(currentVisable)>Search</button>
		</div>
		<div class="checkboxesLeft">
		<div>
		<label>
			<input type="checkbox" id="WhiteBox2" value="White">
			White
		</label>
		
		<label>
			<input type="checkbox" id="BlackBox2" value="Black">
			Black
		</label>
		
		<label>
			<input type="checkbox" id="ColorlessBox2" value="colorless">
			Colorless
		</label>
		</div>
		
		
		<div>
		<label>
			<input type="checkbox" id="RedBox2" value="Red">
			Red
		</label>
		
		<label>
			<input type="checkbox" id="BlueBox2" value="Blue">
			Blue
		</label>
		
		<label>
			<input type="checkbox" id="GreenBox2" value="Green">
			Green
		</label>
		</div>
		</div>
		
	</div>

	<div id="myCollection" class="leftPanel">
	
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection
	myCollection myCollection myCollection myCollection myCollection

	</div>
	
	<div id="myWishlist" class="leftPanel">
	
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	myWishlist myWishlist myWishlist myWishlist myWishlist
	
	</div>
</body>
	

	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
