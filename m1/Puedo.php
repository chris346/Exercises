<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div:nth-child(2) {
			background-color: red;
		}
		a {
			background-color: red;
		}
		a:hover {
			background-color: pink;
		}
		a:active {
			background-color: aqua;
		}

		:focus {
			background-color: green;
		}

		p.fred {
			background-color: blue;
		}
		.qoute::before, .qoute::after {
			content: 'this is the beginning';
			font-size: 3em;
		}

	
	</style>
</head>
<body>
<div>
	<p><a href="http://codepen.io/pen/">go somewhere</a></p>
	<p>df</p>
	<p>sdf</p>
	<p class = "qoute">sdf</p>
	<p class="fred">input1: <input type="text"><br>
		input2: <input type="text"><br></p>
		

</div>
</body>
</html>