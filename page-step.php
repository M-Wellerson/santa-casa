<?php
/*
Template Name: Step
*/

//Planos
$all_post_ids_planos = get_posts(array(
    'posts_per_page'  => -1,
    'post_type'       => 'plano'
));

$planos = array_map(function ($plano) {
    $fields = get_fields($plano->ID);
    if (!$fields['urnas']) {
        $fields['urnas'] = [];
    }
    $fields['urnas'] = array_map(function ($urna) {
        $fieldsUrnas = get_fields($urna->ID);
        return [
            "imagem" => $fieldsUrnas['foto_da_urna'],
            "nome"  => $fieldsUrnas['nome_da_urna'],
            "id"    => $urna->ID,
            "ref"   => $fieldsUrnas['referencia'],
        ];
    }, $fields['urnas']);
    return $fields;
}, $all_post_ids_planos);

//Beneficios
$all_post_ids_beneficios = get_posts(array(
    'posts_per_page'  => -1,
    'post_type'       => 'beneficios'
));

$beneficios = array_map(function ($beneficio) {
    $fieldBeneficios = get_fields($beneficio->ID);
    $fieldBeneficios['id'] = $beneficio->ID;
    return $fieldBeneficios;
}, $all_post_ids_beneficios);

?>

<script>
    globalThis._planos = <?php echo json_encode($planos);  ?>;
    globalThis._beneficios = <?php echo json_encode($beneficios);  ?>;
</script>

<?php get_header(); ?>

<div id="simulador">
    <div class="full_step">
        <div :class="{content_step: true, ['progress_'+step]:true }">
            <div :class="{ativo: step => 1, item_step: true }"><i></i> <span class="steps__bar-text">Tipo <br> de Plano<span> </div>
            <div :class="{ativo: step > 1, item_step: true }"><i></i> <span class="steps__bar-text">Selecione <br> um Padrão<span> </div>
            <div :class="{ativo: step > 2, item_step: true }"><i></i> <span class="steps__bar-text">Idade do <br> Beneficiario<span> </div>
            <div :class="{ativo: step > 3, item_step: true }"><i></i> <span class="steps__bar-text">Beneficiario <br> Opcionais<span> </div>
            <div :class="{ativo: step > 4, item_step: true }"><i></i> <span class="steps__bar-text">Adicionar <br> Dependente<span> </div>
            <div :class="{ativo: step > 5, item_step: true }"><i></i> <span class="steps__bar-text">Dados <br> do Titular<span> </div>
        </div>
    </div>

    <form action="javascript:void(0)">

        <div class="box_step" v-if="step==1">
            <div class="row">
                <div class="col s12 m12 l8">
                    <h3 class="form__steps-title">Tipo de Plano</h3>
                    <hr>
                    <div class="row form__steps-body">
                        <label class="col s6" v-for="(plano, indice) in planos">
                            <input type="radio" class="with-gap" v-model="plano_id" :value="indice" name="plano" @change="set_plano">
                            <span> {{plano.titulo}} </span>
                        </label>
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>{{plano_title}}</strong> <span>R${{plano_price}} / mês</span> </div>
                        <div class="box_flex_s"> <strong>{{beneficio_title}}</strong> <span>R${{beneficio_price}} / mês</span> </div>
                        <strong>Beneficiario com menor de 64.</strong>
                        <div class="box_flex_s"> <strong></strong> <span></span> </div>
                        <small>+ R$60,00 de taxa de adesão (unica)</small>
                    </div>
                    <button class="btn btn-contrate" @click="nex"> contrate esse plano</button>
                    <div class="control_step">
                        <div class="control_step_buttons">
                            <span @click="prev">
                                < </span>
                                    <div> Avança/Voltar </div>
                                    <span @click="nex"> > </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box_step" v-if="step==2">
            <div class="row">
                <div class="col s12 m12 l8">
                    <h3 class="form__steps-title">Selecione um Padrão</h3>
                    <hr>
                    <div class="row form__steps-body">

                    

                        <div class="row form__steps-body">
                            <div class="js-simulador tab-catalogo active-tab galeria-caixao__form-steps-body">
                                <div class="galeria-caixao galeria-caixao__form-steps">
                                    <img id="foto_destaque-simulador" :src="planos[plano_id].urnas[0].imagem">
                                    <div class="form__steps-galery-photos">
                                        <img v-for="urna in planos[plano_id].urnas" onclick="galeria(this, 'simulador')" :data-ref="'Ref.' + urna.ref " :src="urna.imagem">
                                    </div>
                                </div>
                                <div>
                                    <p class="font-25" id="foto_ref-simulador-nome"> {{planos[plano_id].urnas[0].nome}} </p>
                                    <p class="font-25" id="foto_ref-simulador"> {{planos[plano_id].urnas[0].ref}}</p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>{{plano_title}}</strong> <span>R${{plano_price}} / mês</span> </div>
                        <div class="box_flex_s"> <strong>{{beneficio_title}}</strong> <span>R${{beneficio_price}} / mês</span> </div>
                        <strong>Beneficiario com menor de 64.</strong>
                        <div class="box_flex_s"> <strong></strong> <span></span> </div>
                        <small>+ R$60,00 de taxa de adesão (unica)</small>
                    </div>
                    <button class="btn btn-contrate" @click="nex"> contrate esse plano</button>
                    <div class="control_step">
                        <div class="control_step_buttons">
                            <span @click="prev">
                                < </span>
                                    <div> Avança/Voltar </div>
                                    <span @click="nex"> > </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box_step" v-if="step==3">
            <div class="row">
                <div class="col s12 m12 l8">
                    <h3 class="form__steps-title">Idade de Beneficiario</h3>
                    <hr>
                    <div class="row form__steps-body">
                        <div class="row form__steps-body">
                            <div class="input-field col s3 m3 l3">
                                <label for="">DD</label>
                                <input type="text" v-model="dd" required>
                            </div>
                            <div class="input-field col s3 m3 l3">
                                <label for="">MM</label>
                                <input type="text" v-model="mm" required>
                            </div>
                            <div class="input-field col s3 m3 l3">
                                <label for="">AAAA</label>
                                <input type="text" v-model="aaaa" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>{{plano_title}}</strong> <span>R${{plano_price}} / mês</span> </div>
                        <div class="box_flex_s"> <strong>{{beneficio_title}}</strong> <span>R${{beneficio_price}} / mês</span> </div>
                        <strong>Beneficiario com menor de 64.</strong>
                        <div class="box_flex_s"> <strong></strong> <span></span> </div>
                        <small>+ R$60,00 de taxa de adesão (unica)</small>
                    </div>
                    <button class="btn btn-contrate" @click="nex"> contrate esse plano</button>
                    <div class="control_step">
                        <div class="control_step_buttons">
                            <span @click="prev">
                                < </span>
                                    <div> Avança/Voltar </div>
                                    <span @click="nex"> > </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box_step" v-if="step==4">
            <div class="row">
                <div class="col s12 m12 l8">
                    <h3 class="form__steps-title">Beneficiario Opcionais</h3>
                    <hr>
                    <div class="row form__steps-body">
                        <label class="col s12" v-for="beneficio in beneficios" >
                            <input type="radio" class="with-gap" name="plano"  v-model="beneficio_id" :value="beneficio.id" @change="set_beneficio">
                            <span class="form__steps-beneficios">
                                {{beneficio.titulo}}
                            </span>
                        </label>
                        
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>{{plano_title}}</strong> <span>R${{plano_price}} / mês</span> </div>
                        <div class="box_flex_s"> <strong>{{beneficio_title}}</strong> <span>R${{beneficio_price}} / mês</span> </div>
                        <strong>Beneficiario com menor de 64.</strong>
                        <div class="box_flex_s"> <strong></strong> <span></span> </div>
                        <small>+ R$60,00 de taxa de adesão (unica)</small>
                    </div>
                    <button class="btn btn-contrate" @click="nex"> contrate esse plano</button>
                    <div class="control_step">
                        <div class="control_step_buttons">
                            <span @click="prev">
                                < </span>
                                    <div> Avança/Voltar </div>
                                    <span @click="nex"> > </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box_step" v-if="step==5">
            <div class="row">
                <div class="col s12 m12 l8">
                    <h3 class="form__steps-title">Adicionar Dependente</h3>
                    <hr>
                    <div class="row form__steps-body">

                        <div class="row form__steps-select" v-for="(dep, i) in dependentes">
                            <div class="col s1 l1 btn_exclude" >
                                <span @click="remove_dependentes(dep.id)" :data-id="dep.id">
                                    x
                                </span>
                            </div>
                            <div class="input-field col s7 l6">
                                <input type="text" v-model="dep.nome">
                                <label>Dependente</label>
                            </div>
                            <div class="input-field col s4">
                                <select class="browser-default my_label" v-model="dep.beneficio">
                                    <option value="0" disabled selected>Beneficio</option>
                                    <option :value="be.id" v-for="be in beneficios">{{be.titulo}}</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-contrate" @click="add_dependentes">Adicionar Dependente</button>
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>{{plano_title}}</strong> <span>R${{plano_price}} / mês</span> </div>
                        <div class="box_flex_s"> <strong>{{beneficio_title}}</strong> <span>R${{beneficio_price}} / mês</span> </div>
                        <strong>Beneficiario com menor de 64.</strong>
                        <div class="box_flex_s"> <strong></strong> <span></span> </div>
                        <small>+ R$60,00 de taxa de adesão (unica)</small>
                    </div>
                    <button class="btn btn-contrate" @click="nex"> contrate esse plano</button>
                    <div class="control_step">
                        <div class="control_step_buttons">
                            <span @click="prev">
                                < </span>
                                    <div> Avança/Voltar </div>
                                    <span @click="nex"> > </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box_step" v-if="step==6">
            <div class="row">
                <div class="col s12 m12 l8">
                    <h3 class="form__steps-title">Dados do Titular</h3>
                    <hr>
                    <div class="row form__steps-body">
                        <div class="input-field col s12 m12 l9">
                            <label for="">Nome do Titular *</label>
                            <input type="text" v-model="nome_titular" required>
                        </div>
                        <div class="input-field col s12 m12 l9">
                            <label for="">Email *</label>
                            <input type="text" v-model="email" required>
                        </div>
                        <div class="input-field col s12 m12 l9">
                            <label for="">Telefone *</label>
                            <input type="text" v-model="telefone" required>
                        </div>
                        <div class="input-field col s12 m12 l9">
                            <label for="">Celular</label>
                            <input type="text" v-model="celular">
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>{{plano_title}}</strong> <span>R${{plano_price}} / mês</span> </div>
                        <div class="box_flex_s"> <strong>{{beneficio_title}}</strong> <span>R${{beneficio_price}} / mês</span> </div>
                        <strong>Beneficiario com menor de 64.</strong>
                        <div class="box_flex_s"> <strong></strong> <span></span> </div>
                        <small>+ R$60,00 de taxa de adesão (unica)</small>
                    </div>
                    <button class="btn btn-contrate" @click="nex"> contrate esse plano</button>
                    <div class="control_step">
                        <div class="control_step_buttons">
                            <span @click="prev">
                                < </span>
                                    <div> Avança/Voltar </div>
                                    <span @click="nex"> > </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <br>
    <br>
    <br>

</div>

<?php get_footer(); ?>