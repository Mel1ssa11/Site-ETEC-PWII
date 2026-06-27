<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso - Etec Zona Leste</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://googleapis.com');

        html, body { height: 100%; margin: 0; font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        body { display: flex; flex-direction: column; }
        
        section { 
            flex: 1; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            padding: 40px 20px; 
        }
        
        .success-card {
            background: white;
            max-width: 550px;
            width: 100%;
            padding: 50px;
            border-radius: 25px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.07);
            text-align: center;
            border: 1px solid #f0f0f0;
            animation: slideUp 0.7s ease-out;
        }

        @keyframes slideUp { 
            from { opacity: 0; transform: translateY(30px); } 
            to { opacity: 1; transform: translateY(0); } 
        }

        .status-icon {
            width: 90px; 
            height: 90px; 
            line-height: 90px;
            background: #f0fff4; 
            color: #38a169;
            border-radius: 50%; 
            font-size: 45px;
            margin: 0 auto 25px; 
            display: inline-block;
            border: 2px solid #c6f6d5;
        }

        .msg-title { 
            font-size: 2.2rem; 
            color: #b00000; 
            margin-bottom: 15px; 
            font-weight: 600; 
        }
        
        .msg-text { 
            font-size: 1.1rem; 
            color: #555; 
            margin-bottom: 35px; 
            line-height: 1.6;
        }

        .data-display {
            background: #ffffff; 
            padding: 25px; 
            border-radius: 15px;
            text-align: left; 
            border: 1px solid #edf2f7; 
            margin-bottom: 35px;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.02);
        }

        .data-item { 
            margin-bottom: 12px; 
            display: flex; 
            font-size: 1rem;
            border-bottom: 1px solid #f7fafc;
            padding-bottom: 8px;
        }
        
        .data-item:last-child { border: none; }
        
        .data-item strong { 
            color: #b00000; 
            width: 110px; 
            flex-shrink: 0; 
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .data-item span { color: #2d3748; font-weight: 500; }

        .redirect-box { 
            border-top: 1px solid #eee; 
            padding-top: 25px; 
        }
        
        .timer-bar { 
            width: 100%; 
            max-width: 250px; 
            height: 6px; 
            background: #eee; 
            margin: 15px auto; 
            border-radius: 10px; 
            overflow: hidden; 
        }
        
        .timer-fill { 
            height: 100%; 
            background: #b00000; 
            width: 0%; 
            animation: load 8s linear forwards; 
        }
        
        @keyframes load { to { width: 100%; } }
        
        .btn-manual { 
            color: #b00000; 
            text-decoration: none; 
            font-weight: 600; 
            font-size: 0.9rem;
            transition: 0.3s;
        }
        
        .btn-manual:hover { color: #800000; text-decoration: underline; }
    </style>
    <meta http-equiv="refresh" content="8;url=contato.php">
</head>
<body>

    <nav class="nav-top">
        <img src="imagens/etec_zona_leste.png" alt="Logo Etec" class="logo">
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
        <div class="success-card">
            <div class="status-icon">✓</div>
            
            <?php
                $nome = htmlspecialchars($_POST['nome'] ?? 'Visitante');
                $endereco = htmlspecialchars($_POST['endereco'] ?? 'Não informado');
                $telefone = htmlspecialchars($_POST['telefone'] ?? 'Não informado');
                $email = htmlspecialchars($_POST['email'] ?? 'Não informado');
                
                echo "<h1 class='msg-title'>Mensagem Enviada!</h1>";
                echo "<p class='msg-text'>Obrigado, <strong>$nome</strong>. Recebemos seus dados com sucesso.</p>";

                echo "<div class='data-display'>";
                echo "<div class='data-item'><strong>Endereço</strong> <span>$endereco</span></div>";
                echo "<div class='data-item'><strong>Telefone</strong> <span>$telefone</span></div>";
                echo "<div class='data-item'><strong>E-mail</strong> <span>$email</span></div>";
                echo "</div>";
            ?>

            <div class="redirect-box">
                <p style="font-size: 0.85rem; color: #888; margin: 0;">Retornando em alguns segundos...</p>
                <div class="timer-bar"><div class="timer-fill"></div></div>
                <a href="contato.php" class="btn-manual">Voltar para o site agora</a>
            </div>
        </div>
    </section>

    <footer>
        <img src="imagens/etec_zona_leste.png" class="logo-footer" alt="Logo">
        <p>Etec Zona Leste - São Paulo/SP</p>
    </footer>

</body>
</html>
