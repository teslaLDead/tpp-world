<?php
if ($_SERVER['REQUEST_METHOD']=="POST")

{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$tel=$_POST['tel'];
		$comment=$_POST['comment'];
		$to ="info@tppworld.co";
   		$subject = 'apply';
 		//$from =$email;
                $from ='noreply@tppworld.co';

  
   		$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

   // now we'll build the message headers
   $headers = "From: $from\r\n" .
   "MIME-Version: 1.0\r\n" .
      "Content-Type: multipart/mixed;\r\n" .
      " boundary=\"{$mime_boundary}\"";
	  
	    // Add the headers for a file attachment
  $headers .= "\nMIME-Version: 1.0\n" .
              "Content-Type: multipart/mixed;\n" .
              " boundary=\"{$mime_boundary}\"";




   
   
   $body ="<div style=' width:650px; margin:0px auto; padding:0px; background:rgba(237,234,234,1.00); overflow:hidden; border:solid 2px rgb(218, 213, 213);'>
  <div style=' background:#054271; color:#fff; overflow:hidden;'>
    <div style='width:225px; float:left; padding:10px;'><img src='http://tppworld.co/image/New/TPP-logo-new.png' alt='logo' style='width:100%;'/></div>
    <div style='width:400px; float:right'><h1 style='text-align:center;'>enquiry Information from contact page</h1></div>
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
    <div style='width:325px; float:right; padding:10px;'>$tel</div>
  </div>
  
  <div style='font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style:15px;'>
    <div style='width:225px; float:left; padding:10px 10px 10px 15px;'>Comment</div>
    <div style='width:325px; float:right; padding:10px;'>$comment</div>
  </div></div>";

   // next, we'll build the invisible portion of the message body
   // note that we insert two dashes in front of the MIME boundary 
   // when we use it
   $message = "This is a multi-part message in MIME format.\n\n" .
      "--{$mime_boundary}\n" .
      "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
      "Content-Transfer-Encoding: 7bit\n\n" .
   $message . "\n\n";
   
   
   //header for html message header.
   
   $message = "This is a multi-part message in MIME format.\n\n" .
             "--{$mime_boundary}\n" .
             "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
             "Content-Transfer-Encoding: 7bit\n\n" .
             $body ."\n\n";
   

   // now we'll process our uploaded files
   foreach($_FILES as $userfile){
      // store the file information to variables for easier access
      $tmp_name = $userfile['tmp_name'];
      $type = $userfile['type'];
      $name = $userfile['name'];
      $size = $userfile['size'];

      // if the upload succeded, the file will exist
      if (file_exists($tmp_name)){

         // check to make sure that it is an uploaded file and not a system file
         if(is_uploaded_file($tmp_name)){
 	
            // open the file for a binary read
            $file = fopen($tmp_name,'rb');
 	
            // read the file content into a variable
            $data = fread($file,filesize($tmp_name));

            // close the file
            fclose($file);
 	
            // now we encode it and split it into acceptable length lines
            $data = chunk_split(base64_encode($data));
         }
 	
         // now we'll insert a boundary to indicate we're starting the attachment
         // we have to specify the content type, file name, and disposition as
         // an attachment, then add the file content.
         // NOTE: we don't set another boundary to indicate that the end of the 
         // file has been reached here. we only want one boundary between each file
         // we'll add the final one after the loop finishes.
         $message .= "--{$mime_boundary}\n" .
            "Content-Type: {$type};\n" .
            " name=\"{$name}\"\n" .
            "Content-Disposition: attachment;\n" .
            " filename=\"{$fileatt_name}\"\n" .
            "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n";
		 
		 
		 
	
																
															




      }
   }
   // here's our closing mime boundary that indicates the last of the message
   $message.="--{$mime_boundary}--\n";
   // now we just send the message
   if (@mail($to, $subject, $message, $headers))
      header("Location:thanku.php");	
   else
      //header("Location:participite-now.php");
echo "please try again....";
} 

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TPP World</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="js/prefixfree.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<link rel="stylesheet" href="css/web-style.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
<?php include('include-topheader.php')?>
<div class="container"> 
<?php include('navigation.php')?>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
<img src="image/New/banner-6.jpg" class="img-responsive" alt=""/>
<div class="mainheading-1"> <h1 class="">How to apply</h1></div>
</div></div>

 <div class="row">
 <div class="main-div"><br><br>
 <div class="clearfix"></div>
 <div class="col-sm-5 col-md-5 col-xs-12">
<!---<p><strong>Are you a returning applicant?Previous Applicants:</strong></p>
   <p> <strong>Position:</strong> Learning Systems Consultant (LSC)</p>
<p><strong>Location:</strong> AP-Philippines</p>
<p><strong>Job Code:</strong> 629</p>
  <div class="consultant-form">
   <form>
    <div class="form-innerrow"><strong>Email id :</strong></div>
    <div class="form-innerrow"><input type="text" name="name"></div><br>
    <div class="form-innerrow"><strong>Password :</strong></div>
    <div class="form-innerrow"><input type="password" name="password"></div>
      <div class="clearfix"></div>
      <div class=""><br><button class="pull-right">Add to my jobs</button></div>
      <div class="clearfix"></div>
       <div>If you do not remember your password <a href="#">Click here</a> </div>
       
       <div class="pull-right"><a href="#">Back to Search Results</a>&nbsp; &nbsp; &nbsp;<a href="#">New Search</a></div>
   </form> </div>
 --->
 <p><br>To submit your application please complete the form below. Fields marked with a red asterisk * are required. When you have finished click <strong>Submit
</strong> at the bottom of this form.</p>
 </div><!--left-->
 
 <div  class="col-sm-7 col-md-7 col-xs-12">
   

<p><mark class="secand-sec-bluebg"><strong><span style="color:rgba(173,13,16,1.00);">*</span> To pre-fill this application, click a link below to populate information </strong></mark></p>
<p>If you prefer to upload a resume, it can be uploaded in any of the following </p>

<p> 
 <div class="form-innerrow"><a href="#"><img src="images/in-icon.png" width="30" height="34" alt=""/></a>&nbsp; &nbsp; <a href="#"><span style="font-size:20px;">LinkedIn Profile</span></a></div> </p>
<div class="clearfix"></div><!--clearfix-->
  <p>
  <form method="post" name="frm" action="" enctype="multipart/form-data">
<fieldset class="scheduler-border">
    <legend class="scheduler-border  legend-class">Registration</legend>
   
    <div class="emal-regis">Name <span style="color:rgba(173,13,16,1.00);">*</span></div>
    <div class="emal-regis-2"><input type="text" name="name" class="form-control" required></div>
   
    <div class="clearfix"></div><!---->
    
    <div class="emal-regis">Email Id <span style="color:rgba(173,13,16,1.00);">*</span></div>
    <div class="emal-regis-2"><input type="email" name="email" class="form-control" required></div>
    <div class="clearfix"></div><!---->
   
   <div class="clearfix"></div><!---->
     <div class="emal-regis">Contact No <span style="color:rgba(173,13,16,1.00);">*</span></div>
    <div class="emal-regis-2"><input type="tel" name="tel" class="form-control" required></div>
     <div class="clearfix"></div><!---->
     
      <div class="emal-regis">Comment <span style="color:rgba(173,13,16,1.00);">*</span></div>
    <div class="emal-regis-2"><textarea class="form-control" rows="3" name="comment" required> </textarea></div>
     <div class="clearfix"></div><!---->
     <div class="emal-regis">Upload Resume <span style="color:rgba(173,13,16,1.00);">*</span></div>
    <div class="emal-regis-2"><input type="File" name="file"></div>
    
     <div class="clearfix"></div><!---->
     <div class="emal-regis">&nbsp;</div>
    <div class="emal-regis-2"><button style="width:100%;">Submit</button></div>
    
</fieldset></form>
 </div>
 
  
 </div>
 </div><!--end of secand sec-->
</div><!--end of container-->

 <?php include('footer.php');?>
</body>
</html>
