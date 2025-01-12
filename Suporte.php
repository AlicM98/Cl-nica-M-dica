<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página de suporte da Clínica Médica, com perguntas frequentes e um formulário para envio de dúvidas.">
    <title>Suporte - Clínica Médica</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        header p {
            margin-top: 10px;
            font-size: 1rem;
            opacity: 0.9;
        }

        main {
            padding: 20px;
        }

        h2 {
            color: #007bff;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        /* Estilo da seção de FAQ */
        .faq {
            margin-bottom: 30px;
        }

        .faq article {
            margin-bottom: 20px;
            padding: 15px;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .faq article h3 {
            margin-bottom: 10px;
            font-size: 1.2rem;
            color: #0056b3;
        }

        /* Estilo do formulário de contato */
        .contact-form form {
            background: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .contact-form label {
            display: block;
            font-weight: bold;
            margin: 15px 0 5px;
        }

        .contact-form input, .contact-form textarea, .contact-form button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .contact-form input:focus, .contact-form textarea:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .contact-form button {
            background: #007bff;
            color: #fff;
            border: none;
            margin-top: 15px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background: #0056b3;
        }

        /* Estilo do rodapé */
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 15px 10px;
            font-size: 0.9rem;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
        }

        /* Responsividade */
        @media (max-width: 600px) {
            header h1 {
                font-size: 1.5rem;
            }

            header p {
                font-size: 0.9rem;
            }

            body {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div>
            <h1>Clínica Médica - Suporte</h1>
            <p>Estamos aqui para ajudar! Encontre respostas ou entre em contato conosco.</p>
        </div>
    </header>

    <!-- Conteúdo principal -->
    <main>
        <!-- Perguntas Frequentes -->
        <section class="faq">
            <h2>Perguntas Frequentes</h2>
            <article>
                <h3>Como agendar uma consulta?</h3>
                <p>Você pode agendar sua consulta pelo telefone da clínica ou pelo nosso sistema online.</p>
            </article>
            <article>
                <h3>Quais especialidades a clínica oferece?</h3>
                <p>Oferecemos cardiologia, dermatologia, pediatria, ortopedia, entre outras especialidades.</p>
            </article>
            <article>
                <h3>Qual o horário de funcionamento?</h3>
                <p>Funcionamos de segunda a sexta, das 8h às 18h, e aos sábados das 8h às 12h.</p>
            </article>
        </section>

        <!-- Formulário de Contato -->
        <section class="contact-form">
            <h2>Envie sua Dúvida</h2>
            <form id="contactForm" action="salvar-suporte.php" method="POST" aria-label="Formulário de contato">
                <input type="hidden" name="acao" value="suporte">

                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Seu e-mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" placeholder="Digite sua mensagem aqui..." required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>©2024Clínica A.M. Todos os direitos reservados.</p>
    </footer> 
    <tebbO> yuevvd <t clndbvq   dfo
</body>
</html>


