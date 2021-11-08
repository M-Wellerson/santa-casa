<?php
/*
Template Name: Step
*/

$all_post_ids = get_posts(array(
    // 'fields'          => 'ids',
    'posts_per_page'  => -1,
    'post_type'       => 'plano'
));

$planos = array_map( function($plano) {
    return get_fields($plano->ID);
}, $all_post_ids );

?>

<script>
    globalThis._planos = <?php echo json_encode($planos);  ?>;
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
                        <label class="col s6"> <input type="radio" class="with-gap" name="plano"> <span> Plano Familiar / Individual </span> </label>
                        <label class="col s6"> <input type="radio" class="with-gap" name="plano"> <span> Plano Igreja </span> </label>
                        <label class="col s6"> <input type="radio" class="with-gap" name="plano"> <span> Plano Pet </span> </label>
                        <label class="col s6"> <input type="radio" class="with-gap" name="plano"> <span> Plano Empresarial </span> </label>
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>Plano Base</strong> <span>R$0,00 / mês</span> </div>
                        <div class="box_flex_s"> <strong>Opcionais</strong> <span>R$0,00 / mês</span> </div>
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
                        <?php foreach (get_dir_catalogo() as $indice => $base) : ?>
                            <?php $fotos = get_fotos_catalogo('6-super-luxo-e-presidencial'); ?>
                            <div class="js-<?= $base ?> tab-catalogo <?= $indice == 0 ? 'active-tab' : '' ?> galeria-caixao__form-steps-body">
                                <div class="galeria-caixao galeria-caixao__form-steps">
                                    <img id="foto_destaque-<?= $base ?>" src="<?= get_template_directory_uri() ?>/assets/catalogo/6-super-luxo-e-presidencial/<?= $fotos[0] ?>.jpg">
                                    <div class="form__steps-galery-photos">
                                        <?php foreach ($fotos as $foto) : ?>
                                            <img onclick="galeria(this, '<?= $base ?>')" data-ref="Ref. <?= $foto ?>" src="<?= get_template_directory_uri() ?>/assets/catalogo/6-super-luxo-e-presidencial/<?= $foto ?>.jpg">
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-25" id="foto_ref-<?= $base ?>"> Popular </p>
                                    <p class="font-25" id="foto_ref-<?= $base ?>">Ref. <?= $foto ?> </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>Plano Base</strong> <span>R$0,00 / mês</span> </div>
                        <div class="box_flex_s"> <strong>Opcionais</strong> <span>R$0,00 / mês</span> </div>
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
                            <input type="text" required>
                        </div>
                        <div class="input-field col s3 m3 l3">
                            <label for="">MM</label>
                            <input type="text" required>
                        </div>
                        <div class="input-field col s3 m3 l3">
                            <label for="">AAAA</label>
                            <input type="text" required>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>Plano Base</strong> <span>R$0,00 / mês</span> </div>
                        <div class="box_flex_s"> <strong>Opcionais</strong> <span>R$0,00 / mês</span> </div>
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
                        <label class="col s12">
                            <input type="radio" class="with-gap" name="plano">
                            <span class="form__steps-beneficios">
                                <span>Seguro Padrão + clube de Vantagens</span>
                                <span>Confira todos os beneficios</span>
                                <span>(+R$7,58 ao mês)</span>
                            </span>
                        </label>
                        <label class="col s12">
                            <input type="radio" class="with-gap" name="plano">
                            <span class="form__steps-beneficios">
                                <span>Seguro Padrão + clube de Vantagens</span>
                                <span>Confira todos os beneficios</span>
                                <span>(+R$7,58 ao mês)</span>
                            </span>
                        </label>
                        <label class="col s12">
                            <input type="radio" class="with-gap" name="plano">
                            <span class="form__steps-beneficios">
                                <span>Seguro Padrão + clube de Vantagens</span>
                                <span>Confira todos os beneficios</span>
                                <span>(+R$7,58 ao mês)</span>
                            </span>
                        </label>
                        <label class="col s12">
                            <input type="radio" class="with-gap" name="plano">
                            <span class="form__steps-beneficios">
                                <span>Seguro Padrão + clube de Vantagens</span>
                                <span>Confira todos os beneficios</span>
                                <span>(+R$7,58 ao mês)</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>Plano Base</strong> <span>R$0,00 / mês</span> </div>
                        <div class="box_flex_s"> <strong>Opcionais</strong> <span>R$0,00 / mês</span> </div>
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
                        <div class="row form__steps-select">
                            <div class="input-field col s8 l6">
                                <select>
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                <label>Dependente 1</label>
                            </div>
                            <div class="input-field col s4 l4">
                                <select>
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                <label>Beneficio</label>
                            </div>
                        </div>
                        <div class="row form__steps-select">
                            <div class="input-field col s8 l6">
                                <select>
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                <label>Dependente 2</label>
                            </div>
                            <div class="input-field col s4 l4">
                                <select>
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                <label>Beneficio</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>Plano Base</strong> <span>R$0,00 / mês</span> </div>
                        <div class="box_flex_s"> <strong>Opcionais</strong> <span>R$0,00 / mês</span> </div>
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
                            <input type="text" required>
                        </div>
                        <div class="input-field col s12 m12 l9">
                            <label for="">Email *</label>
                            <input type="text" required>
                        </div>
                        <div class="input-field col s12 m12 l9">
                            <label for="">Telefone *</label>
                            <input type="text" required>
                        </div>
                        <div class="input-field col s12 m12 l9">
                            <label for="">Celular</label>
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4 center-align">
                    <div class="box_simulado">
                        <center>
                            <strong ong>Simulador</strong>
                        </center>
                        <div class="box_flex_s"> <strong>Plano Base</strong> <span>R$0,00 / mês</span> </div>
                        <div class="box_flex_s"> <strong>Opcionais</strong> <span>R$0,00 / mês</span> </div>
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