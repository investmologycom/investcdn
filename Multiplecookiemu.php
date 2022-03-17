<?php
  require_once 'getCookieData.inc.php';
  if (isset($_GET['step']) && $_GET['step'] == '2')
{
    $test = (getCookieData('test') == 'ok') ?
      'supports' : 'does not support';
    echo "Browser $test cookies.";
  } else {
    setCookieData(array('test' => 'ok'));
    header("Location:
{$_SERVER['PHP_SELF']}?step=2");
  }
?>