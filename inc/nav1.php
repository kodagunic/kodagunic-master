<!-- Global Navigation -->
<div class="globalnav-bg">
		<div class="container">
			<nav class="navbar navbar-expand-sm navbar-dark px-0">
				<div class="d-flex w-100 b-nav-mobile">
					<button class="navbar-toggler align-self-center b-btn-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" onclick="myFunction(this)">
						<span style="display:none;">Menu</span>
						<div>
						  <div class="bar1"></div>
						  <div class="bar2"></div>
						  <div class="bar3"></div>
						</div>
					</button>
				</div>
				
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav main-menu d-flex">
						<li class="nav-item d-block"> <a href="<?php echo SITEPATH; ?>index" class="nav-link active">Home</a> </li>
						<li class="nav-item d-block"> <a href="<?php echo SITEPATH; ?>application" class="nav-link">Apply</a></li>
						<li class="nav-item d-block"> <a href="http://10.171.153.2/va/HelpMain.aspx" class="nav-link" target="_blank">Information Booklet</a></li> 
						<li class="nav-item d-block"> <a href="<?php echo SITEPATH; ?>dupack" class="nav-link">Duplicate Acknowledgement</a> </li>
						<li class="nav-item d-block"> <a href="<?php echo SITEPATH; ?>challanupload" class="nav-link">Upload Payment Challan </a></li>
						<li class="nav-item d-block"> <a href="<?php echo SITEPATH; ?>applstat" class="nav-link">Application Status </a></li>
						<li class="nav-item d-block"> <a href="<?php echo SITEPATH; ?>help" class="nav-link">Help</a></li>      
					</ul>
				</div>

			</nav>
		</div>
	</div>

	<script>
function myFunction(x) {
  x.classList.toggle("change");
}
</script>