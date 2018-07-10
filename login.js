/** 
 * Created by qin on 2016/3/8. 
 */  
function login() {  
  
    var username = document.getElementById("username");  
    var pass = document.getElementById("password");  
  
    if (username.value == "") {  
        alert("请输入用户名")
  
    } else if (pass.value  == "") {  
  
        alert("请输入密码")
  
    } else if(username.value == "admin@100tal.com" && pass.value == "heihahahah"){  
  
        alert("the flag is {oops.i.forget.the.old.version}")
  
    } else {  
	
        alert("请输入正确的用户名和密码！")  
  
    }  
}  