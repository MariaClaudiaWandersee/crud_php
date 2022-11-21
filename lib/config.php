<?php
    //definir a variável da raiz do site
    define("URL_BASE","https://localhost/sistematcs/");

    //definir as variáveis de configuração do banco
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", '');
    define("DB_NAME", "sistema_tcs");

    include_once __DIR__.("/mysql.php");
?>