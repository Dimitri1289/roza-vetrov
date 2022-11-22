<?php $_SESSION['parametrs'] = $_GET['parametrs'];
$parametrs = $_SESSION['parametrs']?>
<!DOCTYPE html>
<html lang="ru">
<head>
     <title>Каталог <?php if($parametrs == '300x300x30mm') echo 'тротуарной плитки 30x30x3cm'; if($parametrs == '400x400x40mm') echo 'тротуарной плитки 40x40x4cm'; if($parametrs == 'brushatka') echo 'брусчатки'; if($parametrs == 'borders') echo 'бордюрного камня'; if($parametrs == 'dlay_avto') echo 'плитки для автомобиля';   if($parametrs == 'vodostok') echo 'водосточных лотков'; if (!isset ($parametrs)) echo 'продукции для мощения тротуаров и пешеходных дорожек'; 
   ?></title>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=0.7" />
     <meta name="description" content=" <?php if($parametrs == '300x300x30mm') echo 'Каталог тротуарной плитки 30х30х3 см от производителя Тротуарная плитка изготовлена по вибролитьевой технологии из высокопрочного бетона, отличается высокой плотностью поверхности и долгим сроком службы На странице представлены образцы тротуарной плитки, её стоимость'; if($parametrs == '400x400x40mm') echo 'Купить тротуарную плитку 40х40х4 см от производителя Тротуарная плитка отлично подходит для мощения тротуаров и пешеходных дорожек на даче и в частном доме, так-же используется для устройства отмосток вокруг дома'; if($parametrs == 'brushatka') echo 'Каталог брусчатки  с фотографиями и ценами Купить брусчатку напрямую  от производителя по выгодной цене!'; if($parametrs == 'borders') echo 'Бордюрный камень БР-1000х200х80 и БР-500х200х450 от производителя по цене 300 руб за п/м без красителя'; if($parametrs == 'dlay_avto') echo 'Каталог тротуарной плитки для мощения под автомобиль, плитка разделена по категориям в зависимости от эксплуатационной нагрузки Купить тротуарную плитку от производителя, договор, гарантия!';   if($parametrs == 'vodostok') echo 'Купить водосточные лотки для тротуарной плитки, продукция используется для отвода осадковых вод с крыши зданий и сооружений'; if (!isset ($parametrs)) echo 'Каталог продукции для мощения тротуаров и пешеходных дорожек, в каталог входит тротуарная плитка разных размеров и цветов, брусчатка прямоугольная и фигурная, бордюрный камень тротуарный различных размеров, водосточные лотки Продукция разделена по категориям, покупайте напрямую от производителя, без посредников'; 
   ?>" />
      <meta name="keywords" content=" <?php if($parametrs == '300x300x30mm') echo ' цветная тротуарной плитки 30x30x3cm купить от производителя напряму каталог в Хабаровском крае с доставкой Вяземский цена'; if($parametrs == '400x400x40mm') echo 'каталог тротуарной плитки 40x40x4cm купить у производителя для частного дома недорого с доставкой цена'; if($parametrs == 'brushatka') echo 'брусчатка купить недорого от производителя цена каталог цветная'; if($parametrs == 'borders') echo 'бордюрный камень с доставкой недорого в Хабаровском крае от производителя напрямую недорого для клумб договор гарантия'; if($parametrs == 'dlay_avto') echo 'плитки для автомобиля толстая для грузовика гарантия недорого прессованная ромб цветная с доставкой от производителя купить договор';   if($parametrs == 'vodostok') echo 'водостоки купить дёшево у производителя цена с доставкой'; if (!isset ($parametrs)) echo 'тротуарная плитка брусчатка бордюр тротуарный купить водостоки цена недорого каталог от производителя цветная с доставкой'; 
   ?>" />
     <link rel="stylesheet" type="text/css" href="css/stail_n.css" />    
     <link rel="icon" href="favicon.ico" type="image/x-icon" />     
<script src="js/wow.min.js"></script>
<script src="js/SmoothScroll.js"></script>
</head>
<body>

<?php include 'bloks/metrika.html' ?>
<?php  include 'bloks/menu_new.php';?>
<section><a href="../index.php">Главная страница</a> / Каталог <?php if($parametrs == '300x300x30mm') echo 'тротуарной плитки 30x30x3cm'; if($parametrs == '400x400x40mm') echo 'тротуарной плитки 40x40x4cm'; if($parametrs == 'brushatka') echo 'брусчатки'; if($parametrs == 'borders') echo 'бордюрного камня'; if($parametrs == 'dlay_avto') echo 'плитки для автомобиля';  if($parametrs == 'vodostok') echo 'водосточных лотков'; if (!isset ($parametrs)) echo 'продукции для мощения тротуаров и пешеходных дорожек'; 
   ?>
   <h1>Каталог <?php if($parametrs == '300x300x30mm') echo 'тротуарной плитки 30x30x3cm'; if($parametrs == '400x400x40mm') echo 'тротуарной плитки 40x40x4cm'; if($parametrs == 'brushatka') echo 'брусчатки'; if($parametrs == 'borders') echo 'бордюрого камня'; if($parametrs == 'dlay_avto') echo 'плитки для автомобиля';  if($parametrs == 'vodostok') echo 'водосточных лотков'; if (!isset ($parametrs)) echo 'продукции для мощения тротуаров и пешеходных дорожек';
   ?></h1>
   <hr style="width:100%; margin:auto; border-width:6px" />
   <br>
Сортировка по параметрам:
<br>
<br>

<form action="" method="get" enctype="multipart">
<input onClick="document.location.href ='?parametrs=300x300x30mm'" type="checkbox" name="parametrs" <?php if ($parametrs == '300x300x30mm') echo 'checked="checked"'?> />&nbsp;Плитка 30Х30Х3&nbsp;&nbsp;|&nbsp;&nbsp;
<input onClick="document.location.href ='?parametrs=400x400x40mm'" type="checkbox" name="parametrs" <?php if ($parametrs == '400x400x40mm') echo 'checked="checked"'?> />&nbsp;Плитка 40Х40Х4&nbsp;&nbsp;|&nbsp;&nbsp;
<input onClick="document.location.href ='?parametrs=brushatka'" type="checkbox" name="parametrs" <?php if ($parametrs == 'brushatka') echo 'checked="checked"'?> />&nbsp;Брусчатка&nbsp;&nbsp;|&nbsp;&nbsp;
<input onClick="document.location.href ='?parametrs=borders'" type="checkbox" name="parametrs"  <?php if ($parametrs == 'borders') echo 'checked="checked"'?> />&nbsp;Бордюр&nbsp;&nbsp;|&nbsp;&nbsp;
<input onClick="document.location.href ='?parametrs=dlay_avto'" type="checkbox" name="parametrs"  <?php if ($parametrs == 'dlay_avto') echo 'checked="checked"'?> />&nbsp;Для автомобиль&nbsp;&nbsp;|&nbsp;&nbsp;
<input onClick="document.location.href ='?parametrs=vodostok'" type="checkbox" name="parametrs"  <?php if ($parametrs == 'vodostok') echo 'checked="checked"'?> />
&nbsp;Водостоки
</form>
   <?php if (!isset ($parametrs)) include 'bloks/kat.php';
          if ($parametrs == '300x300x30mm') include 'bloks/kat1.php';
		  if ($parametrs == '400x400x40mm') include 'bloks/kat2.php';
		  if ($parametrs == 'brushatka') include 'bloks/kat3.php';
		  if ($parametrs == 'borders') include 'bloks/kat4.php';
		  if ($parametrs == 'dlay_avto') include 'bloks/kat5.php';
		  if ($parametrs == 'vodostok') include 'bloks/kat6.php';
   ?>
   <table>
       <tr>
         <td class="td_left_catalogi"><header>
             <h2><a href="blok_stroitelniy.php">Блоки строительные</a></h2>
           <hr class="hr_t_catalog" />
           <a  href="blok_stroitelniy.php">
       <figure> <img class="w354h229" src="img/zabo.jpg" alt="Купить еврозабор" onMouseOver="this.src='img/zabo1.jpg'"  onmouseout="this.src='img/zabo.jpg'" />
                 <figcaption>Каталог отсевоблоков с ценами</figcaption>
             </figure>
             </a> </header>         </td>
         <td class="td_right_catalogi"><header>
             <h2><a href="fasad.php">Фасадная плитка</a></h2>
           <hr class="hr_t_catalog_right" />
           <a  href="fasad.php">
           <figure> <img class="w354h229" src="img/fas.jpg" alt="Купить фасадную плитку" onMouseOver="this.src='img/fas1.jpg'"     onmouseout="this.src='img/fas.jpg'" />
                 <figcaption>Каталог фасадной плитки с фотографиями и ценами</figcaption>
             </figure>
             </a> </header>         </td>
       </tr>
     </table>
</section>
<?php include 'bloks/bottom_menu_n.php';

  if(isset($_GET['zvonok'])) include 'bloks/zvonok.php'; else {};
 if(isset($_GET['forma_18'])) include 'forma/romb_1.php'; else {};
 if(isset($_GET['forma_17'])) include 'forma/romb.php'; else {};
 if(isset($_GET['forma_16'])) include 'forma/stok_2.php'; else {};
 if(isset($_GET['forma_15'])) include 'forma/stok_1.php'; else {};
 if(isset($_GET['forma_14'])) include 'forma/press.php'; else {};
 if(isset($_GET['forma_13'])) include 'forma/banan.php'; else {};
 if(isset($_GET['forma_12'])) include 'forma/pryamoi.php'; else {};
 if(isset($_GET['forma_11'])) include 'forma/kosichka.php'; else {};
 if(isset($_GET['forma_10'])) include 'forma/b_kirpichi.php'; else {};
 if(isset($_GET['forma_9'])) include 'forma/b_banana.php'; else {};
 if(isset($_GET['forma_8'])) include 'forma/b_egipet.php'; else {};
 if(isset($_GET['forma_7'])) include 'forma/b_greciya.php'; else {};
 if(isset($_GET['forma_6'])) include 'forma/l_trotuar.php'; else {};
 if(isset($_GET['forma_5'])) include 'forma/roza_vetrov.php'; else {};
 if(isset($_GET['forma_4'])) include 'forma/gotika.php'; else {};
 if(isset($_GET['forma_3'])) include 'forma/galka.php'; else {};
 if(isset($_GET['forma_2'])) include 'forma/giraf.php'; else {};
 if(isset($_GET['forma_1'])) include 'forma/kaliforniya.php'; else {};
?>
</body>
</html>