    
    <footer class="inner inner-footer roxo branco-text m-center">
        <div class="container">
            <div class="space"></div>
            <div class="row">
                <div class="col s12 l3">
                    <img src="<?= get_template_directory_uri() ?>/assets/logo/logo.png" class="logo-footer" alt="Santa Casa Copacabana">
                </div>
                <div class="col s12 l5">
                    <h3 class="font-25">Atendimento 24 horas </h3>
                    <div class="font-18">
                        <a href="tel:2132798800">(21) 3279-8800</a> /
                        <a href="tel:08000213460">0800 021 3460</a> <br>
                        <a href="tel:21964853339">(21) 96485-3339</a> /
                        <a href="tel:21967205554">(21) 96720-5554</a> <br>
                        <a href="tel:21964656800">(21) 96465-6800</a> <br>
                        <a href="mailto:cantato@santacasacopacabana.com.br">cantato@santacasacopacabana.com.br</a>
                    </div>

                    <h3 class="font-25">Cartões aceitos</h3>
                    <img src="<?= get_template_directory_uri() ?>/assets/img/bandeiras-cartoes.png">
                </div>
                <div class="col s12 l4">
                    <a href="https://goo.gl/maps/KfKLycGSSWm8AFpk8" target="_blank" rel="noopener noreferrer">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/mapa.png" width="100%" class="hide-on-med-and-down">
                    </a>
                    <h3 class="font-25">Endereço</h3>
                    <a href="https://goo.gl/maps/KfKLycGSSWm8AFpk8" target="_blank">
                        Rua Arguias Cordeiro, 249 a 257
                    </a>
                </div>
            </div>
        </div>

    </footer>

    <a href="https://web.whatsapp.com/send?phone=5521967205554&amp;text=" target="_blank" class="whats-fix pulse">
        <img src="<?= get_template_directory_uri() ?>/assets/icon/whatsapp.svg">
    </a>

    <div class="menu-pop js-menu hide-on-large-only">

        <?php
            wp_nav_menu(array(
                'theme_location' => 'menu_princical',
                'container_class' => '',
                'menu_class' => '',

            ));
        ?>

        <a href="tel:2132798800" class="m-link roxo"> TELEFONE </a>
        <a href="mailto:contato@santacasacopacabana.com.br" class="m-link azul"> EMAIL </a>

    </div>

    <span class="menu hide-on-large-only" onclick="toggle_active(this)"></span>
    <span class="logo-mobile hide-on-large-only">
        <img src="<?= get_template_directory_uri() ?>/assets/logo/logo.png" height="40">
    </span>

    <?php wp_footer(); ?>

    <div class="loading">
        <div>

        <img src="<?= get_template_directory_uri() ?>/assets/logo/logo.png">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>            
            
        </div>
    </div>

</body>

</html>