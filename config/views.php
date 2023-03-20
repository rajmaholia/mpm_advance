<?php
if(!defined('SECURE')) exit('<h1>Access Denied</h1>'); 
use function Mpm\View\render;


function home($server){
  global $user;
  return render($server,'home.php',array("user"=>$user));
}