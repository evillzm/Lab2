<?php
	require ("config.php");	
	if(crearTablas()){
      echo
      "<script>
            alert('Tablas creadas con exito');
      </script>";
    }
?>