btn_hamburger=document.getElementById('hamburgerBtn');
btn_close=document.getElementById('closeBtn');
nav_bar=document.getElementById("navbar");
btn_toggle_dark_mode=document.getElementById('darkModeBtn');
btn_light_mode=document.getElementById('lightModeBtn');
btn_mode=document.getElementById('darkModeIcon');
social_div=document.getElementById('socialDiv');

var lightmode="YES";

function openMenu(){
    nav_bar.style['z-index']=999;
    nav_bar.style.opacity=1;
    nav_bar.style.visibility="visible";

}
function closeMenu(){
    
    nav_bar.style['z-index']=-1;
    nav_bar.style.opacity=0;
    nav_bar.style.visibility="hidden";
}

function toggleNightMode(){
    if(lightmode=='YES'){
        document.documentElement.style.setProperty('--bg-black-900','beige');
        document.documentElement.style.setProperty('--bg-black-100','#252526');
        document.documentElement.style.setProperty('--bg-black-50','#2A2C2D');
        document.documentElement.style.setProperty('--text-black-900','lavender');
        document.documentElement.style.setProperty('--text-black-700','silver');
        document.documentElement.style.setProperty('--text-black-600','beige');
        document.documentElement.style.setProperty('--text-black-300','grey');
        document.documentElement.style.setProperty('--outer-shadow','3px 3px 3px #222222,-3px -3px 3px #303233');
        document.documentElement.style.setProperty('--outer-shadow-0', '0 0 0 #303233,0 0 0 #303233');
        document.documentElement.style.setProperty('--inner-shadow','inset 3px 3px 3px #222222,inset -3px -3px 3px #303233');
        btn_mode.className ='fas fa-sun fa-spin';
        document.getElementById('logo').style.color='aqua'
        lightmode='NO';
        

    }else{
        // btn_light_mode.style.display='flex';
        document.documentElement.style.setProperty('--bg-black-900','#000000');
        document.documentElement.style.setProperty('--bg-black-100','#dddddd');
        document.documentElement.style.setProperty('--bg-black-50','#eff0f4');
        document.documentElement.style.setProperty('--text-black-900','#000000');
        document.documentElement.style.setProperty('--text-black-700','#555555');
        document.documentElement.style.setProperty('--text-black-600','#66666');
        document.documentElement.style.setProperty('--text-black-300','#bbbbbb');
        document.documentElement.style.setProperty('--outer-shadow','3px 3px 3px #d0d0d0,-3px -3px 3px #f8f8f8');
        document.documentElement.style.setProperty('--outer-shadow-0', '0 0 0 #d0d0d0,0 0 0 #f8f8f8');
        document.documentElement.style.setProperty('--inner-shadow','inset 3px 3px 3px #d0d0d0,inset -3px -3px 3px #f8f8f8');
        btn_mode.className ='fas fa-moon';
        document.getElementById('logo').style.color='indigo'
        lightmode='YES';
    }
}


function toggleSocialDiv(){
    visible=social_div.style.visibility
    if(visible=='visible'){
        social_div.style.visibility='hidden';
    }else{
        social_div.style.visibility='visible';
    }
}



btn_hamburger.addEventListener("click", openMenu);
btn_close.addEventListener("click", closeMenu);
darkModeBtn.addEventListener("click", toggleNightMode);
btn_light_mode.addEventListener("click", toggleSocialDiv);