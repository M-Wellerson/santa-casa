<?php
/*
Template Name: Perfil
*/
?>
<?php get_header(); ?>

    <div  class="inner-forms">
        <div class="container">
            <div class="space"></div>
            <h2 class="font-45 roxo-text">Área do Cliente</h2>
            <div class="row">
                <div class="col s12 m12 l6">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/perfil.png" width="100%">
                    <form action="">
                        <div class="input-field">
                            <label for="">Nome do titular</label>
                            <input type="email" required>
                        </div>
                        <div class="input-field">
                            <label for="">CPF</label>
                            <input type="email" required>
                        </div>
                        <div class="input-field">
                            <label for="">Data de Nascimento</label>
                            <input type="email" required>
                        </div>
                        <div class="input-field">
                            <label for="">Telefone</label>
                            <input type="email" required>
                        </div>
                        <div class="input-field">
                            <label for="">Celular</label>
                            <input type="email" required>
                        </div>
                        <div class="input-field">
                            <label for="">E-mail</label>
                            <input type="email" required>
                        </div>
                        <div class="input-field">
                            <label for="">Endereço</label>
                            <input type="email" required>
                        </div>
                        <div class="input-field">
                            <label for="">Número</label>
                            <input type="email" required>
                        </div>
                        <div class="input-field">
                            <label for="">CEP</label>
                            <input type="email" required>
                        </div>
                        <div class="input-field center-align">
                            <input type="submit" class="btn azul btn-round" value="Meus Boletos" required>
                        </div>
                    </form>
                </div>
                <div class="col s12 m12 l6">
                    <div class="center-align">
                        <h3 class="font-25 azul-text"> Meus Boletos </h3>
                        <div class="space"></div>
                        <a href="#!" class="link--home link--mini link-80">Boleto de 12/2020</a>
                        <div class="space"></div>
                        <a href="#!" class="link--home link--mini link-80">Boleto de 01/2020</a>
                        <div class="space"></div>
                        <a href="#!" class="link--home link--mini link-80">Boleto de 02/2020</a>
                        <div class="space"></div>
                        <a href="#!" class="link--home link--mini link-80">Boleto de 03/2020</a>
                        <div class="space"></div>
                        <a href="#!" class="link--home link--mini link-80 roxo">Boleto de 04/2020</a>
                        <div class="space"></div>
                    </div>
                </div>
            </div>
            <div class="space"></div>
        </div>        
    </div>
    
<?php get_footer(); ?>