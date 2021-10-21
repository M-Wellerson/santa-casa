<?php
/*
Template Name: Sobre nos
*/
?>
<?php get_header(); ?>

    <div class="inner-sobre">
        <h1 class="branco-text font-45">sobre nós</h1>
    </div>
    <div class="space movel-hide"></div>
    <div>
        <div class="container">
            <div class="flex between sobre-links-box">
                <a href="#o-grupo" class="font-20 link-ancoras"> O Grupo </a>
                <a href="#missao-visao-valores" class="font-20 link-ancoras"> Missão, Visão, Valores </a>
                <a href="#contato" class="font-20 link-ancoras"> Contato </a>
                <a href="#formulario-de-contato" class="font-20 link-ancoras"> Formulário de Contato </a>
                <a href="#trabalhe-conosco" class="font-20 link-ancoras"> Trabalhe Conosco </a>               
            </div>
        </div>
    </div>
    <div class="space movel-hide"></div>
    <div>
        <div class="container" id="o-grupo">
            <div class="row">
                <div class="col m12 s12 l6">
                    <h2 class="titulos roxo-text">O Grupo</h2>
                    <p class="font-25">
                        Inovadora em infraestrutura, oferece serviços completos, 
                        conta com equipe especializada nas mais diversas áreas do setor.  
                    </p>
                    <ul class="font-18 roxo-text double-list">
                        <li>- Plano de Assistência Funeral</li>
                        <li>- Empresas Funerárias</li>
                        <li>- Laboratório de Tanatopraxia</li>
                        <li>- Floricultura</li>
                        <li>- Frota de carros</li>
                        <li>- Call center especializado</li>
                    </ul>
                    <p class="font-18 cinza-text">
                        A Santa Casa  Copacabana teve seu início como uma  empresa de serviço funerário fundada 
                        em meados de 1999, que ficou conhecida por sua excelência no mercado local devido a 
                        atendimentos prestados para a polícia militar do estado do Rio de Janeiro, exército, 
                        aeronáutica e Petrobras.
                    </p>
                    <p class="font-18 cinza-text">
                        Em 2010, lançou plano de assistência familiar para o segmento, que foi recebido com grande aceitação. 
                        Sua equipe administrativa concilia tradição, inovação e solidez desde sua fundação.
                    </p>
                    <p class="font-18 cinza-text">
                        Atualmente o grupo opera com uma sede no Bairro do Méier 
                        e 3 filiais no estado do  Rio de Janeiro.
                    </p>
                </div>
                <div class="col m12 s12 l6 align-right">
                    <img class="max-v-100" width="520"  src="<?= get_template_directory_uri() ?>/assets/img/pao-de-acucar.png" width="100%">
                    <div class="space largue-hide" style="--line:40px"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="space movel-hide"></div>
    <div class="agua-70" id="missao-visao-valores">
        <div class="container">
            <div class="space movel-hide"></div>
            <div class="space largue-hide" style="--line:30px"></div>
            <div class="row">
                <div class="col m12 s12 l5 line-bot-sobre-movel">
                    <div class="missao-item">
                        <h2 class="roxo-text titulos">Missão</h2>
                        <p class="cinza-text">
                            A Santa Casa Copacabana é um grupo de responsabilidade social, 
                            ética, que busca atualização e aperfeiçoamento 
                            de todos os processos do seu segmento, 
                            e apresenta o menor  custo de comercialização, transmitindo ao seu cliente 
                            todos os benefícios, mantendo  assim a sua preferência e o 
                            crescimento constante da empresa.
                        </p>
                    </div>
                </div>
                <div class="col m12 s12 l2 hide-on-med-and-down">
                    <div class="linha-vertical"></div>
                </div>
                <div class="col m12 s12 l5 line-bot-sobre-movel">
                    <div class="missao-item">
                        <h2 class="roxo-text titulos">Visão</h2>
                        <p class="cinza-text">
                            Para dar continuidade ao nosso desenvolvimento, 
                            buscamos manter relacionamentos cordiais junto a nossos colaboradores e 
                            fornecedores. <br>
                            E um posicionamento honesto e concreto com o mercado, com respeito, 
                            ética e comprometimento social.  
                        </p>
                    </div>
                </div>
            </div>
            <div class="hide-on-med-and-down">
                <div class="linha-horizontal"></div>
            </div>
            <div class="missao-item">
                <h2 class="roxo-text titulos">Valores</h2>
                <p class="cinza-text">
                    Inovação; Compromisso; <br>
                    Ética; Humildade; Cidadania
                </p>
            </div>
            <div class="space "></div>
        </div>
    </div>
    <div class="agua" id="contato">
        <div class="container">
            <div class="space movel-hide"></div>
            <div class="row">
                <div class="col s12 m12 l6">
                    <h2 class="azul-text titulos">Contato</h2>
                    <div class="space movel-hide"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197818.1624554386!2d-43.37609994045795!3d-22.88640361587854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997db9f49d9617%3A0x4c2ca4f2b9854e31!2sR.%20Arquias%20Cordeiro%2C%20249%20-%20M%C3%A9ier%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020770-000!5e0!3m2!1spt-BR!2sbr!4v1623175529307!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
                <div class="col s12 m12 offset-l1 l5">
                    <div class="space movel-hide"></div>
                    <div class="space movel-hide"></div>
                    <h2 class="azul-text titulos title-contact">Mais Informações</h2>
                    <a class="cinza-text" href="mailto:contato@santacasacopacabana.com.br">contato@santacasacopacabana.com.br</a>
                    <h2 class="azul-text titulos title-contact">Contatos</h2>
                    <a class="cinza-text" href="tel:08000213460">0800 021 3460</a>
                    <span class="gap-text">|</span> 
                    <a class="cinza-text" href="tel:32798800 ">3279-8800</a>
                    <h2 class="azul-text titulos title-contact">Whatsapp</h2>
                    <a class="cinza-text" href="https://web.whatsapp.com/send?phone=+5521967205554&text=" target="_blank" rel="noopener noreferrer">(21) 96720-5554</a>
                    <div class="gap-text">|</div>
                    <a class="cinza-text" href="https://web.whatsapp.com/send?phone=+5521964656800&text=" target="_blank" rel="noopener noreferrer">(21) 96465-6800</a>
                </div>
            </div>
            <div class="space"></div>
        </div>
    </div>
    <div class="inner-forms" id="trabalhe-conosco">
        <div class="container">
            <div class="space movel-hide"></div>
            <form action="javascript:void(0)" id="formulario-de-contato" class="row">
                <div class="col s12 m12 l9">
                    <h2 class="titulos roxo-text">Formulário de Contato</h2>
                    <p>
                        Caso você tenha alguma dúvida, preencha o formulário. <br>
                        Sua mensagem será respondida dentro de 24 horas.
                    </p>
                </div>
                <div class="input-field col s12 m12 l9">
                    <label for="">Nome *</label>
                    <input type="text" required>
                </div>
                <div class="input-field col s12 m12 l9">
                    <label for="">Email *</label>
                    <input type="email" required>
                </div>
                <div class="input-field col s12 m12 l9">
                    <label for="">Mensagem *</label>
                    <textarea rows="7" class="materialize-textarea"></textarea>
                </div>                
                <div class="input-field col s12 m12 l9 right-align">
                    <input type="submit" class="btn azul btn-round" value="Enviar" required>
                </div>
            </form>
            <form action="javascript:void(0)" id="trabalhe-conosc" class="row">
                <div class="col s12 m12 l9">
                    <h2 class="titulos roxo-text">Trabalhe Conosco</h2>
                    <p>
                        O Grupo Santa Casa Copacabana é impulsionado diariamente pelos resultados e 
                        bons relacionamentos com nossos clientes. 
                    </p>
                    <p>
                        Por isso sempre estamos à procura de profissionais dedicados, comprometidos, 
                        perseverantes com espírito de cooperação.
                        Se você tem esse perfil entre em contato conosco, 
                        venha fazer parte do nosso processo seletivo. 
                    </p>
                </div>
                <div class="input-field col s12 m12 l9">
                    <label for="">Nome *</label>
                    <input type="text" required>
                </div>
                <div class="input-field col s12 m12 l9">
                    <label for="">Sobrenome *</label>
                    <input type="text" required>
                </div>
                <div class="input-field col s12 m12 l9">
                    <label for="">Telefone *</label>
                    <input type="text" required>
                </div>    
                <div class="input-field col s12 m12 l9">
                    <label for="">Email *</label>
                    <input type="text" required>
                </div>       
                <div class="input-field col s12 m12 l9">
                    <label for="">Envie seu Currículo</label>
                    <input type="file" id="on_curriculun" hidden>
                    <label for="on_curriculun" class="btn btn-upload">Escolher Arquivo</label>
                    <div class="space"></div>
                </div>           
                <div class="input-field col s12 m12 l9 right-align">
                    <input type="submit" class="btn azul btn-round" value="Enviar" required>
                </div>
            </form>
            <div class="space"></div>
        </div>
    </div>
    
<?php get_footer(); ?>