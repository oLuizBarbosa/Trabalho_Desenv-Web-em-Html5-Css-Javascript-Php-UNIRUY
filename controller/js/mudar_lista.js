function carregarConteudo(listaId) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("conteudo-principal").innerHTML = this.responseText;
        }
    };
    
    xhttp.open("GET", "../view/pegar_lista_e_tarefas.php?id=" + listaId, true);
    xhttp.send();
}

