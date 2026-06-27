<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestão - Etec Zona Leste</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .gestao-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .setor-bloco {
            margin-bottom: 50px;
            border-bottom: 2px solid #eee;
            padding-bottom: 30px;
        }

        .setor-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        .setor-header h2 {
            margin: 0;
            color: #b00000;
            font-size: 1.8rem;
            text-transform: lowercase;
            letter-spacing: -1px;
        }

        .setor-header .linha {
            flex-grow: 1;
            height: 1px;
            background: #eee;
            margin-left: 20px;
        }

        .membro-row {
            display: grid;
            grid-template-columns: 250px 1fr;
            padding: 15px 0;
            transition: 0.3s;
            border-radius: 4px;
        }

        .membro-row:hover {
            background: #fffafa;
            padding-left: 10px;
        }

        .cargo {
            font-size: 0.75rem;
            font-weight: bold;
            color: #b00000;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
        }

        .nome {
            font-size: 1.1rem;
            color: #333;
            font-weight: 500;
        }

        .descricao-gestao {
            color: #777;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 30px;
            font-style: italic;
        }

        @media (max-width: 600px) {
            .membro-row {
                grid-template-columns: 1fr;
                gap: 5px;
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
        <h1>Gestão Escolar</h1>
        <p class="descricao-gestao">
            Organização administrativa e pedagógica focada na excelência acadêmica e no desenvolvimento humano.
        </p>

        <div class="gestao-container">
            
            <div class="setor-bloco">
                <div class="setor-header">
                    <h2>Direção</h2>
                    <div class="linha"></div>
                </div>
                <div class="membro-row">
                    <div class="cargo">Diretora de Unidade</div>
                    <div class="nome">Amanda Bueno</div>
                </div>
            </div>

            <div class="setor-bloco">
                <div class="setor-header">
                    <h2>Coordenação Pedagógica</h2>
                    <div class="linha"></div>
                </div>
                <div class="membro-row">
                    <div class="cargo">Coordenadora Pedagógica</div>
                    <div class="nome">Madalena Oliveira Lima</div>
                </div>
            </div>

            <div class="setor-bloco">
                <div class="setor-header">
                    <h2>Secretaria Acadêmica</h2>
                    <div class="linha"></div>
                </div>
                <div class="membro-row">
                    <div class="cargo">Chefe de Área</div>
                    <div class="nome">Evelyn Machado de Oliveira</div>
                </div>
                <div class="membro-row">
                    <div class="cargo">Agente Administrativo</div>
                    <div class="nome">Ênio Ramos Araújo</div>
                </div>
                <div class="membro-row">
                    <div class="cargo">Agente Administrativo</div>
                    <div class="nome">Diva Neide Bortoli</div>
                </div>
                <div class="membro-row">
                    <div class="cargo">Auxílio Acadêmico</div>
                    <div class="nome">Beatriz de Oliveira Silva</div>
                </div>
                <div class="membro-row">
                    <div class="cargo">Auxílio Acadêmico</div>
                    <div class="nome">Vilma Cardoso dos Santos</div>
                </div>
                <div class="membro-row">
                    <div class="cargo">Auxílio Acadêmico</div>
                    <div class="nome">Daniel Sena Serafim</div>
                </div>
            </div>

        </div>
    </section>

    <footer>
        <img src="imagens/etec_zona_leste.png" class="logo-footer" alt="Logo">
        <p>Etec Zona Leste</p>
        <p>Av. Águia de Haia, 2633 - São Paulo/SP</p>
    </footer>

</body>

</html>