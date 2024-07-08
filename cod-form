<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="description" content="Cadastro de informações">
<meta name="keywords" content="cadastro, registro">
<meta name="author" content="willams Antonio">
<meta name="robots" content="index,follow">
<script 
 src="https://kit.fontawesome.com/6ca0558071.js"  crossorigin="anonymous"></script> 
    <title>conta Oasis game</title>

    
<style>




.input{
  padding: 15px;
  padding-left: 20%;
  width: 120%;
  border-radius: 30px;
  border:none;
  outline-color:purple;
}

#email{
  padding: 15px;
  padding-left: 20%;
  width: 120%;
  border-radius: 30px;
  border:none;
  outline-color:purple;
}


#senha{
  padding: 15px;
  padding-left: 20%;
  width: 120%;
  border-radius: 30px;
  border:none;
  outline-color:purple;
}

i{
position: relative;
top: 48px;
left: 4%;
color:purple;
padding:15px;
}

#btn-senha{
  position:relative;
  left:85%;
  botto:60%;
}



.div-dominante{
         background: black;
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%,-50%);
         border-radius: 15px;
         padding-left: 7%;
         padding-right: 14%;
         padding-top:2px;
         padding-bottom: 7%;
         outline-color: purple;
}

h1{
font-size: 55px;
position: relative;
top: 30px;
color:purple;
margin-bottom:11%;
user-select:none;
}

button{
   padding: 15px;
   border-radius: 5px;
   border: none;
   color: white;
   width: 80%;
   position: relative;
   left: 24%;
   cursor: pointer;
   user-select: none;
   font-size:22px;
   border-radius: 30px;
   background-color:purple;
   margin-top:5%;
}

button:hover{
      background-image:linear-gradient(180deg,purple,red);
}


body{
font-family:Arial,Helvetica,sans-serif;
}

#checkbox{
     position:relative;
     right:0.3%;
     top:5px;
}

label{
color:white;
position:relative;
 left:1%;
 top:3px;
}

body{
background-color:#000000ce;
}

</style>

</head>
    <body>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
   <title>Título da página</title>
  <link rel="stylesheet" href="Naruto.css">
</head>
<body>
    


<div class="div-dominante">
   <form>
        <h1>Login</h1>
     <i class="fa-solid fa-user"></i>

  <input id="usuário" class="input" type="text" placeholder="Usuário" required>

     <br>
  <i class="fa-regular fa-envelope"></i>

<input id="email" type="email" placeholder="Seu Email" required>
     <br>
       <i class="fa-solid fa-lock"></i>
    <i class="fa fa-eye" id="btn-senha" onclick="mostrarSenha"></i>
      <input id="senha"  type="password"  placeholder=" senha" required>

 

<br>
   
    <input type="checkbox" id="checkbox">
       <label >Lembrar-me</label>
        <button onclick="redirecionarParaCadastro()" >Validar</button> 
 </form>
   </div>
     <script>
    function redirecionarParaCadastro() {
      var usuário = 
     document.getElementById("usuário").value;
      var email = document.getElementById("email").value;
      var senha = document.getElementById("senha").value;
      
      if (usuário && email && senha) {
        window.location.href = "cadastro.html";
      } else {
        alert("Por favor, preencha todos os campos para prosseguir.");
      }
    }

const passwordInput = document.getElementById("senha");
const togglePassword = document.getElementById("btn-senha");

togglePassword.addEventListener("click", function () {
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    togglePassword.classList.remove("fa-eye");
    togglePassword.classList.add("fa-eye-slash");
  } else {
    passwordInput.type = "password";
    togglePassword.classList.remove("fa-eye-slash");
    togglePassword.classList.add("fa-eye");
  }
});

 </script>
    </body>
        </html>
     
     
