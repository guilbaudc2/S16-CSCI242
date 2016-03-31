<?php

/*
This app uses a currency converter. By entering the country code in the form, you can find out what the current
exchange rate is from the first country's currency to the second country. If the country code doesn't exist, like WON
the rate is displayed as "0".
*/
require 'vendor/autoload.php';

$converter = new CurrencyConverter\CurrencyConverter;
?>

		<h1>Current Currency Exchange Rate</h1>
<?php
		if($_SERVER["REQUEST_METHOD"] == "GET")
		{
?>
		<p>Please the country code you want to convert from and the country code you want to convert to.</p>
			    <form method="POST" action="index.php">
				 
			 <table>
				  <tr>
						<td>From Country: <input type="text" name="fromCountry"></td>
				  </tr>
				  <tr>
						<td>To Country: <input type="text" name="toCountry"></td>
				  </tr>
				
				</table> 
		<input type="submit" value="Submit">
		</form>
<?php
	
		} else if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			
			$fromCountry = $_POST["fromCountry"];
			$toCountry = $_POST["toCountry"];
?>
			<table>
			    <tr>
			        <th>From Country</th>
			        <th>To Country</th>
			        <th>Rate</th>
			    </tr>
			    <tr>
			        <td><?php echo $fromCountry ?></td>
			        <td><?php echo $toCountry ?></td>
			        <td><?php echo $converter->convert($fromCountry, $toCountry) ?></td>
			    </tr>
			</table>
<?php
}
	