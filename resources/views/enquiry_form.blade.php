<html>
<head>
<title> {{$title}} </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
       
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Send Enquiry Form</a>
        </div>

        <!-- Navbar Right -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="">About</a></li>
                <li><a href="/enquiryform">Enquiry Form</a></li>
                
            </ul>
        </div>
    </div>
</nav>
<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post">
<!-- Below for each loop display validation error messages -->
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
 <!-- Below if condition display sending email success message -->               
                @if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <fieldset>
                    <legend>Send Us your Enquiry</legend>
                     	<div class="form-group">
						  <label for="usr">Name:</label>
						  <input type="text" class="form-control" id="name" name="name">
						</div>
						<div class="form-group">
						  <label for="email">Email:</label>
						  <input type="text" class="form-control" id="email" name="email">
						</div> 
						<div class="form-group">
						  <label for="phone">Phone:</label>
						  <input type="text" class="form-control" id="phone" name="phone">
						</div> 
						<div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="3" id="enq_message" name="enq_message"></textarea>
                        <span class="help-block">Feel free to ask us any question.</span>
                        
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>