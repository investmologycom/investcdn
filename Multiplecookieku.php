<?php
  require_once 'stripCookieSlashes.inc.php';
  function setCookieData($arr) {
    $cookiedata = getAllCookieData();
    if ($cookiedata == null) {
      $cookiedata = array();
    }
    foreach ($arr as $name => $value) {
      $cookiedata[$name] = $value;
    }
    setcookie('cookiedata',
      serialize($cookiedata),
      time() + 30*24*60*60);
  }
  function getAllCookieData() {
    if (isset($_COOKIE['cookiedata'])) {
      $formdata = $_COOKIE['cookiedata'];
      if ($formdata != '') {
        return unserialize($formdata);
      } else {
        return array();
      }
    } else {
      return null;
    }
  }
  function getCookieData($name) {
    $cookiedata = getAllCookieData();
    if ($cookiedata != null &&
      isset($cookiedata[$name])) {
        return $cookiedata[$name];
      }
    }
    return '';
  }
?>