<?php

// Nome do banco de dados
define('DB_NAME', 'crud');

// Usuário do banco de dados
define('DB_USER', 'root');

// Senha do Banco de dados
define('DB_PASSWORD', '123456');

// Nome do Host
define('DB_HOST', 'database');

// Caminho para a pasta do sistema
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

// Caminho no Servidor
if ( !defined('BASEURL') )
    define('BASEURL', '/crud-basico/');

/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . 'banco.php');

?>
