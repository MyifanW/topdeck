
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Profile and layout - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
    <link href="justified-nav.css" rel="stylesheet">
    <style type="text/css">
    .pic
{
     margin-top:50px; 
     width:120px;
     margin-left:50px;
     margin-bottom:-60px;
}

.panel
{
    background-image:url("http://autoimagesize.com/wp-content/uploads/2014/01/rainbow-aurora-background-wallpaper-colour-images-rainbow-background.jpg"); 
}

.name
{
    position:absolute;
    padding-left:200px;
    font-size:30px;
}

.dropdown
{
    position:absolute;
}

.change
{
 position:relative; 
 bottom:20px;
 padding:1px;
 color:white;
 text-decoration:none;
}


.change:hover
{
 text-decoration:none;
 background-color:black;
 color:white;
}    </style>
    <script type="text/javascript">
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://localhost');
        });
	  
	function loadEvents(){
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
			alert(blah);
		  //document.getElementById("myCollection").innerHTML= blah;
		  eventDisplay(encodeURIComponent(blah), "events_attend");
		}
	  }
	  xmlhttp.open("GET","loadevents.php",true);
	  xmlhttp.send();
	}
	  
	function eventDisplay(string, id){
		document.getElementById(id).innerHTML="";
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET","events.xml",false);
		xmlhttp.send();
		xmlDoc=xmlhttp.responseXML; 
		var x=xmlDoc.getElementsByTagName("event");

		//get name textBox info
		var nameArr = decodeURIComponent(string);
		var name = nameArr.split(",");
		var newString = "";
		alert(name);
		for(j=0;j<name.length-1;j++)
		{
		alert("in");
			if(name[j] != null)
			{
				alert(name[j]);
				for (i=0;i<12;i++)
				{ //change 1000 to however many cards you want to search through in xml 
					var id_db = x[i].getElementsByTagName("id")[0].childNodes[0].nodeValue;
					if(name[j] == id_db){
						var eventType = x[i].getElementsByTagName("type")[0].childNodes[0].nodeValue;
						var eventFormat = x[i].getElementsByTagName("format")[0].childNodes[0].nodeValue;
						var eventName = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
						var urlString = "\""+x[i].getElementsByTagName("location")[0].getAttribute("mapPic")+"\"";
						var urlString2 = "\""+x[i].getElementsByTagName("location")[0].getAttribute("mapPic2")+"\"";
						var address = x[i].getElementsByTagName("location")[0].getAttribute("address");
						var city = x[i].getElementsByTagName("location")[0].getAttribute("city");
						var zip = x[i].getElementsByTagName("location")[0].getAttribute("zip");
						var state = x[i].getElementsByTagName("location")[0].childNodes[0].nodeValue;
						var date_start = x[i].getElementsByTagName("dateStart")[0].childNodes[0].nodeValue;
						var time_start = x[i].getElementsByTagName("timeStart")[0].childNodes[0].nodeValue;
						var description = x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue;
						
						//newHTML+="<tr><td align=\"center\">"+"<div id=\""+cname+"\">";
						newString += "<table>";
						
						newString += "<tr><td><b>Type: </b>"+eventType+"&nbsp&nbsp<br><b>Format:</b> "+eventFormat+"<br>Date: "+date_start+"<br>Time: "+time_start+"<br>Description: "+description+"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
						newString += "<td><b>Location</b><br>"+eventName+"<br>"+address+"<br>"+city+", "+state+" "+zip;
						newString += "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
						newString += "<td><a href="+urlString2+"><img src="+urlString+" alt=\"\"></a></td></tr>";
						newString += "</table>";
						alert(newString);
						break;
					}
				}
			}
		}
	alert(newString);
	document.getElementById(id).innerHTML = newString;
	}

    </script>
</head>
<body onload="loadEvents()">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="logo.png" alt="TOPDECK"></a>
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
		  
          <li><a href="profile.php">My Binder</a></li>
          <li><a href="searchplayers.php">Search Traders</a></li>
          <li><a href="searchevents.php">Search Events</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
    </div>
<div class="container-fluid">
	<div class="row well">
		<div class="col-md-2">
    	    <ul class="nav nav-pills nav-stacked well">
              <li><a href="myProfile.php"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
              <li><a href="myMessages.php"><i class="glyphicon glyphicon-envelope"></i> Mail</a></li>
              <li class="active"><a href="myEvents.php"><i class="glyphicon glyphicon-map-marker"></i> Events</a></li>
              <li><a href="UnderConstruction.php"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
              <li><a href="UnderConstruction.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
            </ul>
        </div>
		<div class="col-md-10">
			<div class="container-fluid well" id="events_attend">
				
			</div>
			
		</div>

	</div>
    
    
</div>

<script type="text/javascript">
	  $(function () {
    $('#myTab a:last').tab('show')
  })
  
  	</script>
</body>
</html>
