function excluirTarefa(tarefaId, listaId) {
    console.log("ID da tarefa:", tarefaId);

    if (!confirm("Tem certeza de que deseja excluir esta tarefa?")) {
        return;
    }

    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/excluir_tarefa.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onload = function() {
        console.log("Resposta do servidor:", this.responseText); 

        if (this.status === 200 && this.responseText === "success") {
            const taskElement = document.getElementById(` tarefa-${tarefaId}`);
            if (taskElement) {
                taskElement.remove();
            }
        } else {
            alert("Erro ao excluir a tarefa.");
        }
    };

    xhttp.send(`tarefaId=${tarefaId}`);
    carregarConteudo(listaId);
}
