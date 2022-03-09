
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo SITEPATH1; ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo SITEPATH1; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo SITEPATH1; ?>js/jquery.slicknav.min.js"></script>
  <script src="<?php echo SITEPATH1; ?>js/dashboard.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

 
  <script>
  	$(document).ready(function(){ 
	    $('#backtotop').click(function(){ 
	        $("html, body").animate({ scrollTop: 0 }, 600); 
	        return false; 
	    }); 
	});
  </script>


  <script>
  	$('.sub-menu ul').hide();
  	$('.sub-sub-menu ul').hide();
	$(".sub-menu a").click(function () {
		$(this).parent(".sub-menu").children("ul").slideToggle("100");
		$(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
	});

	$(".sub-sub-menu a").click(function () {
		$(this).parent(".sub-sub-menu").children("ul").slideToggle("100");
		$(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
	});
  </script>


    
    <!-- Signup Modal -->
	<div class="modal fade" id="signout-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header text-center d-block p-5 border-bottom-0">
					<h3 class="modal-title">Sign Out?</h3>
					<button type="button" class="close position-absolute" style="right: 15px; top: 8px;" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<p class="text-center">Are you sure you want to Sign Out?</p>
					<div class="text-center py-4">
						<form action="index.html">
							<button type="submit" class="btn btn-primary b-btn mx-3">Sign Out</button>
							<button class="btn btn-secondary mx-3" data-dismiss="modal">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>





	
</body>
</html>