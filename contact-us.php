<?php 
if(isset($_POST['submit']))
{
	
	  $email = $_POST['email']; 
    $name = $_POST['name'];
    $mobile = $_POST['tel'];
	$comment = $_POST['comment'];
    
	
	 	$to ="sk@tppworld.co, sunilgupta330@gmail.com";
  		$subject = 'TTP World : Contact';
 		$from ='noreply@tppworld.co';
 		 // now we'll build the message headers
  		 $headers = "From: $from\r\n" .
  		 "MIME-Version: 1.0\r\n";
	  

   			$body ="<div style=' width:650px; margin:0px auto; padding:0px; background:rgba(237,234,234,1.00); overflow:hidden; border:solid 2px rgb(218, 213, 213);'>
  <div style=' background:#054271; color:#fff; overflow:hidden;'>
    <div style='width:225px; float:left; padding:10px;'><img src='http://tppworld.co/image/New/TPP-logo-new.png' alt='logo' style='width:100%;'/></div><br>
    <div style='width:400px; float:right'><h1 style='text-align:center;'> $name,has Recently Enquired </h1></div>
  </div>
  
  <div style='font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style:15px;'>
    <div style='width:225px; float:left; padding:10px 10px 10px 15px;'>Name:</div>
    <div style='width:325px; float:right; padding:10px;'>$name</div>
  </div>
 
  
   <div style='font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style:15px;'>
    <div style='width:225px; float:left; padding:10px 10px 10px 15px;'>Email:</div>
    <div style='width:325px; float:right; padding:10px;'>$email</div>
  </div>
  
   <div style='background:#fff; overflow:hidden; clear:both; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style:15px;'>
    <div style='width:225px; float:left; padding:10px 10px 10px 15px;'>Contact No</div>
    <div style='width:325px; float:right; padding:10px;'>$mobile</div>
  </div>
  
  <div style='font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style:15px;'>
    <div style='width:225px; float:left; padding:10px 10px 10px 15px;'>Message:</div>
    <div style='width:325px; float:right; padding:10px;'>$comment</div>
  </div>
  
 
  
  
  
 
  
</div>";


   		
   
   
 
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n". 
             $body ."\n\n";
   
        	
		 
		 
		 
	
																
															




   // now we just send the message
   if (@mail($to, $subject, $message, $headers))
   {
      header("Location:thanku.php");	
	  
	   //echo 'Mail Sent. Thank you ' . $first_name . ', we will contact you shortly.';
   }
   else
   {
     // header("Location:participite-now.php");
	echo '<script>alert("Please try again.......");</script>';
   }
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include('head.php')?>
</head>

<body>
<?php include('include-topheader.php')?>
<div class="container"> 
<?php include('navigation.php')?>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
<img src="image/New/banner-6.jpg" class="img-responsive" alt=""/>
<div class="mainheading-1"> <h1 class="">Contact Detail</h1></div>
</div></div>

 <div class="row">
 <div class="main-div"><br>
 <div class="col-sm-5 col-md-5 col-xs-12">
<p> <form method="post" name="frm"  action="">
<fieldset class="scheduler-border">
    <legend class="scheduler-border  legend-class" style="width:200px">Request Information</legend>
   
    <div class="emal-regis">Name <span style="color:rgba(173,13,16,1.00);">*</span></div>
    <div class="emal-regis-2"><input type="text" name="name" class="form-control" required></div>
    <div class="clearfix"></div><!---->
     
    
    <div class="emal-regis">Email Id <span style="color:rgba(173,13,16,1.00);">*</span></div>
    <div class="emal-regis-2"><input type="email" name="email" class="form-control" required></div>
    <div class="clearfix"></div><!---->
   
     <div class="emal-regis">Contact No <span style="color:rgba(173,13,16,1.00);">*</span></div>
    <div class="emal-regis-2"><input type="tel" name="tel" class="form-control" required></div>
     <div class="clearfix"></div><!---->
     
      <div class="emal-regis">Comment <span style="color:rgba(173,13,16,1.00);">*</span></div>
    <div class="emal-regis-2"><textarea class="form-control" rows="3" required name="comment"> </textarea></div>
     <div class="clearfix"></div><!---->
    
     <div class="emal-regis">&nbsp;</div>
    <div class="emal-regis-2"><button style="width:100%;" name="submit">Submit</button></div>
    
</fieldset></form></p>
 </div>
 
 <div  class="col-sm-7 col-md-7 col-xs-12">
    <div class="panel panel-default" style="margin-top:20px;">
  
   <div class="panel-body"> <h4 class="secand-sec-bluebg"><strong>Total People Productivity Pvt. Ltd</strong></h4>
   <div class="row">
     <div  class="col-sm-4 col-md-4 col-xs-12">
      <p><strong>Address :</strong></p>
     </div>
      <div  class="col-sm-8 col-md-8 col-xs-12"><address>Level 2, Elegence Tower <br>Jasola  District Center <br>Old Mathura Road <br>New Delhi 100 025</address></div>
      
       <div  class="col-sm-4 col-md-4 col-xs-12">
      <p><strong>Contact No :</strong></p>
     </div>
      <div  class="col-sm-8 col-md-8 col-xs-12"><address>+91 9810226941 (M)<br>011 - 66351585 (T)</address></div>
      
      <div  class="col-sm-4 col-md-4 col-xs-12">
      <p><strong>Email Id :</strong></p>
     </div>
      <div  class="col-sm-8 col-md-8 col-xs-12"><address>sk@tppworld.co</address></div>
      <div class="panel-body">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d876.2634084616074!2d77.28796807918836!3d28.53810757706353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce6aa9cfc4f99%3A0x665909b7d4962e0c!2sElegance+Tower%2C+Jasola+Vihar%2C+New+Delhi%2C+Delhi+110025!5e0!3m2!1sen!2sin!4v1463484567658" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
   </div>
  </div>
  </div>
 </div>
 <div class="clearfix"></div>
 
 <p></p>
  
  
 
 </div></div><!--end of secand sec-->
</div><!--end of container-->

 <?php include('footer.php')?>

</body>
</html>
