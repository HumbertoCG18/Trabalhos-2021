function Perguntar ()
{
    var texto;
    var nome = prompt ("Olá! qual é o seu nome? ");

    if (nome != null ) {
        texto = " Seja bem vindo "  +  nome  + " ao nosso site.";
        document.getElementById("alerta").innerHTML = texto;
    }
}