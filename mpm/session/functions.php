<?php
namespace Mpm\Session;

/* Set the session variable */
function setVar($var,$value){
  $_SESSION[$var] = $value;
}

/*Get The Session Variable*/
function getVar($var){
  if(isset($_SESSION[$var])) {
   return  $_SESSION[$var];
   } else {
     return null;
   }
}

/*Get the session variable value from an array*/
function getVarArray($arr,$key){
  $arr = isset($_SESSION[$arr])?$_SESSION[$arr]:null;
  return ($arr==null)?null:(isset($arr[$key])?$arr[$key]:null);
}

/* Unset Session Variable */
function unsetVar($var) {
  unset($_SESSION[$var]);
}
