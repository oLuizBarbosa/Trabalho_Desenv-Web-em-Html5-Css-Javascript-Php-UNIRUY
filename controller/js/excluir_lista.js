function excluirLista(listaId) {
    console.log("ID da lista:", listaId);

    if (!confirm("Tem certeza de que deseja excluir esta lista?")) {
        return;
    }

    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/excluir_lista.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onload = function() {
        console.log("Resposta do servidor:", this.responseText);

        if (this.status === 200 && this.responseText === "success") {
            const lista = document.getElementById(` lista-${listaId}`);
            if (lista) {
                taskElement.remove();
            }
        } else {
            alert("Erro ao excluir a lista.");
        }
    };
    xhttp.send(`id_lista=${listaId}`);
    window.location.reload();
}
