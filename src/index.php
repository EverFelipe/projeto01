<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do Siate">
    <meta name="keywords" content="tag">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    
    <title>Projeto Prático 01</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left">Logomarca</div><!--Logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviço</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviço</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div><!--center-->
    </header>

    <section class="banner-principal">
        <div class="center">
            <form>
                <h2>E-mail</h2>
                <input type="email" name="email" id="email" required>
                <input type="submit" value="Cadastrar" name="acao">
            </form>
        </div><!--center-->
    </section><!--Banner Principal-->

    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Ever Felipe Benite</h2>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing 
                elit. Ullam cupiditate doloremque asperiores molestias 
                ratione ex quae eveniet veritatis soluta, 
                nihil veniam tempora accusamus praesentium et 
                earum voluptatum vel quod nobis.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing 
                elit. Eum, quam vero culpa laboriosam labore a 
                repellendus accusantium adipisci molestias excepturi 
                nemo dicta eveniet eos ipsum ut in. Nam, totam porro.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing 
                elit. Eum, quam vero culpa laboriosam labore a 
                repellendus accusantium adipisci molestias excepturi 
                nemo dicta eveniet eos ipsum ut in. Nam, totam porro.</p>
            </div><!--w50-->
            <div class="w50 left">
                <img src="img/EverFelipe.jpg" alt="">
            </div><!--w50 imagem-->
            <div class="clear"></div>
        </div> <!--center-->
    </section><!--Descrição autor-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-epecialidade">
                <h3><i class="fab fa-css3"></i></h3>
                <h3>css3</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero sint, laborum voluptatibus quis eveniet qui esse rem magnam repellendus laboriosam consequatur tempora! Quos quo labore tenetur non obcaecati possimus doloribus!</p>
            </div><!--box-especialidade-->
            <div class="w33 left box-epecialidade">
                <h3><i class="fab fa-html5"></i></h3>
                <h3>Html5</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero sint, laborum voluptatibus quis eveniet qui esse rem magnam repellendus laboriosam consequatur tempora! Quos quo labore tenetur non obcaecati possimus doloribus!</p>
            </div><!--box-especialidade-->
            <div class="w33 left box-epecialidade">
                <h3><i class="fab fa-js"></i></h3>
                <h3>JavaScript</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero sint, laborum voluptatibus quis eveniet qui esse rem magnam repellendus laboriosam consequatur tempora! Quos quo labore tenetur non obcaecati possimus doloribus!</p>
            </div><!--box-especialidade-->
        </div><!--center-->
    </section><!--Especialidades-->

    <section class="extra">
        <div class="center">
            <div class="w50 left">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimentos-single">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis impedit veritatis odit accusantium iste magni, veniam officiis ipsa dolorum vero, exercitationem voluptatum sed commodi est, consequatur voluptatibus voluptate ad! Dolore!</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimentos-single-->
                <div class="depoimentos-single">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis impedit veritatis odit accusantium iste magni, veniam officiis ipsa dolorum vero, exercitationem voluptatum sed commodi est, consequatur voluptatibus voluptate ad! Dolore!</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimentos-single-->
                <div class="depoimentos-single">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis impedit veritatis odit accusantium iste magni, veniam officiis ipsa dolorum vero, exercitationem voluptatum sed commodi est, consequatur voluptatibus voluptate ad! Dolore!</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimentos-single-->
            </div><!--w50-->
            <div class="w50 left">
                <h2 class="title">Serviços</h2>
                <div class="servico">
                    <UL>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Quibusdam quasi quisquam illo minus enim soluta facilis, iusto sapiente ipsum nulla unde placeat corporis
                        </li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Quibusdam quasi quisquam illo minus enim soluta facilis, iusto sapiente ipsum nulla unde placeat corporis
                        </li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Quibusdam quasi quisquam illo minus enim soluta facilis, iusto sapiente ipsum nulla unde placeat corporis
                        </li>
                    </UL>
                </div><!--sevico-->
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--extra-->
    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>
</body>
</html>