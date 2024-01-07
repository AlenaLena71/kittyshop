<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Главная страница</title>
</head>
<body style="background-size: cover;background-position: 50% 25%;background-image: url('img/kotik.jpg'); background-color: rgba(255, 255, 255, 0.5); background-blend-mode: overlay;">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
        <div id="headerInside">
            <div id="CompanyName">Kitty Shop</div>
        </div>
        <a class="navbar-brand" href="/"><img src="img/brand.png" id="brandlogo">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navvarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-4">
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=shop">Магазин</a>
            </li>      
        </ul>
        </div>
        </div>
        </nav>
        <?php
     $goods = [
        [
        'id' => 1,
        'name' => ' Абиссинская кошка',
        'desc' => 'Одна из самых древних пород, довольно экзотическая. Ее предком считается дикая африканская кошка. 
                    Нуждаются в ласке и внимании, не требуют особого ухода за шерстью.',
        'img' => 'img/iphone.jpg',
        'price' => '20 000 $'
        ],
        [
        'id' => 2,
        'name' => 'Сиамская кошка',
        'desc' => 'Очень интересная порода, вот пару слов о ней: это очень активная порода, они требуют много внимания к 
                    своей личности и не потерпят, если вы не будете играть с ней и не замечать ее. Они очень общительные и ласковые, 
                    быстро привязываются к своему хозяину.',
        'img' => 'img/htc.jpg',
        'price' => '17 000 $'
        ],
        [
        'id' => 3,
        'name' => 'Мейн-кун',
        'desc' => 'Название происходит от названия штата Мэн в Америке. Считается самой крупной породой. 
                    Очень аккуратны и покладисты: ваши шторы, мебель и обои не будут испорчены острыми когтями.',
        'img' => 'img/samsung.jpg',
        'price' => '30 000 $'
        ],
        [
            'id' => 4,
            'name' => 'Русская голубая кошка',
            'desc' => ' Её предками считаются домашние кошки древнеславянских племен. 
                        Первые упоминания о ней датируются со времен Петра I.',
            'img' => 'img/oppo.jpg',
            'price' => '25 000 $'
        ],
        [
            'id' => 5,
            'name' => 'Бенгальская домашняя кошка',
            'desc' => 'Получилась путем скрещивания бенгальской кошки из подсемейства малых кошек и домашней кошки.',
            'img' => 'img/fly.jpg',
            'price' => '15 000 $'
        ],
    ];
        
 $page = $_GET['page'];
 if (!isset($page)){
   require('templates/main.php');
 }
 elseif ($page == 'shop'){
    require('templates/shop.php');
 }
 elseif ($page == 'product'){
    $id = $_GET['id']; // получаем id продукта
    $good = []; // создание контейнера для товара
    foreach ($goods as $product) {// получение значений товара
        if ($product['id'] == $id) {
            $good = $product;
            break;
        }
    }
    require('templates/openProduct.php');
 }
 ?>

  
</body>
</html>