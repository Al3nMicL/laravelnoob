<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <meta name="description" content="">
	    <meta name="author" content="">
        <title>{{'Laravel from Scratch'}}</title>
       
        <!-- Bootstrap core CSS & js -->
        <link href="http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"></script>
	   
	    <!-- Bootstrap layout template -->
	    <link href="{{asset('css/jumbotron-narrow.css')}}" rel="stylesheet">
	    <!-- Custom styles for this template -->
	    <link href="{{asset('css/app.css')}}" rel="stylesheet">

        <style>
          
        </style>
    </head>
    <body>
    	<div class="container">
    		<div class="header clearfix">
		        @include('elements.navbar')
		        <h3 class="text-muted">{{'Laravel from Scratch'}}</h3>
		    </div>
            <div class="jumbotron">
				@yield('content')
			</div>
		</div>
    </body>
</html>
