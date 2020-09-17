<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
    <header role="header">
        <nav class="menu">
            <div class="inner">
                <div class="cours">
                    <h1 class="intitule">Track Aim Position</h1>
                </div>
                <div class="header_droite">
                    <p class="link">
                        <?php
                        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                        if ($uri == '/TAP/index.php/login.php') {
                            if ($error != '') {
                                if ($error == 'not connected') {
                                    echo 'Veuillez svp vous authentifier';
                                }
                                if ($error == 'bad login/pwd') {
                                    echo 'Erreur de login et/ou de mot de passe';
                                }
                            } elseif ($login != '') {
                                echo 'Connecté en tant que ' . $login;
                                echo ' <a href="/TAP/index.php/logout">Déconnexion</a>';
                            }
                        }?>
                    </p>
                </div>
                <div class="header_gauche">
                    <img src="/TAP/img/LOGO.png"/>
                </div>
            </div>
        </nav>
    </header>
    <div class="content">
        <?php echo $content;?>

    </div>
            <footer>
                <p>contactez nous en cas de probléme sur l'adrresse adminTAP@gmail.com</p>
                <a href="/TAP/information.php"><?php if ($uri == '/TAP/'){
                    echo 'Qui sommes nous ?';
                    }?></a>
            </footer>
</body>
</html>