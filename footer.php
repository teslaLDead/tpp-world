<footer>
 <div class="container">
 <div class="row">
 <br>
  <div class="col-sm-3 col-md-3 col-xs-12"><h4>Expertise</h4>

 <div class="ft-div">  
 <ul>
   <li><a href="expertise.php">People Alignment</a></li>
    <li><a href="individual-excellence.php">People Development</a></li
   ></ul></div>
   
   <br>&nbsp; <br>
   <h4>Other Link</h4>
    <div class="ft-div">  
 <ul>
   <li><a href="artical-page.php">Artricles</a></li>
    <li><a href="sucess-client.php">Client Sucess</a></li><br>&nbsp;</ul></div>
  </div>
  
   <div class="col-sm-3 col-md-3 col-xs-12"> <h4>Product</h4>
   <div class="ft-div">  
   <ul>
    <li><a href="product-main.php">By Expertise</a></li>
    <li><a href="by-level.php">By Level</a></li>
  <li><a href="by-function.php">By Function</a></li>
    <li><a href="by-industries.php">By Industry size </a></li>
     <li><a href="For-individual.php">For Individual excellence </a></li>
      <li><a href="#">&nbsp;</a></li>
   </ul></div>
   </div>
   
   <div class="col-sm-3 col-md-3 col-xs-12"><h4>Resourse</h4>
   <div class="ft-div">  <ul>
   <li><a href="resourse.php">Operating Models  </a></li>
    <li><a href="ddamair.php">DDAMAIR Approach </a></li>
    <li><a href="industries-service.php">Industries we serve </a></li>
    <li><a href="concept.php">Concept </a>
   </ul></div></div>
   
   <div class="col-sm-3 col-md-3 col-xs-12"> <h4>Company</h4>
   <div class="ft-div">  <ul>
  <li><a href="company.php">About TPP</a></li>
        <li><a href="sucess-client.php">Clients</a></li>
         <li><a href="founder&histry.php">Founder & History  </a></li>
        <li><a href="core-team.php">Core Team</a></li>
   
   </ul></div></div>
   
 </div>
 </div>
 </footer>

<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script> 
<script>
$(document).ready(function(){ 
	var touch 	= $('#resp-menu');
	var menu 	= $('.menu');
 
	$(touch).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	$(window).resize(function(){
		var w = $(window).width();
		if(w > 767 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
	
});
</script>