<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>торетто драйв</title>
  </head>
  <body>
  <?php require "blocks/header.php"?>
  <?php
$cars = [
    ['owner' => 'Доминик Торрето', 'year' => 2020, 'price' => 25000, 'power' => '1200 л.с.'],
    ['owner' => 'Полл Уоккер', 'year' => 2019, 'price' => 28000, 'power' => '620 л.с.'],
    ['owner' => 'Темик Законнов', 'year' => 2021, 'price' => 30000, 'power' => '750 л.с.'],
    ['owner' => 'Миша Баранов', 'year' => 2018, 'price' => 22000, 'power' => '180 л.с.'],
    ['owner' => 'Вин Дизель', 'year' => 2022, 'price' => 35000, 'power' => '2170 л.с.']
];
?>
<div class="container mt-5">
  <h3 class="mb-5">Наши машины</h3>
  <div class="d-flex flex-wrap">
  <?php
    for($i = 0; $i < 5; $i++):
  ?>
    <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">слот <?php echo ($i + 1)?></h4>
            </div>
            <div class="card-body">
              <img src="img/<?php echo ($i + 1)?>.jpg" class="img-thumbnail">
              <ul class="list-unstyled mt-3 mb-4">
                <li>Владелец: <?php echo $cars[$i]['owner'] ?></li>
                <li>Год выпуска: <?php echo $cars[$i]['year'] ?></li>
                <li>Цена: $<?php echo $cars[$i]['price'] ?></li>
                <li>Мощность: <?php echo $cars[$i]['power'] ?></li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">смотреть тачку</button>
            </div>
          </div>
  <?php endfor ?>
  </div>
</div>
<?php require "blocks/footer.php"?>
<body>
</html> 
