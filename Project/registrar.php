<?php
	  $day=0;
	  $err_day="";
	   $month="";
	  $err_month="";
	  $year=0;
	  $err_year="";
      $days = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
	  $months = array("January","Fabruary","March","April","May","June","July","August","September","October","November","December");
	  $years = array(1980,1981,1982,1983,1984,1985,1986,1987,1988,1989,1990);
?>

<html>
    <head><h2> Registrar Details </h2></head>
	<body>
		<table>
		<tr>
			<td align="right"> Registrar ID: </td>
			<td><input type="text" name="reg_id" placeholder="registration id"></td>
		</tr>
		<tr>
			<td align="right"> Name: </td>
			<td><input type="text" name="name" placeholder="name"></td>
		</tr>
		<tr>
			<td align="right">Address: </td>
			<td><textarea></textarea></td>
		</tr>
		<tr>
			<td align="right">Office Address </td>
			<td><textarea> </textarea></td>
		</tr>
		<tr>
			<td align="right">Gender: </td>
			<td><input type="radio" value="Male" name="gender"> Male <input name="gender"  value="Female" type="radio"> Female</td>
						
		</tr>
		<tr>
			<td align="right"> Licence Number: </td>
			<td><input type="text" name="licencenumber" placeholder="licence number"></td>
		</tr>
		<tr>
			<td align="right"> Nationality: </td>
			<td><input type="text" name="nationality" placeholder="nationality"></td>
		</tr>
		<tr>
			<td align="right"> Blood Group: </td>
			<td><input type="text" name="blood group" placeholder="blood Group"></td>
		</tr>
		<tr>
			<td align="right"> NID: </td>
			<td><input type="text" name="nid" placeholder="NID number"></td>
		</tr>
		<tr>
			<td align="right">Birth Date:  </td>
			<td>
				<select name="day">
					<option selected disabled>Day</option>
					<?php
					foreach($days as $d){
					if($day == $d)
					echo "<option selected>$d</option>";
					else
					echo "<option>$d</option>";
					}
					?>
				</select>
				<select name="month">
					<option selected disabled>Month</option>
					<?php
					foreach($months as $m){
					if($month == $m)
					echo "<option selected>$m</option>";
					else
					echo "<option>$m</option>";
					}
					?>
				</select> 
				<select name="year">
					<option selected disabled>Year</option>
					<?php
					foreach($years as $y){
					if($year == $y)
					echo "<option selected>$y</option>";
					else
					echo "<option>$y</option>";
					}
					?>
				</select> 
			</td>
			<td><span><?php echo $err_day;?> <?php echo $err_month;?> <?php echo $err_year;?></span>
			</td>
		</tr>
		<tr>
			<td align="right"> Phone: </td>
			<td><input type="text" name="phone" placeholder="+880"></td>	
		</tr>
		<tr>
			<td align="right"> Email: </td>
			<td><input type="text" name="passport" placeholder="username @gmail.com"></td>
		</tr>
		<tr>
			<td align="right">Marital Status: </td>
			<td><input type="radio" value="Unmarried" name="maritalstatus"> Unmarried <input name="maritalstatus"  value="Married" type="radio">Married </td>			
		</tr>
		
		
		</table>
	</body>
</html>