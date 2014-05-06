
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
              <li><a href="myProfile.php"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
              <li  class="active"><a href="myMessages.php"><i class="glyphicon glyphicon-envelope"></i> Mail</a></li>
              <li><a href="myEvents.php"><i class="glyphicon glyphicon-map-marker"></i> Events</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
            </ul>
        </div>
        <div class="col-md-10">
                <div class="panel">
                    <img class="pic img-circle" src="http://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/twDq00QDud4/s120-c/photo.jpg" alt="You look Beautiful">
                    <div class="name"><small>Joe Doe</small></div>
                </div>
                
    <br><br><br>
    <ul class="nav nav-tabs" id="myTab">
      <li class="active"><a href="#inbox" data-toggle="tab"><i class="fa fa-envelope-o"></i> Inbox</a></li>
      <li><a href="#sent" data-toggle="tab"><i class="fa fa-reply-all"></i> Sent</a></li>
    </ul>
    
    <div class="tab-content">
      <div class="tab-pane active" id="inbox">
        <a type="button" data-toggle="collapse" data-target="#a1">
            <div class="btn-toolbar well well-sm" role="toolbar"  style="margin:0px;">
              <div class="btn-group"><input type="checkbox"></div>
              <div class="btn-group col-md-3">Admin Michael</div>
              <div class="btn-group col-md-8"><b>Welcome to Topdeck Traders!</b> <div class="pull-right"><i class="glyphicon glyphicon-time"></i> 12:10 PM <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-share-square-o">   Reply</i></button></div> </div>
            </div>
        </a>
        <div id="a1" class="collapse out well">You should know the rules, they were in the terms of agreement. Don't break them!</div>
        <br>
      </div>
     
       
      <div class="tab-pane" id="sent">
            <a type="button" data-toggle="collapse" data-target="#s1">
            <div class="btn-toolbar well well-sm" role="toolbar"  style="margin:0px;">
              <div class="btn-group"><input type="checkbox"></div>
              <div class="btn-group col-md-3">Victor</div>
              <div class="btn-group col-md-8"><b>Re- Interested in dark magician?</b> <div class="pull-right"><i class="glyphicon glyphicon-time"></i> 12:30 AM</div> </div>
            </div>
        </a>
        <div id="s1" class="collapse out well">Hey, did you want to trade for a dark magician as well to complete the set?</div>
        <br>
      </div>
     
        
    </div>

	<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-envelope">   Compose</i></button>
     </div>
	</div>
    
    
</div>




<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"><br/><br/>
            <form class="form-horizontal">
            <fieldset>
            
			<!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="body">User :</label>  
              <div class="col-md-8">
              <input id="body" name="body" type="text" placeholder="Recipient Username" class="form-control input-md">
                
              </div>
            </div>
			
			<!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="body">Body :</label>  
              <div class="col-md-8">
              <input id="body" name="body" type="text" placeholder="Message Body" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="message">Message :</label>
              <div class="col-md-8">                     
                <textarea class="form-control" id="message" name="message"></textarea>
              </div>
            </div>
            
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="send"></label>
              <div class="col-md-8">
                <button id="send" name="send" class="btn btn-primary">Send</button>
              </div>
            </div>
            
            </fieldset>
            </form>

    </div>
  </div>
</div>	<script type="text/javascript">
	  $(function () {
    $('#myTab a:last').tab('show')
  })
  
  	</script>
</body>
</html>
