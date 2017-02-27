//验证用户名中是否超过20个字符
function validateName(){
		var name=$("#registeruser").val();
	    if(name.length>20){
			$("#wrong_name").text("用户名无效，请再次输入");
			return false;
		}
		else{
			$("#wrong_name").text(" ");
			return true;
		}
}
//验证用户两次输入的密码是否一致
function validatePwd(){
		var pwd=$("#registerpwd").val();
		var pwdagain=$("#registerpwdagain").val();
		if(pwd!=pwdagain){
			$("#wrong_pwd").text("两次密码不一致,请再次确认!");
			return false;
		}
		else{
			$("#wrong_pwd").text(" ");
			return true;
		}
}

//当用户输入手机号时，验证用户输入的手机号的格式是否正确
function validateTel(){
		var telnumber=$("#registertel").val();
		var reg=/^1[3578][0-9]{9}$/;
		if(!reg.test(telnumber)){
			$("#wrong_phone").text("手机号码无效,请再次确认!");
			return false;
		}
		else{
			$("#wrong_phone").text(" ");
			return true;
		}
		
}

//表单验证
function validate(){
	//当用户未勾选同意复选框时，表单拒绝提交
	if(document.registercontent.registeragree.checked==false){
		alert("请您阅读《LevelHead用户注册协议》！");
		return false;
	}//再次确认用户名是否有效,若无效则拒绝提交
	else if(!validateName()){
		return false;
	}
	//再次确认两次密码是否一致，若不一致则拒绝提交
	else if(!validatePwd()){
		return false;
	}//再次确认手机号是否有效，若无效则拒绝提交
	else if(!validateTel()){
		return false;
	}
	else return true;
}