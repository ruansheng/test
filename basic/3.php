<?php
/**
 * 
 * @author ruansheng
 * @since  2015-08-16
 */

$user = $_SERVER['PHP_AUTH_USER'];
$passd = $_SERVER['PHP_AUTH_PW'];

if(!$user || ! $passd) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="please input user and pass"');
    exit;
} else {
    if($user != 'ruansheng' || $passd != '123') {
        header('HTTP/1.1 401 Unauthorized');
        header('WWW-Authenticate: Basic realm=" user error or pass error"');
        exit;
    }
}

?>
<body>
    已通过认证
</body>