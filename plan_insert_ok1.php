<?php session_start(); include("conn/conn.php");
if($_SESSION[admin_user]==true){
if($Submit==true){

   $query=mysql_query("insert into tb_plan(pinpai,from,to,way,bilei_1,bilei_2,bilei_3,chenyusan,changzi_1,changzi_2,changzi_3,yhway,ysnumber,ystime_1,ystime_2,yscb_1,yscb_2,yscb_3,car_numbertoo)values('$pinpai','$from','$to','$way','$bilei_1','$bilei_2','$bilei_3','$chenyusan','$changzi_1','$changzi_2','$changzi_3','$yhway','$ysnumber','$ystime_1','$ystime_2','$yscb_1','$yscb_2','$yscb_3','$car_numbertoo')");
   if($query==true){
	   echo "<script>alert('�����ƻ�������Ϣ��ӳɹ�!');window.location.href='indexs.php?lmbs=�����ƻ�����';</script>";      
	         }else{
                echo "<script>alert('�����ƻ�������Ϣ���ʧ��!!');window.location.href='indexs.php?lmbs=�����ƻ�����';</script>";
                  }
} 


if($Submit2=="�޸�"){

   $query="update tb_plan set pinpai='$pinpai',from='$from',to='$to',way='$way',bilei_1='$bilei_1',bilei_2='$bilei_2',bilei_3='$bilei_3',chenyusan='$chenyusan',changzi_1='$changzi_1',changzi_2='$changzi_2',changzi_3='$changzi_3',yhway='$yhway',ysnumber='$ysnumber',ystime_1='$ystime_1',ystime_2='$ystime_2',yscb_1='$yscb_1',yscb_2='$yscb_2',yscb_3='$yscb_3',car_numbertoo='$car_numbertoo' where car_numbertoo='$car_numbertoo'";
   $result=mysql_query($query);
   if($result==true){
 	   echo "<script>alert('�����ƻ����߸��³ɹ�!!');window.location.href='indexs.php?lmbs=�����ƻ�����';</script>";
 }else{
                echo "<script>alert('�����ƻ����߸���ʧ��!!');window.location.href='indexs.php?lmbs=�����ƻ�����';</script>";
       }
}

if($Submit4=="ɾ��"){
   $query="delete  from tb_plan where car_numbertoo='$car_numbertoo'";
   $result=mysql_query($query);
   if($result==true){
 	   echo "<script>alert('�����ƻ�����ɾ���ɹ�!');window.location.href='indexs.php?lmbs=�����ƻ�����';</script>";
   }else{
   			echo "<script>alert('�����ƻ�����ɾ��ʧ��!!');window.location.href='indexs.php?lmbs=�����ƻ�����';</script>";
		}

}

?>
<?php 
}else{
echo "<script>alert('������ȷ��¼��'); window.location.href='index.php';</script>";
}

?>