<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saúde Agenda - Sua Plataforma de Agendamento de Consultas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Se você estiver usando o sistema de asset do Laravel para carregar seu CSS -->
    <style>
        /* Estilos globais */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Evita a barra de rolagem horizontal */
        }

        /* Estilos da imagem de fundo */
        .background-image {
            background-image: url('{{ asset('build/assets/img/logo/fundo_imagem.png') }}');
            background-size: cover;
            background-position: center;
            min-height: 100vh; /* Altura mínima da página para garantir que a imagem de fundo seja visível */
            position: relative;
        }

        /* Estilos do cabeçalho */
        header {
            background-color: rgba(52, 144, 220, 0.5); /* Cor de fundo do cabeçalho com transparência */
            color: #ffffff;
            text-align: center;
            padding: 2rem 0;
        }

        h1 {
            font-size: 2.5rem;
        }

        p {
            font-size: 1.2rem;
            margin-top: 1rem;
        }

        /* Estilos para os botões de ação (Login e Registrar) */
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 1rem;
            background-color: #6babff; /* Cor de fundo dos botões */
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .cta-button:hover {
            background-color: #4897fe; /* Cor de fundo dos botões ao passar o mouse */
        }

        /* Estilos para o conteúdo dentro do container */
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Cor de fundo do conteúdo com transparência */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 2rem;
            position: relative;
            z-index: 1; /* Certifique-se de que o conteúdo fique acima do fundo da imagem */
            max-width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo ao Saúde Agenda</h1>
        <p>Sua plataforma de agendamento de consultas médicas.</p>
        <a href="{{ route('login') }}" class="cta-button">Login</a>
        <a href="{{ route('register') }}" class="cta-button">Registrar</a>
    </header>

    <div class="background-image"></div>

    <div class="container">
        <h2>Agende suas Consultas com Facilidade</h2>
        <p>O Saúde Agenda torna o agendamento de consultas médicas simples e conveniente. Não perca tempo em filas ou esperando no telefone. Faça o agendamento online com alguns cliques.</p>

        <h2>Gerencie seus Compromissos Médicos</h2>
        <p>Mantenha um registro de todas as suas consultas médicas, datas e horários. Receba lembretes e notificações para que você nunca esqueça uma consulta importante.</p>

        <h2>Conecte-se com Profissionais de Saúde</h2>
        <p>Encontre médicos e especialistas em sua área e agende consultas com os profissionais de saúde mais qualificados. Cuide da sua saúde de forma eficaz e conveniente.</p>

        <h2>Entre em Contato</h2>
        <p>Se você tiver alguma dúvida ou precisar de assistência, não hesite em entrar em contato conosco. Estamos aqui para ajudar e simplificar o agendamento de consultas médicas.</p>
    </div>

    <!-- Seu código JavaScript aqui, se necessário -->
</body>
</html>
