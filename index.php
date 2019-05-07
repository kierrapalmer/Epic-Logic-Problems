
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
                        $("#swordCircleAnswer").html(data);

                    }
                });
            });

            $("#primeNumber").click(function(){

                $.ajax({
                    type: 'POST',
                    url: 'prime-number.php',
                    success: function(data) {
                        $("#primeNumberAnswer").html(data);

                    }
                });
            });

            $("#paintedDoors").click(function(){

                $.ajax({
                    type: 'POST',
                    url: 'painted-doors.php',
                    success: function(data) {
                        $("#paintedDoorsAnswer").html(data);

                    }
                });
            });
        });
	</script>

</head>
<body>
<h1>Epic Marketing Logic Coding Problems</h1>
<p>Completed By: Kierra Palmer</p>

<h2>Sword Circle</h2>
<p>100 people stand in a circle in order 1 to 100. No. 1 has a sword.
	He kills the next person (i.e. No. 2) and gives the sword to the next living person (i.e. No. 3).
	All people do the same until only 1 survives. Which number survives to the end?</p>
<p style="color: red">**Please note that this solution requires PHP Version 7.3 or above**</p>
<input type="button" value="Reveal Answer" id="swordCircle">
<p id="swordCircleAnswer"></p>
<br />
<hr><hr>

<h2>Prime Number Problem</h2>
<p>A man has to buy 7 floors in a building. Numbered floor 1 to 68. <br />
	Conditions:
	<ol>
		<li>He cannot buy floors with prime number.</li>
		<li>He cannot buy floor number containing prime digit.</li>
		<li>Floor number 1 is reserved for services.</li>
	</ol>


	How many floors are legal?
</p>
<input type="button" value="Reveal Answer" id="primeNumber">
<p id="primeNumberAnswer"></p>
<br />
<hr><hr>

<h2>100 Doors to be Painted</h2>
<p>You have 100 doors to be painted and 2 painters. 1 starts at one end and paints every other door.
	The other painter starts at the other end and paints every 3rd door.
	What door number will they meet at?</p>
<input type="button" value="Reaveal Answer" id="paintedDoors">
<p id="paintedDoorsAnswer"></p>

</body>
</html>