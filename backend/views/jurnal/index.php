<?php

use backend\models\Jurnal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\JurnalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jurnals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurnal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jurnal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jurnal',
            'judul_jurnal',
            'tahun',
            'deskripsi',
            'jurnal_link',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Jurnal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_jurnal' => $model->id_jurnal]);
                 }
            ],
        ],
    ]); ?>


</div>
