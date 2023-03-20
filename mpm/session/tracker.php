<?php
namespace Mpm\Session;

function addTransaction(){
  $url = getCurrentUrl();
  if(getVar('transactions')==null) {
    $transactions = array();
    array_push($transactions,$url);
  }else {
    $transactions = getVar('transactions');
    $lastUrl = $transactions[array_key_last($transactions)];
    if($lastUrl!=$url) {
      array_push($transactions,$url);
    }
  }
  setVar('transactions',$transactions);
}

function getPreviousUrl() {
  if(getVar('transactions')!=null && count(getVar('transactions'))>1){
    $transactionsArr = getVar('transactions');
    $lastKey = array_key_last($transactionsArr); 
    array_splice($transactionsArr,$lastKey,1);
    $purl =  array_pop($transactionsArr);
    setVar('transactions',$transactionsArr);
  } else {
    $purl = BASE_URL;
  }
  return $purl;
}

function getCurrentUrl(){
  return BASE_URL.$_SERVER['REQUEST_URI'];
}