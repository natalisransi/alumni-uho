<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AlumniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Alumni Jurusan Matematika FMIPA UHO';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumni-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('+ Alumni', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'alumni_id',
            'nim',
            'nama',
            //'tanggal_didaftar',
           // 'lama_tahun',
            // 'lama_bulan',
            // 'ipk_prodi',
            // 'tgl_ujian_mhs_prodi',
            // 'email:email',
            // 'jalur_masuk',
            // 'pembiayaan',
            // 'pembimbing1',
            // 'pembimbing2',
            // 'tempat_lahir',
            // 'tanggal_lahir',
            // 'jenis_kelamin',
             'alamat',
             'no_hp',
            // 'nama_orang_tua',
            // 'alamat_orang_tua',
            // 'nama_sma',
            // 'tahun_tamat_sma',
            // 'nama_periode',
            // 'tanggal_yudisium',
            // 'jenjang',
            // 'judul_ta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
