<?php
var_dump($_GET);

// controlle se è stato inviata in GET la proprietà mail 
// empty restituisce true se l'elemento di un array non esiste
if(empty($_GET['mail'])){
  echo 'manca';
}else{

  $mail = $_GET['mail'];

  // controlliamo se è presente la chiocciola e il punto
  //strpos restituisce la posizione della sottostringa nella stringa e se non la trova restituisce FALSE
  if(strpos($mail, '@') && strpos($mail, '.')){
    echo "mail valida";
  }else{
    echo "NO!";
  }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Valid Mail</title>
</head>
<body>

<h1>Valid Mail</h1>
  
</body>
</html>