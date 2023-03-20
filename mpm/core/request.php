<?php
namespace Mpm\Core;

class Request {
  /*
  public const uri = $_SERVER["REQUEST_URI"];
  public const method = $_SERVER["REQUEST_METHOD"];
  public const time = $_SERVER["REQUEST_TIME"];
  public const POST = $_POST;
  public const GET = $_GET;
  public const FILES = $_FILES;
  public const COOKIE = $_COOKIE;
  */
  public static function captureUri(){
    return $_SERVER["REQUEST_URI"];
  }
}