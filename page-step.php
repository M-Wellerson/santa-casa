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

    <form action="javascript:void(0)" ref="form_cadastro">

        <div class="box_step" v-show="step==1">
            <div class="row">
                <div class="col s12 m12 l8">
                    <h3 class="form__steps-title">Tipo de Plano</h3>
                    <hr>
                    <div class="row form__steps-body">
                        <label class="col s6 " v-for="(plano, indice) in planos" style="margin: 15px 0">
                            <input type="radio" class="with-gap" v-model="plano_id" :value="indice" name="plano_id" @change="set_plano">
                            <span class="radio-text"> {{plano.titulo}} </span>
                        </label>
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <b>Simulador</b>
                        </center>
                        <div class="box_flex_s"> <strong>Plano Base</strong> <span>R${{plano_price}} / mês</span> </div>
                        <div class="box_flex_s linha-plano-base"><i></i><span>({{plano_title}})</span></div>
                        <div class="box_flex_s"> <strong>Seguro</strong> <span>+R${{beneficio_price}} / mês</span> </div>
                        <div class="box_flex_s"> <strong>Total</strong> <span>R${{total}}</span> </div>
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

        <div class="box_step" v-show="step==2">
            <div class="row">
                <div class="col s12 m12 l8">
                    <h3 class="form__steps-title">Selecione um Padrão</h3>
                    <hr> <br>
                    <div class="row form__steps-body">
                        <div class="row form__steps-body">
                            <div class="js-simulador tab-catalogo active-tab galeria-caixao__form-steps-body">
                                <div class="galeria-caixao galeria-caixao__form-steps">
                                    <img id="foto_destaque-simulador" :src="planos[plano_id].urnas[0].imagem">
                                    <br>
                                    <div class="form__steps-galery-photos">
                                        <label v-for="urna in planos[plano_id].urnas" :class="{urna_active: urna_id == urna.id }">
                                            <input type="radio" name="urna_id" :value="urna.id" v-model="urna_id">
                                            <img  onclick="galeria(this, 'simulador')" :data-ref="'REF. ' + urna.ref " :src="urna.imagem">
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <span id="foto_destaque-nome" class="legenda-padrao legenda-padrao-mb" > {{planos[plano_id].urnas[0].nome}} </span>
                                    <span id="foto_ref-simulador" class="legenda-padrao" > REF. {{planos[plano_id].urnas[0].ref}}</span>
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
                        <div class="box_flex_s"> <strong>Plano Base</strong> <span>R${{plano_price}} / mês</span> </div>
                        <div class="box_flex_s linha-plano-base"><i></i><span>({{plano_title}})</span></div>
                        <div class="box_flex_s"> <strong>Seguro</strong> <span>+R${{beneficio_price}} / mês</span> </div>
                        <div class="box_flex_s"> <strong>Total</strong> <span>R${{total}}</span> </div>
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

        <div class="box_step" v-show="step==3">
            <div class="row">
                <div class="col s12 m12 l8">
                    <h3 class="form__steps-title">Idade de Beneficiario</h3>
                    <hr>
                    <div class="row form__steps-body">
                        <label class="col s6 " v-for="idade in idades" style="margin: 15px 0">
                            <input type="radio" class="with-gap" name="idade_beneficiario" :value="idade" v-model="idade">
                            <span class="radio-text"> {{idade}} </span>
                        </label>
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>Plano Base</strong> <span>R${{plano_price}} / mês</span> </div>
                        <div class="box_flex_s linha-plano-base"><i></i><span>({{plano_title}})</span></div>
                        <div class="box_flex_s"> <strong>Seguro</strong> <span>+R${{beneficio_price}} / mês</span> </div>
                        <div class="box_flex_s"> <strong>Total</strong> <span>R${{total}}</span> </div>
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

        <div class="box_step" v-show="step==4">
            <div class="row">
                <div class="col s12 m12 l8">
                    <h3 class="form__steps-title">Beneficiario Opcionais</h3>
                    <hr>
                    <div class="row form__steps-body">
                        <label class="col s12" v-for="beneficio in beneficios">
                            <input type="radio" class="with-gap" name="plano" v-model="beneficio_id" :value="beneficio.id" @change="set_beneficio">
                            <span class="form__steps-beneficios">
                                <b>{{beneficio.titulo}}</b>
                                <a target="_blank" :href="beneficio.link" class="text-right">
                                    <b> Confira o todos os beneficios </b>
                                </a>
                                <div>(R${{beneficio.valor_mensal}} ao mês)</div>
                            </span>
                        </label>

                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>Plano Base</strong> <span>R${{plano_price}} / mês</span> </div>
                        <div class="box_flex_s linha-plano-base"><i></i><span>({{plano_title}})</span></div>
                        <div class="box_flex_s"> <strong>Seguro</strong> <span>+R${{beneficio_price}} / mês</span> </div>
                        <div class="box_flex_s"> <strong>Total</strong> <span>R${{total}}</span> </div>
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

        <div class="box_step" v-show="step==5">
            <div class="row">
                <div class="col s12 m12 l8">
                    <h3 class="form__steps-title">Adicionar Dependente</h3>
                    <hr>
                    <div class="row form__steps-body">

                        <div class="row form__steps-select" v-for="(dep, i) in dependentes">

                            <div class="input-field col s12 l12">
                                <i class="btn_exclude" @click="remove_dependentes(dep.id)" :data-id="dep.id">
                                    x
                                </i>
                                <b class="dep-title">Dependente {{i+1}}</b>
                            </div>
                            <div class="input-field col s12 l12">
                                <small>Dependente</small>
                                <input type="text" v-model="dep.nome" name="dep_nome[]" placeholder="Nome">
                            </div>
                            <div class="input-field col s6">
                                <small>Dependente</small>
                                <input type="date" v-model="dep.data" name="dep_data[]">
                            </div>
                            <div class="input-field col s6">
                                <small>Seguro do Dependente</small>
                                <select class="browser-default my_label" v-model="dep.beneficio" name="dep_beneficio[]">
                                    <option value="0" disabled selected>Beneficio</option>
                                    <option :value="be.id" v-for="be in beneficios">{{be.titulo}}</option>
                                </select>
                            </div>

                        </div>
                        <span class="link-add-dep" @click="add_dependentes">Adicionar Dependente</span>
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>Plano Base</strong> <span>R${{plano_price}} / mês</span> </div>
                        <div class="box_flex_s linha-plano-base"><i></i><span>({{plano_title}})</span></div>
                        <div class="box_flex_s"> <strong>Seguro</strong> <span>+R${{beneficio_price}} / mês</span> </div>
                        <div class="box_flex_s"> <strong>Total</strong> <span>R${{total}}</span> </div>
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

        <div class="box_step" v-show="step==6">
            <div class="row">
                <div class="col s12 m12 l8">
                    <h3 class="form__steps-title">Dados do Titular</h3>
                    <hr>
                    <div class="row form__steps-body">
                        <div class="input-field col s12 m12 l12">
                            <div for="">Nome do Titular *</div>
                            <input type="text" v-model="nome_titular" name="nome_titular" required>
                        </div>
                        <div class="input-field col s12 m12 l8">
                            <div for="">Email *</div>
                            <input type="text" v-model="email" name="email" required>
                        </div>
                        <div class="input-field col s12 m12 l4">
                            <div for="">Data de Nascimento *</div>
                            <input type="date" v-model="nascimento" name="nascimento">
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <div for="">Telefone *</div>
                            <input type="text" v-model="telefone" name="telefone" required>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <div for="">Celular</div>
                            <input type="text" v-model="celular" name="celular">
                        </div>
                       
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>Plano Base</strong> <span>R${{plano_price}} / mês</span> </div>
                        <div class="box_flex_s linha-plano-base"><i></i><span>({{plano_title}})</span></div>
                        <div class="box_flex_s"> <strong>Seguro</strong> <span>+R${{beneficio_price}} / mês</span> </div>
                        <div class="box_flex_s"> <strong>Total</strong> <span>R${{total}}</span> </div>
                        <div class="box_flex_s"> <strong></strong> <span></span> </div>
                        <small>+ R$60,00 de taxa de adesão (unica)</small>
                    </div>
                    <button class="btn btn-contrate btn-contrate-active" @click="finalizar"> contrate esse plano</button>
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

        <div class="box_step" v-show="step==7">
            <div class="row">
                <div class="col s12 m12 l12">
                    <br> <br>
                    <h3 class="form__steps-title text-center">
                        Solicitação Enviada!
                    </h3> <br>
                    <p class="text-center">
                        Em breve um dos nossos atendentes <br>
                        entrará em contato para finalizar <br>
                        a contratação do seu plano.
                    </p>
                    <a class="link-center" href="javascript:void(0)" @click="voltar">
                        voltar
                    </a>
                    

                </div>

            </div>
        </div>

    </form>
    <br>
    <br>
    <br>

</div>

<?php get_footer(); ?>