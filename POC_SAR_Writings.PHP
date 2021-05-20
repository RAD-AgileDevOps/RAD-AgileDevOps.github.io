<!DOCTYPE html lang="en-TT">


<html>

/*
		Developer: Roger De Four
		Email: radfinancialsystem@gmail.com // cell: +1-868-342-8587
		Date: 2020-05-08
		Description: concerned with the upload & download of the author - Sharon Campbell's - work

*/

	<head>
		<title>SAR Files</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="device=device-width , initial-scale=1">
		
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/styles/radfs_sar.css">
		

				  
			}
		</style>


	</head>


<body>

	
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    
	
	<!-- a href="#" class="w3-bar-item w3-button w3-theme-l1">Logo</a> -->
    <h6 style="text-align:center; color:yellow;">Upload/Download S.A.R's Writings</h6>
   
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Upload Files</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Download Resources</a>
  <!-- <a class="w3-bar-item w3-button w3-hover-black" href="#radfs0004">Awards & Accoaldes</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#radfs0005">Future Projects</a> -->
  <hr/>
  
   <a class="w3-bar-item w3-button w3-hover-black" style="color: red;" href="POC_SAR.PHP">Landing Page</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">


																														<p id="radfs0003"></p>
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container" >
	
	
	
	
      <h4  class="w3-text-teal">UPLOADING: Files/Resouces</h4>
   

<!-- 

<form  action="file-upload-manager.php" method="post" enctype="multipart/form-data"> 
						<!--multipart/form-data ensures that form data is going to be encoded as MIME data
						<h2>Upload File</h2> 
						<label for="fileSelect">Filename:</label> 
						<input type="file" name="photo" id="fileSelect"> 
						<input type="submit" name="submit" value="Upload"> 
						<!-- name of the input fields are going to be used in our php script
						<p><strong>Note:</strong>Only .jpg, .jpeg, .png formats allowed to a max size of 2MB.</p> 
				</form> -->


				<form  class="w3-container" action="file-upload-manager_alt_methos_20200508.php" method="post" enctype="multipart/form-data"> 
						<!--multipart/form-data ensures that form data is going to be encoded as MIME data-->
						<h2>Upload File</h2> 
						<label  class="w3-text-teal" for="fileSelect">Filename:</label> 
						<input class="w3-input w3-border w3-light-grey"  type="file" name="file" id="fileSelect"> 
						<br>
						<input type="submit" name="submit" value="Upload"> 
						<!-- name of the input fields are going to be used in our php script-->
						<p><strong>Note:</strong>Only .pdf, .doc, .docx file formats allowed to a of a minimum size of 2MB.</p> 
				</form> 

					
   
   
   
   
   
   
    <div class="w3-third w3-container">
      <!-- <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p> -->
	  
    </div>
  </div>

	
  <div class="w3-row">
    <div  class="w3-twothird w3-container">
      <h4 class="w3-text-teal">DOWNLOADING: Files/Resouces</h4>
      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		
		
		</p> -->
		<!--
		<form  class="w3-container" action="file-upload-manager_alt_methos_20200508.php" method="post" enctype="multipart/form-data"> 
						<!--multipart/form-data ensures that form data is going to be encoded as MIME data-
						<h2 style="color:red;">Download Files</h2> 
						<label  class="w3-text-teal" for="fileSelect">Filename:</label> 
						<input class="w3-input w3-border w3-light-grey"  type="file" name="file" id="fileSelect"> 
						<br>
						<b><input type="submit" name="submit" value="Download" style="color:red;"></b>
						<!-- name of the input fields are going to be used in our php script
						<p><strong>Note:</strong>Only .pdf, .doc, .docx file formats allowed to a of a minimum size of 2MB.</p> 
		</form> -->

		<a href="POC_SAR_Download_choices.PHP"><button class="w3-button w3-teal">Download Page</button></a>
    </div>
    <div class="w3-third w3-container">
     <!--  <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p> 
    </div> -->
  </div>

	<p id="radfs0004" ></p>
  <div class="w3-row w3-padding-64">
   <div  class="w3-twothird w3-container">
      <!--<h4 class="w3-text-teal">Awards & Accolades</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse venenatis luctus enim ut imperdiet. Aenean et lorem erat. Donec eu neque ut tellus placerat semper. Quisque dictum, neque vel facilisis blandit, elit nunc lacinia odio, at fringilla lorem dui non justo. Vestibulum tristique at risus et faucibus. Maecenas neque ipsum, interdum eget elementum eu, placerat a massa. Donec sed ultrices purus, nec dictum purus. Aenean malesuada, tellus sit amet tempus tincidunt, purus libero congue libero, vitae fermentum magna ante et diam. Nunc ac bibendum ipsum, quis fringilla neque. Ut luctus auctor mollis. Mauris tristique et nibh sed varius. Praesent interdum ante sed ultrices semper. Nulla vehicula semper tempor..</p>
	  
	  -->
    </div>
    
	<div class="w3-third w3-container">
     <!--  <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p> -->
    </div>
  </div>
  
  <p id="radfs0005"></p>
  <div class="w3-row w3-padding-64">
    <div    class="w3-twothird w3-container">
     <!-- <h4 class="w3-text-teal">Future Projects</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse venenatis luctus enim ut imperdiet. Aenean et lorem erat. Donec eu neque ut tellus placerat semper. Quisque dictum, neque vel facilisis blandit, elit nunc lacinia odio, at fringilla lorem dui non justo. Vestibulum tristique at risus et faucibus. Maecenas neque ipsum, interdum eget elementum eu, placerat a massa. Donec sed ultrices purus, nec dictum purus. Aenean malesuada, tellus sit amet tempus tincidunt, purus libero congue libero, vitae fermentum magna ante et diam. Nunc ac bibendum ipsum, quis fringilla neque. Ut luctus auctor mollis. Mauris tristique et nibh sed varius. Praesent interdum ante sed ultrices semper. Nulla vehicula semper tempor..</p>
	  
	  -->
    </div>
    <div class="w3-third w3-container">
      <!-- <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p> 
	  
	  -->
    </div>
  </div> 

 <div class="w3-row w3-padding-64">
    <div    class="w3-twothird w3-container">
     <!-- <h4 class="w3-text-teal">Future Projects</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse venenatis luctus enim ut imperdiet. Aenean et lorem erat. Donec eu neque ut tellus placerat semper. Quisque dictum, neque vel facilisis blandit, elit nunc lacinia odio, at fringilla lorem dui non justo. Vestibulum tristique at risus et faucibus. Maecenas neque ipsum, interdum eget elementum eu, placerat a massa. Donec sed ultrices purus, nec dictum purus. Aenean malesuada, tellus sit amet tempus tincidunt, purus libero congue libero, vitae fermentum magna ante et diam. Nunc ac bibendum ipsum, quis fringilla neque. Ut luctus auctor mollis. Mauris tristique et nibh sed varius. Praesent interdum ante sed ultrices semper. Nulla vehicula semper tempor..</p>
	  
	  -->
    </div>
    <div class="w3-third w3-container">
      <!-- <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p> 
	  
	  -->
    </div>
  </div>
   <div class="w3-row w3-padding-64">
    <div    class="w3-twothird w3-container">
     <!-- <h4 class="w3-text-teal">Future Projects</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse venenatis luctus enim ut imperdiet. Aenean et lorem erat. Donec eu neque ut tellus placerat semper. Quisque dictum, neque vel facilisis blandit, elit nunc lacinia odio, at fringilla lorem dui non justo. Vestibulum tristique at risus et faucibus. Maecenas neque ipsum, interdum eget elementum eu, placerat a massa. Donec sed ultrices purus, nec dictum purus. Aenean malesuada, tellus sit amet tempus tincidunt, purus libero congue libero, vitae fermentum magna ante et diam. Nunc ac bibendum ipsum, quis fringilla neque. Ut luctus auctor mollis. Mauris tristique et nibh sed varius. Praesent interdum ante sed ultrices semper. Nulla vehicula semper tempor..</p>
	  
	  -->
    </div>
    <div class="w3-third w3-container">
      <!-- <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p> 
	  
	  -->
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a class="w3-button w3-hover-black" href="POC_SAR.PHP">1</a>
      <a class="w3-button w3-hover-black" href="POC_SAR_about.PHP">2</a>
      <a class="w3-button w3-green w3-hover-black" href="#">3</a>
      <a class="w3-button w3-hover-black" href="POC_SAR_Partners.PHP">4</a>
      <a class="w3-button w3-hover-black" href="POC_SAR_Reviews.PHP">5</a>
	  <a class="w3-button w3-hover-black" href="POC_SAR_Payment gateway.PHP">6</a>
      <a class="w3-button w3-hover-black" href="POC_SAR_Partners.PHP">»</a>
    </div>
  </div>
<button  class="w3-button w3-purple w3-round" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <footer id="myFooter">
   <!-- <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Footer</h4>
    </div> -->

    <div class="w3-container w3-theme-l1">
      <p>Powered by &copy RAD Financial Systems</p>
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

<script>

	//Get the button
	var mybutton = document.getElementById("myBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	  } else {
		mybutton.style.display = "none";
	  }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}
</script>


</body>

</html>