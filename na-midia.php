<?php
/*
Template Name: Na Mídia
*/
?>
<?php get_header(); ?>

    <div class="inner-midia">
        <h1 class="branco-text font-45">Na Mídia</h1>
    </div>
    <div class="inner-forms">
        <div class="container">
            <div class="space"></div>
            <div class="row">
                <div data-video="G3e4fYN5AOE" onclick="click_video(this)" class="col s12 m12 l8 offset-l2 modal-trigger" data-target="modal1">
                    <img class="responsive-img" width="100%" src="<?= get_template_directory_uri() ?>/assets/videos/1-video.png">
                    <span class="azul-text font-16">Tino Júnior chamada no Balanço Geral na Record TV</span>
                    <div class="space"></div>
                </div>
                <div data-video="rGQO7lM72Yg" onclick="click_video(this)" class="col s12 m12 l8 offset-l2 modal-trigger" data-target="modal1">
                    <img class="responsive-img" width="100%" src="<?= get_template_directory_uri() ?>/assets/videos/2-video.png">
                    <span class="azul-text font-16">Pega a dica a nossa querida Isabele Benito</span>
                    <div class="space"></div>
                </div>
                <div data-video="AA8-DAb7418" onclick="click_video(this)" class="col s12 m12 l8 offset-l2 modal-trigger" data-target="modal1">
                    <img class="responsive-img" width="100%" src="<?= get_template_directory_uri() ?>/assets/videos/3-video.png">
                    <span class="azul-text font-16">Chamada da Santa Casa Copacabana no Balanço Geral</span>
                    <div class="space"></div>
                </div>
                <div data-video="Ac11pWUJla0" onclick="click_video(this)" class="col s12 m12 l8 offset-l2 modal-trigger" data-target="modal1">
                    <img class="responsive-img" width="100%" src="<?= get_template_directory_uri() ?>/assets/videos/4-video.png">
                    <span class="azul-text font-16">Santa Casa Copacabana no Balanço Geral RJ</span>
                    <div class="space"></div>
                </div>
            </div>

            <div class="space"></div>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <iframe id="video_popup" width="100%" height="315" src=""
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <p class="azul-text font-25">Santa Casa Copacabana com você sempre</p>
        </div>
    </div>

<?php get_footer(); ?>