<?php

function deletar_prod(WP_REST_Request $request)
{
    $my_post = array(
        'post_type'    => 'pedido',
        'post_title'   => wp_strip_all_tags( $request['title'] ),
        'post_content' => 'Pedido',
        'post_status'  => 'publish',
        'post_author'  => 1,
        'meta_input'   => [
            'nome_do_plano'     => $request['nome_do_plano'],
            'valor_do_plano'    => $request['valor_do_plano'],
            'urna_escolhida'    => $request['urna_escolhida'],
            'nome_do_beneficio' => $request['nome_do_beneficio'],
            'valor_beneficio'   => $request['valor_beneficio'],
            'nome'              => $request['nome'],
            'e-mail'            => $request['e-mail'],
            'telefone'          => $request['telefone'],
            'celular'           => $request['celular'],
        ],
    );

    wp_insert_post($my_post, true);

    $response = array(
        'next'    => true,
        'message' => "Pedido salvo com sucesso"
    );

    return rest_ensure_response($response);
}

add_action(
    "rest_api_init",
    function () {
        register_rest_route(
            "api",
            "/salva-pedido",
            [
                "methods"   => WP_REST_SERVER::CREATABLE,
                "callback" => "deletar_prod"
            ]
        );
    }
);