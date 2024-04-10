


// Selecionando o form
const trackingForm = document.getElementById('tracking-form');


trackingForm.addEventListener('submit', function(event) {
    event.preventDefault();

    // Buscando o código digitado pelo usuário
    const trackingCode = document.getElementById('tracking-code').value;

    // Fazendo uma requisição da API
    fetch(`https://api.correios.com.br/rastreamento?codigo=${trackingCode}`)
        .then(response => {
            // Verificando se deu certo
            if (!response.ok) {
                // Caso dê algum erro 
                throw new Error('Erro ao buscar informações de rastreamento.');
            }
            // Convertendo a resposta para JSON
            return response.json();
        })
        .then(data => {
            // Exibindo os resultados na página
            document.getElementById('results').textContent = JSON.stringify(data, null, 2);
        })
        .catch(error => {
            // Exibindo uma mensagem de erro na página
            document.getElementById('error-message').textContent = error.message;
        });
});





// Função de edição

function aplicarEstilos() {
    const tamanhoH1 = document.getElementById('tamanho-h1').value + 'px';
    const tamanhoLabel = document.getElementById('tamanho-label').value + 'px';
    const corH1 = document.getElementById('cor-h1').value;
    const corLabel = document.getElementById('cor-label').value;

    document.querySelector('h1').style.fontSize = tamanhoH1;
    document.querySelector('label').style.fontSize = tamanhoLabel;
    document.querySelector('h1').style.color = corH1;
    document.querySelector('label').style.color = corLabel;
}

// Adiciona um ouvinte de eventos ao botão de aplicar estilos
document.getElementById('aplicar-estilos').addEventListener('click', aplicarEstilos);



