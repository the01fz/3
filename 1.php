<!DOCTYPE html>
<html lang="pt-BR">
<head>
<script
  src="https://cdn.utmify.com.br/scripts/utms/latest.js"
  data-utmify-prevent-xcod-sck
  data-utmify-prevent-subids
  async
  defer
></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Recompensa Kwai</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            min-height: 100vh;
            padding-top: 20px;
            box-sizing: border-box;
            color: #333;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            overflow: hidden;
            position: relative;
            margin-top: 60px; /* To accommodate the fixed header */
            flex-grow: 1;
        }

        header {
            background-color: #fff;
            padding: 10px 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            z-index: 1000;
            box-sizing: border-box;
        }

        .kwai-logo {
            display: flex;
            align-items: center;
        }

        .kwai-logo img {
            height: 24px; /* Original size, adjust as needed */
            margin-right: 8px; /* Added back space for text */
        }

        .kwai-logo span {
            font-size: 20px;
            font-weight: 700;
            color: #ff6600; /* Kwai's orange color */
        }

        .balance {
            display: flex;
            align-items: center;
        }

        .balance span {
            font-size: 18px;
            font-weight: 700;
            color: #333;
            margin-right: 10px;
        }

        .sacar-btn {
            background-color: #ff6600;
            color: #fff;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .sacar-btn:hover {
            background-color: #e65c00;
        }

        .progress-bar {
            height: 15px;
            background-color: #ddd;
            width: 100%;
        }

        .progress-fill {
            height: 100%;
            background-color: #ff6600;
            width: 0%;
            transition: width 0.3s ease;
        }

        .content {
            padding: 30px;
            text-align: center;
        }

        h2 {
            font-size: 22px;
            margin-bottom: 25px;
            color: #333;
        }

        .options-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 30px;
        }

        .option {
            display: flex;
            align-items: center;
            background-color: #f9f9f9;
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 15px 20px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .option:hover {
            border-color: #ff6600;
            background-color: #fff5ed;
        }

        .option.selected {
            border-color: #ff6600;
            background-color: #fff5ed;
            box-shadow: 0 0 0 2px #ff660040;
        }

        .option input[type="checkbox"],
        .option input[type="radio"] {
            margin-left: auto;
            accent-color: #ff6600;
            width: 20px;
            height: 20px;
        }

        .option-icon {
            width: 28px;
            height: 28px;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
        
        .option-icon img {
            max-width: 100%;
            max-height: 100%;
        }

        .option-text {
            font-size: 16px;
            color: #555;
            text-align: left;
            flex-grow: 1;
        }

        .continue-btn {
            background-color: #ff6600;
            color: #fff;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            box-sizing: border-box;
        }

        .continue-btn:hover {
            background-color: #e65c00;
        }

        .bonus-link {
            display: block;
            margin-top: 20px;
            color: #ff6600;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
        }

        /* Footer Styles */
        .page-footer {
            width: 100%;
            max-width: 500px;
            background-color: #f8f8f8;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #eee;
            margin-top: 20px;
            box-sizing: border-box;
            color: #888;
            font-size: 12px;
        }

        .page-footer p {
            margin: 5px 0;
            line-height: 1.5;
        }

        .page-footer a {
            color: #ff6600;
            text-decoration: none;
        }

        .page-footer a:hover {
            text-decoration: underline;
        }

        .page-footer .secure-badge {
            margin-top: 15px;
        }

        .page-footer .secure-badge img {
            height: 24px;
            margin: 0 5px;
        }

        /* Reward Modal */
        .reward-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2000;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .reward-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .reward-modal {
            background-color: #fff;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 380px;
            transform: translateY(20px);
            opacity: 0;
            transition: transform 0.3s ease, opacity 0.3s ease;
            position: relative;
        }

        .reward-modal-overlay.active .reward-modal {
            transform: translateY(0);
            opacity: 1;
        }

        .reward-modal h3 {
            font-size: 24px;
            color: #ff6600;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .reward-modal h3 svg {
            margin-right: 10px;
        }

        .reward-amount {
            font-size: 48px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            position: relative;
        }

        .reward-message {
            font-size: 16px;
            color: #777;
            margin-bottom: 30px;
        }

        .modal-continue-btn {
            background-color: #ff6600;
            color: #fff;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .modal-continue-btn:hover {
            background-color: #e65c00;
        }

        /* Money Animation */
        .money-animation {
            position: absolute;
            font-size: 2em;
            color: #28a745;
            opacity: 0;
            animation: riseAndFade 1.5s forwards;
            pointer-events: none;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        @keyframes riseAndFade {
            0% {
                transform: translate(-50%, 0);
                opacity: 1;
            }
            100% {
                transform: translate(-50%, -50px);
                opacity: 0;
            }
        }

        /* Confetti piece styling */
        .confetti {
            position: fixed;
            z-index: 9999; /* alto o bastante para aparecer sobre tudo */
            pointer-events: none; /* para não interferir com cliques */
            border-radius: 2px;
        }


        /* Loading Screen Styles */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.9); /* White background with transparency */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2500; /* Higher than reward modal */
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            flex-direction: column; /* For text and spinner */
        }

        .loading-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .loading-spinner {
            border: 4px solid #f3f3f3; /* Light grey */
            border-top: 4px solid #ff6600; /* Kwai orange */
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }

        .loading-text {
            margin-top: 15px;
            font-size: 18px;
            color: #555;
            font-weight: 500;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        /* Error Modal Styles */
        .error-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2200; /* Higher than other modals */
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .error-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .error-modal {
            background-color: #fff;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 380px;
            transform: translateY(20px);
            opacity: 0;
            transition: transform 0.3s ease, opacity 0.3s ease;
            position: relative;
        }

        .error-modal-overlay.active .error-modal {
            transform: translateY(0);
            opacity: 1;
        }

        .error-icon {
            color: #dc3545; /* Red color for error */
            margin-bottom: 20px;
        }

        .error-modal h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }

        .error-modal p {
            font-size: 16px;
            color: #666;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .modal-close-btn {
            background-color: #ff6600;
            color: #fff;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .modal-close-btn:hover {
            background-color: #e65c00;
        }

        /* Final Balance Modal Styles (Atualizado) */
        .final-balance-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(128, 0, 128, 0.85); /* Roxo mais forte */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2300; /* Highest z-index */
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.4s ease, visibility 0.4s ease; /* Transição mais suave */
        }

        .final-balance-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .final-balance-modal {
            background-color: #fff;
            border-radius: 15px; /* Bordas mais arredondadas */
            padding: 40px 30px; /* Mais padding */
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3); /* Sombra mais forte */
            width: 100%;
            max-width: 420px; /* Um pouco maior */
            transform: translateY(30px);
            opacity: 0;
            transition: transform 0.4s ease, opacity 0.4s ease; /* Transição mais suave */
            position: relative;
            overflow: hidden;
            animation: modalPopIn 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) forwards; /* Animação de entrada */
        }

        @keyframes modalPopIn {
            0% { transform: translateY(100px) scale(0.8); opacity: 0; }
            100% { transform: translateY(0) scale(1); opacity: 1; }
        }


        .final-balance-modal-overlay.active .final-balance-modal {
            transform: translateY(0);
            opacity: 1;
        }

        .final-balance-modal h3 {
            font-size: 32px; /* Maior */
            color: #800080; /* Roxo mais escuro */
            margin-bottom: 20px; /* Mais espaço */
            font-weight: 700; /* Negrito */
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1); /* Leve sombra no texto */
        }

        .final-balance-modal p {
            font-size: 19px; /* Maior */
            color: #444; /* Cor mais escura para melhor leitura */
            margin-bottom: 35px; /* Mais espaço */
            line-height: 1.6;
        }

        .final-reward-amount {
            font-size: 68px; /* Muito grande! */
            font-weight: 900; /* Super negrito */
            color: #FFD700; /* DOURADO! */
            margin-bottom: 40px; /* Mais espaço */
            position: relative;
            display: flex;
            justify-content: center;
            align-items: baseline;
            /* text-shadow: 0 0 10px rgba(255,215,0,0.6), 0 0 20px rgba(255,215,0,0.4); */ /* REMOVIDO */
        }

        .final-reward-amount span {
            font-size: 1em; /* Garante que o span herde o tamanho do pai */
        }

        .modal-final-sacar-btn {
            background-color: #800080; /* Roxo para o botão */
            color: #fff;
            border: none;
            padding: 20px 45px; /* Botão maior */
            border-radius: 12px; /* Mais arredondado */
            font-size: 22px; /* Texto maior no botão */
            font-weight: 700; /* Negrito */
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
            width: 100%;
            letter-spacing: 1px; /* Espaçamento entre letras */
            box-shadow: 0 4px 15px rgba(128, 0, 128, 0.4); /* Sombra para o botão */
        }

        .modal-final-sacar-btn:hover {
            background-color: #6a006a; /* Roxo mais escuro no hover */
            transform: translateY(-3px) scale(1.01); /* Leve "salto" no hover */
            box-shadow: 0 6px 20px rgba(128, 0, 128, 0.6); /* Sombra mais intensa no hover */
        }

        /* Opcional: Animação de pulso para o valor dourado */
        @keyframes pulseGold {
            0% { transform: scale(1); /* text-shadow: 0 0 10px rgba(255,215,0,0.6), 0 0 20px rgba(255,215,0,0.4); */ } /* REMOVIDO */
            50% { transform: scale(1.05); /* text-shadow: 0 0 15px rgba(255,215,0,0.8), 0 0 25px rgba(255,215,0,0.6), 0 0 35px rgba(255,215,0,0.2); */ } /* REMOVIDO */
            100% { transform: scale(1); /* text-shadow: 0 0 10px rgba(255,215,0,0.6), 0 0 20px rgba(255,215,0,0.4); */ } /* REMOVIDO */
        }

        .final-reward-amount.pulsing {
            animation: pulseGold 1.5s infinite; /* Animação de pulso dourado */
        }

        /* Loader Styles */
        .loader-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8); /* Fundo escuro */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2400; /* Mais alto que todos os outros */
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.4s ease, visibility 0.4s ease;
        }

        .loader-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .loader-modal {
            background-color: #333; /* Fundo do modal do loader */
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.4);
            width: 90%;
            max-width: 350px;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            transform: translateY(20px);
            opacity: 0;
            transition: transform 0.4s ease, opacity 0.4s ease;
        }

        .loader-overlay.active .loader-modal {
            transform: translateY(0);
            opacity: 1;
        }

        .loader-spinner {
            border: 6px solid #f3f3f3; /* Light grey */
            border-top: 6px solid #800080; /* Kwai purple */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
            margin-bottom: 25px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .loader-modal p {
            font-size: 18px;
            font-weight: 500;
            color: #f0f0f0;
            min-height: 25px; /* Para evitar que o layout "pule" ao trocar as mensagens */
        }
    </style>
</head>
<audio id="rewardSound" src="audio.mp3" preload="auto"></audio>
<body>
    <script type="text/javascript">
    var back_redirect_back_link = '/bc02';
    history.pushState({}, "", location.href);
    history.pushState({}, "", location.href);
    window.onpopstate = function () {
        setTimeout(function () {
            location.href = back_redirect_back_link;
        }, 0);
    };
</script>
    <header>
        <div class="kwai-logo">
            <img src="kwai.png" alt="Kwai Logo">
        </div>
        <div class="balance">
            <span>R$ <span id="currentBalance">100,00</span></span>
            <button class="sacar-btn">SACAR</button>
        </div>
    </header>

    <div class="container">
        <div class="progress-bar">
            <div class="progress-fill" id="progressFill"></div>
        </div>
        <div class="content" id="surveyContent">
            </div>
    </div>

    <footer class="page-footer">
        <p>Copyright © 2024 - Todos os direitos reservados</p>
        <p><a href="#">Termos de Uso</a> | <a href="#">Política de Privacidade</a></p>
        <div class="secure-badge">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7w2D-Q7B_0b9lM9z9_Q_Y5m5t8Y0b9lM9z9_Q&s" alt="Secure SSL">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0Y6L7x-X0R2k-F3s8F7g7j_0v0f0j_0f0j_0&s" alt="Google Safe Browse">
        </div>
    </footer>

    <div class="reward-modal-overlay" id="rewardModalOverlay">
        <div class="reward-modal">
            <h3>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8.01l-9 9z"/>
                </svg>
                Nova recompensa
            </h3>
            <div class="reward-amount" id="rewardAmountDisplay">R$0,00</div>
            <p class="reward-message">Responda mais pesquisas para ganhar até R$750</p>
            <button class="modal-continue-btn" id="modalContinueBtn">Continuar recebendo</button>
        </div>
    </div>

    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
        <div class="loading-text">Processando...</div>
    </div>

    <div class="error-modal-overlay" id="errorModalOverlay">
        <div class="error-modal">
            <div class="error-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="48px" height="48px">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/>
                </svg>
            </div>
            <h3>Pesquisa Incompleta!</h3>
            <p>Para sacar, você precisa finalizar a pesquisa. Por favor, responda a todas as perguntas.</p>
            <button class="modal-close-btn" id="closeErrorModalBtn">Entendi</button>
        </div>
    </div>

    <div class="final-balance-modal-overlay" id="finalBalanceModalOverlay">
        <div class="final-balance-modal">
            <div class="confetti-animation-container"></div> <h3>🎉 Uau! Que Incrível! 🎉</h3>
            <p>Sua dedicação valeu MUITO a pena! Seu saldo Kwai está MAIS QUE PRONTO para o saque!</p>
            <div class="final-reward-amount">R$ <span id="finalBalanceDisplay">0,00</span></div>
            <button class="modal-final-sacar-btn" id="finalSacarBtn">SACAR MEU PRÊMIO AGORA!</button>
        </div>
    </div>
    
    <div class="loader-overlay" id="loaderOverlay">
        <div class="loader-modal">
            <div class="loader-spinner"></div>
            <p id="loaderMessage">Validando dados...</p>
        </div>
    </div>

    <script>
        let currentBalance = 100.00;
        let currentQuestionIndex = 0;
        let selectedOptions = {};
        let stopConfettiFn = null;

        const questions = [
            {
                title: "Como você avalia sua experiência geral no nosso aplicativo?",
                type: "radio",
                options: [
                    { text: "Excelente", icon: "😀" },
                    { text: "Boa", icon: "😊" },
                    { text: "Regular", icon: "😐" },
                    { text: "Ruim", icon: "😞" }
                ]
            },
            {
                title: "Qual é o seu formato de vídeo favorito no nosso aplicativo?",
                type: "radio",
                options: [
                    { text: "Vídeo curto", icon: "📹" },
                    { text: "Vídeo médio", icon: "🎥" },
                    { text: "Vídeo longo", icon: "🎞️" },
                    { text: "Live", icon: "📺" }
                ]
            },
            {
                title: "Como você descobre novos vídeos do nosso aplicativo?",
                type: "radio",
                options: [
                    { text: "Feed \"Para você\"", icon: "🎯" },
                    { text: "Seguindo criadores", icon: "👤" },
                    { text: "Através de hashtags", icon: "🔎" },
                    { text: "Feed \"Seguindo\"", icon: "📜" },
                    { text: "Recomendações", icon: "💡" }
                ]
            },
            {
                title: "Quantas horas por dia você passa no nosso aplicativo?",
                type: "radio",
                options: [
                    { text: "Menos de 1 hora", icon: "⏳" },
                    { text: "1 a 2 horas", icon: "⌛" },
                    { text: "2 a 4 horas", icon: "⏱️" },
                    { text: "4 a 6 horas", icon: "🗓️" },
                    { text: "Mais de 6 horas", icon: "⏰" }
                ]
            },
            {
                title: "O que te faz seguir um criador no nosso aplicativo?",
                type: "radio",
                options: [
                    { text: "Conteúdo divertido", icon: "🎉" },
                    { text: "Conteúdo educativo", icon: "📚" },
                    { text: "Conteúdo pessoal", icon: "🤝" },
                    { text: "Participação em desafios", icon: "🔥" },
                    { text: "Frequência de postagens", icon: "📆" }
                ]
            },
            {
                title: "Qual desses temas de conteúdo você mais gosta de assistir no nosso aplicativo?",
                type: "radio",
                options: [
                    { text: "Comédia", icon: "😂" },
                    { text: "Dança", icon: "💃" },
                    { text: "Tutoriais e dicas", icon: "🛠️" },
                    { text: "Vlogs diários", icon: "🎥" },
                    { text: "Moda e beleza", icon: "💅" }
                ]
            },
            {
                title: "Qual horário do dia você mais usa o nosso aplicativo?",
                type: "radio",
                options: [
                    { text: "Manhã", icon: "☀️" },
                    { text: "Tarde", icon: "🌞" },
                    { text: "Noite", icon: "🌙" },
                    { text: "Madrugada", icon: "😴" }
                ]
            },
            {
                title: "Você costuma interagir com os vídeos? (curtir, comentar, compartilhar)",
                type: "radio",
                options: [
                    { text: "Sempre", icon: "💬" },
                    { text: "Às vezes", icon: "👍" },
                    { text: "Raramente", icon: "👀" },
                    { text: "Nunca", icon: "🚫" }
                ]
            },
            {
                title: "Com que frequência você publica vídeos no nosso aplicativo?",
                type: "radio",
                options: [
                    { text: "Diariamente", icon: "📆" },
                    { text: "Algumas vezes por semana", icon: "🗓️" },
                    { text: "Raramente", icon: "🌙" },
                    { text: "Nunca publiquei", icon: "🙈" }
                ]
            },
            {
                title: "Qual motivo mais te faria recomendar nosso aplicativo para alguém?",
                type: "radio",
                options: [
                    { text: "Conteúdo de qualidade", icon: "🌟" },
                    { text: "Fácil de usar", icon: "👌" },
                    { text: "Muitos criadores interessantes", icon: "🧑" },
                    { text: "Diversão garantida", icon: "🎊" }
                ]
            },
            {
                title: "Você já teve problemas técnicos usando o aplicativo?",
                type: "radio",
                options: [
                    { text: "Sim, frequentemente", icon: "⚠️" },
                    { text: "Sim, às vezes", icon: "🔧" },
                    { text: "Raramente", icon: "🛠️" },
                    { text: "Nunca", icon: "✅" }
                ]
            },
            {
                title: "O que você mais gostaria de ver no futuro do aplicativo?",
                type: "radio",
                options: [
                    { text: "Mais filtros e efeitos", icon: "✨" },
                    { text: "Ferramentas de edição melhores", icon: "✂️" },
                    { text: "Sistema de monetização", icon: "💰" },
                    { text: "Mais desafios e eventos", icon: "🏆" },
                    { text: "Área para criadores iniciantes", icon: "🚀" }
                ]
            },
            {
                title: "Você costuma assistir vídeos com som ou no mudo?",
                type: "radio",
                options: [
                    { text: "Sempre com som", icon: "🔊" },
                    { text: "Às vezes com som", icon: "🎧" },
                    { text: "Geralmente no mudo", icon: "🔇" }
                ]
            },
            {
                title: "Você sente que seu tempo no app é bem aproveitado?",
                type: "radio",
                options: [
                    { text: "Sim, aprendo e me divirto", icon: "🎓" },
                    { text: "Sim, é meu momento de lazer", icon: "🎮" },
                    { text: "Mais ou menos", icon: "🤔" },
                    { text: "Não, sinto que perco tempo", icon: "⌚" }
                ]
            }
        ];

        const currentBalanceSpan = document.getElementById('currentBalance');
        const progressFill = document.getElementById('progressFill');
        const surveyContent = document.getElementById('surveyContent');
        const rewardModalOverlay = document.getElementById('rewardModalOverlay');
        const rewardAmountDisplay = document.getElementById('rewardAmountDisplay');
        const modalContinueBtn = document.getElementById('modalContinueBtn');
        const loadingOverlay = document.getElementById('loadingOverlay');

        function updateBalanceDisplay() {
            currentBalanceSpan.textContent = currentBalance.toFixed(2).replace('.', ',');
        }

        function updateProgressBar() {
            const progress = (currentQuestionIndex / questions.length) * 100;
            progressFill.style.width = `${progress}%`;
        }

        function setupOptionListeners() {
            const question = questions[currentQuestionIndex];
            document.querySelectorAll('.option').forEach(optionDiv => {
                const input = optionDiv.querySelector('input');

                // Clear previous listeners to prevent duplicates
                optionDiv.removeEventListener('click', handleOptionClick);
                input.removeEventListener('change', handleInputChange);

                // Add new listeners
                optionDiv.addEventListener('click', handleOptionClick);
                input.addEventListener('change', handleInputChange);

                // Initialize selection state
                if (question.type === 'radio') {
                    optionDiv.classList.toggle('selected', input.checked);
                } else { // Checkbox
                    const currentSelections = selectedOptions[question.title] || [];
                    input.checked = currentSelections.includes(input.value);
                    optionDiv.classList.toggle('selected', input.checked);
                }
            });
        }

        function handleOptionClick(event) {
            const optionDiv = event.currentTarget;
            const input = optionDiv.querySelector('input');
            const question = questions[currentQuestionIndex];

            if (question.type === 'radio') {
                document.querySelectorAll('.option').forEach(div => div.classList.remove('selected'));
                optionDiv.classList.add('selected');
                input.checked = true;
                selectedOptions = { [question.title]: [input.value] };
            } else { // Checkbox
                input.checked = !input.checked;
                optionDiv.classList.toggle('selected', input.checked);
                const currentSelections = selectedOptions[question.title] || [];
                if (input.checked) {
                    currentSelections.push(input.value);
                } else {
                    const idx = currentSelections.indexOf(input.value);
                    if (idx > -1) {
                        currentSelections.splice(idx, 1);
                    }
                }
                selectedOptions[question.title] = currentSelections;
            }
            checkContinueButtonStatus();
        }

        function handleInputChange(event) {
            // This is primarily for direct input clicks, but handleOptionClick covers most cases.
            // Ensure consistency with the selectedOptions logic.
            const input = event.target;
            const optionDiv = input.closest('.option');
            const question = questions[currentQuestionIndex];

            if (question.type === 'radio') {
                document.querySelectorAll('.option').forEach(div => div.classList.remove('selected'));
                optionDiv.classList.add('selected');
                selectedOptions = { [question.title]: [input.value] };
            } else { // Checkbox
                optionDiv.classList.toggle('selected', input.checked);
                const currentSelections = selectedOptions[question.title] || [];
                if (input.checked) {
                    currentSelections.push(input.value);
                } else {
                    const idx = currentSelections.indexOf(input.value);
                    if (idx > -1) {
                        currentSelections.splice(idx, 1);
                    }
                }
                selectedOptions[question.title] = currentSelections;
            }
            checkContinueButtonStatus();
        }


        function showQuestion() {
            if (currentQuestionIndex >= questions.length) {
                surveyContent.innerHTML = `<h2>Pesquisa Concluída!</h2><p>Obrigado por suas respostas!</p>`;
                progressFill.style.width = `100%`;
                return;
            }

            const question = questions[currentQuestionIndex];
            selectedOptions = {}; // Reset for new question

            let optionsHtml = question.options.map((option, index) => `
                <div class="option" data-index="${index}">
                    <div class="option-icon">${option.icon.includes('/') ? `<img src="${option.icon}" alt="icon">` : option.icon}</div>
                    <span class="option-text">${option.text}</span>
                    <input type="${question.type}" name="surveyOption" value="${index}">
                </div>
            `).join('');

            surveyContent.innerHTML = `
                <h2>${question.title}</h2>
                <div class="options-container">
                    ${optionsHtml}
                </div>
                <button class="continue-btn" id="continueBtn" disabled>Continuar</button>
                <a href="#" class="bonus-link">Concorra a um bônus adicional</a>
            `;

            setupOptionListeners(); // Call this function to attach listeners to newly created elements

            document.getElementById('continueBtn').addEventListener('click', () => {
                loadingOverlay.classList.add('active');
                setTimeout(() => {
                    loadingOverlay.classList.remove('active');
                    showRewardModal();
                }, 500);
            });

            updateProgressBar();
        }

        function checkContinueButtonStatus() {
            const continueBtn = document.getElementById('continueBtn');
            const question = questions[currentQuestionIndex];
            // Ensure selectedOptions[question.title] is defined before checking length
            const hasSelection = selectedOptions[question.title] && selectedOptions[question.title].length > 0;
            continueBtn.disabled = !hasSelection;

            if (hasSelection) {
                if (typeof startConfetti === 'function' && !stopConfettiFn) {
                    stopConfettiFn = startConfetti();
                }
            } else {
                if (stopConfettiFn) {
                    stopConfettiFn();
                    stopConfettiFn = null;
                }
            }
        }

        function startOneTimeConfetti({
            colors = ['#ff0', '#0f0', '#0ff', '#f0f', '#f00', '#00f', '#fff', '#fa0', '#0af'],
            confettiCount = 15,
            fallDurationRange = [1500, 3000]
            } = {}) {
            function createConfettiPiece() {
                const confetti = document.createElement('div');
                confetti.classList.add('confetti');

                const color = colors[Math.floor(Math.random() * colors.length)];
                confetti.style.backgroundColor = color;

                confetti.style.left = `${Math.random() * window.innerWidth}px`;
                confetti.style.top = `-${10 + Math.random() * 20}px`;

                const scale = 0.5 + Math.random() * 1.2;
                confetti.style.width = `${8 * scale}px`;
                confetti.style.height = `${14 * scale}px`;

                const initialRotation = Math.random() * 360;
                document.body.appendChild(confetti);

                const fallDuration = fallDurationRange[0] + Math.random() * (fallDurationRange[1] - fallDurationRange[0]);
                const horizontalMove = (Math.random() - 0.5) * 300;

                confetti.animate([
                { transform: `translate(0, 0) rotate(${initialRotation}deg)` },
                { transform: `translate(${horizontalMove}px, ${window.innerHeight + 50}px) rotate(${initialRotation + 720}deg)` }
                ], {
                duration: fallDuration,
                easing: 'cubic-bezier(0.4, 0, 0.2, 1)',
                iterations: 1,
                fill: 'forwards'
                });

                setTimeout(() => confetti.remove(), fallDuration);
            }

            for (let i = 0; i < confettiCount; i++) {
                createConfettiPiece();
            }
            }


        function showRewardModal() {
            const rewardAmount = (Math.random() * (60 - 35) + 35);
            rewardAmountDisplay.textContent = `R$${rewardAmount.toFixed(2).replace('.', ',')}`;
            rewardModalOverlay.classList.add('active');

            const audio = document.getElementById('rewardSound');

            if (audio) {
                audio.currentTime = 0; // Reinicia do começo
                audio.play().catch(err => {
                    console.warn("Não foi possível reproduzir o áudio:", err);
                });
            }
            
            startOneTimeConfetti({
                confettiCount: 15
            });

            const moneyAnimation = document.createElement('div');
            moneyAnimation.classList.add('money-animation');
            moneyAnimation.textContent = `+R$${rewardAmount.toFixed(2).replace('.', ',')}`;
            
            const rewardAmountRect = rewardAmountDisplay.getBoundingClientRect();
            const modalRect = rewardModalOverlay.querySelector('.reward-modal').getBoundingClientRect();
            
            moneyAnimation.style.left = '50%';
            moneyAnimation.style.top = `${(rewardAmountRect.bottom - modalRect.top) + 10}px`;
            
            rewardModalOverlay.querySelector('.reward-modal').appendChild(moneyAnimation);

            moneyAnimation.addEventListener('animationend', () => {
                moneyAnimation.remove();
            });

            modalContinueBtn.onclick = () => {
                currentBalance += rewardAmount;
                updateBalanceDisplay();
                rewardModalOverlay.classList.remove('active');
                
                if (stopConfettiFn) {
                    stopConfettiFn();
                    stopConfettiFn = null;
                }

                currentQuestionIndex++;
                showQuestion();
            };
        }

        // Initial load
        updateBalanceDisplay();
        showQuestion();
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sacarButton = document.querySelector('.sacar-btn');
            const confirmationModalOverlay = document.getElementById('confirmationModalOverlay');
            const confirmSacarBtn = document.getElementById('confirmSacarBtn');
            const cancelSacarBtn = document.getElementById('cancelSacarBtn');
            const errorModalOverlay = document.getElementById('errorModalOverlay');
            const closeErrorModalBtn = document.getElementById('closeErrorModalBtn');
            const finalBalanceModalOverlay = document.getElementById('finalBalanceModalOverlay');
            const finalBalanceDisplay = document.getElementById('finalBalanceDisplay');
            const finalSacarBtn = document.getElementById('finalSacarBtn');

            // Novos elementos do loader
            const loaderOverlay = document.getElementById('loaderOverlay');
            const loaderMessage = document.getElementById('loaderMessage');

            // Mensagens do loader
            const loadingMessages = [
                "Validando dados da pesquisa...",
                "Processando suas respostas...",
                "Criando conexão segura de saque...",
                "Interagindo com o aplicativo Kwai...",
                "Finalizando..."
            ];

            let messageIndex = 0;
            let loadingInterval;

            // Função para iniciar o loader com mensagens
            function startLoadingAnimation() {
                loaderOverlay.classList.add('active');
                messageIndex = 0;
                loaderMessage.textContent = loadingMessages[messageIndex];

                loadingInterval = setInterval(() => {
                    messageIndex++;
                    if (messageIndex < loadingMessages.length) {
                        loaderMessage.textContent = loadingMessages[messageIndex];
                    } else {
                        // Todas as mensagens foram exibidas, para o intervalo
                        clearInterval(loadingInterval);
                        // Agora podemos exibir o modal final
                        loaderOverlay.classList.remove('active');
                        finalBalanceModalOverlay.classList.add('active');
                        animateFinalBalance(100.00, 827.30, 1500); // Começa de 100.00 e vai até o currentBalance

                        const audio = document.getElementById('rewardSound');
                        if (audio) {
                            audio.currentTime = 0;
                            audio.play().catch(err => {
                                console.warn("Não foi possível reproduzir o áudio no modal final (após loader):", err);
                            });
                        }
                        startOneTimeConfetti({ confettiCount: 30 });
                    }
                }, 1000); // Troca de mensagem a cada 1 segundo
            }


            // Lógica do botão "SACAR" no header
            if (sacarButton) {
                sacarButton.addEventListener('click', () => {
                    if (currentQuestionIndex < questions.length) {
                        errorModalOverlay.classList.add('active'); // Mostra o pop-up de erro
                    } else {
                        // Se a pesquisa está finalizada, o botão "SACAR" do header também ativa o loader
                        startLoadingAnimation();
                    }
                });
            }

            // Lógica do pop-up de confirmação de saque (quando o botão sacar do header é clicado e pesquisa concluída)
            if (confirmSacarBtn) {
                confirmSacarBtn.addEventListener('click', () => {
                    confirmationModalOverlay.classList.remove('active');
                    window.location.href = 'pagamento.html'; // Redireciona após confirmação
                });
            }

            if (cancelSacarBtn) {
                cancelSacarBtn.addEventListener('click', () => {
                    confirmationModalOverlay.classList.remove('active');
                });
            }

            // Lógica para fechar o pop-up de erro
            if (closeErrorModalBtn) {
                closeErrorModalBtn.addEventListener('click', () => {
                    errorModalOverlay.classList.remove('active');
                });
            }

            // Lógica para o botão "Sacar Agora" no modal de saldo final (o pop-up roxo)
            if (finalSacarBtn) {
                finalSacarBtn.addEventListener('click', () => {
                    finalBalanceModalOverlay.classList.remove('active');
                    window.location.href = '/sacarpix'; // SOMENTE AQUI REDIRECIONA PARA PAGAMENTO.HTML
                });
            }

            // Função para animar o saldo final (mantenha a mesma)
            function animateFinalBalance(startValue, endValue, duration) {
                let startTime = null;
                const range = endValue - startValue;
                const element = finalBalanceDisplay;
                const currentBalanceElement = document.getElementById('currentBalance'); // Seu elemento de saldo do header

                function step(currentTime) {
                    if (!startTime) startTime = currentTime;
                    const progress = Math.min((currentTime - startTime) / duration, 1);
                    const animatedValue = startValue + (range * progress);
                    element.textContent = animatedValue.toFixed(2).replace('.', ',');

                    currentBalanceElement.textContent = animatedValue.toFixed(2).replace('.', ',');

                    if (progress < 1) {
                        requestAnimationFrame(step);
                    } else {
                        element.classList.remove('pulsing');
                    }
                }
                element.classList.add('pulsing');
                requestAnimationFrame(step);
            }

            // Sobrescreve a função original showQuestion
            const originalShowQuestion = window.showQuestion;

            window.showQuestion = function() {
                if (currentQuestionIndex >= questions.length) {
                    // Ao invés de redirecionar ou mostrar o modal final direto, inicie o loader
                    startLoadingAnimation();
                    return; // Impede a execução da função original
                }
                originalShowQuestion.apply(this, arguments);
            };
        });
    </script>
</body>
</html>