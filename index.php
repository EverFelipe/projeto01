<?php include('config.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do Siate">
    <meta name="keywords" content="tag">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/style.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/all.css">
    
    <title>Projeto Prático 01</title>
</head>
<body>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url){
            case 'sobre':
                echo '<target target="sobre" />';
                break;
            case 'servico':
                echo '<target target="servico" />';
                break;
        }
    ?>
    <header>
        <div class="center">
            <div class="logo left">
                EF3<span>Tech</span>
            </div><!--Logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>servico">Serviço</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                <i class="fas fa-bars"></i>
                </div><!--botao-menu-mobile-->
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>servico">Serviço</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div><!--center-->
    </header>
    <?php
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            if($url != 'sobre' && $url != 'servico'){
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
        }
    ?>
    
    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>
    <script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/slide.js"></script>
</body>
</html>