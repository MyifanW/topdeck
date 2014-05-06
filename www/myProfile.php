
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
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
</head>
<body>
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
		  
          <li><a href="myBinder.php">My Binder</a></li>
          <li><a href="searchplayers.php">Search Traders</a></li>
          <li><a href="searchevents.php">Search Events</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
    </div>
<div class="container-fluid">
	<div class="row well">
		<div class="col-md-2">
    	    <ul class="nav nav-pills nav-stacked well">
              <li class="active"><a href="myProfile.php"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
              <li><a href="myMessages.php"><i class="glyphicon glyphicon-envelope"></i> Mail</a></li>
              <li><a href="myEvents.php"><i class="glyphicon glyphicon-map-marker"></i> Events</a></li>
              <li><a href="UnderConstruction.php"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
              <li><a href="UnderConstruction.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
            </ul>
        </div>
        <div class="col-md-10">
                <div class="panel">
                    <img class="pic img-circle" src="http://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/twDq00QDud4/s120-c/photo.jpg" alt="You look Beautiful">
                    <div class="name"><small>Joe Doe</small></div>
                </div>
                
    <br><br><br>
    <div class="container-fluid well">
		<div class="table-responsive" id = "personalInfo">
            <table class="table table-hover table-striped">
				
				<tr>
					<td style="width:10%">
						Name: 
					</td>
					<td>
						 Joe Doe
					</td>
				</tr>
				<tr>
					<td style="width:10%">
						Rating: 
					</td>
					<td>
						 <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>
					</td>
				</tr>
				<tr>
					<td style="width:10%">
						Location: 
					</td>
					<td>
						 AnnArbor
					</td>
				</tr>
				<tr>
					<td style="width:10%">
						Contact: 
					</td>
					<td>
						 JoeDoe@Gmail.com
					</td>
				</tr>
				<tr>
					<td style="width:10%">
						About: 
					</td>
					<td>
						 Joe Doe is Joe, doe
					</td>
				</tr>
				
			</table>
    </div>
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
