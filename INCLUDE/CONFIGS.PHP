<?PHP 
define("BASEURI","http://localhost/st james pannel/");
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","stjamesparish");
define("SITE","stjamesparish");

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}

?>


