<?php session_start(); 
if($_SESSION[admin_user]==true){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����������Դ�ƻ�ϵͳ</title>
</head>
<script language="javascript" src="js/plan_js.js"></script>
<body>
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  <form name="form2" method="post" action="indexs.php?lmbs=�����ƻ�����">
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
	   <option><?php echo $myrow[wayq]; ?></option>
	  <?php } ?>
      </select>      </td>
	  <td width="360" height="30" align="right" bgcolor="#FFFFFF">���ƺ���
      <select name="select3">
	  <option selected="selected">��ѡ���ƺ���</option>
        <?php 
	  $query="select * from tb_plan";
	  $result=mysql_query($query);
	  while($myrow=mysql_fetch_array($result)){
	  ?>
	   <option><?php echo $myrow[car_number]; ?></option>
	  <?php } ?>
      </select>      </td>
	  </tr>
	  <tr>
	  <td width="360" height="30" align="right" bgcolor="#FFFFFF">�Ż���ʽ
	
      <select name="select4">
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
	
      <select name="select5">
	  <option selected="selected">��ѡ����������</option>
        <?php 
	  $query="select * from tb_plan";
	  $result=mysql_query($query);
	  while($myrow=mysql_fetch_array($result)){
	  ?>
	   <option><?php echo $myrow[ysnumber]; ?></option>
	  <?php } ?>
      </select>      </td>
	  
     <td width="360" bgcolor="#FFFFFF" align="center"><input type="submit" name="Submit3" value="�ύ"> </td>     
  </tr>
  </form> 
</table>
<?php 
	  $querys="select * from tb_plan where pinpai='$select1' or wayq='$select2' or car_number='$select3' or yhway='$select4' or ysnumber='$select5'";
	  $results=mysql_query($querys);
	 $myrows=mysql_fetch_array($results);
	  ?>
	  <?php /*?><?php */?>
<form name="form1" method="post" action="plan_insert_ok.php" onSubmit="javascript:return check_plan(form1);">  
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
    <tr>
    <td width="80" height="26" align="center" bgcolor="#FFFFFF">��Ʒ��Ʒ�ƣ�</td>
    <td width="218" bgcolor="#FFFFFF"><input name="pinpai" type="text" id="pinpai" size="25" value="<?php echo $myrows[pinpai];?>" /></td>
    <td width="83" height="22" align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="281" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td width="80" height="26" align="center" bgcolor="#FFFFFF">�����أ�</td>
    <td width="218" bgcolor="#FFFFFF"><input name="fromq" type="text" id="fromq" size="25" value="<?php echo $myrows[fromq];?>" /></td>
    <td width="80" height="26" align="center" bgcolor="#FFFFFF">Ŀ�ĵأ�</td>
    <td width="218" bgcolor="#FFFFFF"><input name="toq" type="text" id="toq" size="25" value="<?php echo $myrows[toq];?>" /></td>
  </tr>
    <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF">���䷽ʽ��</td>
    <td width="235" bgcolor="#FFFFFF"><input name="wayq" type="text" id="wayq" size="25" value="<?php echo $myrows[wayq];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">���������</td>
    <td width="255" bgcolor="#FFFFFF">ˮ·��
      <input name="bilei_s" type="text" id="bilei_s" size="15" value="<?php echo $myrows[bilei_s];?>" /><font color="#FF0000">(%)</font>
      <br/>
      ��·��
      <input name="bilei_g" type="text" id="bilei_g" size="15" value="<?php echo $myrows[bilei_g];?>" /><font color="#FF0000">(%)</font>
      <br/>
      ��·��
      <input name="bilei_t" type="text" id="bilei_t" size="15" value="<?php echo $myrows[bilei_t];?>" /><font color="#FF0000">(%)</font></td>
  </tr>
  <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF"> �����̣�</td>
    <td width="235" bgcolor="#FFFFFF"><input name="chenyusan" type="text" id="chenyusan" size="25" value="<?php echo $myrows[chenyusan];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">��ֵ��</td>
    <td width="255" bgcolor="#FFFFFF">ˮ·��
      <input name="changzi_s" type="text" id="changzi_s" size="15" value="<?php echo $myrows[changzi_s];?>" /><font color="#FF0000">(Ԫ)</font>
	  <br/>
	  ��·��
	  <input name="changzi_g" type="text" id="changzi_g" size="15" value="<?php echo $myrows[changzi_g];?>" /><font color="#FF0000">(Ԫ)</font>
	  <br/>
	  ��·��
	  <input name="changzi_t" type="text" id="changzi_t" size="15" value="<?php echo $myrows[changzi_t];?>" /><font color="#FF0000">(Ԫ)</font></td>
  </tr>
	<tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF">�Ż���ʽ��</td>
    <td width="235" bgcolor="#FFFFFF"><input name="yhway" type="text" id="yhway" size="25" value="<?php echo $myrows[yhway];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">��������</td>
    <td width="255" bgcolor="#FFFFFF"><input name="ysnumber" type="text" id="ysnumber" size="25" value="<?php echo $myrows[ysnumber];?>" /><font color="#FF0000">(��)</font></td>
  </tr>
  <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF"> ����ʱ�䣺</td>
    <td width="235" bgcolor="#FFFFFF"><font color="#FF0000">��:</font>
      <input name="ystime_1" type="text" id="ystime_1" size="20" value="<?php echo $myrows[ystime_1];?>" /><br/>
      <font color="#FF0000">��:</font>
      <input name="ystime_2" type="text" id="ystime_2" size="20" value="<?php echo $myrows[ystime_2];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">����ɱ���</td>
    <td width="255" bgcolor="#FFFFFF">ˮ·��
      <input name="yscb_s" type="text" id="yscb_s" size="15" value="<?php echo $myrows[yscb_s];?>" /><font color="#FF0000">(Ԫ)</font><br/>
      ��·��
	  <input name="yscb_g" type="text" id="yscb_g" size="15" value="<?php echo $myrows[yscb_g];?>" /><font color="#FF0000">(Ԫ)</font><br/>
	  ��·��
	  <input name="yscb_t" type="text" id="yscb_t" size="15" value="<?php echo $myrows[yscb_t];?>" /><font color="#FF0000">(Ԫ)</font></td>
  </tr>
  <tr>
    <td width="80" height="26" align="center" bgcolor="#FFFFFF">������</td>
    <td width="218" bgcolor="#FFFFFF"><input name="username" type="text" id="username" size="25" value="<?php echo $myrows[username];?>" /></td>
    <td width="83" height="22" align="center" bgcolor="#FFFFFF">���ƺ��룺</td>
    <td width="281" bgcolor="#FFFFFF"><input name="car_number" type="text" id="car_number" size="25" value="<?php echo $myrows[car_number];?>" /></td>
  </tr>
  <tr>
    <td height="22" align="center" bgcolor="#FFFFFF">���֤�ţ�</td>
    <td bgcolor="#FFFFFF"><input name="user_number" type="text" id="user_number" size="25" value="<?php echo $myrows[user_number];?>"/></td>
    <td rowspan="2" align="center" bgcolor="#FFFFFF">����������</td>
    <td rowspan="2" bgcolor="#FFFFFF"><textarea name="car_content" cols="30" rows="5" id="car_content"><?php echo $myrows[car_content];?></textarea></td>
  </tr>
  <tr>
    <td height="22" align="center" bgcolor="#FFFFFF">�绰��</td>
    <td bgcolor="#FFFFFF"><input name="user_tel" type="text" id="user_tel" value="<?php echo $myrows[tel];?>"/></td>
  </tr>
  <tr>
    <td height="22" align="center" bgcolor="#FFFFFF">��ַ��</td>
    <td bgcolor="#FFFFFF"><textarea name="address" id="address"><?php echo $myrows[address];?></textarea></td>
    <td align="center" bgcolor="#FFFFFF">����·�ߣ�</td>
    <td bgcolor="#FFFFFF"><textarea name="car_road" cols="30" rows="5" id="car_road"><?php echo $myrows[car_road];?></textarea></td>
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