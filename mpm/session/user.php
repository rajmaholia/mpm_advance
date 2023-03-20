<?php
namespace Mpm\Session;

class User {
  public $id,$username,$password,$email,$is_staff,$joined_on,$mobile_number,$fullname;
  public function  __construct(){
    $this->id = getVarArray('user','id');
    $this->username = getVarArray('user','username');
    $this->password = getVarArray('user','password');
    $this->is_staff = getVarArray('user','is_staff');
    $this->joined_on = getVarArray('user','joined_on');
    $this->mobile_number = getVarArray('user','mobile_number');
    $this->fullname = getVarArray('user','fullname');
 }
}
