<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$cpass="";
	$err_cpass="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$dob="";
	$err_dob="";
	$gender="";
	$err_gender="";
	$about="";
	$err_about="";
	$bio="";
	$err_bio="";
	
	$hasError=false;
	
	$dob = array("Saturday","Sunday","Monday","Tuesday","Wednesday","Thursday","Friday");
	
	function aboutus($about){
		global $about;
		foreach($about as $a){
			if($a == $about){
				return true;
			}
		}
		return false;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=2){
			$err_name="Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		
		else{
			$uname=$_POST["username"];
		}
		
	    if(!isset($_POST["email"])){
			$err_gender="Email Required";
			$hasError = true;
		}
		else{
			$email = $_POST["email"];
		}
		if(!isset($_POST["address"])){
			$err_gender="Address Required";
			$hasError = true;
		}
		else{
			$address = $_POST["address"];
		}
		if(!isset($_POST["dob"])){
			$err_dob = "Birth date Required";
			$hasError = true;
		}
		else{
			$dob = $_POST["Birth date"];
		}
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$hasError = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["about"])){
			$err_hobbies="Please Select Options";
			$hasError = true;
		}
		else{
			$about = $_POST["about"];
		}
		if(empty($_POST["bio"])){
			$err_bio="Bio Required";
			$hasError = true;
		}
		else{
			$bio = $_POST["bio"];
		}
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["confirm password"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["birth date"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["bio"]."<br>";
			
			$arr = $_POST["about"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}
		}
		
		
	}
?>
<html>
	<head></head>
	<body>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" placeholder="Password"></td>
					</tr>
					<tr>
						<td>Confirm Password: </td>
						<td><input type="password" name="confirm password" placeholder="Confirm Password"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" placeholder="Email"></td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td><input type="text" name="phone" placeholder="code"> - <input type="text" name="phone" placeholder="Number">
						</td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><input type="text" name="address" placeholder="Street Address"><br> <input type="text" name="address" placeholder="City"> - <input type="text" name="address" placeholder="State"><br> <input type="text" name="address" placeholder="Postal/Zip Code">  
						</td>
					</tr>
					<tr>
						<td>Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
						<td>Birth Date: </td>
						<td>
							<select name="birthdate">
								<option>Select</option>
								<?php
									foreach($birthdate as $bd){
										if($dob == $bd)
											echo "<option selected>$bd</option>";
										else
											echo "<option>$bd</option>";
									}
								?>
							</select> 
						</td>
						<td><span><?php echo $err_dob;?></span></td>
					</tr>
					<tr>
						<td>Where did you hear about us?:  </td>
						<td>
							<input type="checkbox" value="A Friend or Colleague" <?php if(aboutus("A Friend or Colleague")) echo "checked";?>  name="about[]"> A Friend or Colleague
							<input type="checkbox" value="Google" <?php if(aboutus("Google")) echo "checked";?> name="about[]"> Google<br>
							<input type="checkbox" value="Blog Post" <?php if(hobbyExist("Blog Post")) echo "checked";?> name="about[]"> Blog Post
							<input type="checkbox" value="News Article" <?php if(hobbyExist("News Article")) echo "checked";?> name="about[]"> News Article
						</td>
						<td><span><?php echo $err_about;?></span></td>
					</tr>
					<tr>
						<td>Bio:  </td>
						<td>
							<textarea name="bio"><?php echo $bio;?></textarea>
						</td>
						<td><span><?php echo $err_bio;?></span></td>
					</tr>
					<tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
	</body>
</html>