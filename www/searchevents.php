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
					<select>
					  <option value="Friday Night Magic">Friday Night Magic</option>
					  <option value="Pro Tour Qualifiers">Pro Tour Qualifiers</option>
					  <option value="Pro Tour">Pro Tour</option>
					  <option value="Magic Game Day">Magic Game Day</option>
					</select>
				</tr>
			</table>
			</div>
			<button onclick="SearchFun()">Search</button>
		</div>
        <div class="search-body">
			<div class="table-responsive" id = "players" style="display: none">
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