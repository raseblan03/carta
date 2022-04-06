<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="movies.xml">
</head>
<body>
<?php
// El fichero test.xml contiene un documento XML con un elemento raíz y, al
// menos, un elemento /[raiz]/titulo.

if (file_exists('movies.xml')) {
    $movies = simplexml_load_file('movies.xml');
 
    print_r($movies);
} else {
    exit('Error abriendo movies.xml.');
}

foreach ($movies as $movies[0] => $movie) {
   echo $movies-> nombre.'<br>';
}
?>
</body>
</html>