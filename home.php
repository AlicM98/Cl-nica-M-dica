<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - Clínica A.M.</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Cabeçalho */
        header {
            background-color: #007bff;
            color: white;
            padding: 20px 10px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        header p {
            font-size: 1.2rem;
            margin-top: 5px;
        }

        /* Navegação */
        nav {
            background-color: #0056b3;
            text-align: center;
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            font-size: 1rem;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Conteúdo principal */
        main {
            padding: 20px;
        }

        section {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 1.8rem;
            color: #007bff;
            margin-bottom: 15px;
        }

        ul {
            list-style-type: disc;
            margin: 10px 20px;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        /* Rodapé */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <h1>Clínica A.M.</h1>
        <p>Bem-vindo à sua saúde em boas mãos!</p>
    </header>

    <!-- Navegação -->
    <nav>
        <a href="#sobre">Sobre</a>
        <a href="#areas">Áreas de Atendimento</a>
        <a href="#contato">Contato</a>
    </nav>

    <!-- Conteúdo Principal -->
    <main>
        <!-- Seção "Sobre" -->
        <section id="sobre">
            <h2 class="section-title">Sobre a Clínica A.M.</h2>
            <p>
                A Clínica A.M. é dedicada a oferecer atendimento médico de qualidade, 
                com uma equipe experiente e especializada em diversas áreas da saúde. 
                Nosso objetivo é cuidar de você e da sua família, proporcionando bem-estar e qualidade de vida.
            </p>
        </section>

        <!-- Seção "Áreas de Atendimento" -->
        <section id="areas">
            <h2 class="section-title">Áreas de Atendimento</h2>
            <ul>
                <li>Cardiologia</li>
                <li>Dermatologia</li>
                <li>Ortopedia</li>
                <li>Pediatria</li>
                <li>Ginecologia</li>
                <li>Clínica Geral</li>
            </ul>
        </section>

        <!-- Seção "Contato" -->
        <section id="contato">
            <h2 class="section-title">Entre em Contato</h2>
            <p><strong>Telefone:</strong> (61) 1234-5678</p>
            <p><strong>E-mail:</strong> contato@clinicaam.com</p>
            <p><strong>Endereço:</strong> Rua da Saúde, nº 123 - Brasília, DF</p>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>© 2024 Clínica A.M. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
