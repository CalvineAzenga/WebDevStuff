const signinlink=document.getElementById("signinlink");
const signuplink=document.getElementById("signuplink");
logindiv=document.getElementById("signindiv");
signupdiv=document.getElementById("signupdiv");
btn_mode=document.getElementById("darklightmode");
btn_mode2=document.getElementById("darklightmodeinner");


signinlink.onclick = ()=>{
    logindiv.style.visibility="visible";
    logindiv.style.opacity=1;
    logindiv.style.display="block";
    signupdiv.style.visibility="hidden";
    signupdiv.style.opacity=0;
    signupdiv.style.display="none";
}
signuplink.onclick = ()=>{
    signupdiv.style.visibility="visible";
    signupdiv.style.opacity=1;
    signupdiv.style.display="block";
    logindiv.style.visibility="hidden";
    logindiv.style.opacity=0;
    logindiv.style.display="none";
}
lightmode='YES'
function toggleNightMode(){
    if(lightmode=='NO'){
        document.documentElement.style.setProperty('--back-color','#EFF0F4');
        document.documentElement.style.setProperty('--outer-shadow','3px 3px 3px #d0d0d0,-3px -3px 3px #f8f8f8');
        document.documentElement.style.setProperty('--outer-shadow-0', '0 0 0 #d0d0d0,0 0 0 #f8f8f8');
        document.documentElement.style.setProperty('--inner-shadow','inset 3px 3px 3px #d0d0d0,inset -3px -3px 3px #f8f8f8');
        document.documentElement.style.setProperty('--text-color','#333');
        btn_mode2.className ='fas fa-moon';
        lightmode='YES';
    }else{
        document.documentElement.style.setProperty('--back-color','#252526');
        document.documentElement.style.setProperty('--outer-shadow','3px 3px 3px #222222,-3px -3px 3px #303233');
        document.documentElement.style.setProperty('--outer-shadow-0', '0 0 0 #303233,0 0 0 #303233');
        document.documentElement.style.setProperty('--inner-shadow','inset 3px 3px 3px #222222,inset -3px -3px 3px #303233');
        document.documentElement.style.setProperty('--text-color','#D2D2D2');
        document.documentElement.style.setProperty('color','#D2D2D2');
        btn_mode2.className ='fas fa-sun fa-spin';
        lightmode='NO';
    }
}
btn_mode.onclick = ()=>{
    toggleNightMode();
}