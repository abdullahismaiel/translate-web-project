<?php
require 'connection.php';
if($_POST['h'])
{
	$write=htmlentities($_POST['write']);
	$bt=htmlentities($_POST['btm']);
	$btn=htmlentities($_POST['btm2']);
	$q=mysql_query("select $btn from language where $bt='$write'");
	$r=mysql_fetch_assoc($q);
	$ar=$r["$btn"];
      
}   

?>
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
			<title>translation</title>
			<link rel="stylesheet" href="s.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		</head>
		<body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <a class="navbar-brand" href="in.php">TRANSLATOR</a>
    </nav>
			<<div id="ab">
			<form action='ne.php' method='post'>
			<div id="o">
				<div id="c">
				<input type="text" name="btm" id="w"<?php echo "value='".$bt."'" ?> readonly>
				<br>
					<input type='text' name='write' id="a" placeholder="Enter your word" <?php echo "value='".$write."'" ?>>
						
					</div>
					<input type="button" onclick="change()" value="change" id="ca">
					<div id="c">
					<input type="text" name="btm2" id="d" value="English" <?php echo "value='".$btn."'" ?> readonly>
					<br>
					<input type="text" name='read' id="a" <?php echo "value='".$ar."'" ?> readonly>
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