<!DOCTYPE html>
<html>
	<head>
		<title>PHP-Homework1.2</title>
	</head>
	
	
	<body>
		<?php
		
			$counter = 0;
			$my_funkyArr = (range(20, 1000, 37));
			
			function IsPrime($num)
			{
				for($i=2; $i < $num; $i++)
				{
					if ( ($num % $i) == 0 && $i != $num)
					return FALSE;
				}
				return TRUE;
			}
			
			// <!-- Poradi nqkakva pri4ina ne mojah da napravq find_3_prime da raboti vuv funkciqta. Predpolagam 4e e zaradi tova 4e ne sum definiral  
			// $my_funkyArr  i counter kato globalni promenlivi (vupreki 4e spored vsi4ki izto4nici koito namerih, v momenta sa globalni promenlivi)-->
			
			foreach ($my_funkyArr as $index => $value)
			{
				if(IsPrime( $my_funkyArr[$index] ) )
				{
					$counter += 1;
					if ($counter == 3);
					{
						echo "<br /> The third prime number in the array is: $$my_funkyArr[$index]<br />";
					}
				}
			}
			
			// tuk otnovo problemi sus global scope-a qvno neshto ne sum napravil kato horata
			
			function check_exist()
			{
				$my_funkyArr = (range(20, 1000, 37));
				
				$listOfInterest = array (146, 284, 871);
				
				foreach ($listOfInterest as $index => $value)
				{
					if( in_array("$listOfInterest[$index]", $my_funkyArr ) )
					{
						echo "<br />The number " .$listOfInterest[$index] . " exists in the array<br />";
					}else{
						echo "<br />The number " .$listOfInterest[$index] . " does not exist in the array<br />";
					}
				}
			}
			
			check_exist();
		?>
	<body>
</html>