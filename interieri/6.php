<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript">
		var one = prompt("Happiness Raiting..");
		one = parseInt(one);
		if (one == 1)
			document.write("Yuck.");
		else if (one>=2 && one <=4)
			document.write("Meh.");
		else if (one>=5 && one<=6)
			document.write("Good.");
		else if (one>=7 && one<=9)
			document.write("Awesome.");
		else
			document.write("Speechless.");
	</script>
</body>
</html>