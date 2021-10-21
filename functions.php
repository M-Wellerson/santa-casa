<?php

add_theme_support( 'menus' );

add_action('init', function () {
    register_nav_menu('menu_princical', __('Menu Principal'));
});

function name_catalogo( $name ) {
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

function get_dir_catalogo() {
    $lista = glob(__DIR__."/assets/catalogo/*");
    $lista = array_map( function( $dir ) { return basename( $dir ); }, $lista  );
    return $lista;
}
function get_fotos_catalogo( $base ) {
    $lista = glob(__DIR__."/assets/catalogo/{$base}/*.jpg*");
    $lista = array_map( function( $dir ) { return str_replace('.jpg', '', basename( $dir ) ); }, $lista  );
    return $lista;
}