function onSubtrain(){
	if($("input[name=username]").val()==""){	
	//	alert("��������Ϊ��!");
		window.wxc.xcConfirm('��������Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#username").focus();
		return false;
	}

	if($("input[name=ex2]").val()==""){
	//	alert("���֤����Ϊ��!");
		window.wxc.xcConfirm('���֤����Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#ex2").focus();
		return false;
	}
	if($("input[name=title]").val()==""){
	//	alert("��λ���Ʋ���Ϊ��!");
		window.wxc.xcConfirm('��λ���Ʋ���Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#title").focus();
		return false;
	}
	if($("input[name=tel]").val()==""){	
	//	alert("�绰����Ϊ��!");
		window.wxc.xcConfirm('�绰����Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#tel").focus();
		return false;
	}

	var telphone = $.trim($('input[name=tel]').val());
	if(telphone){
		var tel=$("input[name=tel]").val();
		var p1 = /^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/;
		var p2 = /^\d+$/;
		var me = false;
		var my = false;
		if (p1.test(tel))me=true;
		if(p2.test(tel)){
			my = true;
		}
		if($("input[name=tel]").val().length == 10){
		//	alert('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678');
			window.wxc.xcConfirm('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678', window.wxc.xcConfirm.typeEnum.info);
			return false;
		}
		if (!(my || me)){
		//	alert('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678"');
			window.wxc.xcConfirm('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678', window.wxc.xcConfirm.typeEnum.info);
			return false;
		}
	}


	var email = $.trim($('input[name=email]').val());
	if(email==""){	
	//	alert("���䲻��Ϊ��!");
		window.wxc.xcConfirm('���䲻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#email").focus();
		return false;
	}	
	if(email){
		var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/; //��֤�����������ʽ
		if(!reg.test(email)){
		//	alert("�����ʽ����ȷ��������������");
			window.wxc.xcConfirm('�����ʽ����ȷ��������������', window.wxc.xcConfirm.typeEnum.info);
			$("#email").focus();
			return false;
		}
	}
	var ex3 = $("input[name=ex3]").val();
	var regex3 = /^\d{6}$/;
	if(ex3.length==""){
	//	alert("�ʱ಻��Ϊ��!");
		window.wxc.xcConfirm('�ʱ಻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#ex3").focus();
		return false;
	}else if(!regex3.test(ex3)){
	//	alert("�ʱ�Ϊ��λ����!");
		window.wxc.xcConfirm('�ʱ�Ϊ��λ����!', window.wxc.xcConfirm.typeEnum.info);
		$("#ex3").focus();
		return false;
	}
	
	if($("input[name=ex4]").val()==""){
	//	alert("ͨѶ��ַ����Ϊ��!");
		window.wxc.xcConfirm('ͨѶ��ַ����Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#ex4").focus();
		return false;
	}
	

	if($("input[name=captcha]").val()=="") {
	//	alert('��֤�벻��Ϊ��!');
		window.wxc.xcConfirm('��֤�벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		return false;
	}else{
		$.post("services_buya.php?code",{code:$("input[name=captcha]").val()},function(result){
			if(result == 0) {
			//	alert('��֤�����!');
				window.wxc.xcConfirm('��֤�����!', window.wxc.xcConfirm.typeEnum.info);
				change_captcha();
				return false;
			}else{
				$("#comment_form").submit();
			}
		});
	}
	
}
function onSublicense(){
	if($('.SerialNum').is(":visible"))
	{
		if($("input[name=tel]").val()==""){	
		//	alert("�豸���кŲ���Ϊ��!");
			window.wxc.xcConfirm('�豸���кŲ���Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
			$("#tel").focus();
			return false;
		}
	}
	if($("textarea[name=content]").val()==""){
	//	alert("��Ȩ�����кŲ���Ϊ��!");
		window.wxc.xcConfirm('��Ȩ�����кŲ���Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#content").focus();
		return false;
	}
	var email = $.trim($('input[name=email]').val());
	if(email==""){	
	//	alert("���䲻��Ϊ��!");
		window.wxc.xcConfirm('���䲻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#email").focus();
		return false;
	}	
	if(email){
		var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/; //��֤�����������ʽ
		if(!reg.test(email)){
		//	alert("�����ʽ����ȷ��������������");
			window.wxc.xcConfirm('�����ʽ����ȷ��������������', window.wxc.xcConfirm.typeEnum.info);
			$("#email").focus();
			return false;
		}
	}
	if($("input[name=title]").val()==""){	
	//	alert("��˾���Ʋ���Ϊ��!");
		window.wxc.xcConfirm('��˾���Ʋ���Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#title").focus();
		return false;
	}
	if($("input[name=captcha]").val()=="") {
	//	alert('��֤�벻��Ϊ��!');
		window.wxc.xcConfirm('��֤�벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		return false;
	}else{
		if(!$('.SerialNum').is(":visible")){
			if(!confirm("�����ļ�����������صģ��޸�����Ӳ����Ϣ����Ȩ�����ã�Ӳ����Ϣ����������Ϣ�ȣ���ע�⣡")){
				return false;
			}
		}
		$.post("license.php?code",{code:$("input[name=captcha]").val()},function(result){
			if(result == 0) {
			//	alert('��֤�����!');
				window.wxc.xcConfirm('��֤�����!', window.wxc.xcConfirm.typeEnum.info);
				change_captcha();
				return false;
			}else{
				if(check_uploadLic)
				{
					$("#comment_form").submit();
				}else
				{
					return false;
				}
			}
		});
	}
}

function check_uploadLic(){
	var fileName = $("#userfile").val();
	var fileType = /.info$/;
	if(!fileType.test(fileName))
	{
	//	alert("ֻ���ϴ���׺��Ϊ\".info\"���ļ���");
		window.wxc.xcConfirm('ֻ���ϴ���׺��Ϊ\".info\"���ļ���', window.wxc.xcConfirm.typeEnum.info);
		return false;
	}
	return true;
}

function onSub4(){

	if($("input[name=username]").val()==""){	
	//	alert("�˺Ų���Ϊ��!");
		window.wxc.xcConfirm('�˺Ų���Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#username").focus();
		return false;
	}
	if($("input[name=username]").val().length<4 || $("input[name=username]").val().length>15)
	{	
//	alert("Ϊ�������ʻ��İ�ȫ��!�˺ŵĳ���Ϊ4-15");
	window.wxc.xcConfirm('Ϊ�������ʻ��İ�ȫ��!�˺ŵĳ���Ϊ4-15', window.wxc.xcConfirm.typeEnum.info);
	return false;
}
	if($("input[name=name]").val()==""){
	//	alert("��������Ϊ��!");
		window.wxc.xcConfirm('��������Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#name").focus();
		return false;
	}
	if($("input[name=company]").val()==""){	
	//	alert("��˾����Ϊ��!");
		window.wxc.xcConfirm('��˾����Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#company").focus();
		return false;
	}

	if($("input[name=tel]").val()==""){	
	//	alert("�绰����Ϊ��!");
		window.wxc.xcConfirm('�绰����Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#tel").focus();
		return false;
	}

	var telphone = $.trim($('input[name=tel]').val());
	if(telphone){
		var tel=$("input[name=tel]").val();
		var p1 = /^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/;
		var p2 = /^\d+$/;
		var me = false;
		var my = false;
		if (p1.test(tel))me=true;
		if(p2.test(tel)){
			my = true;
		}
		if($("input[name=tel]").val().length == 10){
		//	alert('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678"');
			window.wxc.xcConfirm('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678', window.wxc.xcConfirm.typeEnum.info);
			return false;
		}
		if (!(my || me)){
		//	alert('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678"');
			window.wxc.xcConfirm('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678', window.wxc.xcConfirm.typeEnum.info);
			return false;
		}
	}
	var email = $.trim($('input[name=email]').val());
	if(email==""){	
	//	alert("���䲻��Ϊ��!");
		window.wxc.xcConfirm('���䲻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#email").focus();
		return false;
	}	
	if(email){
		var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/; //��֤�����������ʽ
		if(!reg.test(email)){
		//	alert("�����ʽ����ȷ��������������");
			window.wxc.xcConfirm('�����ʽ����ȷ��������������', window.wxc.xcConfirm.typeEnum.info);
			$("#email").focus();
			return false;
		}
	}
	
	if($("input[name=passd]").val()=="") {
		window.wxc.xcConfirm('�����벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#passd").focus();
		return false;
	}
	var password = $("input[name=password]").val();
	var password1 = $("input[name=password1]").val();
	if(password == ""){
		window.wxc.xcConfirm('�����벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#password").focus();
		return false;
	}
	
	if(password1 == ""){	
		window.wxc.xcConfirm('ȷ�������벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#password1").focus();
		return false;
	}
	if(password != password1){	
		window.wxc.xcConfirm('�����������벻��ͬ!', window.wxc.xcConfirm.typeEnum.info);
		return false;
	}
	if(password1.length<6 || password1.length>20 || password.length<6 || password.length>20)
		{	
		window.wxc.xcConfirm('Ϊ�������ʻ��İ�ȫ��!������ĳ���Ϊ6-20', window.wxc.xcConfirm.typeEnum.info);
		return false;
	}
	$.post("regist.php?xg",{code:hex_md5($("input[name=passd]").val())},function(result){
		if(result == 0) {
			window.wxc.xcConfirm('���������!', window.wxc.xcConfirm.typeEnum.info);
			return false;
		}else{
			$("#password").val(password == '' ? '': hex_md5(password));
			$("#password1").val(password1 == '' ? '': hex_md5(password1));
			$("#comment_form").submit();
		}
	});
    
}
function onSubbuya(){
	if($("input[name=username]").val()==""){	
	//	alert("��������Ϊ��!");
		window.wxc.xcConfirm('��������Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#username").focus();
		return false;
	}
	if($("input[name=title]").val()==""){
	//	alert("��˾���Ʋ���Ϊ��!");
		window.wxc.xcConfirm('��˾���Ʋ���Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#title").focus();
		return false;
	}
	if($("input[name=tel]").val()==""){	
	//	alert("�绰����Ϊ��!");
		window.wxc.xcConfirm('�绰����Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#tel").focus();
		return false;
	}
	var telphone = $.trim($('input[name=tel]').val());
	if(telphone){
		var tel=$("input[name=tel]").val();
		var p1 = /^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/;
		var p2 = /^\d+$/;
		var me = false;
		var f = false;
		if (p1.test(tel))me=true;
		if(p2.test(tel)){
			f = true;
		}
		if($("input[name=tel]").val().length == 10){
		//	alert('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678"');
			window.wxc.xcConfirm('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678', window.wxc.xcConfirm.typeEnum.info);
			return false;
		}
		if (!(me||f)){
		//	alert('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678"');
			window.wxc.xcConfirm('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678', window.wxc.xcConfirm.typeEnum.info);
			return false;
		}
	}
	var email = $.trim($('input[name=email]').val());
	if(email==""){	
	//	alert("���䲻��Ϊ��!");
		window.wxc.xcConfirm('���䲻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#email").focus();
		return false;
	}	
	if(email){
		var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/; //��֤�����������ʽ
		if(!reg.test(email)){
		//	alert("�����ʽ����ȷ��������������");
			window.wxc.xcConfirm('�����ʽ����ȷ��������������', window.wxc.xcConfirm.typeEnum.info);
			$("#email").focus();
			return false;
		}
	}
	if($("input[name=captcha]").val()=="") {
	//	alert('��֤�벻��Ϊ��!');
		window.wxc.xcConfirm('��֤�벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		return false;
	}else{
		$.post("services_buya.php?code",{code:$("input[name=captcha]").val()},function(result){
			if(result == 0) {
			//	alert('��֤�����!');
				window.wxc.xcConfirm('��֤�����!', window.wxc.xcConfirm.typeEnum.info);
				change_captcha();
				return false;
			}else{
				$("#comment_form").submit();
			}
		});
	}
	
}
function onSub2(){
	if($("input[name=username]").val()==""){	
	//	alert("�˺Ų���Ϊ��!");
		window.wxc.xcConfirm('�˺Ų���Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#username").focus();
		return false;
	}
	if($("input[name=password]").val()==""){
	//	alert("���벻��Ϊ��!");
		window.wxc.xcConfirm('���벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#password").focus();
		return false;
	}
	if($("input[name=captcha]").val()=="") {
	//	alert('��֤�벻��Ϊ��!');
		window.wxc.xcConfirm('��֤�벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		return false;
	}else{
		$.post("partners.php?code",{code:$("input[name=captcha]").val()},function(result){
			if(result == 0) {
			//	alert('��֤�����!');
				window.wxc.xcConfirm('��֤�����!', window.wxc.xcConfirm.typeEnum.info);
				change_captcha();
				return false;
			}else{
				$("#password1").val(hex_md5($("#password1").val()));
				$("#password").val(hex_md5($("#password").val()));
				$("#login_product").submit();
			}
		});
	}
	
}
function onSubs1(){
	var $name = $('input[name=partnerUser]');
	var name = $.trim($name.val());
	if(name == ''){
		window.wxc.xcConfirm('�˺Ų���Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$name.focus();
		return false;
	}
	
	var email = $.trim($('input[name=info13]').val());
	if(email==""){	
	//	alert("���䲻��Ϊ��!");
		window.wxc.xcConfirm('���䲻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#info13").focus();
		return false;
	}	
	if(email){
		var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/; //��֤�����������ʽ
		if(!reg.test(email)){
		//	alert("�����ʽ����ȷ��������������");
			window.wxc.xcConfirm('�����ʽ����ȷ��������������', window.wxc.xcConfirm.typeEnum.info);
			$("#info13").focus();
			return false;
		}
	}
	if($("input[name=captcha1]").val()=="") {
	//	alert('��֤�벻��Ϊ��!');
		window.wxc.xcConfirm('��֤�벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		return false;
	}else{
		$.post("partners.php?code",{code:$("input[name=captcha1]").val()},function(result){
			if(result == 0) {
			//	alert('��֤�����!');
				window.wxc.xcConfirm('��֤�����!', window.wxc.xcConfirm.typeEnum.info);
				change_captcha1();
				return false;
			}else{
				$("#login_product2").submit();
			}
		});
	}
}
function onSubs2(){
	var $password1 = $("#password1");
	if($password1.val()==""){
		window.wxc.xcConfirm('ԭ���벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$password1.focus();
		return false;
	}
	var $password2 = $("#password2");
	if($password2.val()==""){
		window.wxc.xcConfirm('�����벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$password2.focus();
		return false;
	}else{//������ǿ�������
		var pwd = $password2.val();
		var points = pwd.length;// ����  	
		var has_letter		= new RegExp("[a-z]");  	
		var has_caps		= new RegExp("[A-Z]");  	
		var has_numbers		= new RegExp("[0-9]");  	
		var has_symbols		= new RegExp("\W");    	
		if(has_letter.test(pwd)) 	{ 
			points += 2; 
		}  	
		if(has_caps.test(pwd)) 		{ 
			points += 2; 
		}  	
		if(has_numbers.test(pwd)) 	{ 
			points += 2; 
		}  	
		if(has_symbols.test(pwd)) 	{ 
			points += 2; 
		}  
		name = $("#dealername").text();
		text = "";
		if (name != '' && pwd.indexOf(name)>-1) {
			 points -= 8; 
			 text = "������������û���";
		}
		
		if(points < 12){
			window.wxc.xcConfirm('����ǿ�Ȳ�����Ҫ��'+text+'!', window.wxc.xcConfirm.typeEnum.info);
			return false;
		}
		
	}
	var $password3 = $("#password3");
	if($password3.val()==""){
		window.wxc.xcConfirm('ȷ�����벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$password3.focus();
		return false;
	}else{
		if($password2.val() != $password3.val()){
			window.wxc.xcConfirm('��������ȷ�����벻һ��!', window.wxc.xcConfirm.typeEnum.info);
			return false;
		}
	}
	if($("input[name=captcha2]").val()=="") {
	//	alert('��֤�벻��Ϊ��!');
		window.wxc.xcConfirm('��֤�벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		return false;
	}else{
		$.post("partners.php?code",{code:$("input[name=captcha2]").val()},function(result){
			if(result == 0) {
			//	alert('��֤�����!');
				window.wxc.xcConfirm('��֤�����!', window.wxc.xcConfirm.typeEnum.info);
				change_captcha2();
				return false;
			}else{
				$("#password1").val(hex_md5($("#password1").val()));
				$("#password2").val(hex_md5($("#password2").val()));
				$("#login_product3").submit();
			}
		});
	}
}
/**
 * �����˺ŵ�¼
 * @returns {Boolean}
 */
function onSub1(){
	if($("input[name=username]").val()==""){	
	//	alert("�˺Ų���Ϊ��!");
		window.wxc.xcConfirm('�˺Ų���Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#username").focus();
		return false;
	}

	if($("input[name=password]").val()==""){
	//	alert("���벻��Ϊ��!");
		window.wxc.xcConfirm('���벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#password").focus();
		return false;
	}
	
	if($("input[name=captcha]").val()=="") {
	//	alert('��֤�벻��Ϊ��!');
		window.wxc.xcConfirm('��֤�벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		return false;
	}else{
		$.post("regist.php?code",{code:$("input[name=captcha]").val()},function(result){
			if(result == 0) {
			//	alert('��֤�����!');
				window.wxc.xcConfirm('��֤�����!', window.wxc.xcConfirm.typeEnum.info);
				change_captcha();
				return false;
			}else{
				$("#password").val(hex_md5($("#password").val()));
				$("#comment_form").submit();
			}
		});
	}
}
function onSub(){
	if($("input[name=username]").val()==""){	
	//	alert("�˺Ų���Ϊ��!");
		window.wxc.xcConfirm('�˺Ų���Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#username").focus();
		return false;
	}
	if($("input[name=username]").val().length<4 || $("input[name=username]").val().length>15)
	{	
//	alert("Ϊ�������ʻ��İ�ȫ��!�˺ŵĳ���Ϊ4-15");
	window.wxc.xcConfirm('Ϊ�������ʻ��İ�ȫ��!�˺ŵĳ���Ϊ4-15', window.wxc.xcConfirm.typeEnum.info);
	return false;
}
	if($("input[name=password]").val()==""){
	//	alert("���벻��Ϊ��!");
		window.wxc.xcConfirm('���벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#password").focus();
		return false;
	}
	if($("input[name=password1]").val()==""){	
	//	alert("ȷ�����벻��Ϊ��!");
		window.wxc.xcConfirm('ȷ�����벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#password1").focus();
		return false;
	}
	if($("input[name=password]").val() != $("input[name=password1]").val()){	
	//	alert("�����������벻��ͬ!");
		window.wxc.xcConfirm('�����������벻��ͬ!', window.wxc.xcConfirm.typeEnum.info);
		return false;
	}
	if($("input[name=password1]").val().length<6 || $("input[name=password1]").val().length>20 && $("input[name=password]").val().length<6 || $("input[name=password]").val().length>20)
		{	
	//	alert("Ϊ�������ʻ��İ�ȫ��!������ĳ���Ϊ6-20");
		window.wxc.xcConfirm('Ϊ�������ʻ��İ�ȫ��!������ĳ���Ϊ6-20', window.wxc.xcConfirm.typeEnum.info);
		return false;
	}
	if($("input[name=name]").val()==""){
	//	alert("��������Ϊ��!");
		window.wxc.xcConfirm('��������Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#name").focus();
		return false;
	}
	if($("input[name=company]").val()==""){	
	//	alert("��˾����Ϊ��!");
		window.wxc.xcConfirm('��˾����Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#company").focus();
		return false;
	}

	if($("input[name=tel]").val()==""){	
	///	alert("�绰����Ϊ��!");
		window.wxc.xcConfirm('�绰����Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#tel").focus();
		return false;
	}

	var telphone = $.trim($('input[name=tel]').val());
	if(telphone){
		var tel=$("input[name=tel]").val();
		var p1 = /^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/;
		var p2 = /^\d+$/;
		var me = false;
		var f = false;
		if (p1.test(tel))me=true;
		if(p2.test(tel))f=true;
		if($("input[name=tel]").val().length == 10){
		//	alert('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789102 ���� 0571-12345678"');
			window.wxc.xcConfirm('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789102 ���� 0571-12345678', window.wxc.xcConfirm.typeEnum.info);
			return false;
		}
		if (!(me||f)){
		//	alert('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678"');
			window.wxc.xcConfirm('��ϵ�绰��ʽ��������������ȷ�ĸ�ʽ������:13456789101 ���� 0571-12345678', window.wxc.xcConfirm.typeEnum.info);
			return false;
		}
	}
	var email = $.trim($('input[name=email]').val());
	if(email==""){	
	//	alert("���䲻��Ϊ��!");
		window.wxc.xcConfirm('���䲻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		$("#email").focus();
		return false;
	}	
	if(email){
		var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/; //��֤�����������ʽ
		if(!reg.test(email)){
		//	alert("�����ʽ����ȷ��������������");
			window.wxc.xcConfirm('�����ʽ����ȷ��������������', window.wxc.xcConfirm.typeEnum.info);
			$("#email").focus();
			return false;
		}
	}
	
	if($("input[name=captcha]").val()=="") {
	//	alert('��֤�벻��Ϊ��!');
		window.wxc.xcConfirm('��֤�벻��Ϊ��!', window.wxc.xcConfirm.typeEnum.info);
		return false;
	}else{
		$.post("regist.php?code",{code:$("input[name=captcha]").val()},function(result){
			if(result == 0) {
			//	alert('��֤�����!');
				window.wxc.xcConfirm('��֤�����!', window.wxc.xcConfirm.typeEnum.info);
				change_captcha();
				return false;
			}else{
				$("#password").val(hex_md5($("#password").val()));
				$("#password1").val(hex_md5($("#password1").val()));
				$("#comment_form").submit();
			}
		});
	}
}
/**
 * ������¼
 */
function login(){
	var href = window.location.href;
	
	if(href.indexOf("regist.php")>0){
		href = href.replace("regist.php", "personal.php");
	}
	$("#redirect").val(href);
	$("#loginForm").submit();
}