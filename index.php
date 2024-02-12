<?php 

        if(isset($_POST['submit']))

        include_once('config.php');

        $nome = $_POST['nome-empresa'];
        $email = $_POST['email'];
        $numero = $_POST['numero'];

        $resul = mysqli_query($conectado, "INSERT INTO tabela(nomeEmpresa,email,num) VALUES('$nome','$email','$numero')");

?>
   

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RodrigoMonteiro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="corpo">
    
    <nav>
        <ul>
            <li><a href="#home">Início</a></li>
            <li><a href="#projetos">Projetos</a></li>
            <li><a href="#contatos">Contatos</a></li>
            <li><a href="#banco-de-dados">Meu banco de dados</a></li>
        </ul>
    </nav>

    <main>

        <section id="home">
             <p id="texto">
                 Olá, sou Rodrigo Tavares de Oliveira Monteiro. Sou formado em Educação Física e atualmente estou cursando Analise e Desenvolvimento de Sistemas. Estudo programação a pelo menos um ano e agora estou iniciando minha carreira como desenvolvedor.
            </p>
            <img id="foto" src="imagens/eu.jpg" alt="Minha Foto"> 
            
        </section>
        <section id="projetos">
            <div>
                <div id="link-agilidade"> 
                    <img src="imagens/agility2.png" alt="Site Agilidade">          
                    <a href="https://1rodrigotavares1.github.io/ProjetoPrincipal/" target="_blank"> Link projeto teste de agilidade.</a>
                </div>

                <div id="link-velocidade">
                    <img src="imagens/velocidade.png" alt="Site Velocidade">
                    <a href="https://1rodrigotavares1.github.io/CalculadordeVelocidade/" target="_blank">Link projeto calculador de velocidade.</a>
                </div>
            </div>
        
        </section>
        <section id="contatos">
            <div id="links-redesSociais">
                <div>
                    <img src="imagens/linkedin.png" alt="imagem-Linkedin">
                    <a href="https://www.linkedin.com/in/rtmonteiro/" target="_blank">linkedin</a>
                </div>
                <div>
                    <img src="imagens/github.png" alt="imagem-github">
                    <a href="https://github.com/1rodrigotavares1" target="_blank">Github</a>
                </div>
                <div>
                    <img src="imagens/whatsapp (1).png" alt="imagem-WhatsApp">
                    <a href="https://wa.me/5561999898906" target="_blank">WhatsApp</a>
                </div>
                <div>
                    <img src="imagens/gmail (1).png" alt="Imagem-G-mail">
                    <a href="mailto:1rodrigotavares1@gmail.com" target="_blank">1rodrigotavares1@gmail.com</a>
                </div>
            </div>

            <div id="imagem-principal-contatos">
                <img src="imagens/marketing-de-conteudo.png" alt=""> 
            </div>
                        
        </section>
        <section>
            <form action="index.html" method="post" id="banco-de-dados">
            
            
                    <h2>Posso salvar o seu contato no meu banco de dados pessoal e entrar em contato posteriormente? (PHP-MySQL)</h2>
                    <div>
                        <label for="nome-empresa">Nome/Empresa</label>
                        <input type="text" name="nome-empresa" id="nome-empresa">
                    </div>
                    <div>
                        <label for="e-mail"><p>E-mail</p></label>
                        <input type="text" name="email" id="e-mail-empresa">
                    </div>
                    <div>
                        <label for="numero">Número/Wpp</label>
                        <input type="tel" name="numero" id="numero-empresa">
                    </div>
                    <input type="submit" name="submit" value="Salvar" id="button-salvar">
            </form>
        </section>
         
                    
    </main>
    <script src="javascript/script.js"></script> 
    
    
</body>
</html>