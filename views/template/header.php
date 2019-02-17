<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HW_PHP </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="public/css/main.css" />
</head>
<body>
  <header class="header-fixed">
    <div class="wraper flex-jc-c">
      <a href="/"><h1 class="logo">Home Work PHP + MySQL</h1></a>
      <nav class="main-nav">
        <ul>
          <?php echo $_SERVER['REQUEST_URI']=="/"?'<li><a href="/form">ADD USER</a></li>'  :'  <li><a href="/">Table</a></li>'?>
          
        </ul>
      </nav>
    </div>  
  </header>
  