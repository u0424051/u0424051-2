<html>
<head><meta charset="UTF-8"></head>
<body><br>
  <center>
 <form method="POST" action="sure.php">
 <font color=#000000 size=10 ALIGN= center><br><b>甜點訂購系統<br>確認訂單_<br></b></font> <br>


<?php session_start();
 include("dbConnect.php");
 mysqli_query($db,"SET NAMES UTF8");
 $Name = $_SESSION['username'];

 
@ $item1 = $_POST['item1'];
@ $item2 = $_POST['item2'];
@ $item3 = $_POST['item3'];
@ $item4 = $_POST['item4'];
@ $item5 = $_POST['item5'];
@ $item6 = $_POST['item6'];

@ $price1 = $_POST['price1'];
@ $price2 = $_POST['price2'];
@ $price3 = $_POST['price3'];
@ $price4 = $_POST['price4'];
@ $price5 = $_POST['price5'];
@ $price6 = $_POST['price6'];
 
// $price = $_POST['price'];
@ $qu1=$_POST['qu1'];
@ $qu2=$_POST['qu2'];
@ $qu3=$_POST['qu3'];
@ $qu4=$_POST['qu4'];
@ $qu5=$_POST['qu5'];
@ $qu6=$_POST['qu6'];
 
 $a1 = $price1 * $qu1;
 $a2 = $price2 * $qu2;
 $a3 = $price3 * $qu3;
 $a4 = $price4 * $qu4;
 $a5 = $price5 * $qu5;
 $a6 = $price6 * $qu6;
 $datetime = date ("Y-m-d"); 
$_SESSION['total']= $a1 + $a2 + $a3 + $a4 + $a5 + $a6;
  
  if ($item1 != "" && $price1 != 0 && $qu1 != 0 && $a1 != 0 )
 { $SQL="INSERT INTO `p2` SET `otime`='$datetime', `Name`='$Name', `item`='$item1',`price`='$price1',`quantity`='$qu1',`amount`='$a1'"; 
  echo "";
  if ($db->query($SQL)){
		 echo "";
     }
    else
     {
      echo "";
     }
 } else{
	 echo "";
 }
   if ($item2 != "" && $price2 != 0 && $qu2 != 0 && $a2 != 0 )
 { $SQL="INSERT INTO `p2` SET  `otime`='$datetime', `Name`='$Name', `item`='$item2',`price`='$price2',`quantity`='$qu2',`amount`='$a2'"; 
  echo "";
  if ($db->query($SQL)){
		 echo "";
     }
    else
     {
      echo "";
     }
 } else{
	 echo "";
 }
    if ($item3 != "" && $price3 != 0 && $qu3 != 0 && $a3 != 0 )
 { $SQL="INSERT INTO `p2` SET   `otime`='$datetime', `Name`='$Name', `item`='$item3',`price`='$price3',`quantity`='$qu3',`amount`='$a3'"; 
  echo "";
  if ($db->query($SQL)){
		 echo "";
     }
    else
     {
      echo "";
     }
 } else{
	 echo "";
 }
   if ($item4 != "" && $price4 != 0 && $qu4 != 0 && $a4 != 0 )
 { $SQL="INSERT INTO `p2` SET `otime`='$datetime', `Name`='$Name', `item`='$item4',`price`='$price4',`quantity`='$qu4',`amount`='$a4'"; 
  echo "";
  if ($db->query($SQL)){
		 echo "";
     }
    else
     {
      echo "";
     }
 } else{
	 echo "";
 }
   if ($item5 != "" && $price5 != 0 && $qu5 != 0 && $a5 != 0 )
 { $SQL="INSERT INTO `p2` SET `otime`='$datetime', `Name`='$Name', `item`='$item5',`price`='$price5',`quantity`='$qu5',`amount`='$a5'"; 
  echo "";
  if ($db->query($SQL)){
		 echo "";
     }
    else
     {
      echo "";
     }
 } else{
	 echo "";
 }
   if ($item6 != "" && $price6 != 0 && $qu6 != 0 && $a6 != 0 )
 { $SQL="INSERT INTO `p2` SET `otime`='$datetime', `Name`='$Name', `item`='$item6',`price`='$price2',`quantity`='$qu2',`amount`='$a2'"; 
  echo "";
  if ($db->query($SQL)){
		 echo "";
     }
    else
     {
      echo "";
     }
 } else{
	 echo "";
 }


 
 if ($_SESSION['total'] != 0){	
   echo "您訂購了";
   echo "<table width=\"40%\" border=\"1\">";
   echo "<tr>";
   echo " <td>";
   echo "產品名稱";
   echo "</td>";
   echo "<td>";
   echo "單價";
   echo "</td>";
   echo "<td>";
   echo "訂購數量";
   echo "</td>";
   echo "<td>";
   echo "小計";
   echo "</td>";    
   echo "</tr>";
 if ($item1 != "" && $qu1 != "" && $price1 != ""){
   
   echo "<tr>";
   echo "<td>";
   echo $item1;
   echo "</td>";
   echo "<td>";
   echo "$";
   echo $price1;
   echo "</td>";
   echo "<td>";
   echo $qu1;
   echo "</td>";
   echo "<td>";
   echo "$";
   echo $a1;
   echo "</td>";
   echo "</tr>";
 
 } else { 
   echo "";
 }
 if ($item2 != "" && $qu2 != "" && $price2 != ""){
   echo "<tr>";
   echo "<td>";
   echo $item2;
   echo "</td>";
   echo "<td>";
   echo "$";
   echo $price2;
   echo "</td>";
   echo "<td>";
   echo $qu2;
   echo "</td>";
   echo "<td>";
   echo "$";
   echo $a2;
   echo "</td>";
   echo "</tr>";
 
} else { 
   echo "";
 }
 if ($item3 != "" && $qu3 != "" && $price3 != ""){
   echo "<tr>";
   echo "<td>";
   echo $item3;
   echo "</td>";
   echo "<td>";
   echo "$";
   echo $price3;
   echo "</td>";
   echo "<td>";
   echo $qu3;
   echo "</td>";
   echo "<td>";
   echo "$";
   echo $a3;
   echo "</td>";
   echo "</tr>";
 
} else { 
   echo "";
 }
  if ($item4 != "" && $qu4 != "" && $price4 != ""){
   echo "<tr>";
   echo "<td>";
   echo $item4;
   echo "</td>";
   echo "<td>";
   echo "$";
   echo $price4;
   echo "</td>";
   echo "<td>";
   echo $qu4;
   echo "</td>";
   echo "<td>";
   echo "$";
   echo $a4;
   echo "</td>";
   echo "</tr>";
 
} else { 
   echo "";
 }
 if ($item5 != "" && $qu5 != "" && $price5 != ""){
    echo "<tr>";
   echo "<td>";
   echo $item5;
   echo "</td>";
   echo "<td>";
   echo "$";
   echo $price5;
   echo "</td>";
   echo "<td>";
   echo $qu5;
   echo "</td>";
   echo "<td>";
   echo "$";
   echo $a5;
   echo "</td>";
   echo "</tr>";
 
} else { 
   echo "";
 }
 if ($item6 != "" && $qu6 != "" && $price6 != ""){
   echo "<tr>";
   echo "<td>";
   echo $item6;
   echo "</td>";
   echo "<td>";
   echo "$";
   echo $price6;
   echo "</td>";
   echo "<td>";
   echo $qu6;
   echo "</td>";
   echo "<td>";
   echo "$";
   echo $a6;
   echo "</td>";
   echo "</tr>";
 
} else { 
   echo "";
 }
 
 echo "<br>";
echo "<tr>";
echo "<td colspan=\"4\">";
echo "<center>";
echo "總計:";
echo $_SESSION['total'];
echo "元";
echo "</td>";
echo "</tr>";
echo "</table>";

} else {
echo "!您目前沒選購任何商品!";
	echo '<meta http-equiv=REFRESH CONTENT=3;url=product2.html>';

}
    
?>
<br>
<br>
  <table width=255 >  
<tr> <center> 
    <td><center>

<font color=#000000 size=5 ALIGN= center><br><b>_請輸入取貨資料_</b></font>
<br><br>
<font color=#000000 size=5 ALIGN= center><br><b>訂購人:<?php echo $Name?><br></b></font>
<p>
<input type="text" name="delivery" placeholder="請輸入取貨地址"required />
</p>
<p>
 <select name="payment" id="mnya-select" >
	<option disabled selected >付款方式</option>
	<option value="貨到付款">貨到付款</option>
	<option value="信用卡">信用卡</option>
	<option value="ATM付款">ATM付款</option>																													
</select>
</p>

<p>
<textarea name="remarks" style="width:300px;height:100px;">
　輸入備註...
</textarea>
</p>

<input type="submit" value="立即訂購" /> 
 </td>

</tr> 
</table> 

   </body>
</html>