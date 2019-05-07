
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Epic Marketing Logic Problems</title>

	<script
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous"></script>

	<script type="text/javascript">
        $(document).ready(function(){
            $("#swordCircle").click(function(){

                $.ajax({
                    type: 'POST',
                    url: 'sword-circle.php',
                    success: function(data) {
                        $("p").html(data);

                    }
                });
            });
        });
        $(document).ready(function(){
            $("#primeNumber").click(function(){

                $.ajax({
                    type: 'POST',
                    url: 'prime-number.php',
                    success: function(data) {
                        $("p").html(data);

                    }
                });
            });
        });
	</script>

</head>
<body>
<input type="button" value="Sword Circle" id="swordCircle">
<input type="button" value="Prime Number" id="primeNumber">
<p></p>
</body>
</html>