<?php
include('classes/GoogleUrlApi.php');

// if the form has been submitted
if ( isset($_POST['longurl']) )
{
// Create instance with key
$key = 'AIzaSyB2FRyx5eVgc4IHTXXqT7GlLs_-K80ZDzM';
$googer = new GoogleURLAPI($key);

// Test: Shorten a URL
$shortDWName = $googer->shorten($_POST['longurl']);

}
?>
<!DOCTYPE html>

<html>

	<head>
		<title>URL Shortner</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />

	</head>
	
	<body>
		
		<h1>URL Shortner</h1>
		<br />
		<?php if(isset($shortDWName))
                 echo "Short Url is : <a href='$shortDWName'>".$shortDWName."</a>"; 
        ?>
		<br />
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		
			<fieldset>
				<label for="longurl">Enter a long URL:</label>
				<input type="text" name="longurl" id="longurl" />
				<input type="submit" name="submit" id="submit" value="Short it!" />
			</fieldset>
		
		</form>		
	
	</body>

</html>