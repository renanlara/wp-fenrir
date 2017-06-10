<?php function the_component_%COMPONENT_NAME%() { ?>

<div>
  %COMPONENT_NAME% is now available!
</div>



<?php
/* Arquivos do Componente */
$dependencies = array(
	array('dist', 'index.min.js', 'js'),
	array('dist', 'index.min.css', 'css')
);
// inclui os arquivos da lista de dependencias
component_include_front_dependencies(dirname(__FILE__), $dependencies);
?>

<?php } ?>
