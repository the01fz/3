const params = new URLSearchParams(window.location.search);

document.getElementById('nome').textContent = params.get('name') || 'Não informado';
document.getElementById('cpf').textContent = params.get('cpf') || 'Não informado';
document.getElementById('nasc').textContent = params.get('nasc') || 'Não informado';
document.getElementById('mae').textContent = params.get('mae') || 'Não informado';

document.getElementById('valor').textContent = 'R$ 7.854,63';
