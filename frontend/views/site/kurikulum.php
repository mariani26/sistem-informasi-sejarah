<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="<?= Yii::$app->getHomeUrl(); ?>img/logos/gedungfis.jpg">
        <div class="container pt-3 pb-5 mb-5">
            <div class="row mb-3">
                <div class="col">
                    <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                        <li><a href="index" class="text-decoration-none opacity-hover-8">Home</a></li>
                        <li class="active text-color-primary">Kurikulum</li>
                    </ul>
                    <br>
                    <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Kurikulum</h1>
                </div>
            </div>
        </div>
        <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
            <i class="icons icon-arrow-down font-weight-bold"></i>
        </a>
    </section>

    <div class="container pt-2 d-flex flex-column align-items-center">
        <div class="row justify-content-center pt-4 mt-5">
            <div class="col-lg-12 text-center">

                <p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation text-justify" data-appear-animation="fadeInUpShorter">Penyelenggaraan pembelajaran di Program Studi Pendidikan Sejarah (PSPS) menggunakan kurikulum Merdeka Belajar Kampus Merdeka (MBKM) yang sesuai dengan tuntutan pembelajaran abad 21. Kurikulum PSPS terdiri dari 145 SKS. Kurikulum dirancang berdasarkan evaluasi pelaksanaan kurikulum sebelumnya, prinsip pengembangan kurikulum MBKM, dan sesuai dengan Visi Misi PSPS dengan penciri dalam mendidik calon pendidik Sejarah yang profesional, berwawasan global dan berkearifan lokal. Model pembelajaran yang dikembangkan adalah case based and team based project sehingga terjadi keseimbangan kompetensi mahasiswa dan penilaian pada proses dan hasil belajar. Kurikulum PSPS dapat dilihat pada link berikut:</p>
            </div>
        </div>
        <br><br>
        <a href="http://kurikulum.unp.ac.id/root/kurikulum/4" class="btn btn-primary btn-modern text-uppercase bg-color-hover-dark border-color-hover-dark custom-border-radius">Kurikulum</a>

        <br><br><br>
    </div>
</div>