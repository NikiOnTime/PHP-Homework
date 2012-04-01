<!DOCTYPE html>
<html>
	<head>
		<title>PHP-Homework1</title>
	</head>


	<body>
		<form method="get">
			<label>
				User input:
				<input  type="text" name="number" value="Enter a number"/>
			</label>
			<button type="submit">Hit me!</button>
		</form>
	
		<br />
		
		<div id="result" >
			
		</div>
		
		
		<?php
			if ( isset($_GET["number"]) && $_GET !== "" )
			{
				
				function IsPrime($num)
				{
					for($i=2; $i < $num; $i++)
					{
						if ( ($num % $i) == 0 && $i != $num)
						return FALSE;
					}
					return TRUE;
				}
				
				
				//var_dump(IsPrime($_GET["number"]));
				
				
				
				$_left = 0;
				$_right = 19999;
				
				if(!is_numeric($_GET["number"]))
				{
					echo "<span style=\"color: #a23333;\"> The parameter is not a number</span>";
					
				}else{
					if(IsPrime($_GET["number"])){
						echo "The number " . $_GET["number"] . " is prime !";
					}else{
						echo"<span style=\"color: #1ba6d4;\">The number " . $_GET["number"] . " is prime NOT prime!</span>";
					}
				}
				
				if($_GET["number"] < $_left || $_GET["number"] > $_right)
				{
					echo "<span style=\"color: #a23333;\"> The parameter is not within the range [0,19999]</span>";
				}
			}
		?>
	</body>
</html>