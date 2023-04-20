const pswrdFile=document.querySelector(".form input[type='password']");
toggleBtn=document.querySelector(".form .field i");

toggleBtn.onclick = ()=>{
    if(pswrdFile.type=="password"){
        pswrdFile.type="text";
        toggleBtn.classList.add("active");
    }else{
        pswrdFile.type="password";
        toggleBtn.classList.remove("active");
    }
}