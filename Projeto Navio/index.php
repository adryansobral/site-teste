<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Royal Caribbean</title>
</head>

<body>
    <header>
        <nav class="nav-bar">
            <a href="index.php" class="logo">
                <img src="img/Logo Royal Caribbean.png" alt="Royal Caribbean Logo" width="45px">
            </a>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="index.php" class="active">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Destinos</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Cruzeiros</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
                </ul>
            </div>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="img/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="index.php" class="active">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Destinos</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Cruzeiros</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
            </ul>
        </div>
    </header>






    <footer>
        <div class="grid">
            <div class="footer-container">
                <div class="footer-pay-benefic">
                    <div class="footer-pay">
                        <div>
                            <div class="titulo-pay">
                                <h2>Formas de Pagamento</h2>
                            </div>
                            <div class="pagamentos">
                                <ul>
                                    <li><img src="img/Mastercard Img.png" width="60px" alt="Logo Mastercard"></li>
                                    <li><img src="img/Visa Img.png" width="60px" alt=""></li>
                                    <li><img src="img/American Express Img.png" width="60px" alt=""></li>
                                    <li><img src="img/Diners Club Img.png" width="60px" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-beneficios">
                        <div>
                            <h2>Por que reservar com a Royal Caribbean</h2>
                            <ul>
                                <li>Compra rápida e segura</li>
                                <li>Reserve e pague depois</li>
                                <li>Pague em até 12x sem juros</li>
                                <li>Cancelamento facilitado</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-info">
                    <hr>
                    <p>© 2024, Adryan Vinicius Campos Sobral Brito 2° Sem; Gabriel da Silva Aguiar
                        1° Sem; Bruno Nascimento Sanseverino 3° Sem; Diogo Pereira Lima 3° Sem; Micael Silva Schuh 1° Sem; Maria Aparecida Oliveira Santos. 2° Sem. - Projeto: Desenvolvimento de aplicação back-end para web. <b>Advertência: Este Site foi construído para fins didáticos. Dados técnicos, imagens, textos e referências de ordens diversas foram utilizados apenas com o objetivo de possibilitar aos alunos dos cursos de ADS e SI a construção do projeto proposto. As informações aqui exibidas não refletem a realidade.</b></p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="script.js"></script>
</body>

</html>