<?php
/*
Template Name: Step
*/
?>
<?php get_header(); ?>



<div id="simulador">
    <div class="full_step">
        <div :class="{content_step: true, ['progress_'+step]:true }">
            <div :class="{ativo: step => 1, item_step: true }"><i></i> Tipo <br> de Plano </div>
            <div :class="{ativo: step > 1, item_step: true }"><i></i> Selecione <br> um Padrão </div>
            <div :class="{ativo: step > 2, item_step: true }"><i></i> Idade do <br> Beneficiario </div>
            <div :class="{ativo: step > 3, item_step: true }"><i></i> Beneficiario <br> Opcionais </div>
            <div :class="{ativo: step > 4, item_step: true }"><i></i> Adicionar <br> Dependente </div>
            <div :class="{ativo: step > 5, item_step: true }"><i></i> Dados <br> do Titular </div>
        </div>
    </div>

    <form action="javascript:void(0)">



        <div class="box_step" v-if="step==1">
            <div class="row">
                <div class="col s8">
                    <h3>Tipo de Plano</h3>
                    <hr>
                    <label> <input type="radio" class="with-gap" name="plano"> <span> Plano Familiar / Individual </span> </label>
                    <label> <input type="radio" class="with-gap" name="plano"> <span> Plano Igreja </span> </label>
                    <label> <input type="radio" class="with-gap" name="plano"> <span> Plano Pet </span> </label>
                    <label> <input type="radio" class="with-gap" name="plano"> <span> Plano Empresarial </span> </label>
                </div>
                <div class="col s4">
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
                    <button class="btn" @click="nex"> contrate esse plano</button>
                </div>
            </div>
        </div>

        <div class="box_step" v-if="step==2">
            <h3>Selecione um Padrão</h3>
        </div>

        <div class="box_step" v-if="step==3">
            <h3>Idade de Beneficiario</h3>
        </div>

        <div class="box_step" v-if="step==4">
            <h3>Beneficiario Opcionais</h3>
        </div>

        <div class="box_step" v-if="step==5">
            <h3>Adicionar Dependente</h3>
        </div>

        <div class="box_step" v-if="step==6">
            <h3>Dados do Titular</h3>
        </div>

    </form>
    <br>
    <br>
    <br>
    <div class="control_step">
        <div class="control_step_buttons">
            <span @click="prev">
                <- </span>
                    <div> Avança/Voltar </div>
                    <span @click="nex"> -> </span>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</div>

<?php get_footer(); ?>