<?php 
if(isset($_POST['submit']))
{
	
	  $email = $_POST['email']; 
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
	$country = $_POST["country"];
	$pincode = $_POST['pincode'];
	$topic = $_POST['topic'];
	$comment = $_POST['comment'];
    
	
	 	$to ="info@tppworld.co , vinay.singh14071989@gmail.com";
  		$subject = 'Form submission from Talk to an Expert';
 		//$from =$email;
      $from ='noreply@tppworld.co';
 

  		 // now we'll build the message headers
  		 $headers = "From: $from\r\n" .
  		 "MIME-Version: 1.0\r\n";
	  

   			$body ="<div style=' width:650px; margin:0px auto; padding:0px; background:rgba(237,234,234,1.00); overflow:hidden; border:solid 2px rgb(218, 213, 213);'>
  <div style=' background:#054271; color:#fff; overflow:hidden;'>
    <div style='width:225px; float:left; padding:10px;'><img src='http://tppworld.co/image/New/TPP-logo-new.png' alt='logo' style='width:100%;'/></div>
    <div style='width:400px; float:right'><h1 style='text-align:center;'>enquiry Information</h1></div>
  </div>
  
  <div style='font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style:15px;'>
    <div style='width:225px; float:left; padding:10px 10px 10px 15px;'>Name</div>
    <div style='width:325px; float:right; padding:10px;'>$name</div>
  </div>
 
  
   <div style='font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style:15px;'>
    <div style='width:225px; float:left; padding:10px 10px 10px 15px;'>Email</div>
    <div style='width:325px; float:right; padding:10px;'>$email</div>
  </div>
  
   <div style='background:#fff; overflow:hidden; clear:both; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style:15px;'>
    <div style='width:225px; float:left; padding:10px 10px 10px 15px;'>Contact No</div>
    <div style='width:325px; float:right; padding:10px;'>$mobile</div>
  </div>
  
  <div style='font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style:15px;'>
    <div style='width:225px; float:left; padding:10px 10px 10px 15px;'>Comment</div>
    <div style='width:325px; float:right; padding:10px;'>$comment</div>
  </div>
  
  <div style='font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style:15px;'>
    <div style='width:225px; float:left; padding:10px 10px 10px 15px;'>Country</div>
    <div style='width:325px; float:right; padding:10px;'>$country</div>
  </div>
  
  <div style='font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style:15px;'>
    <div style='width:225px; float:left; padding:10px 10px 10px 15px;'>Pincode</div>
    <div style='width:325px; float:right; padding:10px;'>$pincode</div>
  </div>
  
  <div style='font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style:15px;'>
    <div style='width:225px; float:left; padding:10px 10px 10px 15px;'>Topic</div>
    <div style='width:325px; float:right; padding:10px;'>$topic</div>
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
	echo "try gain...";
   }
}
?>
<div class="col-sm-7 col-md-7 col-xs-12 col-lg-7"> <fieldset class="scheduler-border">
    <legend class="secand-sec-bluebg" style="width:200px; border-bottom:none; background:none; padding:0px 15px;">Talk to an Expert</legend>
   <form method="post" action="" name="frm">
   
   <div class="col-sm-4">Name <span class="star">*</span></div>
   <div class="col-sm-8">
   <div class="form-group">
      <input type="text" class="form-control" id="email" name="name" placeholder="Full Name">
    </div>
   </div>
   
  
   
    <div class="col-sm-4">Company Email <span class="star">*</span></div>
   <div class="col-sm-8">
   <div class="form-group">
      <input type="email" class="form-control" id="email" name="email" placeholder="info@xyz.com">
    </div>
   </div>
   
   <div class="col-sm-4">Company Tel <span class="star">*</span></div>
   <div class="col-sm-8">
   <div class="form-group">
      <input type="tel" class="form-control" id="email" name="mobile" placeholder="Enter Contact No" max="10">
    </div>
   </div>
   
    <div class="col-sm-4">Country <span class="star">*</span></div>
   <div class="col-sm-8">
   <div class="form-group">
      <input type="text" class="form-control" id="email" name="country" placeholder="Enter country">
    </div>
   </div>
   
    <div class="col-sm-4">Zip/Post code <span class="star">*</span></div>
   <div class="col-sm-8">
   <div class="form-group">
      <input type="text" class="form-control" id="email" name="pincode" placeholder="Enter Zipcode">
    </div>
   </div>
   
   <div class="col-sm-4">Topic <span class="star">*</span></div>
   <div class="col-sm-8">
   <div class="form-group">
      <select class="form-control" name="topic">
      <option>Select topic</option>
       <option>Manpower Planning</option>
       <option>Manpower Deployment</option>
       <option>Demanding Performance</option>
       <option>Delivering Performance</option>
       <option>Bridge the performance Gap</option>
        <option>Know Self</option>
       <option>Set the target</option>
       <option>Go to the root</option>
       <option>Connect with others</option>
       <option>Set example for others</option>
       
      </select>
    </div>
   </div>
 
   
   <div class="col-sm-4">Your Comment <span class="star">*</span></div>
   <div class="col-sm-8">
   <div class="form-group">
      <textarea class="form-control" name="comment"></textarea>
    </div>
   </div>
   
   <div class="col-sm-4">&nbsp;</div>
   <div class="col-sm-8">
   <div class="form-group">
   <button style="width:100%;" name="submit">Submit</button>
      
    </div>
   </div>
   
   </form> 
</fieldset></div>