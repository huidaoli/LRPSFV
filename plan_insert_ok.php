<?php session_start(); include("conn/conn.php");
if($_SESSION[admin_user]==true){
if($Submit==true){	  
   $query=mysql_query("insert into tb_plan(pinpai,fromq,toq,wayq,bilei_s,bilei_g,bilei_t,chenyusan,changzi_s,changzi_g,changzi_t,yhway,ysnumber,ystime_1,ystime_2,yscb_s,yscb_g,yscb_t,username,user_number,tel,address,car_number,car_road,car_content)values('$pinpai','$fromq','$toq','$wayq','$bilei_s','$bilei_g','$bilei_t','$chenyusan','$changzi_s','$changzi_g','$changzi_t','$yhway','$ysnumber','$ystime_1','$ystime_2','$yscb_s','$yscb_g','$yscb_t','$username','$user_number','$user_tel','$address','$car_number','$car_road','$car_content')");
   if($query==true){
	   echo "<script>alert('�����ƻ�������Ϣ��ӳɹ�!');window.location.href='indexs.php?lmbs=�����ƻ�����';</script>";   }	  
} 
if($Submit2=="�޸�"){
   $query="update tb_plan set pinpai='$pinpai', fromq='$fromq', toq='$toq', wayq='$wayq', bilei_s='$bilei_s', bilei_g='$bilei_g', bilei_t='$bilei_t', chenyusan='$chenyusan', changzi_s='$changzi_s', changzi_g='$changzi_g', changzi_t='$changzi_t', yhway='$yhway', ysnumber='$ysnumber', ystime_1='$ystime_1', ystime_2='$ystime_2', yscb_s='$yscb_s', yscb_g='$yscb_g', yscb_t='$yscb_t', username='$username', user_number='$user_number', tel='$user_tel', address='$address', car_number='$car_number', car_road='$car_road', car_content='$car_content' where car_number='$car_number'";
   $result=mysql_query($query);
   if($result==true){
 	   echo "<script>alert('�����ƻ����߸��³ɹ�!!');window.location.href='indexs.php?lmbs=�����ƻ�����';</script>";
   }
}
if($Submit4=="ɾ��"){
   $query="delete  from tb_plan where car_number='$car_number'";
   $result=mysql_query($query);
   if($result==true){
 	   echo "<script>alert('�����ƻ�����ɾ���ɹ�!');window.location.href='indexs.php?lmbs=�����ƻ�����';</script>";
   }
}
?>
<?php 
}else{
echo "<script>alert('������ȷ��¼��'); window.location.href='index.php';</script>";
}
?>