const pass=document.getElementById("contra"),
     pass1=document.getElementById("contraseña"),
      icon=document.querySelector(".bx");

icon.addEventListener("click",e=>{
    if(pass.type ==="password"){
        pass.type="text";
        icon.classList.remove("bx-hide")
        icon.classList.add("bx-show-alt")
    }if(pass1.type ==="password"){
        pass1.type="text";
        icon.classList.remove("bx-hide")
        icon.classList.add("bx-show-alt")
    }else{
        pass.type="password";
        pass1.type="password";
        icon.classList.remove("bx-hide")
        icon.classList.add("bx-show-alt")
        icon.classList.remove("bx-show-alt")
        icon.classList.add("bx-hide")

    }
})