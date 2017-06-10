<?php


/**
* Método para trazer strings com reticências e/ou um "Veja Mais"
* @method the_stringLimit
* @param {String}
* @param {Number}
* @return String
* @example the_stringLimit($string, 201);
*/
function the_string_limit($string, $size)  {
    $string = strip_tags($string);

    if( strlen($string) > $size ) {

      $string = wordwrap($string, $size);
      $string = explode("\n", $string);
      $string = $string[0] . '...';

      echo $string;
    }
    else {
      echo $string;
    }
}

/**
* Método para trazer strings com reticências e/ou um "Veja Mais"
* @method the_stringLimit
* @param {String}
* @param {Number}
* @return String
* @example the_stringLimit($string, 201);
*/
function get_the_string_limit($string, $size)  {
    $string = strip_tags($string);

    if( strlen($string) > $size ) {

      $string = wordwrap($string, $size);
      $string = explode("\n", $string);
      $string = $string[0] . '...';

      return $string;
    }
    else {
      return $string;
    }
}

function svg($iconName) {
  $filePath = get_template_directory() . '/icons/svg/' . $iconName . '.svg';
  readfile($filePath);
}

function my_print($value) {
  echo'<pre>';
  var_dump($value);
  echo'</pre>';
}











?>
