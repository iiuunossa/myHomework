<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>MU-Test</title>
</head>
<body>
	<div class="container-fluid">
		@foreach($scores as $score)
			@if ($score['mu_test_score'] >=36)
				<div style = "background-color:#00CC99" class = "col-xs-12 col-sm-6 col-md-4 col-lg-3">{{ $score['name']}}{{" สอบได้ mu-test "}}{{ $score['mu_test_score']}} </div>
			@else
				<div style = "background-color:#CC3300" class = "col-xs-12 col-sm-6 col-md-4 col-lg-3">{{ $score['name']}}{{" สอบได้ mu-test "}}{{ $score['mu_test_score']}} </div>
			@endif
		@endforeach
	</div>
</body>
</html> 