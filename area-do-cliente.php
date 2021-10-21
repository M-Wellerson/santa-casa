<?php
/*
Template Name: Área cliente
*/
?>
<?php get_header(); ?>

    <div  class="inner-forms">
        <div class="container">
            <div class="space"></div>
            <img src="<?= get_template_directory_uri() ?>/assets/logo/logo.png" class="logo-login">
            <form action="./perfil">
                <div class="row">
                    <div class="input-field col s12 m12 l4 offset-l4">
                        <label for="">Email *</label>
                        <input type="email" required>
                    </div>
                    <div class="input-field col s12 m12 l4 offset-l4">
                        <label for="">Senha *</label>
                        <input type="password" required>
                    </div>
                    <div class="input-field col s12 m12 l4 offset-l4 center-align">
                        <input type="submit" class="btn azul btn-round" value="Entrar" required>
                    </div>
                </div>
            </form>
            <div class="space"></div>
        </div>        
    </div>

<?php get_footer(); ?>