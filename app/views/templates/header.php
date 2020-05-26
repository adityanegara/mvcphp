<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=BASEURL;?>/css/<?= $data['css']?>">
    <title><?= $data['title']?></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
<div class = "container">
<a class="navbar-brand" href="#">My Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      <a class="nav-link" href= "<?= BASEURL;?>" >Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href= "<?= BASEURL;?>/about" >About </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href= "<?= BASEURL;?>/friend" >Teman </a>
      </li>
    </ul>
</div>

   
  </div>
</nav>