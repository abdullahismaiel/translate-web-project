<script>
      function change()
	  {
		  var s=document.getElementById("w").value;
		   var a=document.getElementById("d").value;
		   document.getElementById("d").value=s;
		   document.getElementById("w").value=a;
	  }
</script>
<html>
		<head>
		<link rel="stylesheet" href="s.css" >
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

			<title>translation</title>
			
		</head>
		<body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <a class="navbar-brand" href="in.php">TRANSLATOR</a>
    </nav>
		<div id="ab">
			<form action='ne.php' method='post'>
			<div id="o">
				<div id="c">
				<input type="text" name="btm" id="w" value="Arabic" readonly>
				<br>
					<input type='text' name='write' id="a" placeholder="Enter your word">
						
					</div>
					<input type="button" onclick="change()" value="change" id="ca">
					<div id="c">
					<input type="text" name="btm2" id="d" value="English" readonly>
					<br>
					<input type="text" name='read' id="a" readonly>
					</div>
					<br>
					<div id="ad">
					<input type='submit'  value='translate' id="u">
					</div>
				<input type='hidden' name='h' value='1'>
				</div>
			</form>
			</div>
		</body>
	</html>