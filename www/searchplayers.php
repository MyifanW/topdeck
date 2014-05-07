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
	<!-- put yo scripts here-->
	function SearchFun() { 
        if(document.getElementById('players').style.display=='none') { 
            document.getElementById('players').style.display='block'; 
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
          <li class="active"><a href="searchplayers.php">Search Traders</a></li>
          <li><a href="searchevents.php">Search Events</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
    </div>
	
	
<body>
	<div class="mini-layout fluid">
	<div class= "col-lg-3">
		<div class="mini-layout-sidebar">
		<!--search players using options-->
		</br>
		Search for players with the card you want.
		</br>
		<div class="table-responsive">
            <table class="table table-hover">
				<tr>
					<td style="width:50%">Card:</td>
					<td><input type="text" name="FirstName" value="Blue-eyes white Dragon"></td>		
				</tr>
				<tr>
					<td style="width:50%">Max Miles Away:</td>
					<td><input type="text" name="LastName" value="5"></td>	
				</tr>
			</table>
			</div>
			<button onclick="SearchFun()">Search</button>
		</div>
	</div>
	<div class = "col-lg-9">
        <div class="search-body ">
			<div class="table-responsive" id = "players" style="display: none;">
            <table class="table table-hover">
				<tr>
					<td style="width:30%">
					Profile Picture
					
					</td>
					<td>
						</br>
						Victor
						</br>
						5 stars
						</br>
						asking price
					</td>		
				</tr>
				<tr>
					<td style="width:30%">
					Profile Picture
					
					</td>
					<td>
						</br>
						Jojo
						</br>
						4 stars
						</br>
						asking price
					</td>		
				</tr>
			</table>
			</div>
		</div>
	</div>
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
