<!DOCTYPE html>
<html>
<head>
	<title>Calculate the sum of numbers</title>
</head>
<body>
<h1>This Application add the numbers starting form 1 to the number entered and Display the Total at the End</h1>
<form action="calculate_sum.php" method="POST">
Enter Last Number<input type="number" name="number"><br>
<input type="submit" name="submit">
	
</form><br>

<?php
if(isset($_POST['submit']))// checking if submit button is click
{
	$number = $_POST['number']; //storing number receive from the html form
	$array_numbers =[]; //declaring an array
	$total =0; // //declaring Total
	if(!empty($number))// checking if number entered is not empty
	{
		
         if(strpos($number, "-") === false) // checking if number entered is not a nagative number
         {
           for($a=1;$a<=$number;$a++) // looping
           {
           	 $array_numbers[] += $a; // storing the numbers to an array
           }
          foreach ($array_numbers as $array_data => $value) // loop inside an array
          {
          	 echo $value.'<br>'; // displaying the numbers
          	$total += $value; // adding the numbers to the total value
          }
          echo "Total = ".$total;  // displaying  Total

         }

         else
		{
			  echo "<font color='red'>Please enter a positive number</font>"; // displaying an error message if nagative number is entered
		}


	}
	else
	{
		  echo "<font color='red'>Please enter a  number</font>"; // displaying an error message if number is not entered
	}
}


?>

</body>
</html>