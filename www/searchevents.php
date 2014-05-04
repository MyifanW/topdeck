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
	
	
	<script type="text/javascript">
function eventSearch(){
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
	var newString = "";
	var x = xmlDoc.getElementsByTagName("event");
	var type = document.getElementById("type").value;
	var format = document.getElementById("format").value;
	var name = document.getElementById("eventName").value;
		for (i=0;i<12;i++){
			var eventType = x[i].getElementsByTagName("type")[0].childNodes[0].nodeValue;
			var eventFormat = x[i].getElementsByTagName("format")[0].childNodes[0].nodeValue;
			var eventName = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
			if(type == eventType || format == eventFormat || name == eventName){
				newString += "<table>";
				var urlString = "\""+x[i].getElementsByTagName("location")[0].getAttribute("mapPic")+"\"";
				var urlString2 = "\""+x[i].getElementsByTagName("location")[0].getAttribute("mapPic2")+"\"";
				var address = x[i].getElementsByTagName("location")[0].getAttribute("address");
				var city = x[i].getElementsByTagName("location")[0].getAttribute("city");
				var zip = x[i].getElementsByTagName("location")[0].getAttribute("zip");
				var state = x[i].getElementsByTagName("location")[0].childNodes[0].nodeValue;
				// tournament information
				// format
				// type
				var date_start = x[i].getElementsByTagName("dateStart")[0].childNodes[0].nodeValue;
				var time_start = x[i].getElementsByTagName("timeStart")[0].childNodes[0].nodeValue;
				var description = x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue;
				newString += "<tr><td><b>Type: </b>"+eventType+"&nbsp&nbsp<br><b>Format:</b> "+eventFormat+"<br>Date: "+date_start+"<br>Time: "+time_start+"<br>Description: "+description+"</td>";
				newString += "<td><b>Location</b><br>"+eventName+"<br>"+address+"<br>"+city+", "+state+" "+zip;
				newString += "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
				newString += "<td><a href="+urlString2+"><img src="+urlString+" alt=\"\"></a></td></tr>";
				newString += "</table>";
				newString += "<br><br>";
			}
		}
	document.getElementById("resultBox").innerHTML = newString;
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
          <a class="navbar-brand" href="#"><img src="logo.png" alt="TOPDECK" height="40" width="400"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">My Binder</a></li>
          </ul>
        </div>
      </div>
    </div>

	<div class="masthead">
        <ul class="nav nav-justified">
		  
          <li><a href="#">Profile</a></li>
          <li><a href="#">Search Traders</a></li>
          <li class="active"><a href="#">Search Events</a></li>
          <li><a href="#">About</a></li>
        </ul>
    </div>
	
	
<body>
	<div class="mini-layout fluid">
		<div class="mini-layout-sidebar">
		
		<input type="text" id="eventName" placeholder="Name"><br><br>

		Format : 
		<select id = format>
			<option value="None"></option>
			<option value="Modern">Modern</option>
			<option value="Sealed Deck">Sealed Deck</option>
			<option value="Standard">Standard</option>
			<option value="2 HG Sealed">2 HG Sealed</option>
			<option value="Legacy">Legacy</option>
			<option value="Booster Draft">Booster Draft</option>

		</select><br><br>
		Type : 
		<select id = type>
			<option value="None"></option>
			<option value="Friday Night Magic">Friday Night Magic</option>
			<option value="Magic Game Day">Magic Game Day</option>
			<option value="Casual Magic Event">Casual Magic Event</option>
			<option value="Grand Prix">Grand Prix</option>
			<option value="Pro Tour Qualifier">Pro Tour Qualifier</option>
		</select>
		
		<br><br>
		
		<button onclick=eventSearch()>Search</button>
		
		</div>
        <div id="resultBox" class="search-body"></div>
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
