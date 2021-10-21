<?php
/*
Template Name: Serviços
*/
?>
<?php get_header(); ?>   

    <div class="inner-serveicos">
        <h1 class="branco-text font-50">SERVIÇOS</h1>
    </div>

    <div class="full-funerais">
        <div class="container" id="funerais">
            <div class="space movel-hide"></div>
            <div class="link-movel-funerais">
                <a href="#funerais " class="font-20 link-ancoras link-ancoras-funerais">Funerais</a>
                <a href="#urnas"  class="font-20 link-ancoras link-ancoras-funerais">Catálogo De Urnas</a>
                <a href="#tanatopraxia"  class="font-20 link-ancoras link-ancoras-funerais">Tanatopraxia</a>
            </div>
            <div class="space movel-hide" style="--line: 70px"></div>
            <div class="row">
                <div class="col s12 m12 l6">
                    <h2 class="titulos roxo-text">Funerais</h2>
                    <p class="gray-text font-16">
                        Entre em contato com nossa central 24 horas e tenha a 
                        tranquilidade que você e sua família merecem. 
                    </p>
                    <p class="gray-text font-16">
                        A Santa casa Copacabana tem diversas opções de funerais, 
                        atendendo as necessidades da família, com as melhores formas 
                        de pagamento e preço.
                    </p>

                </div>
                <div class="col s12 m12 l6">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/seu-dog.png" width="100%">
                </div>
            </div>
        </div>
    </div>
    
    <div class="agua" id="urnas">
        <div class="container">
            <div class="space" style="--line:200px"></div>
            <h2 class="titulos azul-text"> Catálogo De Urnas</h2>
            <p>Selecione uma categoria</p>            
            <div class="galeria-btn">
                <?php foreach(get_dir_catalogo() as $indice => $base): ?>
                    <span onclick="open_tab_catalogo( this, '<?= $base ?>')"  class="<?= $indice == 0 ? 'active' : '' ?>"><?= name_catalogo( $base ) ?></span>
                <?php endforeach; ?>
            </div>
           
            <?php foreach(get_dir_catalogo() as $indice => $base): ?>
                <?php $fotos = get_fotos_catalogo( $base ); ?>
                <div class="js-<?= $base ?> tab-catalogo <?= $indice == 0 ? 'active-tab' : '' ?>">
                    <div class="galeria-caixao">
                        <img id="foto_destaque-<?= $base ?>" src="<?= get_template_directory_uri() ?>/assets/catalogo/<?= $base ?>/<?= $fotos[0] ?>.jpg">
                        <div class="" >
                            <?php foreach( $fotos as $foto ): ?>
                                <img onclick="galeria(this, '<?= $base ?>')" data-ref="Ref. <?= $foto ?>" src="<?= get_template_directory_uri() ?>/assets/catalogo/<?= $base ?>/<?= $foto ?>.jpg">
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <p class="font-25" id="foto_ref-<?= $base ?>">Ref. <?= $foto ?> </p>
                </div>
            <?php endforeach; ?>

            <div class="space"></div>
        </div>
    </div>

    <div>
        <div class="container" id="tanatopraxia">
            <div class="space movel-hide" ></div>
            <div class="space large-hide" style="--line:30px"></div>
            <div class="row">
                <div class="col s12 m12 l6">
                    <h2 class="titulos azul-text"> Tanatopraxia </h2>
                    <div class="space" style="--line: 12px"></div>
                    <p class="gray-text">
                        É o procedimento que revolucionou a preparação e conservação do corpo, 
                        evitando a decomposição natural e dando total higiene, estética e segurança. 
                    </p>
                    <p class="gray-text">
                        Nossa legislação não permite que o corpo seja velado após às 24 horas do 
                        óbito, sem que seja feito o procedimento. 
                    </p>
                    <p class="gray-text">
                        Com o objetivo de dar mais qualidade aos nossos clientes e associados, 
                        nós, da Santa Casa Copacabana, temos nosso próprio 
                        Laboratório de Tanatopraxia.
                    </p>
                </div>
                <div class="col s12 m12 l6">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/avo.png" width="100%">
                </div>
            </div>
            <div class="space movel-hide"></div>
            <div class="space large-hide" style="--line:20px"></div>
        </div>
    </div>

<?php get_footer(); ?>