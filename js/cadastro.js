var btnCadastrar = document.querySelector("#cadastrar");
  var btnEntrar = document.querySelector("#entrar");

  var body = document.querySelector("body");

  btnCadastrar.addEventListener("click", function (){
    body.className = "cadastrar-js";
  });

  btnEntrar.addEventListener("click", function (){
    body.className = "entrar-js";
  })

