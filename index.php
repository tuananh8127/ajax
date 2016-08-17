<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div id="result"></div>

<script>

var html = new XMLHttpRequest;

html.open('GET', 'data.php', false);

html.send();
document.getElementById('result').innerHTML = html.responseText;


</script>


</body>
</html>