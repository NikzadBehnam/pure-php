<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .body-1 {background-color: red;}
    .body-2 {background-color: green;}
    .body-3 {background-color: gray;}
    .body-4 {background-color: yellow;}
    .body-5 {background-color: olive;}
  </style>
</head>
<body>
  <body class="body-<?php echo rand(1,6)?>">
    <h1>Hello</h1>
  </body>
</body>
</html>