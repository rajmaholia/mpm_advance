<?php
namespace Mpm\View;
use Mpm\Core\TemplateEngine;

function render($server,$template_name, $vars = null) {
  
  $filename = TemplateEngine::resolve($template_name);
  if(is_array($filename) && $filename[0]==null) {
    if(DEBUG==true){
    $mpmException = array(
      "name"=>"template_does_not_exists",
      "title"=>"Template Doesn't Exists",
      "target"=>$template_name,
      "extra"=>array("title"=>"Mpm Searched for template in these Directories",'data'=>$filename[1])
      );
    return render($server,"debug.php",array('mpm_exception'=>$mpmException));
    } else {
      echo "<h1>Internal Server Error (501)</h1>";
      echo "<p>There is a problem in internal Server</p>";
      exit();
    }
  }
  if (is_array($vars) && !empty($vars)) {
    extract($vars);
  }
  
  ob_start();
  require($filename);
  return ob_get_clean();
}
