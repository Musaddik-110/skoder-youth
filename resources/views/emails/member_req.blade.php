<!DOCTYPE html>
<html>
<head>
	<title>New Member Registered</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="card" >
            <div class="card-header">
                <h4>{{ $data['name'] }}, wants to join in Skoder Youth Community.</h4> <br> <br>
            </div>
		<div class="card-body">
            <p>Name: {{ $data['name'] }}</p><br>
            <p>Email: {{ $data['email'] }}</p><br>
            <p>Phone: {{ $data['phone'] }}</p><br>
            <p>About: {{ $data['about'] }}</p><br> <br>
            <p>Please take care of him</p><br>
            <p>Regards, <br>
                Skoder Youth</p>
        </div>

		</div>
	 </div>
</body>
</html>
