   <div id="openModal" class="modalDialog">
	         <?php 
			 $_SESSION['email'] = $_POST['email'];
			 if (!empty($_POST['submit'])) complete_mail();
			 else show_form();
function show_form()
{
?>            
	         <br />
             <br />
             <br />
<br />
               <form action="" method="post">
                 <table style="width:750px; background-color:#FFFFFF; margin-top:8%">
                   <tr>
                  <td style="width:14%; height:41px">&nbsp;
                   <a href="#close" title="Закрыть" ><img style=" width:30px; height:30px; margin-top:-20px" src="../img/circle-delete.png" /></a></td>
                 <td style="height:41px" colspan="3"><h4 style="font-size:20px; color:#0f8774; font-weight:100; margin-left:110px">Форма заказа обратного звонка</h4></td>
              </tr>
               <tr>
                 <td colspan="2" style="font-size:18px;font-family: Verdana, Arial, Helvetica, sans-serif; color:#2D5959; vertical-align:middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Введите номер телефона:</td>
  <td style="height:40px" colspan="2">
   <input class="forma inp" type="text" name="email" size="15" value="<?php if (isset($_SESSION['email']))  echo $_SESSION['email'];?>"/>      </td>
    </tr>

                    <tr>
                      <td colspan="2" style="font-size:18px;font-family: Verdana, Arial, Helvetica, sans-serif; color:#2D5959">                                                    
                      &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:18px;font-family: Verdana, Arial, Helvetica, sans-serif; color:#2D5959; vertical-align:middle">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size:18px;font-family: Verdana, Arial, Helvetica, sans-serif; color:#2D5959; vertical-align:middle">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size:18px;font-family: Verdana, Arial, Helvetica, sans-serif; color:#2D5959; vertical-align:middle">&nbsp;&nbsp;&nbsp;&nbsp;</span>* Защитный код: </td>
                      <td width="18%"><input class="forma inp" name="robo" type="text" value="" size="5" /></td>
                      <td width="26%" height="39"><a  href="?zvonok#openModal"  onClick=" javascript:window.location.reload(false);" title="Обновить картинку">&nbsp;<img src="img/<?PHP echo rand (5 , 9) ?>.png" border="0" /></a></td>
              </tr>
                    <tr>
                      <td style="text-align:center" height="31" colspan="4">
                     
                       <br />
                      <input style="text-align:center"  type="submit" name="submit" class="forma inp" value="ЗАКАЗАТЬ" alt="Отправить номер"  />                      </td>
                    </tr>
                    <tr>
                      <td height="24" colspan="4">&nbsp; </td>
                    </tr>
               </table>
              <br /><div style=" text-align:center; color:#FFFFFF">
              <strong>Работаем с </strong>Пн. по Сб. с 9.00 до 18.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Сегодня:</strong>
<?php 
	function getDayRus(){
    $days = array(
        'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
        'Четверг', 'Пятница', 'Суббота'
    );
    return $days[(date('w'))];
}
	$gr = gmdate("U"); 
    $date = date ("G:i", $gr + 7*3600); 
  echo getDayRus().",&nbsp;время: ".$date;
 ;?>
<br />
              <hr width="750px" />
              
              </div>
              <br />
  </form>
<?php
}
function complete_mail() {
        $_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 50);
		    if (empty($_POST['email']))
                output_err(1);
if  ($_POST['robo'] != 6327 & $_POST['robo'] != 7628 & $_POST['robo'] != 9237 & $_POST['robo'] !=  3979 & $_POST['robo'] != 7193)
		     output_err(2);
			 if (($_POST['robo'] == 7193 or $_POST['robo'] == 7628 or $_POST['robo'] == 3979 or $_POST['robo'] == 9237 or $_POST['robo'] == 6327) and !empty($_POST['email'])) {  
      $mess = '

Номер телефона:'.$_POST['email'].'
Указал объём: '.$_POST['obem'].'м/2;
Цвет: '.$_POST['paks'];

               $to = 'arcid@yandex.ru';

              $from= $_POST['email'];
        mail($to, 'ЗАКАЗ бордюра Банан', $mess, "From:".$from);
        echo '<br><br><br><br>
<table width="50%" height="192" border="0" align="center" bgcolor="#F3FAFA" class="catalog_b style21 style25 style14" >
  <tr>
    <td height="188">&nbsp;<a href="#close" title="" class="close">X</a><div align="center"><br><img src="img/ok.gif" width="54" height="54" align="absmiddle" /><br>
      <br>
        
 ВАШ ЗАКАЗ УСПЕШНО ОТПРАВЛЕН,<br><br> МЫ СВЯЖЕМСЯ С ВАМИ ПО УКАЗАННОМУ НОМЕРУ<br><br><strong>'.$_POST['email'] .' </strong> <br><br><br>
    </div></td>
  </tr>
</table>
' ; } 
		else   show_form();
 }

function output_err($num)
{
     $err[1] = '<span id="blink2"  style="position:absolute; top: 40%; left: 30%; z-index: 100; color:red; font-size:10px">ВВЕДИТЕ НОМЕР ТЕЛЕФОНА</span>';
    $err[2] = '<span id="blink2"  style="position:absolute; top:  40%; right: 30%; z-index: 100; color:red; font-size:10px">ВВЕДИТЕ ЗАЩИТНЫЙ КОД</span>';
	 echo '<span>'.$err[$num].'</span>';
}

?> </div>
</div>
</div>


<br>
