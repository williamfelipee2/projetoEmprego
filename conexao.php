<? 
$host = "localhost";
$usuario = "root";
$senha = "";
$bd="bdfindjobs";

$mysqli = new $mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
    echo "Falha na conexao: (".mysqli->connect_errno.") ".$mysqli->connect_error; 

?>