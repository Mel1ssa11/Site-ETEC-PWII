<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato - Etec Zona Leste</title>
    <link rel="stylesheet" href="style.css">

    <style>
        @import url('https://googleapis.com');

        html,
        body {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
        }

        section {
            flex: 1;
            width: 95%;
            max-width: 1100px;
            margin: 50px auto;
            background: #ffffff;
            padding: 60px;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: row-reverse;
            gap: 60px;
            align-items: flex-start;
        }

        .contact-info {
            flex: 1;
            padding-top: 10px;
        }

        .contact-info h1 {
            font-weight: 600;
            font-size: 3rem;
            margin: 0 0 20px 0;
            color: #b00000;
            letter-spacing: -1px;
            line-height: 1;
        }

        .contact-info p {
            font-size: 1.1rem;
            color: #6c757d;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* Container do Mapa */
        .map-container {
            width: 100%;
            height: 280px;
            border-radius: 15px;
            overflow: hidden;
            border: 1px solid #eee;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        form {
            flex: 1.2;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .field-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #b00000;
        }

        input {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #eee;
            border-radius: 12px;
            background: #fff;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-sizing: border-box;
            color: #333;
        }

        input:focus {
            outline: none;
            border-color: #b00000;
            box-shadow: 0 5px 15px rgba(176, 0, 0, 0.08);
        }

        input[type="submit"] {
            background-color: #b00000;
            color: white;
            border: none;
            padding: 18px 40px;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
            width: 100%;
            box-shadow: 0 4px 12px rgba(176, 0, 0, 0.2);
        }

        input[type="submit"]:hover {
            background-color: #8a0000;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(176, 0, 0, 0.3);
        }

        footer {
            margin-top: auto;
        }

        @media (max-width: 992px) {
            section {
                flex-direction: column-reverse;
                padding: 40px;
                text-align: center;
                align-items: center;
            }

            .contact-info h1 {
                font-size: 2.5rem;
            }
        }
    </style>

</head>

<body>

    <nav class="nav-top">

        <img src="imagens/etec_zona_leste.png" class="logo" alt="Logo Etec">
        <h2>Etec Zona Leste</h2>

    </nav>

    <nav class="nav-menu">

        <ul>

            <li><a href="index.php">Home</a></li>
            <li><a href="cursos.php">Cursos</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="gestao.php">Gestão</a></li>

        </ul>

    </nav>

    <section>

        <div class="contact-info">

            <h1>Contato</h1>

            <p>

                Tem alguma dúvida ou sugestão? Nossa equipe está à disposição para ajudar você.

            </p>

            <div class="map-container">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.2588068820014!2d-46.47838692467092!3d-23.523192178826093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616495555555%3A0x8076d1577db86cf1!2sEtec%20da%20Zona%20Leste!5e0!3m2!1spt-BR!2sbr!4v1775161194259!5m2!1spt-BR!2sbr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>

        </div>

        <form action="processa.php" method="POST" onsubmit="return validarFormulario(event)">

            <div class="field-group">

                <label>Nome Completo</label>
                <input type="text" name="nome" placeholder="Digite seu nome" required>

            </div>

            <div class="field-group">

                <label>E-mail</label>
                <input type="email" name="email" placeholder="seu.email@exemplo.com" required>

            </div>

            <div class="field-group">

                <label>Telefone</label>
                <input type="text" name="telefone" placeholder="(11) 90000-0000" required>

            </div>

            <div class="field-group">

                <label>Endereço</label>
                <input type="text" name="endereco" placeholder="Cidade, Bairro, Rua" required>

            </div>

            <input type="submit" value="Enviar Mensagem">

        </form>


    </section>

    <footer>

        <img src="imagens/etec_zona_leste.png" class="logo-footer" alt="Logo">
        <p>Etec Zona Leste</p>
        <p>Av. Águia de Haia, 2633 - São Paulo/SP</p>

    </footer>

    <script src="script.js"></script>

</body>

</html>