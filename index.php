<!DOCTYPE html>
	
<html lang="en">
	<head>
            <!--you may use this template for study purposes, created by Allan muzimba.
            for full version of this app or anyother php applications contact developer:
            +263780575260 /mrallanrass@gmail.com-->
		<meta charset="utf-8">
                <meta author="Allan Muzimba">
                <meta title="Open Excel, view and Edit it using PHP"
		<title>Open Excel, veiw Using PHP </title>
                <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
                <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
                <link href="css/style.css" rel="stylesheet" type="text/css"/>
                <script src="js/bootstrap.js" type="text/javascript"></script>
                <script src="js/jquery.js" type="text/javascript"></script>
	</head>
	<body>    

	<!-- Navbar
    ================================================== -->
         <!--you may use this template for study purposes, created by Allan muzimba.
            for full version of this app or anyother php applications contact developer:
            +263780575260 /mrallanrass@gmail.com-->
         
         <nav class="navbar-fixed-top" align='center'>
             <div></div><br><br>
             <h2 class="alert-info">Allan's Php Source codes</h2><br>
             <h3 class="alert-success">PHP open Excel/CSV file and View, php arrays</h3>
             <BR><br>
         </nav>
         <div >
             
         </div>
         <br>  <BR><br>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">OPEN Excel View and edit it Using PHP</a>
				
			</div>
		</div>
	</div>

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
                           
				<form class="form-horizontal well"  method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Open CSV/Excel file</legend>
                                   
						<div class="control-group">
							<div class="control-label">
								<label>CSV/Excel file:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="open" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
                                          <div id="wrap">
	<div class="container">
		<div class="row">
                    <p >Download file format you should upload, you can add items to the file</p>
                                                     <a href="myproducts.csv" download="" class="btn-warning" >Download File format</a>
                            </div>
        </div>
                                          </div>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
            <div class="control-group">
                
             
                
            </div>
		

		<table class="table table-bordered">
			<thead>
				  	<tr>
                                         
				  	<th>ID</th>	
                                            <th>A-Data</th>
				  		<th>B-Data</th>
				  		<th>C-Data</th>
				  		<th>D-Data</th>
				  		<th>E-Data</th>
				 		<th>F-Data</th>
				  		<th>H-Data</th>
                                                <th>Action</th>
				 
				  	</tr>	
				  </thead>
			
			     <?php
        
        
        if(isset($_POST["open"])){
		

		echo $filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE){
                     
                   
	
        ?>
					<tr>
                                             
                                            <td > <?php echo $emapData['0']; ?></td>
						<td><?php echo $emapData['1']; ?></td>
						<td><?php echo $emapData['2']; ?></td>
						<td><?php echo $emapData['3']; ?></td>
						<td><?php echo $emapData['4']; ?></td>
						<td><?php echo $emapData['5']; ?></td>
                                                <td><?php echo $emapData['6']; ?></td>
						<td><?php echo $emapData['7']; ?></td>
                                                <td> <input type="button" value="Edit" onclick="getConfirmation();" /> </td>
					<?php
                 }
                 }
                                        ?>

					</tr>
                                        <?php
        }
        ?>
			
		</table>
	</div>

	</div>
        
     <script type="text/javascript">

function getConfirmation(){
var retVal = confirm("Yes its  possible to edit excel in PHP or send file to MYSQL, Contact Developer for full version!");

if( retVal == true ){
var retVal = confirm("You are ablout to contact developer:Allan Muzimba. Choose by Phone press OK or by email press CANCEL?");
if( retVal == true ){
    alert("Calling...+263780575270");
    window.location="tel:+263780575270";
    return true;
}
else{
alert("Send email to mrallanrass@gmail.com");
window.location = "mailto:mrallanrass@gmail.com";
return false;
}
}else{
Document.write ("You cancelled contact with developer!");
return false;
}
}

</script>

	</body>
</html>