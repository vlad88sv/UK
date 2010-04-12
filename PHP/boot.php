<?php
error_reporting             (E_STRICT | E_ALL);
ob_start                    ("ob_gzhandler");
//setlocale                   (LC_ALL, 'es_AR.UTF-8', 'es_ES.UTF-8', 'es_AR', 'es_ES');
//date_default_timezone_set   ('America/El_Salvador');
ini_set                     ('session.gc_maxlifetime', '6000');
ini_set                     ("session.cookie_lifetime","36000");
$base = dirname(__FILE__);
require_once ("$base/LIB/ui.php"); // Generación de objetos UI HTML
require_once ("$base/LIB/stubs.php"); // Generación de objetos UI desde la base de datos [depende de ui.php]
require_once ("$base/LIB/const.php"); // Conexión hacia la base de datos
require_once ("$base/LIB/session.php");
require_once ("$base/LIB/user.php");
require_once ("$base/LIB3/PME/phpMyEdit.class.php");
require_once ("$base/DB/db-private.php"); // Datos de conexión hacia la base de datos
require_once ("$base/DB/db.php"); // Conexión hacia la base de datos [depende de db-conexion.php]
require_once ("$base/DB/db-stubs.php"); // Generación de objetos UI desde la base de datos [depende de ui.php]
require_once ("$base/DB/db-ui.php"); // Generación de objetos UI desde la base de datos [depende de ui.php]

function DEPURAR($s,$f=0){if($f||isset($_GET['depurar'])){echo '<pre>'.$s.'</pre><br /><pre>'.parse_backtrace().'</pre><br />';}}
?>
