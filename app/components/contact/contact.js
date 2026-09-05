function enviarMensagem() {
  const nome = document.querySelector('input[name="nome"]').value;
  const email = document.querySelector('input[name="email"]').value;
  const estado = document.querySelector('input[name="uf"]').value;
  const cidade = document.querySelector('input[name="cidade"]').value;
  const mensagem = document.querySelector('textarea[name="mensagem"]').value;
  console.log({
    nome,
    email,
    estado,
    cidade,
    mensagem,
  });
  if (!nome || !email || !estado || !cidade || !mensagem) {
    //alert("Por favor, preencha todos os campos obrigatórios.");
    document.getElementById("alerta").style.display = "flex";
    setTimeout(function () {
      document.getElementById("alerta").style.display = "none";
    }, 3000);
    return;
  }
  //alert("Mensagem de " + nome + " capturada com sucesso!");
}
