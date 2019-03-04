

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Off-Line Handwritten Digits Recognition Using Machine Learning</title>
		<meta name="description" content="Demo for the tutorial: Styling and Customizing File Inputs the Smart Way" />
		<meta name="keywords" content="cutom file input, styling, label, cross-browser, accessible, input type file" />
		<meta name="author" content="Osvaldas Valutis for Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<script type="text/javascript" src="js/load.js"></script>
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Off-Line Handwritten Digits Recognition Using Machine Learning Program</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
		<!-- remove this if you use Modernizr -->
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);

		window.onload = function() {
  			document.getElementById('input_field').value = '';
  }



	</script>


	</head>
	<body>



		<div class="container">
			<header class="codrops-header">
				<div class="codrops-links">
					</div>
				<h1>Off-Line Handwritten Digits Recognition Using Machine Learning</h1>
				<p>MLProject Members<strong>
					<p>please select your image then summit it to be recognize<strong>
			</header>

						



			<div class="content">
  <form enctype="multipart/form-data" action="" method="POST">

                <div class="box">
                    <input type="file" name="uploaded_file" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                    <label for="file-7"><span></span><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg>Choose a file&hellip;</strong></label>
                </div>

				<div class="box">
					<input type="submit" name="submit" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple / onclick="myFunction()" >
					<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
						<path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg>
						<span>Submit</span></label>
                </div>

                <style type="text/css">
                	.buttonred {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    background-color: #d3394c;
}
                </style>




                </form>

            


                <!--<form action="uploaded.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>-->

			<!-- Related demos -->
			<section class="content content--related">

			</section>
		</div><!-- /container -->

		<script src="js/custom-file-input.js"></script>




    </body>
</html>



<?PHP

if (isset($_POST['submit']))
{

$imagesDirectory = "uploaded/";
$image = scandir($imagesDirectory);
$outputDirectory = "outputs/";
$outputs = scandir($outputDirectory);
$newest_file = $image[0];
if(is_dir($imagesDirectory))
{


	$opendirectory = opendir($imagesDirectory);
  

		$filename = $_FILES["uploaded_file"]["name"];
		$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
		$file_ext = substr($filename, strripos($filename, '.')); // get file name
		$allowed_file_types = array('.png','.jpg' , 'jpeg');	

	if (in_array($file_ext,$allowed_file_types))
	{	
		// Rename file
		$newfilename = "testimage" . ".jpeg";

		move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], "uploaded/" . $newfilename);
			
	}

		if (empty($file_basename))
	{	
		// file selection error
		echo "<script>alert('Please select an image to upload');</script>";
	}
		
	else
		{
			echo '<div class="content"><div class="box"><h1>Original</h1><img src="uploaded/testimage.jpeg" width="100%"></div></div> ';

			$validation= exec('C:\MAMP\htdocs\interface Second Semester\run.bat');

 			echo '<div class="content"><div class="box"><h1>Output</h1><img src="outputs/testimage.jpeg" width="100%"></div></div> ';

 			echo '
 						<section class="content content--related">
				<form action = "/interface%20Second%20Semester/output.text" method = "post">
				<div class="box">
						 <input type="submit" class="buttonred" value="Clcik Here to download">
                </div>




 			</form>
 			</section>';

		}

    
    closedir($opendirectory);
 
}


	/*if ($validation != 1)
 			{
				unlink('outputs/testimage.jpeg');
				unlink('uploaded/testimage.jpeg');
			}
			*/

			



}





//$deleteimage= exec('C:\xampp\htdocs\interface Second Semester\deleteimage.py');
//echo $deleteimage;





  
?>