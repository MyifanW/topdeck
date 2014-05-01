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

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
<script>

 function cardSearch(){
 
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
		null;
	}
 
 	//get drop down info
	
 	type = document.getElementById("typeDropDown").value;
 	
 	//get name textBox info
 	name = document.getElementById("cardName").value;
 	
 	if(color == null && type == "None" && name == null){
 	
 	}else{
 		for (i=0;i<1000;i++){ //change 1000 to however many cards you want to search through in xml
 			if(colorCheck() && typeCheck() && nameCheck()){ 
 				var urlString = "\""+x[i].getElementsByTagName("set")[0].getAttribute("picURL")+"\"";
 				newHTML+="<tr><td align=\"center\">"+"<div style=\"padding-left:100px;\">";
 				newHTML+="</br></br>";
 				newHTML+="<img src="+urlString+"alt=\"\">";
				newHTML+="</td></div><td align=\"left\">"+"<div style=\"padding-left:100px;\">";
 				newHTML+="<b>Name:</b>  "+x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
				newHTML+="</br></br>";
				newHTML+="<b>Set:</b>  "+x[i].getElementsByTagName("set")[0].childNodes[0].nodeValue;
				newHTML+="</br></br>";
				newHTML+="<b>Mana Cost:</b>  "+x[i].getElementsByTagName("manacost")[0].childNodes[0].nodeValue;
				newHTML+="</br></br>";
				newHTML+="<b>Type:</b>  "+x[i].getElementsByTagName("type")[0].childNodes[0].nodeValue;
				newHTML+="</br></br>";
				newHTML+="<b>Card Text:</b>  "+x[i].getElementsByTagName("text")[0].childNodes[0].nodeValue;
 				newHTML+="</br></br>";
 				newHTML+="</div></td></tr>";
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
		if(cardType.search(type) != -1 || type == "None"){
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
		
		<!-- checkboxes -->
		<label class="checkbox">
			<input type="checkbox" id="RedBox" value="Red">
			Red
		</label>
		
		<label class="checkbox">
			<input type="checkbox" id="BlueBox" value="Blue">
			Blue
		</label>
		
		<label class="checkbox">
			<input type="checkbox" id="GreenBox" value="Green">
			Green
		</label>
		
		<label class="checkbox">
			<input type="checkbox" id="WhiteBox" value="White">
			White
		</label>
		
		<label class="checkbox">
			<input type="checkbox" id="BlackBox" value="Black">
			Black
		</label>
			
		<label class="checkbox">
			<input type="checkbox" id="ColorlessBox" value="colorless">
			Colorless
		</label>
		
		<!-- end checkboxes -->
		
		<button onclick=cardSearch()>Search</button>
		

		
		</div>
        <div id ="middleSquare" class="mini-layout-body">
		</div>
		<div class="mini-layout-sidebar-right"></div>
	</div>
	
	

</body>
	
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
