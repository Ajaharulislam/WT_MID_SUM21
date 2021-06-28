<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	
	
	$hasError=false;
	
	function numCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(is_numeric($pas[$i]))  {
                return true;
            }
        }
		return false;
	}
	function specialCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(($pas[$i]) == "#" or ($pas[$i])== "?")  {
                return true;
            }
        }
		return false;
	}
	function lowerCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(ctype_lower($pas[$i]))  {
                return true;
            }
        }
		return false;
	}
	function upperCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(ctype_upper($pas[$i]))  {
                return true;
            }
        }
		return false;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		else if(strlen($_POST["username"]) <=5){
			$err_uname="Username Must be greater than 5 character";
			$hasError = true;
		}
		
		else if(strpos($_POST["username"], " ") > 0){
			$err_uname="Username can not have space";
			$hasError = true;
		}
		else{
			$uname=htmlspecialchars($_POST["username"]);
		}
		
		if(empty($_POST["password"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else if(strlen($_POST["password"]) <=7){
			$err_pass="Password must be atleast 8 charecter";
			$hasError = true;
		}
		else if(!specialCharCheck($_POST["password"])){
			$err_pass="Password must have special charecter";
			$hasError = true;
		}
		else if(!numCharCheck($_POST["password"])){
			$err_pass="Password must have a number";
			$hasError = true;
		}
	    else if(!(lowerCharCheck($_POST["password"]) and upperCharCheck($_POST["password"]))){
			$err_pass="Password must be a combination of Upper and Lower case";
			$hasError = true;
		}
		
		
		if(!$hasError){
			echo $_POST["username"]."<br/>";
			}
		}
?>
<html>
	<body>
	<fieldset>
	<form action="" method="post">
	<table>
		</tr>
		    <td align= "left" colspan ="2" ><a href="ViewRegistrarPage.php">View Register</a> </td>
			<td align ="right" colspan ="2"><a href="Candidatesdashboard.php">Dashboard</a> </td>
		</tr>
		
		<tr>
			<td align="center" colspan="2"><h3>Welcome</h3></td>
			<td><h2><input type="text" name="uname" value="<?php echo $uname;?>"></h2></td>
		</tr>
		
		<tr>
			<td align= "left" colspan="2"><a href="editdetails.php">Edit Details</a> </td>
		</tr>
		
		<tr>
		<td align= "left" colspan="2"><a href="candidatesregister.php">Candidates Register</a> </td>
		</tr>
	</form>
	</table>
	</fieldset>
	</body>
</html>