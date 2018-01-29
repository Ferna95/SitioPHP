

</div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/functions.js"></script>
	<script src="js/jquery.smoothState.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script type="text/javascript">
    	$(document).ready(function() {
  			$('.img3').hide();
  			$('.img2').hide();
		});

    	$('.c1').on("click", function(e){
    		$('.img1').show();
    		$('.img2').hide();
    		$('.img3').hide();
    	});

    	$('.c2').on("click", function(e){
    		$('.img1').hide();
    		$('.img2').show();
    		$('.img3').hide();
    	});

    	$('.c3').on("click", function(e){
    		$('.img1').hide();
    		$('.img2').hide();
    		$('.img3').show();
    	});

    	$(document).on('click.modal', 'a[rel~="modal:open"]', function(event) {
    		event.preventDefault();
    		$(this).modal();
 		});
    </script>
    </body>
</html>