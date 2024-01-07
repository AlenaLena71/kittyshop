<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <title>Магазин</title>
    </head>
<body>
    <h1>.   Каталог товаров</h1>

    <?php foreach($goods as $good):?>
    <div class = 'wrapper'>
        <div id="shopUnit">
            <img id='goodsImage' src="<?php echo $good['img']; ?> "/>

            <div class="shopUnitName">
                <?php echo $good['name']; ?>
            </div>
            <div class="shopUnitShortDesc">
                <?php echo $good['desc']; ?>
            </div>
            <div class="shopUnitPrice">
                Цена: <?php echo $good['price']; ?>
            </div>
                <a href="index.php?page=product&id=<?php echo $good['id']; ?>"class="shopUnitMore">Подробнее
            </a>
            
        </div>
    </div>
    <?php endforeach; ?>
    <footer class="footer fixed-bottom" style="background: #000;">
        <div class="container">
            <p class="text-center text-white lead">Copyright &copy; <script type="text/javascript">
                document.write(new Date().getFullYear());
            </script>Company.</p>
         </div>
        </footer>   
    
</body>
</html>