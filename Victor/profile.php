<!DOCTYPE html>
<html lang=en>
<head>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>TOP DECK</title>

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
	
	var newHTML = "<table border='1'>";
	var color = null;
	var name = null;
	var type = null;
		
	var x=xmlDoc.getElementsByTagName("card");
	
	//get radio info
	var radios = document.getElementsByName('optionsRadios');
	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
			// do whatever you want with the checked radio
			color = radios[i].value;
	
			// only one radio can be logically checked, don't check the rest
			break;
		}
	}
	
	//get drop down info
	var dropdowns = document.getElementById("typeDropDown");
	type = dropdowns.options[dropdowns.selectedIndex].value;
	
	//get name textBox info
	name = document.getElementById("cardName").value;
	
	if(color == null && type == "None" && name == null){
	
	}else{
		for (i=0;i<1000;i++){ //change 1000 to however many cards you want to search through in xml
			if(colorCheck() && typeCheck() && nameCheck()){ 
				var urlString = "\""+x[i].getElementsByTagName("set")[0].getAttribute("picURL")+"\"";
				newHTML+="<tr><td align=\"center\">";
				newHTML+="</br></br>";
				newHTML+="<img src="+urlString+" alt=\"\">";
				newHTML+="</br></br>";
				newHTML+="<b>"+x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue+"</b>";
				newHTML+="</br></br>";
				newHTML+="</td></tr>";
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
		
		if(type == x[i].getElementsByTagName("type")[0].childNodes[0].nodeValue || type == "None"){
			return true;
		}
		return false;
		
		//need to fix type check for creatures
	}
	
	function nameCheck(){
		if(name == "" || name == x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue){
			return true;
		}
		return false;
		
		//make this more indepth, search for sub strings
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
		<div class="mini-layout-sidebar">
		
		 

		<input type="text" id="cardName" placeholder="Name">
		<br><br>
		Type : 
		<select>
			<option value="None">none</option>
			<option value="sorcery">sorcery</option>
			<option value="instant">instant</option>
			<option value="creature">creature</option>
			<option value="artifact">artifact</option>
			<option value="enchantment">enchantment</option>
		</select>
		
		<!-- checkboxes -->
		<label class="checkbox">
			<input type="checkbox" id="RedBox" value="Red">
			Red
		</label>
		
		<label class="checkbox">
			<input type="checkbox" id="Bluebox" value="Blue">
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
			<input type="checkbox" id="ColorlessBox" value="Colorless">
			Colorless
		</label>
		
		
		<!-- end checkboxes -->
		
		<button onclick=colorSort()>Search</button>
		

		
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
