function criarLista(id_usuario) {
    fecharMenuLista();
    
    const nome_lista = document.getElementById('nome_lista').value;
    
    xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/criar_lista.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onload = function() {
        if (this.status === 200) {
            document.getElementById('nome_lista').value = '';
        }
    };
    
    xhttp.send(`nome_lista=${nome_lista}&id_usuario=${id_usuario}`);
    //recarregando a página
    window.location.reload();
    
}
