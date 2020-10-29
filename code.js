function validacionForm() {
    var email=document.getElementById('email').value;  
    var psswd=document.getElementById('psswd').value;

  // // Primero
//   if(email=='' && psswd==''){
//         document.getElementById("message").innerHTML='<p style="color: red">Los dos campos estan vacios</p>';
//         document.getElementById("email").style.borderColor = "red";
//         document.getElementById("psswd").style.borderColor = "red";
//     }else if(email==''){
//         document.getElementById("message").innerHTML='<p style="color: red">Falta el email</p>';
//         document.getElementById("email").style.borderColor = "red";
//         document.getElementById("psswd").style.borderColor = "grey";

//     }else if(psswd==''){
//         document.getElementById("message").innerHTML='<p style="color: red">El password esta vacio</p>';
//         document.getElementById("psswd").style.borderColor = "red";
//         document.getElementById("email").style.borderColor = "grey";

        
//          }else{
//              return true;
//          }
//          return false;


    // // Segundo
    // if(email=='' && psswd==''){
    //     document.getElementById("message").innerHTML='<p style="color: red">Los dos campos estan vacios</p>';
    //     document.getElementById("email").style.borderColor = "red";
    //     document.getElementById("psswd").style.borderColor = "red";
    //     document.getElementById("message").style.padding = " 0.8rem 0.8rem";
    //     document.getElementById("login").style.backgroundColor = "#FF6991";
    //     document.getElementById("login").style.borderColor = "blue";
    //     document.getElementById("login").style.color = "red";
    // }else if(email==''){
    //     document.getElementById("message").innerHTML='<p style="color: red">Falta el email</p>';
    //     document.getElementById("email").style.borderColor = "red";
    //     document.getElementById("psswd").style.borderColor = "grey";
    //     document.getElementById("login").style.backgroundColor = "#FF6991";
    //     document.getElementById("login").style.borderColor = "blue";
    //     document.getElementById("login").style.color = "red";
    // }else if(psswd==''){
    //     document.getElementById("message").innerHTML='<p style="color: red">El password esta vacio</p>';
    //     document.getElementById("psswd").style.borderColor = "red";
    //     document.getElementById("email").style.borderColor = "grey";
    //     document.getElementById("login").style.backgroundColor = "#FF6991";
    //     document.getElementById("login").style.borderColor = "blue";
    //     document.getElementById("login").style.color = "red";
        
    //      }else{
    //          return true;
    //      }
    //      return false;
    

    // // Tercero
    // if(email=='' && psswd==''){
    //     document.getElementById("message").innerHTML='<p style="color: red">Los dos campos estan vacios</p>';
    //     document.getElementById("email").style.borderColor = "red";
    //     document.getElementById("psswd").style.borderColor = "red";
    //     //document.getElementById("message").innerHTML='<p style="color: black">Inténtalo de nuevo</p>';
    //     document.getElementById("message").style.backgroundColor = "#FF6991";
    //     document.getElementById("message").style.borderRadius = "8px";
    //     document.getElementById("message").style.padding = " 0.8rem 0.8rem";
    // }else if(email==''){
    //     document.getElementById("message").innerHTML='<p style="color: red">Falta el email</p>';
    //     document.getElementById("email").style.borderColor = "red";
    //     document.getElementById("psswd").style.borderColor = "grey";
    //     document.getElementById("message").style.backgroundColor = "#FF6991";
    //     document.getElementById("message").style.borderRadius = "8px";
    //     document.getElementById("message").style.padding = " 0.8rem 0.8rem";
    // }else if(psswd==''){
    //     document.getElementById("message").innerHTML='<p style="color: red">El password esta vacio</p>';
    //     document.getElementById("psswd").style.borderColor = "red";
    //     document.getElementById("email").style.borderColor = "grey";
    //     document.getElementById("message").style.backgroundColor = "#FF6991";
    //     document.getElementById("message").style.borderRadius = "8px";
    //     document.getElementById("message").style.padding = " 0.8rem 0.8rem";
        
    //      }else{
    //          return true;
    //      }
    //      return false;


//cuarto
        if(email=='' && psswd==''){
        document.getElementById("message").innerHTML='<p style="color: red">Los dos campos estan vacios</p>';
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "red";
        document.getElementById("message").style.backgroundColor = "#FF6991";
        document.getElementById("message").style.borderRadius = "8px";
        document.getElementById("message").style.padding = " 0.8rem 0.8rem";
        document.getElementsByTagName('label')[0].style.color = "red";
        document.getElementsByTagName('label')[1].style.color = "red";
    }else if(email==''){
        document.getElementById("message").innerHTML='<p style="color: red">Falta el email</p>';
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "grey";
        document.getElementById("message").style.backgroundColor = "#FF6991";
        document.getElementById("message").style.borderRadius = "8px";
        document.getElementById("message").style.padding = " 0.8rem 0.8rem";
        document.getElementsByTagName('label')[0].style.color = "red";
        document.getElementsByTagName('label')[1].style.color = "grey";
    }else if(psswd==''){
        document.getElementById("message").innerHTML='<p style="color: red">El password esta vacio</p>';
        document.getElementById("psswd").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "grey";
        document.getElementById("message").style.backgroundColor = "#FF6991";
        document.getElementById("message").style.borderRadius = "8px";
        document.getElementById("message").style.padding = " 0.8rem 0.8rem";
        document.getElementsByTagName('label')[0].style.color = "grey";
        document.getElementsByTagName('label')[1].style.color = "red";
        
         }else{
             return true;
         }
         return false;
}