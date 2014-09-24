<?php 
		session_start();
		session_destroy();
		echo "
				<script>
					alert('Adios :P');location.replace('index.php');
				</script>
			";

?>