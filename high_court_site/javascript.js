function login(){
	var a=document.l.t1.value;
	var b=document.l.t2.value;
		flag=true;
	if(a==""){
		alert("username is blank");
		flag=false;
	}
	if(b==""){
		alert("Password is blank");
		flag=false;
	}
	return flag;
}
