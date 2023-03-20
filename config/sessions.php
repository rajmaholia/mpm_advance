<?php
//session_start();

use Mpm\Session\User;

$base_url = isset($_SERVER['HTTPS'])&& $_SERVER['HTTPS']==='on' ? "https":"http"."://".$_SERVER['HTTP_HOST'].'/';

$user = new User();