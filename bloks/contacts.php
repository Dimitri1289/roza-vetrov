<!DOCTYPE html>
<html lang="ru">
<head>
     <title>Роза-Ветров | Контакты </title>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width" />
     <meta name="description" content="Роза-Ветров | Контакты организации, схема проезда, адресс и телефон. Написать сообщение" />
     <link rel="stylesheet" type="text/css" href="css/stail_n.css" />    
     <link rel="icon" href="favicon.ico" type="image/x-icon" />     
<script src="js/wow.min.js"></script>
<script src="js/SmoothScroll.js"></script>
</head>
<body>
<?php include 'bloks/metrika.html'; ?>
<?php  include 'bloks/menu_new.php';?>

<section>
 <a href="../index.php">Главная страница</a> / Роза-Ветров | Контакты
  <h1>Роза-Ветров | Контакты</h1>
 <hr style="width:100%; margin:auto; border-width:6px" />
 <br><div id="mess"></div>
<?php  
			 $_SESSION['text'] = $_POST['text']; 
			 $_SESSION['name'] = $_POST['name'];
			 $_SESSION['email'] = $_POST['email'];
			 $_SESSION['robo'] = $_POST['robo'];
			 if (!empty($_POST['submit'])) complete_mail();
 else show_form();
function show_form()
{?>
<form  action="#mess" method="post">
<br />
<table  style="font-size:18px; font-family: Verdana, Arial, Helvetica, sans-serif; color:#2D5959; vertical-align:middle">
  <tr>
    <td style="text-align:right" colspan="2"> НАПИСАТЬ СООБЩЕНИЕ&nbsp;&nbsp;&nbsp; 
        <img style="width:47px; height:47px; vertical-align:middle" src="../img/convert.png" alt="Написать письмо администратору рессурса" />
      <hr style="width:80%; margin-right:0px; border-width:2px; border-style: outset" /></td>
    <td style="width:121px;" rowspan="7">&nbsp;</td>
    <td style="text-align:left" colspan="2"><img style="width:41px; height:41px; vertical-align:middle" src="../img/Identificationcard.png" alt="Контакты компании" />
      &nbsp;&nbsp;&nbsp; ™ РОЗА-ВЕТРОВ       
      <hr style="width:80%; margin-left:0px; border-width:2px; border-style: outset" /></td>
    </tr>
  <tr>
    <td style="width:178px; height:62px; text-align:right">*Ваше имя:
    </td>
    <td style="width:198px; height:62px; text-align:right">
      <input class="forma inp" name="name" type="text" size="15" value="<?php if (isset($_SESSION['name']))  echo $_SESSION['name'];?>" />
    </td>
    <td style="width:69px"><img style="width:48px; height:48px; vertical-align:middle" src="../img/GPS.png" alt="Наш адрес" /></td>
    <td style="width:366px; height:80px">Хабаровский край, г. Вяземский, <br />
    ул. Солнечная 20А<br /></td>
  </tr>
  <tr>
    <td style="height:51px; text-align:right">
     *Еmail:
    </td>
    <td style="height:51px; text-align:right">
      <input class="forma inp" type="text" name="email" size="15" value="<?php if (isset($_SESSION['email']))  echo $_SESSION['email'];?>" />
   </td>
    <td style="text-align:center"><img style="width:37px; height:37px; vertical-align:middle" src="../img/fon.png" alt="Телефон" />
       </td>
    <td style="height:80px">8-924-413-18-19 / WhatsApp<br /></td>
  </tr>
  <tr>
    <td style="height:35px; text-align:right">* Сообщение:  
    </td>
    <td style="height:35px; text-align:right">
      <textarea class="forma inp" name="text" cols="20"><?php if (isset($_SESSION['text']))  echo $_SESSION['text'];?>
    </textarea>
    </td>
    <td style="text-align:center"><img style="width:38px; height:29px" src="../img/i(3).png" alt="Емайл" />
    </td>
    <td style="height:80px">dmitry@roza-vetrov.pro</td>
  </tr>
  <tr>
    <td style="height:38px; text-align:right">* Защитный код: 
   </td>
    <td style="height:38px; text-align:right">
      <img style="vertical-align:middle" src="img/9.png" alt="Код с картинки" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input class="forma inp" name="robo" type="text" value="" size="7" />
    </td>
    <td style="text-align:center"><img style="width:32px; height:32px; vertical-align:middle" src="../img/ico_kontact.png" alt="Контактное лицо" />
    </td>
    <td style="height:80px">Лиховских Дмитрий Андреевич<br>
ИНН 271102302429</td>
  </tr>
  <tr>
    <td style="height:58px">&nbsp;</td>
    <td style="height:58px"><input class="forma inp"  type="submit" name="submit" value=" ОТПРАВИТЬ " /></td>
    <td style="text-align:center"><img style="width:43px; height:43px" src="../img/cel.png" alt="Положение на карте" /></td>
    <td style="height:80px"><a href="?maps#maps">Местоположение на карте</a></td>
  </tr>
  <tr>
    <td colspan="2"><hr style="width:80%; margin-right:0px; border-width:2px; border-style: outset" /></td>
    <td colspan="2"><hr style="width:80%; margin-left:0px; border-width:2px; border-style: outset" /></td>
    </tr>
</table>
</form>
<?php  
}
function complete_mail() {
        $_POST['text'] =  substr(htmlspecialchars(trim($_POST['text'])), 0, 350);    
        $_POST['name'] =  substr(htmlspecialchars(trim($_POST['name'])), 0, 60);
        $_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 60);
		$_POST['robo'] =  substr(htmlspecialchars(trim($_POST['robo'])), 0, 4);
           	 if (empty($_POST['name']))
             output_err(0);
              if (empty($_POST['email']))
                output_err(1);
				 if (empty($_POST['text']))
             output_err(3);
if  ($_POST['robo'] != 6327 & $_POST['robo'] != 7628 & $_POST['robo'] != 9237 & $_POST['robo'] !=  3979 & $_POST['robo'] != 7193)
		     output_err(2);
			 if (($_POST['robo'] == 7193) and !empty($_POST['email']) and !empty($_POST['name']) and !empty($_POST['text']))  {
     
   $mess = '

             Указал почтовый ящик: '.$_POST['email'].

             '<br>Указал ФИО: '.$_POST['name'].

             '<br>Текст сообщения: '.$_POST['text'];
             
               $to = 'arcid@yandex.ru';

              $from= $_POST['email'];
        mail($to, 'ПИСЬМО ОТ КЛИЕНТА С САЙТА', $mess,  "From: $from
Reply-To: $from
Content-Type: text/html; charset=utf-8
Content-Transfer-Encoding: 8bit");
        echo '<div align="center"><br><br><br><br><img src="img/ok.gif" width="54" height="54" align="absmiddle" /><br><br><br><br>
Здравтсвуйте '. $_POST['name'].', Ваше сообщение  '.$_POST['site'] .'  успешно отправленно. <br><br>Мы ответим Вам в ближайшее время на почту: '.$_POST['email'] .'!<br><br><br><br></div>  '; } 
		else   show_form();
 }

function output_err($num)
{	
 $err[3] = '<br><br><div  class="style6"><img align="center" src="img/err2.gif" width="51" height="51" align="absmiddle" /><br>Введите текст сообщения.</div>';
    $err[0] = '<br><br><div  class="style6"><img align="center" src="img/err2.gif" width="51" height="51" align="absmiddle" /><br>Введите ваше имя.</div>';  
    $err[1] = '<br><br><div  class="style6"><img align="center" src="img/err2.gif" width="51" height="51" align="absmiddle" /><br>Введите ваш адрес электронной  почты.</div>';
    $err[2] = '<br><br><div  class="style6"><img align="center" src="img/err2.gif" width="51" height="51" align="absmiddle" /><br>Введите защитный код с картинки.</div>';
  echo '<span align="center">'.$err[$num].'</span>';
	    
} 

?> <div id="maps"></div> 
<br />
<?php if (isset ($_GET['maps'])) include 'bloks/maps.php';
?>
<br />
</section>
<br /><br />
<?php include 'bloks/bottom_menu_n.php'; ?>

 </body>
</html>