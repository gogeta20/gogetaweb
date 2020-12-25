let $newUser = document.getElementById("newUser");//form1
let $oldUser = document.getElementById("oldUser");//form1
let $errorLogin = document.getElementById("errorLogin");

let $userLogin = document.getElementById('userLogin');//form2
let $volverLogin = document.getElementById('volverLogin');//form2

let $caraNew = document.getElementById("caraNew");// cara div form1
let $caraOld = document.getElementById("caraOld");// cara div form2

// inputs
let $email = document.getElementById('email');
let $pass = document.getElementById('pass');
let $email2 = document.getElementById('email2');
let $pass2 = document.getElementById('pass2');

var formulario2 = document.getElementById('formulario2');
// --------- inputs

$newUser.addEventListener('click',($e)=>{
    // $e.preventDefault();
})

var $datos="";
// user con cuenta
$userLogin.addEventListener('click',($e)=>{
    $e.preventDefault();
    let $objetoAjax = new XMLHttpRequest();
    $objetoAjax.open('POST','ajax/verificarUser.php');
    $objetoAjax.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    $objetoAjax.onload = function(){
        $datos = JSON.parse($objetoAjax.responseText);
        $datos = $datos[1];
        if($datos){
            console.log($datos);
            formulario2.submit();
        }else{
            console.log('contraseña incorrecta');
            console.log($datos);
        }
    }
    $dato = $email2.value;
    $dato2 = $pass2.value;
    $parametros = "email="+$dato+"&pass="+$dato2;
    
    $objetoAjax.send($parametros);
})


/* voolcado de los form - flip */
$oldUser.addEventListener('click',($e)=>{
    $e.preventDefault();
    $caraNew.className = "contenedorFlip2 volcado"
    $caraOld.className = "contenedorFlip2 frente"
    $errorLogin.className = "oculto"
    console.log($errorLogin)
})
$volverLogin.addEventListener('click',($e)=>{
    $e.preventDefault();
    $caraNew.className = "contenedorFlip2 frente"
    $caraOld.className = "contenedorFlip2 volcado"
    $errorLogin.className = "oculto"

})
// setTimeout(function(){ 
//     let direccion = document.getElementById('delivery-address');
//    console.log(direccion);
// }, 2000);

// window.onload = direccion();

// function direccion(){
//     alert("hola");
//     setTimeout(function(){ 
//          let direccion = document.getElementById('delivery-address');
//          console.log(direccion);
//      }, 2000);
// }