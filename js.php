  <!-- ALL JS FILES -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
			  
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script type="text/javascript" >
		
		CKEDITOR.replace( 'comments' );
				document.getElementsByClassName('cke_1_contents').style.height = "300px !important";
		CKEDITOR.replace( 'comment' );
		document.getElementById('cke_1_contents').style.height = "300px !important";
		
		// counting words on requestform start
		
		function countWords() {
			var comments = document.getElementById("comments2").value;
			var nrWords = comments.split(" ").filter(x => x !="").length;
			var nrEnters = comments.split("\n").filter(x => x !="").length;
			
			document.getElementById("word_count").value = nrWords+nrEnters-1;
		}
		
		// counting words on requestform end
</script>

