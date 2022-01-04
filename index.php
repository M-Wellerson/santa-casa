<?php get_header(); ?>

<div class="banner swiper-container js-banner">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img class="banner-img" src="<?= get_template_directory_uri() ?>/assets/banner/01-banner.jpg">
            <!-- <span class="azul-claro branco-text text-fix font-35 title-movel">Com Você Sempre!</span> -->
            <div class="roxo- branco-text box-seguro">
                <span class="shape"></span>
                <span class="box-seguro-bg"></span>
                <span class="font-45 bolder-800 banner-seguros">SEGUROS</span><br>
                <span class="font-30 box-a-partir">a partir de</span>
                <span class="font-75 bolder-800">R$0,85</span>
                <span class="font-30 box-ao-dia">ao dia</span>
            </div>
            <div class="banner-box-transition"></div>
            <a href="<?= get_site_url() ?>/planos" class="banner-link text-movel">Conheça nossos planos</a>
        </div>
        <div class="swiper-slide">
            <img class="banner-img" src="<?= get_template_directory_uri() ?>/assets/banner/02-banner.jpg">
            <!-- <span class="azul-claro branco-text text-fix font-35 title-movel">Com Você Sempre!</span> -->
            <div class="roxo- branco-text box-seguro">
                <span class="shape"></span>
                <span class="box-seguro-bg"></span>
                <span class="font-45 bolder-800 banner-seguros">SEGUROS</span><br>
                <span class="font-30 box-a-partir">a partir de</span>
                <span class="font-75 bolder-800">R$0,85</span>
                <span class="font-30 box-ao-dia">ao dia</span>
            </div>
            <div class="banner-box-transition"></div>
            <a href="<?= get_site_url() ?>/planos" class="banner-link text-movel">Conheça nossos planos</a>
        </div>
    </div>
    <div class="azul-text banner-steps">
        <a href="#!" class="swiper-button-prev prev"></a>
        <span class="or">|</span>
        <a href="#!" class="swiper-button-next next"></a>
    </div>
    <span class="azul-claro branco-text text-fix font-35 title-movel">Com Você Sempre!</span>
    <div class="banner-box-transition"></div>
    <div class="space" style="--line:70px"></div>
</div>


<div class="agua">

    <div class="inner-planos">
        <div class="container">
            <div class="space movel-hide" style="--line: 120px" ></div>
            <div class="space large-hide" style="--line: 70px" ></div>
            <div class="row">
                <div class="col s12 m12 l3 center-align line-rigth">
                    <h2 class="azul-text title-planos subtitle-movel">
                        Plano 
                        <span class="movel-hide"> Funerario </span> 
                        <span class="large-hide"> Funeral </span> 
                    </h2>
                    <span class="font-18 text-movel">Conheça nossos planos de assistência funeral.</span>
                </div>
                <div class="col s12 m12 l3 center-align line-rigth">
                    <h2 class="azul-text title-planos subtitle-movel">Funeral</h2>
                    <span class="font-18 text-movel"> Funerais para não associados em até 10x sem juros. </span>
                </div>
                <div class="col s12 m12 l3 center-align line-rigth">
                    <h2 class="azul-text title-planos subtitle-movel">Cremação</h2>
                    <span class="font-18 text-movel">Alternativa ao sepultamento tradicional.</span>
                </div>
                <div class="col s12 m12 l3 center-align">
                    <h2 class="azul-text title-planos subtitle-movel">Tanatopraxia</h2>
                    <span class="font-18 text-movel">Processo de conservação do corpo.</span>
                </div>
            </div>
            <div class="space movel-hide"></div>
            <div class="flex between">
                <h2 class="azul-text titulos title-planos-movel">
                    Planos de Assistência Funeral
                </h2>
                <a href="<?= get_site_url() ?>/planos" class="link--home link-funeral movel-hide">
                    Conheça todos os nossos planos
                </a>
            </div>
            <div class="space movel-hide" style="--line:130px"></div>
            <div class="space large-hide" style="--line:90px"></div>
        </div>
    </div>
    
    <div class="inner-cards">
        <div class="swiper-container js-planos">
            <div class="swiper-wrapper cards">
                <a class="swiper-slide" href="<?= get_site_url() ?>/simulador">
                    <img src="<?= get_template_directory_uri() ?>/assets/card/empresarial.jpg">
                    <span class="azul-text font-25 title-plans">Empresarial</span>
                    <div class="in_focus">
                        <span class="font-18 a-patitr cinza-text in_focus-">apartir de <br></span>
                        <div class="flex flex-movel preto-text price-plans">
                            <b class="font-45 in_focus-">R$ 7,00 <br></b>
                            <span class="card-ao-mes">ao mês <br></span>
                        </div>
                        <span class="azul-text font-25 in_focus- tag-plans">Funerais <br></span>
                        <span class="in_focus- cinza-text tag-plans-text">para clientes não associados em: <br></span>
                        <div class="em-10x in_focus-">
                            <b class="font-50 in_focus- cinza-text">10x</b>
                            <span class="in_focus- cinza-text">sem juros nos cartões de crédito.</span>
                        </div>
                    </div>
                </a>
                <a class="swiper-slide" href="<?= get_site_url() ?>/simulador">
                    <img src="<?= get_template_directory_uri() ?>/assets/card/igreja.jpg">
                    <span class="azul-text font-25 title-plans">Igreja</span>
                    <div class="in_focus">
                        <span class="font-18 a-patitr cinza-text in_focus-">apartir de <br></span>
                        <div class="flex flex-movel preto-text price-plans">
                            <b class="font-45 in_focus-">R$ 3,00 <br></b>
                            <span class="card-ao-mes">ao mês <br></span>
                        </div>
                        <span class="azul-text font-25 in_focus- tag-plans">Funerais <br></span>
                        <span class="in_focus- cinza-text tag-plans-text">para clientes não associados em: <br></span>
                        <div class="em-10x in_focus-">
                            <b class="font-50 in_focus- cinza-text">10x</b>
                            <span class="in_focus- cinza-text">sem juros nos cartões de crédito.</span>
                        </div>
                    </div>
                </a>
                <a class="swiper-slide" href="<?= get_site_url() ?>/simulador">
                    <img src="<?= get_template_directory_uri() ?>/assets/card/familiar.jpg">
                    <span class="azul-text font-25 title-plans">Familiar <br></span>
                    <div class="in_focus">
                        <span class="font-18 a-patitr cinza-text in_focus-">apartir de <br></span>
                        <div class="flex flex-movel preto-text price-plans">
                            <b class="font-45 in_focus-">R$ 18,00 <br></b>
                            <span class="card-ao-mes">ao mês <br></span>
                        </div>
                        <span class="azul-text font-25 in_focus- tag-plans">Funerais <br></span>
                        <span class="in_focus- cinza-text tag-plans-text">para clientes não associados em: <br></span>
                        <div class="em-10x in_focus-">
                            <b class="font-50 in_focus- cinza-text">10x</b>
                            <span class="in_focus- cinza-text">sem juros nos cartões de crédito.</span>
                        </div>
                    </div>
                </a>
                <a class="swiper-slide" href="<?= get_site_url() ?>/simulador">
                    <img src="<?= get_template_directory_uri() ?>/assets/card/pet.jpg">
                    <span class="azul-text font-25 title-plans">Pet</span>
                    <div class="in_focus">
                        <span class="font-18 a-patitr cinza-text in_focus-">apartir de <br></span>
                   
                        <div class="flex flex-movel preto-text price-plans">
                            <b class="font-45 in_focus-">R$ 5,00 <br></b>
                            <span class="card-ao-mes">ao mês <br></span>
                        </div>
                        <span class="azul-text font-25 in_focus- tag-plans">Funerais <br></span> 
                        <span class="font-18 cinza-text more-pet">
                            Opções de <strong>sepultamento</strong> ou 
                            <strong>cremação</strong> para cães e gatos<br>
                        </span>                        
                    </div>
                </a>
            </div>
            <div class="space large-hide"></div>
            <img src="<?= get_template_directory_uri() ?>/assets/icon/next.svg" class="cards-prev">
            <img src="<?= get_template_directory_uri() ?>/assets/icon/next.svg" class="cards-next">
        </div>
        <div class="space movel-hide"></div>
        <div class="space"></div>
    </div>
</div>


<div>
    <div class="inner--mini-banner">
        <div class="container">
            <div class="row">
                <div class=" offset-l6 col s12 m12 l6">
                    <h2 class="branco-text titulos movel-title">Não perca essa chance!</h2>
                    <p class="branco-text">O melhor plano de assistencia funeral, muitos beneficios e sem limite de
                        idade! </p>
                    <a href="<?= get_site_url() ?>/na-midia" class="link--home link--mini link-na-midia">
                        Conheça todos os beneficios
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="space"></div>
        <div class="m-slid">
            <div class="row m-rows">
                <div class="col s6 m6 l3 modal-trigger" data-video="G3e4fYN5AOE" onclick="click_video(this)" data-target="modal1">
                    <img class="responsive-img" width="100%" src="<?= get_template_directory_uri() ?>/assets/videos/1-video.png">
                    <span class="azul-text font-16">Tino Júnior chamada no Balanço Geral na Record TV</span>
                </div>
                <div class="col s6 m6 l3 modal-trigger" data-video="rGQO7lM72Yg" onclick="click_video(this)" data-target="modal1">
                    <img class="responsive-img" width="100%" src="<?= get_template_directory_uri() ?>/assets/videos/2-video.png">
                    <span class="azul-text font-16">Pega a dica a nossa querida Isabele Benito</span>
                </div>
                <div class="col s6 m6 l3 modal-trigger" data-video="AA8-DAb7418" onclick="click_video(this)" data-target="modal1">
                    <img class="responsive-img" width="100%" src="<?= get_template_directory_uri() ?>/assets/videos/3-video.png">
                    <span class="azul-text font-16">Chamada da Santa Casa Copacabana no Balanço Geral</span>
                </div>
                <div class="col s6 m6 l3 modal-trigger" data-video="Ac11pWUJla0" onclick="click_video(this)" data-target="modal1">
                    <img class="responsive-img" width="100%" src="<?= get_template_directory_uri() ?>/assets/videos/4-video.png">
                    <span class="azul-text font-16">Santa Casa Copacabana no Balanço Geral RJ</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <iframe id="video_popup" width="100%" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p class="azul-text font-25">Santa Casa Copacabana com você sempre</p>
    </div>
</div>
<div class="space movel-hide"></div>
<div class="space movel-hide"></div>

<div>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l5">
                <div class="space" style="--line:25px"></div>
                <h2 class="azul-text titulos ">Clube de Vantagens</h2>
                <img class="movel-img-vantagens large-hide" src="<?= get_template_directory_uri() ?>/assets/img/clube-vantagens.png" width="100%">
                <div class="w-50 m-w-100">
                    <div class="preto-text font-18 gray-text l-40">
                        Descontos de até 80% em: <br>
                        Consultas <br>
                        Exames <br>
                        Medicamentos <br>
                        Bem estar <br>
                        Serviços <br>
                        Odontologicoa <br>
                        <div class="space" style="--line:30px"></div>
                    </div>
                    <a href="<?= get_site_url() ?>/clube-de-vantagens" class="link--home link--mini">Saiba mais</a>
                </div>
                <div class="space movel-hide"></div>
            </div>
            <div class="col s12 m12 l7">
                <img class="movel-hide" src="<?= get_template_directory_uri() ?>/assets/img/vantages.png" width="100%">
            </div>
        </div>
    </div>
</div>


<div>
    <div class="container">
        <div class="space movel-hide"></div>
        <h2 class="azul-text titulos">Instituições Conveniadas</h2>
        <div class="instituicoes">
            <div class="swiper-container mySwiper carrousel-institution">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img
                            src="<?= get_template_directory_uri() ?>/assets/instituicoes-conveniadas/academia-brasileira-de-letras.jpg"></div>
                    <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/instituicoes-conveniadas/aeronautica.jpg"></div>
                    <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/instituicoes-conveniadas/alm-microsseguradora.jpg"></div>
                    <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/instituicoes-conveniadas/clube-militar.jpg"></div>
                    <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/instituicoes-conveniadas/exercito.jpg"></div>
                    <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/instituicoes-conveniadas/petros.jpg"></div>
                    <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/instituicoes-conveniadas/policia-militar-do-rj.jpg"></div>
                    <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/instituicoes-conveniadas/prefeitura-do-rio.jpg"></div>
                </div>
                <div class="-swiper-button-next movel-hide"></div>
                <div class="-swiper-button-prev movel-hide"></div>
            </div>
        </div>
        <div class="space movel-hide"></div>
        <div class="space large-hide" style="--line:20px"></div>
    </div>
</div>


<div class="agua azul-text">
    <div class="container">
        <div class="space movel-hide"></div>
        <div class="space large-hide" style="--line:20px"></div>
        <h2 class="titulos">Perguntas Frequentes </h2>
        <div class="space movel-hide"></div>
        <div class="space large-hide" style="--line:20px"></div>
        <div class="w-80">
            <div class="sac" onclick="sac_open(this)">
                <div> <span class="font-23"> Plano tem limite de idades? </span> <b></b> </div>
                <div> Não. Sem limite de idade. </div>
            </div>
            <div class="sac" onclick="sac_open(this)">
                <div> <span class="font-23"> É obrigatório o dependente ter algum grau de parentesco? </span>
                    <b></b>
                </div>
                <div> Não. Pode incluir qualquer pessoa no seu plano(amigo, vizinho, etc). </div>
            </div>
            <div class="sac" onclick="sac_open(this)">
                <div> <span class="font-23"> O plano possui alguma carência? </span> <b></b> </div>
                <div> Sim. 0 a 59 anos- 3 meses 60 anos ou + - 6 meses </div>
            </div>
            <div class="sac" onclick="sac_open(this)">
                <div> <span class="font-23"> Realizam a compra de carencia de outra empresa/plano? </span>
                    <b></b>
                </div>
                <div> Sim. Comprovante de pagamento dos últimos 3 meses. </div>
            </div>
            <div class="sac" onclick="sac_open(this)">
                <div> <span class="font-23"> Como funciona o reajuste? </span> <b></b> </div>
                <div> Anual, Pelo índice IGPM. </div>
            </div>
            <div class="sac" onclick="sac_open(this)">
                <div> <span class="font-23"> Alem de plano funeral,vocês oferecem outros beneficios? </span>
                    <b></b>
                </div>
                <div> Um clube de vantagens de excelência. </div>
            </div>
            <div class="sac" onclick="sac_open(this)">
                <div> <span class="font-23"> Tenho algum custo no ato do sepultamento? </span> <b></b> </div>
                <div> Se estiver cumprido carência não terá custo. É importante ressaltar que cobrimos a tarifa de
                    exumação. </div>
            </div>
            <div class="sac" onclick="sac_open(this)">
                <div> <span class="font-23"> Se o pagamento estiver em atraso posso perder minha cobertura? </span>
                    <b></b>
                </div>
                <div> Após 90 dias em atraso, o plano e automaticamente cancelado. </div>
            </div>
        </div>
        <div class="space"></div>
    </div>
</div>

<?php get_footer(); ?>