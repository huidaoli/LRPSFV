function check_plan(){
	if (form1.fromq.value == ""){
		alert("�����ز���Ϊ�գ�");
		form1.fromq.focus();
		return (false);	 
	}
	if (form1.toq.value == ""){
		alert("Ŀ�ĵز���Ϊ�գ�");
		form1.toq.focus();
		return (false);	 
	}
	if (form1.wayq.value == ""){
		alert("���䷽ʽ����Ϊ�գ�");
		form1.wayq.focus();
		return (false);	 
	}
	if (form1.bilei_s.value == ""){
		alert("ˮ·��������Ϊ�գ�");
		form1.bilei_s.focus();
		return (false);	 
	}
	if (form1.bilei_g.value == ""){
		alert("��·��������Ϊ�գ�");
		form1.bilei_g.focus();
		return (false);	 
	}
	if (form1.bilei_t.value == ""){
		alert("��·��������Ϊ�գ�");
		form1.bilei_t.focus();
		return (false);	 
	}
	if (form1.chenyusan.value == ""){
		alert("�����̲���Ϊ�գ�");
		form1.chenyusan.focus();
		return (false);	 
	}
	if (form1.changzi_s.value == ""){
		alert("ˮ·��ֵ����Ϊ�գ�");
		form1.changzi_s.focus();
		return (false);	 
	}
	if (form1.changzi_g.value == ""){
		alert("��·��ֵ����Ϊ�գ�");
		form1.changzi_g.focus();
		return (false);	 
	}
	if (form1.changzi_t.value == ""){
		alert("��·��ֵ����Ϊ�գ�");
		form1.changzi_t.focus();
		return (false);	 
	}
	if (form1.yhway.value == ""){
		alert("�Ż���ʽ����Ϊ�գ�");
		form1.yhway.focus();
		return (false);	 
	}
	if (form1.ysnumber.value == ""){
		alert("������������Ϊ�գ�");
		form1.ysnumber.focus();
		return (false);	 
	}
	if (form1.ystime_1.value == ""){
		alert("����ʱ�䲻��Ϊ�գ�");
		form1.ystime_1.focus();
		return (false);	 
	}
	if (form1.ystime_2.value == ""){
		alert("����ʱ�䲻��Ϊ�գ�");
		form1.ystime_2.focus();
		return (false);	 
	}
	if (form1.yscb_s.value == ""){
		alert("ˮ·����ɱ�����Ϊ�գ�");
		form1.yscb_s.focus();
		return (false);	 
	}
	if (form1.yscb_g.value == ""){
		alert("��·����ɱ�����Ϊ�գ�");
		form1.yscb_g.focus();
		return (false);	 
	}
	if (form1.yscb_t.value == ""){
		alert("��·����ɱ�����Ϊ�գ�");
		form1.yscb_t.focus();
		return (false);	 
	}
	if (form1.pinpai.value == ""){
		alert("��ƷƷ�ƺŲ���Ϊ�գ�");
		form1.pinpai.focus();
		return (false);	 
	}
	if (form1.username.value == ""){
		alert("�û�������Ϊ�գ�");
		form1.username.focus();
		return (false);	 
	}
	//��֤���ƺ���
	if (form1.car_number.value==""){
		alert("���ƺ��벻��Ϊ�գ�");
		form1.car_number.focus();
		return (false);	 
	}

    //��֤���֤����
	if(form1.user_number.value==""){
		alert("���������֤����!");
		form1.user_number.focus();
		return (false);
	}
	
	//��֤�绰����
		if(form1.user_tel.value==""){
		alert("������绰����!");
		form1.user_tel.focus();
		return (false);
	}
	
	//��֤��ַ
		if(form1.address.value==""){
		alert("�������ͥ��ַ!");
		form1.address.focus();
		return (false);
	}	
	    if(form1.car_content.value==""){
		alert("�����복����Ϣ!");
		form1.car_content.focus();
		return (false);
	}	
	    if(form1.car_road.value==""){
		alert("�����복����ʻ·��!");
		form1.car_road.focus();
		return (false);
	}
}

function check_admin(){
	if(form1.admin_user.value==""){
		alert("�������û���!");
		form1.admin_user.focus();
		return (false);
		}
    if(form1.admin_pass.value==""){
		alert("�����������!");
		form1.admin_pass.focus();
		return (false);
		}
		 if(form1.admin_new_pass.value==""){
		alert("������������!");
		form1.admin_new_pass.focus();
		return (false);
		}
 if(form1.admin_new_pass2.value==""){
		alert("������������!");
		form1.admin_new_pass2.focus();
		return (false);
		}
	 if(form1.admin_new_pass.value!=forms1.admin_new_pass2.value){
		alert("���������������ȷ�����벻��!");
		form1.admin_new_pass2.focus();
		return (false);
		}	
	}
function check_select_car(){
	if(form1.select1.value==""){
		alert("�����복��·��!");
		form1.select1.focus();
		return (false);
		}
    if(form1.select2.value==""){
		alert("�����복��·��!");
		form1.select2.focus();
		return (false);
		}

	}