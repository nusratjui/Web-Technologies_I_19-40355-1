<!DOCTYPE html>
<html> <title> Upload File </title>
<body>
 
	    <br> 
		
		   <div> 
		   
		     <p> <h1 style="color: green">  X  <sub style="color:black"> Company </sub> <h1> </p>
		 
		   
		       <h3 align= "right">
		 
		 
		        Logged in as<a style ="color:SlateBlu;"  href= "http://localhost/Lab%20Task%204/Profile.php"> Bob | </a>
		       <a style="color:SlateBlu;" href="http://localhost/Lab%20Task%204/LogIn.php">  Logout </a>  
		       
		   </h3>
		   
		  <hr>
		  
		</div> 
			
			
	      <h2> <u> Account </u> </h2> <span style="color: rgb(255, 255, 255);"> *************** </span> 
		    
		   
            <h4>
            <ul>
                <li> <a style="color:SlateBlu;" href="http://localhost/Lab%20Task%204/Dashboard.php">  Dashboard   </a></li> 
                <li> <a style ="color:SlateBlu;"  href= "http://localhost/Lab%20Task%204/Profile.php"> View Profile </a> </li>
                <li> <a style ="color:SlateBlu;" href="http://localhost/Lab%20Task%204/Edit%20Profile.php"> Edit Profile <a> </li>
				<li> <a style ="color:SlateBlu;" href="http://localhost/Lab%20Task%204/profile%20picture.php">Change Profile Picture</a> </li>
                <li> <a style ="color:SlateBlu;" href="http://localhost/Lab%20Task%204/Change%20Password.php">Change Password</a> </li>
                <li> <a style ="color:SlateBlu;" href="http://localhost/Lab%20Task%204/LogIn.php">Logout</a> </li>
                 
		     </ul>  
		     <h4/>

    <form action="upload.php" method="post" enctype="multipart/form-data"> <br>
   
        <h1 align="center"> PROFILE PICTURE </h1> <br> <br>
		
		  <h3 align="center"> 
		  
             <img  src="profile_pic.png" height="200px" width="250px"  title="profile pic"> </img> <br>

        <label> Select image to upload: <span style="color: rgb(255, 255, 255);"> ****** </span>  </label>
        <input type="file" name="fileToUpload" id="fileToUpload"> <br> <br>
  
        <div>
         
             <input type="submit" name="submit" value="Submit" >
			 <hr>
       </div>
	    </h3> 
		
		<div align="center">
		  
		           <h4> <span style="color: rgb(140, 140, 140);"> Copyright �  <?php echo date(2017);?> </span> </h4>
		   
		        </div>
				
                 <br>
    </form>

   </body>
</html>