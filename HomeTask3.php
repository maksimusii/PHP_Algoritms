<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomeTask3_Directory</title>
</head>
<body>
<?php
  $links = new SplStack();
  if (isset($_GET['link'])) {
    $link = '\/'. $_GET['link'];
   
  } else {
    $link = '';
  }
  $dir = new DirectoryIterator('C:'. $link);
  $links->push($link);
  if($links->count()) {
    $currentDir = $links->pop().DIRECTORY_SEPARATOR;
  } else {
    $currentDir = '';
  }
  
  foreach($dir as $item){
    $link1 = $item;
    echo '<a href="HomeTask3.php?link='.$currentDir.$item.'">'. $item .'</a>'. '</br>';
  }
?>
</body>
</html>