<?php
	  $day=0;
	  $err_day="";
	   $month="";
	  $err_month="";
	  $year=0;
	  $err_year="";
      $days = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
	  $months = array("January","Fabruary","March","April","May","June","July","August","September","October","November","December");
	  $years = array(1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2000);
?>

<html>
    <head></head>
	<body>
	<fieldset> 
	<form>
	<table>
		<tr>
		<td align ="center" colspan ="2"> <h2>Candidates Register </h2></td>
		</tr>
		<tr>
			<td align="right"> Name: </td>
			<td><input type="text" name="name" placeholder="name"></td>
		</tr>
		<tr>
			<td align="right"> Username: </td>
			<td><input type="text" name="Username" placeholder="Username"></td>
		</tr>
		<tr>
			<td align="right">Father's Name: </td>
			<td><input type="text" name="father name" placeholder="Father's Name"></td>
		</tr>
		<tr>
			<td align="right">Mother's Name: </td>
			<td><input type="text" name="mother name" placeholder="Mother's Name"></td>
		</tr>
		<tr>
			<td align="right"> Present Address: </td>
			<td><textarea></textarea></td>
		</tr>
		<tr>
			<td align="right"> Permanent Address: </td>
			<td><textarea> </textarea></td>
		</tr>
		<tr>
			<td align="right">Gender: </td>
			<td><input type="radio" value="Male" name="gender"> Male <input name="gender"  value="Female" type="radio"> Female</td>
						
		</tr>
		<tr>
			<td align="right"> Age: </td>
			<td><input type="text" name="age" placeholder="Age"></td>
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
			<td align="right"> Passport: </td>
			<td><input type="text" name="passport" placeholder="Passport"></td>
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
			<td><input type="text" name="birth date" placeholder="Birth Date"></td>		
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
		<tr>
		<td align="center" colspan="2"><input type="Submit" value="Register"></td>
		</tr>
		</table>
	</form>
	</fieldset>
	<a href="login.php">Back</a>
	</body>
</html>