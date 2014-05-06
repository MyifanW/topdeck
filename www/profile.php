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

function load()
{
	loadCollectionCards();
}

var currentVisable = "myWishlist";
 function toggle_visibility(id) {
       
       var e = document.getElementById(id);
       var b;
	   
	   if( id == "myCollection"){
			loadCollectionCards();
			document.getElementById("leftSquare").innerHTML = "Collection";
			b = document.getElementById("myWishlist");
			currentVisable = "myCollection";
			
	   } else {
			loadWishlistCards();
			document.getElementById("leftSquare").innerHTML = "Wishlist";
			b = document.getElementById("myCollection");
			currentVisable = "myWishlist";
	   }
          e.style.display = 'block';
		  b.style.display = 'none';
    
    }

function loadCollectionCards(){

	  if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
		{
			var blah = xmlhttp.responseText;
		  //document.getElementById("myCollection").innerHTML= blah;
		  cardSearch2(encodeURIComponent(blah), "myCollection");
		}
	  }
	  xmlhttp.open("GET","loadcollectcard.php",true);
	  xmlhttp.send();
}
function loadWishlistCards(){

	  if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
		{
			var blah = xmlhttp.responseText;
		  //document.getElementById("myCollection").innerHTML= blah;
		  cardSearch2(encodeURIComponent(blah), "myWishlist");
		}
	  }
	  xmlhttp.open("GET","loadwishcard.php",true);
	  xmlhttp.send();
}	
function cardSearch2(string, id)
{

	document.getElementById(id).innerHTML="";
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}else{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET","cards.xml",false);
	xmlhttp.send();
	xmlDoc=xmlhttp.responseXML; 
	var x=xmlDoc.getElementsByTagName("card");

	var newHTML = "<table class=\"table table-condensed table-hover\">";

		


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
					newHTML+="<tr><td align=\"center\">"+"<div id=\""+cname+"\">";
					
					
					
					
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
					
					
					newHTML+="<button id=\"cardButton\" type=\"button\" class=\"btn btn-default\" onclick=preview(\""+encodeURIComponent(prev)+"\")>"+cname+"</button>";
					newHTML+="<div><button type=\"button\" class=\"btn btn-default btn-xs\" onclick=storeCard(";
					newHTML+="\""+encodeURIComponent(cname)+"\"";
					newHTML+=")>Remove</button></div>";
					newHTML+="</tr></div>";
					
					break;
					
					
					
					
					
					
				}
			}
		}
	}
newHTML+="</table>";

document.getElementById(id).innerHTML = newHTML;

//technically the end of cardSearch2 function;


	function nameChecker(){
		var cardName = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
		if(name[j] == "" || cardName.search(name[j]) != -1){
			
			return true;
		}
		return false;
	}
}	
	
function storeCard(str1){
	var str = decodeURIComponent(str1);
	  if (str=="") {
		document.getElementById("txtHint").innerHTML="";
		return;
	  } 
	  if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
		{		  
			alert(xmlhttp.responseText);
			loadCollectionCards();
		}
	  }
	  xmlhttp.open("GET","storecard.php?q="+str,true);
	  xmlhttp.send();
}
function storeWishCard(str1){
	var str = decodeURIComponent(str1);
	  if (str=="") {
		document.getElementById("txtHint").innerHTML="";
		return;
	  } 
	  if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
		{		  
			alert(xmlhttp.responseText);
			loadWishlistCards();
		}
	  }
	  xmlhttp.open("GET","storewishcard.php?q="+str,true);
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
				
				
				newHTML+="<div style=\"float:bottom;\"><button type=\"button\" class=\"btn btn-default\" onclick=preview(";
				newHTML+="\""+encodeURIComponent(prev)+"\"";
				newHTML+=")>preview</button></div>";
				
				newHTML+="<div style=\"float:bottom;\">";
				newHTML+="<button type=\"button\" class=\"btn btn-default btn-xs\" onclick=storeCard(";
				newHTML+="\""+encodeURIComponent(cname)+"\"";
				newHTML+=")>Add to Collection</button>";
				newHTML+="<button type=\"button\" class=\"btn btn-default btn-xs\" onclick=storeWishCard(";
				newHTML+="\""+encodeURIComponent(cname)+"\"";
				newHTML+=")>Add to Wishlist</button>";
				newHTML+="</div>";
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
 	var newHTML = "<table class=\"table\">";
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
 				newHTML+="<tr><td>"+"<div id=\""+cname+"\">";
 				
				
				
				
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
				
				newHTML+="<button id=\"cardButton\" type=\"button\" class=\"btn btn-default\" onclick=preview(\""+encodeURIComponent(prev)+"\")>"+cname+"</button>";
				newHTML+="<div><button type=\"button\" class=\"btn btn-default btn-xs\" onclick=storeCard(";
				newHTML+="\""+encodeURIComponent(cname)+"\"";
				newHTML+=")>Remove</button></div>";
				newHTML+="</tr></div>";
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

  <body onload="load()">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="logo.png" alt="TOPDECK" height="40" width="400"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="myMessages.php"><span class="glyphicon glyphicon-envelope"></span> Mail </a></li>
            <li><a href="myProfile.php"><span class="glyphicon glyphicon-user"></span> Profile   &nbsp; &nbsp;</a></li>
          </ul>
        </div>
      </div>
    </div>

	<div class="masthead">
        <ul class="nav nav-justified">
		  
          <li class="active"><a href="profile.php">My Binder</a></li>
          <li><a href="searchplayers.php">Search Traders</a></li>
          <li><a href="searchevents.php">Search Events</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
    </div>
	
	
<body>
<div class="mini-layout fluid">
		<div  class="mini-layout-sidebar col-lg-3">
			
				<button type="button" style="float:left;" class="btn btn-default " onclick=toggle_visibility("myCollection")>My Collection</button>
				<button type="button" style="float:right;"class="btn btn-default " onclick=toggle_visibility("myWishlist")>My Wishlist</button>
				</br>
				<div class="leftSearch well well-sm" style="text-align:center; font-size:200%;" id="leftSquare">
					Collection
					</div>
				<div id="myCollection" class="leftPanel">
				
				</div>
				
				<div id="myWishlist" class="leftPanel" style="display:none;">
				
				
				</div>
		</div>
    <div class="col-lg-9">
	
		<div class="search well row">
			<div class="col-lg-3">
				<input type="text" class="form-control" id="cardName" placeholder="Name">
				</br>
			</div>
			
			<div class="col-md-3">
				
				Type:
				<select id="typeDropDown" >
					<option value="None">None</option>
					<option value="Sorcery">Sorcery</option>
					<option value="Instant">Instant</option>
					<option value="Creature">Creature</option>
					<option value="Artifact">Artifact</option>
					<option value="Enchantment">Enchantment</option>
				</select>
			</div>
			<div class="checkboxes col-md-4">
				
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
			
				<div class="searchButton col-lg-1">
					<button class="btn btn-default btn-lg" onclick=cardSearch()>Search</button>
				</div>	
		</div>		
		
		<div class="col-lg-9">
			<div id ="middleSquare" class="mini-layout-body">
		
			</div>
		</div>
		<div class="col-lg-3">
			<div id="rightSquare" class="mini-layout-sidebar-right">	
			</div>
		</div>
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
