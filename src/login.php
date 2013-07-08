<? require_once($_SERVER['DOCUMENT_ROOT']."/navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login - PocketPanel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        background-image:url('http://cdn2.planetminecraft.com/files/resource_media/screenshot/1216/Skylia_08_2005134.jpg');
        background-size:cover;
        background-attachment: fixed;
	background-repeat:no-repeat;
      }
      html {
       overflow-y: scroll;
}
    </style>
    <link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/bootstrap/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/bootstrap/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="/bootstrap/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="/bootstrap/ico/favicon.png">
                                   <? require_once($_SERVER['DOCUMENT_ROOT']."/headscript.php"); ?>
  </head>

  <body>
  <div class="container">
    <div class="head">
            	<div class="row-fluid">
                	<div class="span12">
                    	<div class="span6">
                        	<h1>PocketPanel</h1>
                        </div>
                        <div class="span4 offset2" style="margin-top:15px;">	
                          <button type="button" class="btn pull-right">Log Out</button>	
                            <button type="button" class="btn pull-right">IP: 127.0.0.1 Port: 19132</button>							
                        </div>
                    </div>
                </div>                	
				<div class="navbar">
				  <div class="navbar-inner">
					<div class="container">
					  <ul class="nav">
						<? NavBar::displayNavBar("dashboard"); ?>					
					  </ul>                      
					</div>
				  </div>
				</div>
	</div>

     <div class="row">
		<div class="span4 offset4 well">
			<legend>Sign In to PocketPanel</legend>
          	<!--<div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
            </div>-->
			<form method="POST" action="" accept-charset="UTF-8">
			<input type="text" id="IP" class="span4" name="IP" placeholder="IP">
			<input type="password" id="password" class="span4" name="password" placeholder="RCON Password">
			<button type="submit" name="submit" class="btn btn-info btn-block">Authenticate</button>
			</form>    
		</div>
	</div>
	
	

	<? require_once($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/bootstrap/js/jquery.js"></script>
    <script src="/bootstrap/js/bootstrap-transition.js"></script>
    <script src="/bootstrap/js/bootstrap-alert.js"></script>
    <script src="/bootstrap/js/bootstrap-modal.js"></script>
    <script src="/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="/bootstrap/js/bootstrap-tab.js"></script>
    <script src="/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="/bootstrap/js/bootstrap-popover.js"></script>
    <script src="/bootstrap/js/bootstrap-button.js"></script>
    <script src="/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="/bootstrap/js/bootstrap-typeahead.js"></script>

  </body>
</html>

