<?php

function deletar_prod(WP_REST_Request $request)
{
    $fieldsUrnas = get_fields($request['urna_id']);
    var_dump($request['plano_title']);
    $my_post = array(
        'post_type'    => 'pedido',
        'post_title'   => wp_strip_all_tags($request['title']),
        'post_content' => 'Pedido',
        'post_status'  => 'publish',
        'post_author'  => 1,
        'meta_input'   => [
            'plano_id'          => $request['plano_id'],
            'nome_do_plano'     => $request['plano_title'],
            'valor_do_plano'    => $request['plano_price'],
            'urna_escolhida'    => $fieldsUrnas['foto_da_urna'],
            'beneficio_id'      => $request['beneficio_id'],
            'nome_do_beneficio' => $request['beneficio_title'],
            'valor_beneficio'   => $request['beneficio_price'],
            'dependentes'       => json_encode($request['dependentes']),
            'nome'              => $request['nome_titular'],
            'idade'             => $request['idade'],
            'e-mail'            => $request['email'],
            'telefone'          => $request['telefone'],
            'celular'           => $request['celular'],
            'total'             => $request['total'],
            'taxas'             => $request['taxas'],
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
