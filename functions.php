<?php

add_theme_support('menus');

add_action('init', function () {
    register_nav_menu('menu_princical', __('Menu Principal'));
});

function name_catalogo($name)
{
    $library = [
        "1-popular" => "Popular",
        "2-assistencia-media" => "Assistência Média",
        "3-padrao-semi-luxo" => "Padrão Semi Luxo",
        "4-semi-luxo" => "Semi Luxo",
        "5-luxo" => "Luxo",
        "6-super-luxo-e-presidencial" => "Super Luxo e Presidencial",
    ];
    return $library[$name] ?? $name;
}

function get_dir_catalogo()
{
    $lista = glob(__DIR__ . "/assets/catalogo/*");
    $lista = array_map(function ($dir) {
        return basename($dir);
    }, $lista);
    return $lista;
}
function get_fotos_catalogo($base)
{
    $lista = glob(__DIR__ . "/assets/catalogo/{$base}/*.jpg*");
    $lista = array_map(function ($dir) {
        return str_replace('.jpg', '', basename($dir));
    }, $lista);
    return $lista;
}

//Rotas API
include __DIR__ . "/api/salva-pedido.php";

function wporg_custom_box_html($post)
{
    $postMetas   = get_post_meta($post->ID);
    $dependentes = $postMetas['dependentes'];
    $metaJson    = json_decode($dependentes[0]);
    
    foreach ($metaJson as $meta => $value) {
        $PlanoName   = get_post($value->beneficio);
        echo '
        <div>
            <div>
                <span><strong>Nome</strong></span>
                <span class="denp_nome">'. $value->nome .'</span>
            </div>
            <div>
                <span><strong>Plano:</strong></span>
                <span>'. $PlanoName->post_title .'</span>
            </div>
            <div>
                <span><strong>Data de Nascimento:</strong></span>
                <span>'. $value->data .'</span>
            </div>
            <div>
                <span><strong>taxa:</strong></span>
                <span>'. $value->taxa .'</span>
            </div>
            <div>
                <span><strong>Valor Seguro:</strong></span>
                <span>'. $value->valor_seguro .'</span>
            </div>
        </div>
        </br>
        </br>
        ';
    }
}

function wporg_add_custom_box()
{
    add_meta_box(
        'wporg_box_id',
        'Dependentes',
        'wporg_custom_box_html',
        'pedido'
    );
}
add_action('add_meta_boxes', 'wporg_add_custom_box');
