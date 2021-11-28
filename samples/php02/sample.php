<?php
$array = [
  [
    'name' => 'JavaScript',
    'extension' => 'js',
  ],
  [
    'name' => 'PHP',
    'extension' => 'js',
  ],
  [
    'name' => 'Rust',
    'extension' => 'rs',
  ],
];

$str = implode('', array_map(fn ($x) => "<p>{$x['name']}の拡張子は{$x['extension']}です．</p>", $array));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?= $str ?>
</body>

</html>