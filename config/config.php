<?php
#Arquivos diretório raízes
$PastaInterna = "";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
} else {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Diretórios Especificos
define('DIRIMG', DIRPAGE."public/img/");
define('DIRCSS', DIRPAGE."public/css/");
define('DIRJS', DIRPAGE."public/js/");
define('DIRADM', DIRPAGE."public/admin/");
define('DIRAUD', DIRPAGE."public/audio/");
define('DIRDSG', DIRPAGE."public/design/");
define('DIRFNT', DIRPAGE."public/fontes/");
define('DIRVID', DIRPAGE."public/video/");

#Acesso ao banco de dados
define('HOST', "localhost");
define('DB', "pdo");
define('USER', "root");
define('PASS', "");