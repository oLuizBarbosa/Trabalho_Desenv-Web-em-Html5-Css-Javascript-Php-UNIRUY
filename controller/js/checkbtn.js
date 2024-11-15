// function q muda o icone do botao quando apreta
function checkIcon(tarefaId, situacao){
    let novoEstado = situacao === 'pendente' ? 'completa' : 'pendente';

    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/editar_tarefa.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            
            const botao = document.getElementById('check-' + tarefaId);
            botao.innerText = (novoEstado === 'pendente') ? '⬜' : '✅';
            botao.setAttribute('onclick', `checkIcon(${tarefaId}, "${novoEstado}")`);
        }
    };
    xhttp.send(`id=${tarefaId}&situacao=${novoEstado}`);
}