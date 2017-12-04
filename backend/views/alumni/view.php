<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Alumni */

$this->title = $model->alumni_id;
$this->params['breadcrumbs'][] = ['label' => 'Alumnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumni-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->alumni_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->alumni_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'alumni_id',
            'nim',
            'nama',
            'tanggal_didaftar',
            'lama_tahun',
            'lama_bulan',
            'ipk_prodi',
            'tgl_ujian_mhs_prodi',
            'email:email',
            'jalur_masuk',
            'pembiayaan',
            'pembimbing1',
            'pembimbing2',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'alamat',
            'no_hp',
            'nama_orang_tua',
            'alamat_orang_tua',
            'nama_sma',
            'tahun_tamat_sma',
            'nama_periode',
            'tanggal_yudisium',
            'jenjang',
            'judul_ta',
        ],
    ]) ?>

</div>
