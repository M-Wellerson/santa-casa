<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santa Casa Copacabana</title>
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/assets/logo/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/library/materialize.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/woocommerce.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/step.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/library/materialize.min.js" defer></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/index.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js" defer></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/simulador.js" defer></script>
</head>

<body>

    <?php wp_body_open(); ?>

    <div class="inner-header roxo branco-text hide-on-med-and-down">
        <div class="container">
            <div class="row">
                <div class="col s4">
                    <a href="<?= get_site_url() ?>/">
                        <img src="<?= get_template_directory_uri() ?>/assets/logo/logo.png" class="logo" alt="Santa Casa Copacabana">
                    </a>
                </div>
                <div class="col s4">
                    <div class="grid g-menu">
                        <img src="<?= get_template_directory_uri() ?>/assets/icon/24-hours.svg" alt="24-hours">
                        <div>
                            Telefone <br>
                            <a class="link--menu" href="tel:+552132798800">(21) 3279-8800</a>
                            <a class="link--menu" href="tel:08000213460">0800 021 3460</a>
                        </div>
                    </div>
                </div>
                <div class="col s4">
                    <div class="grid g-menu">
                        <img src="<?= get_template_directory_uri() ?>/assets/icon/aroba.svg" alt="aroba">
                        <div>
                            E-mail <br>
                            <a class="link--menu" href="mailto:contato@santacasacopacabana.com.br">
                                contato@santacasacopacabana.com.br
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="inner-menu azul branco-text hide-on-med-and-down">
        <div class="container">
            <div class="align-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu_princical',
                    'container_class' => 'link-menu',
                    'menu_class' => 'custon-menu',

                ));
                ?>
            </div>
        </div>
    </div>