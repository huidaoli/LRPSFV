<?php session_start(); 
if($_SESSION[admin_user]==true){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����������Դ�ƻ�ϵͳ</title>
</head>
<script language="javascript" src="js/car_js.js"></script>
<body>

<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  <form name="form4" method="post" action="indexs.php?lmbs=�����ƻ�����">
  <tr>   
    <td width="360" height="30" align="right" bgcolor="#FFFFFF">��Ʒ��Ʒ��
	
      <select name="select1">
	  <option selected="selected">��ѡ����Ʒ��Ʒ��</option>
        <?php 
	  $query="select * from tb_plan";
	  $result=mysql_query($query);
	  while($myrow=mysql_fetch_array($result)){
	  ?>
	   <option><?php echo $myrow[pinpai]; ?></option>
	  <?php } ?>
      </select>      </td>
	  
	  <td width="360" height="30" align="right" bgcolor="#FFFFFF">���䷽ʽ
	
      <select name="select2">
	  <option selected="selected">��ѡ��ˮ·����</option>
        <?php 
	  $query="select * from tb_plan";
	  $result=mysql_query($query);
	  while($myrow=mysql_fetch_array($result)){
	  ?>
	   <option><?php echo $myrow[way]; ?></option>
	  <?php } ?>
      </select>      </td>
	  <td width="360" bgcolor="#FFFFFF">&nbsp; </td>
	  </tr>
	  <tr>
	  <td width="360" height="30" align="right" bgcolor="#FFFFFF">�Ż���ʽ
	
      <select name="select3">
	  <option selected="selected">��ѡ���Ż���ʽ</option>
        <?php 
	  $query="select * from tb_plan";
	  $result=mysql_query($query);
	  while($myrow=mysql_fetch_array($result)){
	  ?>
	   <option><?php echo $myrow[yhway]; ?></option>
	  <?php } ?>
      </select>      </td>
	  
	  <td width="360" height="30" align="right" bgcolor="#FFFFFF">������
	
      <select name="select4">
	  <option selected="selected">��ѡ����������</option>
        <?php 
	  $query="select * from tb_plan";
	  $result=mysql_query($query);
	  while($myrow=mysql_fetch_array($result)){
	  ?>
	   <option><?php echo $myrow[ysnumber]; ?></option>
	  <?php } ?>
      </select>      </td>
	  
    <td width="360" bgcolor="#FFFFFF">&nbsp; <input type="submit" name="Submit3" value="�ύ"> </td>    
  </tr>
 </form>
</table>
<?php 
	  $querys="select * from tb_plan where pinpai='$select1' or way='$select2' or yhway='$select3' or ysnumber='$select4'";
	  $results=mysql_query($querys);
	 $myrows=mysql_fetch_array($results);
	  ?>
<form name="form3" method="post" action="plan_insert_ok.php" onSubmit="javascript:return check_plan(form3);">  
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  
  <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF">��Ʒ��Ʒ�ƣ�</td>
    <td width="235" bgcolor="#FFFFFF"><input name="pinpai" type="text" id="pinpai" size="20" value="<?php echo $myrows[pinpai];?>" /></td>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF">���߱�ţ�</td>
    <td width="235" bgcolor="#FFFFFF"><input name="panhao" type="text" id="panhao" size="20" value="<?php echo $myrows[panhao];?>" /></td>
  </tr>
  <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF">���˵أ�</td>
    <td width="235" bgcolor="#FFFFFF"><input name="from" type="text" id="from" size="20" value="<?php echo $myrows[from];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">Ŀ�ĵأ�</td>
    <td width="255" bgcolor="#FFFFFF"><input name="to" type="text" id="to" size="20" value="<?php echo $myrows[to];?>" /></td>
  </tr>
  <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF">���䷽ʽ��</td>
    <td width="235" bgcolor="#FFFFFF"><input name="way" type="text" id="way" size="20" value="<?php echo $myrows[way];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">���������</td>
    <td width="255" bgcolor="#FFFFFF">ˮ·��
      <input name="bilei_1" type="text" id="bilei_1" size="15" value="<?php echo $myrows[bilei_1];?>" /><font color="#FF0000">(%)</font>
      <br/>
      ��·��
      <input name="bilei_2" type="text" id="bilei_2" size="15" value="<?php echo $myrows[bilei_2];?>" /><font color="#FF0000">(%)</font>
      <br/>
      ��·��
      <input name="bilei_3" type="text" id="bilei_3" size="15" value="<?php echo $myrows[bilei_3];?>" /><font color="#FF0000">(%)</font></td>
  </tr>
  <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF"> �����̣�</td>
    <td width="235" bgcolor="#FFFFFF"><input name="chenyusan" type="text" id="chenyusan" size="20" value="<?php echo $myrows[chenyusan];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">��ֵ��</td>
    <td width="255" bgcolor="#FFFFFF">ˮ·��
      <input name="changzi_1" type="text" id="changzi_1" size="15" value="<?php echo $myrows[changzi_1];?>" /><font color="#FF0000">(Ԫ)</font>
	  <br/>
	  ��·��
	  <input name="changzi_2" type="text" id="changzi_2" size="15" value="<?php echo $myrows[changzi_2];?>" /><font color="#FF0000">(Ԫ)</font>
	  <br/>
	  ��·��
	  <input name="changzi_3" type="text" id="changzi_3" size="15" value="<?php echo $myrows[changzi_3];?>" /><font color="#FF0000">(Ԫ)</font></td>
  </tr>
   <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF">�Ż���ʽ��</td>
    <td width="235" bgcolor="#FFFFFF"><input name="yhway" type="text" id="yhway" size="20" value="<?php echo $myrows[yhway];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">��������</td>
    <td width="255" bgcolor="#FFFFFF"><input name="ysnumber" type="text" id="ysnumber" size="20" value="<?php echo $myrows[ysnumber];?>" /><font color="#FF0000">(��)</font></td>
  </tr>
  <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF"> ����ʱ�䣺</td>
    <td width="235" bgcolor="#FFFFFF"><font color="#FF0000">��:</font>
      <input name="ystime_1" type="text" id="ystime_1" size="20" value="<?php echo $myrows[ystime_1];?>" /><br/>
      <font color="#FF0000">��:</font>
      <input name="ystime_2" type="text" id="ystime_2" size="20" value="<?php echo $myrows[ystime_2];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">����ɱ���</td>
    <td width="255" bgcolor="#FFFFFF">ˮ·��
      <input name="yscb_1" type="text" id="yscb_1" size="20" value="<?php echo $myrows[yscb_1];?>" /><font color="#FF0000">(Ԫ)</font><br/>
      ��·��
	  <input name="yscb_2" type="text" id="yscb_2" size="15" value="<?php echo $myrows[yscb_2];?>" /><font color="#FF0000">(Ԫ)</font><br/>
	  ��·��
	  <input name="yscb_3" type="text" id="yscb_3" size="15" value="<?php echo $myrows[yscb_3];?>" /><font color="#FF0000">(Ԫ)</font></td>
  </tr>
   <tr>
    <td height="26" align="right" bgcolor="#FFFFFF" colspan="2">���䳵���ƺ��룺</td>
    <td bgcolor="#FFFFFF" colspan="2"><input name="car_numbertoo" type="text" id="car_numbertoo" size="25" value="<?php echo $myrows[car_numbertoo];?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td align="right" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="�ύ" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit2" value="�޸�"></td>
    <td bgcolor="#FFFFFF"><input type="submit" name="Submit4" value="ɾ��"></td>
  </tr>
</table>
</form>
</body>
</html>
<?php 
}else{
echo "<script>alert('������ȷ��¼��'); window.location.href='index.php';</script>";
}

?>