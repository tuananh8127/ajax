<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div id="result"></div>
<ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
</ul>


<script>

var html = new XMLHttpRequest();

html.open('GET', 'data.php', false);

html.send();
var result = document.getElementById('result');
result.innerHTML = html.responseText;




 var li = document.getElementsByTagName('li');
console.log(li[1].innerHTML);

</script>


</body>
</html>