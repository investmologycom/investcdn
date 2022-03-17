<?php

function log_login_activity($loginEmail, $loginAuthType = '', $loginAttemptStatus = '', $error = '', $loginRedirect = '',$HeaderInfo = ''){
    $loginTime = time();
    $browserInfo = getBrowser();
    $browser = $browserInfo['name'].' '.$browserInfo['version'];
    $loginIP = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "HTTPS" : "HTTP";
    $browserAgent = $browserInfo['userAgent'];
    DB::insert('?:login_logs',array('email' => $loginEmail, 'time' =>$loginTime, 'browserInfo' =>$browser, 'loginAuthType' =>$loginAuthType, 'IP' =>$loginIP, 'error' => $error, 'protocol' => $protocol, 'loginRedirect' => $loginRedirect, 'browser' => $browserAgent));
}