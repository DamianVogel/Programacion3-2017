function validar()

{
//alert(window.location.href);
var mail=$("#mail").val();
var clave=$("#clave").val();

$.post("ValidarUsuario.php",


{//paso el objeto json como parametro

"mail":mail,

"clave":clave


},

//paso la funcion de retorno como parametro

function(parametro){//la variable parametro va a contener la respuesta del servidor, en este caso los echo del php

console.log(parametro);


}

//paso la funcion de retorno como parametro



);//cierro la funcion $.post


}



function Mostrar()

{

$.post("Mostrar.php","",function(parametro){

document.getElementById('mostrar').innerHTML=parametro;

});

}



function Salir()

{

$.post("Desloguear.php","",function(parametro){});

}
