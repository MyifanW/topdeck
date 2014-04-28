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
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","events.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 

document.write("<table border='1'>");
var x=xmlDoc.getElementsByTagName("event");
function colorSort(){
	
	var radios = document.getElementsByName('optionsRadios');

	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
			// do whatever you want with the checked radio
			var color = radios[i].value;
	
			// only one radio can be logically checked, don't check the rest
			break;
		}
	}
	for (i=0;i<1000;i++){ 
		var el = x[i].getElementsByTagName("color")[0];
		if (el == null) {
			if(color == "colorless"){
			var urlString = "\""+x[i].getElementsByTagName("set")[0].getAttribute("picURL")+"\"";
			document.write("<tr><td>");
			document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
			document.write("</td><td>");
			document.write("<img src="+urlString+" alt=\"\">");
			document.write("</td></tr>");
			}
		}else {
			if(color == x[i].getElementsByTagName("color")[0].childNodes[0].nodeValue){
				el = x[i].getElementsByTagName("color")[1];
				if (el == null) {
					var urlString = "\""+x[i].getElementsByTagName("set")[0].getAttribute("picURL")+"\"";
					document.write("<tr><td>");
					document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
					document.write("</td><td>");
					document.write("<img src="+urlString+" alt=\"\">");
					document.write("</td></tr>");
				}else {				
					//it's multicolored do nothing
				}
			}
		}
		
		
		
	
	}
	document.write("</table>");
}

function nameSort(){
	var radios = document.getElementsByName('optionsRadios');

	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
			// do whatever you want with the checked radio
			var name = radios[i].value;
	
			// only one radio can be logically checked, don't check the rest
			break;
		}
	}

	for (i=0;i<14;i++){ 
		if(name == x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue){
					//var urlString = "\""+x[i].getElementsByTagName("set")[0].getAttribute("picURL")+"\"";
					document.write("<tr><td>");
					document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
					document.write("</td><td>");
					//document.write("<img src="+urlString+" alt=\"\">");
					document.write("</td></tr>");
				
		}	
	}
	document.write("</table>");
}

function manaCostSort(manaCost){
	for (i=0;i<10000;i++){ 
		if(manaCost == x[i].getElementsByTagName("manacost")[0].childNodes[0].nodeValue){
					var urlString = "\""+x[i].getElementsByTagName("set")[0].getAttribute("picURL")+"\"";
					document.write("<tr><td>");
					document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
					document.write("</td><td>");
					document.write("<img src="+urlString+" alt=\"\">");
					document.write("</td></tr>");
				
		}	
	}
	document.write("</table>");
}

function typeSort(type){
	for (i=0;i<10000;i++){ 
		if(type == x[i].getElementsByTagName("type")[0].childNodes[0].nodeValue){
					var urlString = "\""+x[i].getElementsByTagName("set")[0].getAttribute("picURL")+"\"";
					document.write("<tr><td>");
					document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
					document.write("</td><td>");
					document.write("<img src="+urlString+" alt=\"\">");
					document.write("</td></tr>");
				
		}	
	}
	document.write("</table>");
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
		
		<label class="radio">
			<input type="radio" name="optionsRadios" id="RedButton" value="Camelot" checked>
			Camelot
		</label>
		
		<label class="radio">
			<input type="radio" name="optionsRadios" id="BlueButton" value="Dream Wizards" checked>
			Dream Wizards
		</label>
		
		<label class="radio">
			<input type="radio" name="optionsRadios" id="GreenButton" value="Big Planet Comics" checked>
			Big Planet Comics
		</label>
		
		<label class="radio">
			<input type="radio" name="optionsRadios" id="WhiteButton" value="W" checked>
			White
		</label>
		
		<label class="radio">
			<input type="radio" name="optionsRadios" id="BlackButton" value="B" checked>
			Black
		</label>
		
		<label class="radio">
			<input type="radio" name="optionsRadios" id="RedButton" value="colorless" checked>
			Colorless
		</label>
		
		<button onclick=nameSort(this.value)>Search</button>
		

		
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
