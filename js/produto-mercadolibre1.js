document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        var lazyImages = document.querySelectorAll('.ui-pdp-image.ui-vpp-image-component.lazy-loadable, .ui-review-capability-carousel__img.lazy-loadable');
        lazyImages.forEach(function (img) {
            var dataSrc = img.getAttribute('data-src');
            if (dataSrc) {
                img.setAttribute('src', dataSrc);
            }
        });
    }, 3000); // 3 segundos de atraso
});

// Função para substituir os atributos após 3 segundos
function substituirAtributos() {
    setTimeout(function () {
        // Seleciona todos os elementos img com as classes especificadas
        var imagens = document.querySelectorAll('img.ui-pdp-image.ui-vpp-image-component.lazy-loadable');

        // Itera sobre cada imagem e realiza a substituição
        imagens.forEach(function (imagem) {
            // Remove o atributo 'src'
            imagem.removeAttribute('src');

            // Obtém o valor de 'data-src'
            var dataSrc = imagem.getAttribute('data-src');

            // Define o valor de 'src' com base em 'data-src'
            if (dataSrc) {
                imagem.setAttribute('src', dataSrc);
            }
        });
    }, 3000); // 3 segundos em milissegundos
}

// Chama a função após o carregamento da página
window.addEventListener('load', substituirAtributos);



// Função para substituir os atributos após 3 segundos
function substituirAtributos() {
    setTimeout(function () {
        // Seleciona todos os elementos img com as classes especificadas
        var imagens = document.querySelectorAll('img.ui-review-capability-carousel__img.lazy-loadable');

        // Itera sobre cada imagem e realiza a substituição
        imagens.forEach(function (imagem) {
            // Remove o atributo 'src'
            imagem.removeAttribute('src');

            // Obtém o valor de 'data-src'
            var dataSrc = imagem.getAttribute('data-src');

            // Define o valor de 'src' com base em 'data-src'
            if (dataSrc) {
                imagem.setAttribute('src', dataSrc);
            }
        });
    }, 3000); // 3 segundos em milissegundos
}

// Chama a função após o carregamento da página
window.addEventListener('load', substituirAtributos);


document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => {
        const elements = document.querySelectorAll('.ui-review-capability-comments__comment__rating');
        const content = `
            <div class="ui-review-capability-comments__comment__rating">
                <svg class="ui-review-capability-comments__comment__rating__star" aria-hidden="true" width="16.8" height="16" viewBox="0 0 10 10">
                    <use href="#poly_star_fill"></use>
                </svg>
                <svg class="ui-review-capability-comments__comment__rating__star" aria-hidden="true" width="16.8" height="16" viewBox="0 0 10 10">
                    <use href="#poly_star_fill"></use>
                </svg>
                <svg class="ui-review-capability-comments__comment__rating__star" aria-hidden="true" width="16.8" height="16" viewBox="0 0 10 10">
                    <use href="#poly_star_fill"></use>
                </svg>
                <svg class="ui-review-capability-comments__comment__rating__star" aria-hidden="true" width="16.8" height="16" viewBox="0 0 10 10">
                    <use href="#poly_star_fill"></use>
                </svg>
                <svg class="ui-review-capability-comments__comment__rating__star" aria-hidden="true" width="16.8" height="16" viewBox="0 0 10 10">
                    <use href="#poly_star_fill"></use>
                </svg>
                <p class="andes-visually-hidden">Avaliação 5 de 5</p>
            </div>`;

        elements.forEach(element => {
            element.innerHTML = content;
        });
    }, 1200); // 1.2 segundos
});




function mostrarMensagem() {
    var messages = document.getElementById("quantity__messages1");
    messages.style.display = "block";
}





document.addEventListener("DOMContentLoaded", function () {
    // Função para adicionar onclick a todos os elementos com data-src
    function adicionarOnClick() {
        // Seleciona todas as imagens com as classes especificadas
        var imagens = document.querySelectorAll(
            '.ui-pdp-image.ui-vpp-image-component.lazy-loadable, .ui-review-capability-carousel__img.lazy-loadable'
        );

        imagens.forEach(function (imagem) {
            // Obtém o valor de 'data-src'
            var dataSrc = imagem.getAttribute('data-src');

            // Se 'data-src' existe, adiciona o onclick ao elemento
            if (dataSrc) {
                imagem.setAttribute('onclick', `window.open('${dataSrc}', '_self')`);
            }
        });
    }

    // Executa a função com atraso inicial para garantir que todos os elementos estejam carregados
    setTimeout(adicionarOnClick, 3000); // 3 segundos de atraso

    // Observa mudanças no DOM para adicionar onclick a elementos carregados dinamicamente
    var observer = new MutationObserver(function () {
        adicionarOnClick(); // Reaplica a lógica ao detectar mudanças no DOM
    });

    // Configura o observer para monitorar alterações no corpo da página
    observer.observe(document.body, { childList: true, subtree: true });
});





document.addEventListener("DOMContentLoaded", function() {
    const conteinerVariacao = document.getElementById("conteinervariacao");
    const sujeitoOposto = document.getElementById("sujeitooposto");

    if (!sujeitoOposto && conteinerVariacao) {
        conteinerVariacao.style.display = "none";
    }
});





document.addEventListener("DOMContentLoaded", function () {
    const TIMER_KEY = "countdown_end_time";
    const prazoMinInput = document.getElementById("prazo_entrega_min");
    const prazoMaxInput = document.getElementById("prazo_entrega_max");
    const cepInput = document.getElementById("cep_salvo_produto");
    const ceform11 = document.getElementById("ceform11");

    if (prazoMinInput && prazoMaxInput && cepInput && ceform11) {
        const cepValue = cepInput.value;

        if (isValidCep(cepValue)) {
            fetchViaCep(cepValue, function () {
                const prazoMin = parseInt(prazoMinInput.value, 10);
                const prazoMax = parseInt(prazoMaxInput.value, 10);

                if (!isNaN(prazoMin) && !isNaN(prazoMax)) {
                    const dataAtual = new Date();
                    const dataMinEntrega = addDays(dataAtual, prazoMin);
                    const dataMaxEntrega = addDays(dataAtual, prazoMax);

                    const formattedMin = formatDate(dataMinEntrega);
                    const formattedMax = formatDate(dataMaxEntrega);

                    // Inyectar HTML en el DOM (texto traducido para el español de Argentina)
                    ceform11.outerHTML = `
                   <div id="truecep11" style="display: block;">
    <div class="ui-pdp-media ui-pdp-shipping ui-pdp-shipping--md mb-12 ui-pdp-color--BLACK">
        <div class="ui-pdp-media__body">
            <p class="ui-pdp-color--BLACK ui-pdp-family--REGULAR ui-pdp-media__title">
                <span class="ui-pdp-color--GREEN ui-pdp-family--SEMIBOLD">Llegará gratis</span> 
                entre <span id="tempoentrega11">${formattedMin}</span> y <span>${formattedMax}</span>
            </p>
            <p class="ui-pdp-color--GRAY ui-pdp-family--REGULAR ui-pdp-media__text">
                Comprando dentro de las próximas <br>
                <span class="ui-pdp-color--BLACK ui-pdp-family--REGULAR" id="timer3" style="color: #f73;"></span>
            </p>
            <div class="ui-pdp-action-modal">
                <div>
                    <div class="andes-tooltip__trigger">
                        <a onclick="ExibirCepMobile1()" class="ui-pdp-action-modal__link">Más formas de entrega</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ui-pdp-media ui-pdp-pick-up ui-pdp-pick-up--md mb-20 ui-pdp-color--BLACK">
        <div class="ui-pdp-media__body">
            <p class="ui-pdp-color--BLACK ui-pdp-family--REGULAR ui-pdp-media__title">
                <span class="ui-pdp-color--GREEN ui-pdp-family--SEMIBOLD">Retira gratis</span> 
                a partir de <span id="tempoentrega22">${formattedMin}</span> en una sucursal de Mercado Libre
            </p>
            <p class="ui-pdp-color--GRAY ui-pdp-family--REGULAR ui-pdp-media__text">
                Comprando dentro de las próximas <br>
                <span class="ui-pdp-color--BLACK ui-pdp-family--REGULAR" id="timer4" style="color: #f73;"></span>
            </p>
            <div class="ui-pdp-action-modal">
                <a href="">Ver en el mapa</a>
            </div>
        </div>
    </div>
</div>
`;

                    // Recuperar o iniciar el cronómetro
                    const twoHoursAndFiftySevenMinutes = 2 * 60 * 60 * 1000 + 57 * 60 * 1000; // 2h 57m en ms
                    startCountdown(twoHoursAndFiftySevenMinutes);
                } else {
                    console.error("Valores inválidos para el plazo de entrega.");
                }
            });
        } else {
            console.error("Código postal inválido o no encontrado.");
        }
    } else {
        console.error("Elementos necesarios no encontrados en el DOM.");
    }

    function isValidCep(cep) {
        // Actualizado para aceptar códigos postales de Argentina (4 dígitos, ej: "1601")
        const cepRegex = /^[0-9]{4}$/;
        return cepRegex.test(cep);
    }

    function addDays(date, days) {
        const result = new Date(date);
        result.setDate(result.getDate() + days);
        return result;
    }

    function formatDate(date) {
        const options = { day: "2-digit", month: "long" };
        return date.toLocaleDateString("pt-BR", options);
    }

    function fetchViaCep(cep, callback) {
        const url = `https://api.zippopotam.us/ar/${cep}`;

        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error("Código postal no encontrado en la API Zippopotam.");
                }
                return response.json();
            })
            .then(data => {
                // Si se desea, se pueden utilizar los datos retornados (data) para mostrar información adicional
                callback();
            })
            .catch(error => {
                console.error("Error al consultar la API Zippopotam:", error);
            });
    }

    function startCountdown(duration) {
        let endTime = localStorage.getItem(TIMER_KEY);
        if (!endTime) {
            endTime = Date.now() + duration;
            localStorage.setItem(TIMER_KEY, endTime);
        } else {
            endTime = parseInt(endTime, 10);
        }

        const interval = setInterval(() => {
            const now = Date.now();
            const remainingTime = endTime - now;

            if (remainingTime <= 0) {
                clearInterval(interval);
                localStorage.removeItem(TIMER_KEY);

                // Limpiar el contenido de los cronómetros al llegar a cero
                document.getElementById("timer3").textContent = "";
                document.getElementById("timer4").textContent = "";
                console.log("El cronómetro llegó a cero.");
                return;
            }

            updateTimers(remainingTime);
        }, 1000);
    }

    function updateTimers(ms) {
        const totalSeconds = Math.floor(ms / 1000);
        const hours = Math.floor(totalSeconds / 3600);
        const minutes = Math.floor((totalSeconds % 3600) / 60);
        const seconds = totalSeconds % 60;

        const formattedTime = `${hours} h ${minutes} min ${seconds} s`;

        // Actualizar los elementos del cronómetro
        const timer3 = document.getElementById("timer3");
        const timer4 = document.getElementById("timer4");

        if (timer3) timer3.textContent = formattedTime;
        if (timer4) timer4.textContent = formattedTime;
    }
});





function toggleMenu() {
    var headers = document.getElementsByClassName('nav-header');
    for (var i = 0; i < headers.length; i++) {
        headers[i].classList.toggle('nav-header-menu-mobile-open');
    }
}



function ExibirPopUpCep1() {
    document.getElementById('consultar-cep1').style.display = 'flex';
}

function ExibirPopUpCep2() {
    document.getElementById('consultar-cep1').style.display = 'flex';
}

function FecharPopUpCep() {
    document.getElementById('consultar-cep1').style.display = 'none';
}


// 


function ExibirCepMobile1() {
    document.getElementById('cepsmobiles').style.display = 'flex';
}

function ExibirCepMobile2() {
    document.getElementById('cepsmobiles').style.display = 'flex';
}

function FecharCepMobile1() {
    document.getElementById('cepsmobiles').style.display = 'none';
}


// Aguarde o carregamento completo da página 
window.onload = function () {
    // Chama a função 'perguntaenviada()' ao carregar a página
    perguntaenviada();
};

// Função que será chamada no onload
function perguntaenviada() {
    // Verifique se a URL contém '#pergunta_enviada'
    if (window.location.hash === '#pergunta_enviada') {
        // Exiba uma mensagem de sucesso
        const ccmensagemContainer = document.createElement('div');
        ccmensagemContainer.style.position = 'fixed';
        ccmensagemContainer.style.bottom = '20px';
        ccmensagemContainer.style.left = '15px';
        ccmensagemContainer.style.backgroundColor = '#00a650'; // Cor verde
        ccmensagemContainer.style.color = '#fff';
        ccmensagemContainer.style.padding = '15px 20px';
        ccmensagemContainer.style.borderRadius = '5px';
        ccmensagemContainer.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
        ccmensagemContainer.style.fontFamily = '"Proxima Nova", Arial, sans-serif'; // Aplicação da fonte
        ccmensagemContainer.style.fontSize = '13px';
        ccmensagemContainer.style.fontWeight = '400'; // Aplicação do peso da fonte
        ccmensagemContainer.style.zIndex = '1000';
        ccmensagemContainer.style.width = '93%';
        ccmensagemContainer.textContent = 'Tu pregunta fue enviada con éxito.';
  
        // Adicione o elemento ao corpo do documento
        document.body.appendChild(ccmensagemContainer);
  
        // Remova a mensagem após 5 segundos
        setTimeout(() => {
            ccmensagemContainer.remove();
        }, 5000);
  
        // Obtenha o elemento com o ID "qadb"
        const cctargetElement = document.getElementById('qadb');
  
        // Verifique se o elemento existe na página
        if (cctargetElement) {
            // Role a página até o elemento
            cctargetElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
        } else {
            console.warn('Elemento com id="qadb" não encontrado na página.');
        }
    }
}



  // Aguarde o carregamento completo da página
window.addEventListener('load', function () {
    // Verifique se a URL contém '#cep_true'
    if (window.location.hash === '#cep_true') {
      // Obtenha o elemento com o ID "buybox-form"
      const buyboxElement = document.getElementById('buybox-form');
  
      // Verifique se o elemento existe na página
      if (buyboxElement) {
        // Role a página até o elemento
        buyboxElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
      } else {
        console.warn('Elemento com id="buybox-form" não encontrado na página.');
      }
    }
  });
  

  document.addEventListener('DOMContentLoaded', function () {
    // Verifica se o elemento com id "mair2222" existe
    var elemento = document.getElementById('mair2222');
    
    if (!elemento) {
        // Se não for encontrado, aplica display: none no elemento com id "baixo1"
        var elementoBaixo1 = document.getElementById('baixo1');
        if (elementoBaixo1) {
            elementoBaixo1.style.display = 'none';
        }
    }
});


// Verifica se a URL contém a hash '#pergunta_enviada'
if (window.location.hash === '#pergunta_enviada') {
    console.log('Hash detectada: #pergunta_enviada. A página será recarregada em 2 minutos.');

    // Define o tempo de 2 minutos (em milissegundos)
    const doisMinutos = 5 * 60 * 1000;

    // Aguarda 2 minutos antes de recarregar a página
    setTimeout(() => {
        console.log('Recarregando a página...');
        window.location.reload();
    }, doisMinutos);
} else {
    console.log('Hash #pergunta_enviada não encontrada. Nenhuma ação será tomada.');
}


// Aguarda o DOM ser carregado
window.addEventListener("DOMContentLoaded", () => {
    // Seleciona os elementos SVG pelos seletores de classe
    const bookmarkIcons = document.querySelectorAll(
        "svg.ui-pdp-icon.ui-pdp-icon--bookmark, svg.ui-pdp-icon.ui-pdp-icon--bookmark-fill"
    );

    bookmarkIcons.forEach((bookmarkIcon) => {
        // Adiciona o evento de clique a cada SVG
        bookmarkIcon.addEventListener("click", () => {
            const useElement = bookmarkIcon.querySelector("use");
            const gElement = bookmarkIcon.querySelector("g");

            if (useElement) {
                // Altera a cor do <use> para azul (#3483fa)
                useElement.setAttribute("fill", "#3483fa");
                useElement.style.fill = "#3483fa"; // Garantia extra de estilo inline
            }

            if (gElement) {
                // Altera a cor do <g> para azul (#3483fa)
                gElement.setAttribute("fill", "#3483fa");
                gElement.style.fill = "#3483fa"; // Garantia extra de estilo inline
            }

            // Altera a cor do próprio SVG para azul (#3483fa)
            bookmarkIcon.setAttribute("fill", "#3483fa");

            // Adiciona a classe de efeito de pulsação
            bookmarkIcon.classList.add("pulsate");

            // Remove a classe de pulsação após a animação
            setTimeout(() => {
                bookmarkIcon.classList.remove("pulsate");
            }, 1000); // Tempo da animação em milissegundos
        });
    });
});

// CSS para o efeito de pulsação
document.head.insertAdjacentHTML("beforeend", `
<style>
    .pulsate {
        animation: pulsate 1s ease-out;
    }

    @keyframes pulsate {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
        100% {
            transform: scale(1);
        }
    }
</style>
`);


// Aguarda o DOM ser carregado
window.addEventListener("DOMContentLoaded", () => {
    // Seleciona o elemento SVG pelo seletor de classe
    const shareIcon = document.querySelector("svg.ui-pdp-icon.ui-pdp-icon--share-gallery");

    if (shareIcon) {
        // Adiciona o evento de clique ao SVG
        shareIcon.addEventListener("click", () => {
            // Adiciona a classe de efeito de pulsação
            shareIcon.classList.add("pulsate");

            // Remove a classe de pulsação após a animação
            setTimeout(() => {
                shareIcon.classList.remove("pulsate");
            }, 1000); // Tempo da animação em milissegundos

            // Chama a função de compartilhar
            shareCurrentUrl();
        });
    }

    // Função para compartilhar a URL atual
    function shareCurrentUrl() {
        const currentUrl = window.location.href; // Obtém a URL atual
        
        if (navigator.share) {
            // Se o navegador suporta o Web Share API
            navigator.share({
                title: document.title, // Título da página
                url: currentUrl // URL atual
            })
            .then(() => console.log("Compartilhamento realizado com sucesso!"))
            .catch((error) => console.error("Erro ao compartilhar:", error));
        } else {
            // Fallback para copiar a URL
            navigator.clipboard.writeText(currentUrl)
                .then(() => alert("URL copiada para a área de transferência!"))
                .catch((error) => console.error("Erro ao copiar URL:", error));
        }
    }
});

// CSS para o efeito de pulsação
document.head.insertAdjacentHTML("beforeend", `
<style>
    .pulsate {
        animation: pulsate 1s ease-out;
    }

    @keyframes pulsate {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
        100% {
            transform: scale(1);
        }
    }
</style>
`);


// Aguarda o DOM ser carregado
window.addEventListener("DOMContentLoaded", () => {
    // Seleciona os elementos SVG e links pelo seletor de classe
    const shareIcons = document.querySelectorAll(
        "svg.ui-pdp-icon.ui-pdp-icon--share-gallery, a.ui-pdp-share__link"
    );

    shareIcons.forEach((shareElement) => {
        // Adiciona o evento de clique a cada elemento
        shareElement.addEventListener("click", (event) => {
            event.preventDefault(); // Previne o comportamento padrão do link

            // Adiciona a classe de efeito de pulsação ao SVG dentro do link ou diretamente ao SVG
            const svgElement = shareElement.querySelector("svg") || shareElement;
            svgElement.classList.add("pulsate");

            // Remove a classe de pulsação após a animação
            setTimeout(() => {
                svgElement.classList.remove("pulsate");
            }, 1000); // Tempo da animação em milissegundos

            // Chama a função de compartilhar
            shareCurrentUrl();
        });
    });

    // Função para compartilhar a URL atual
    function shareCurrentUrl() {
        const currentUrl = window.location.href; // Obtém a URL atual
        
        if (navigator.share) {
            // Se o navegador suporta o Web Share API
            navigator.share({
                title: document.title, // Título da página
                url: currentUrl // URL atual
            })
            .then(() => console.log("Compartilhamento realizado com sucesso!"))
            .catch((error) => console.error("Erro ao compartilhar:", error));
        } else {
            // Fallback para copiar a URL
            navigator.clipboard.writeText(currentUrl)
                .then(() => alert("URL copiada para a área de transferência!"))
                .catch((error) => console.error("Erro ao copiar URL:", error));
        }
    }
});

// CSS para o efeito de pulsação
document.head.insertAdjacentHTML("beforeend", `
<style>
    .pulsate {
        animation: pulsate 1s ease-out;
    }

    @keyframes pulsate {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
        100% {
            transform: scale(1);
        }
    }
</style>
`);


// Aguarda o DOM ser carregado
window.addEventListener("DOMContentLoaded", () => {
    // Seleciona o botão pelo seletor de atributo data-testid
    const bookmarkButton = document.querySelector("button[data-testid='bookmark-anchor']");

    if (bookmarkButton) {
        // Adiciona o evento de clique ao botão
        bookmarkButton.addEventListener("click", () => {
            // Adiciona a classe de efeito de pulsação ao botão
            bookmarkButton.classList.add("pulsate");

            // Remove a classe de pulsação após a animação
            setTimeout(() => {
                bookmarkButton.classList.remove("pulsate");
            }, 1000); // Tempo da animação em milissegundos

            // Altera o fill dos elementos SVG, <g> e <use>
            const svgs = bookmarkButton.querySelectorAll("svg");

            svgs.forEach((svg) => {
                const gElement = svg.querySelector("g");
                const useElement = svg.querySelector("use");

                if (gElement) {
                    gElement.setAttribute("fill", "#3483fa");
                    gElement.style.fill = "#3483fa"; // Garantia de estilo inline
                }

                if (useElement) {
                    useElement.setAttribute("fill", "#3483fa");
                    useElement.style.fill = "#3483fa"; // Garantia de estilo inline
                }

                // Altera o próprio SVG para azul
                svg.setAttribute("fill", "#3483fa");
            });
        });
    }
});

// CSS para o efeito de pulsação
document.head.insertAdjacentHTML("beforeend", `
<style>
    .pulsate {
        animation: pulsate 1s ease-out;
    }

    @keyframes pulsate {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
        100% {
            transform: scale(1);
        }
    }
</style>
`);






// Função para executar o script ao clicar
function addToCart() {
    // Selecionando os inputs
    const quantityAddto = document.getElementById("quantityAddto");
    const idprodutoAddto = document.getElementById("idprodutoAddto");
    const titleprodutoAddto = document.getElementById("titleprodutoAddto");
    const varianteSelecionada = document.getElementById("varianteSelecionada");
    const nomeVarianteSelecionada = document.getElementById("nomeVarianteSelecionada");

    // Pegando os valores e os nomes dos inputs
    const inputsData = [
        { name: quantityAddto.name, value: quantityAddto.value },
        { name: idprodutoAddto.name, value: idprodutoAddto.value },
        { name: titleprodutoAddto.name, value: titleprodutoAddto.value },
        { name: varianteSelecionada.name, value: varianteSelecionada.value },
        { name: nomeVarianteSelecionada.name, value: nomeVarianteSelecionada.value },
    ];

    // Criando o formulário para envio
    const form = document.createElement("form");
    form.method = "POST";
    form.action = "../carrinho/mercadolibre/cart_drawer.php";

    // Adicionando os inputs ao formulário
    inputsData.forEach(input => {
        const hiddenInput = document.createElement("input");
        hiddenInput.type = "hidden";
        hiddenInput.name = input.name;
        hiddenInput.value = input.value;
        form.appendChild(hiddenInput);
    });

    // Adicionando o formulário ao corpo e enviando
    document.body.appendChild(form);
    form.submit();
}






// // // // // 



(function () {
    // Adiciona um evento que será executado após o carregamento completo da página
    document.addEventListener('DOMContentLoaded', function () {
        // Verifica se a URL contém '#cart_drawer_active'
        if (window.location.hash === '#cart_drawer_active') {
            // Cria o elemento para a mensagem
            const mensagemContainer = document.createElement('div');
            Object.assign(mensagemContainer.style, {
                position: 'fixed',
                bottom: '20px',
                width: '93%',
                backgroundColor: '#00a650', // Cor verde
                color: '#fff',
                padding: '15px 20px',
                borderRadius: '5px',
                boxShadow: '0 4px 6px rgba(0, 0, 0, 0.1)',
                fontFamily: '"Proxima Nova", Arial, sans-serif', // Aplicação da fonte
                fontSize: '16px',
                left: '16px',
                fontWeight: '400', // Aplicação do peso da fonte
                zIndex: '1000'
            });
            mensagemContainer.textContent = '¡Artículo agregado al carrito con éxito!';

            // Adiciona o elemento ao corpo do documento
            document.body.appendChild(mensagemContainer);

            // Remove a mensagem após 5 segundos
            setTimeout(() => {
                mensagemContainer.remove();
            }, 5000); // Alterado para 5 segundos em vez de 500000 ms
        }
    });
})();

window.addEventListener('load', function () {
    // Verifica se a URL contém a hash "#pergunta_enviada"
    if (window.location.hash === "#pergunta_enviada") {
      // Atrasar o recarregamento da página por 40 segundos (40000 milissegundos)
      setTimeout(function () {
        location.reload(); // Recarrega a página
      }, 40000); // 40 segundos
    }
  });
  