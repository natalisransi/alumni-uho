<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AlumniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumni-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'alumni_id') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'tanggal_didaftar') ?>

    <?= $form->field($model, 'lama_tahun') ?>

    <?php // echo $form->field($model, 'lama_bulan') ?>

    <?php // echo $form->field($model, 'ipk_prodi') ?>

    <?php // echo $form->field($model, 'tgl_ujian_mhs_prodi') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'jalur_masuk') ?>

    <?php // echo $form->field($model, 'pembiayaan') ?>

    <?php // echo $form->field($model, 'pembimbing1') ?>

    <?php // echo $form->field($model, 'pembimbing2') ?>

    <?php // echo $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'jenis_kelamin') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'no_hp') ?>

    <?php // echo $form->field($model, 'nama_orang_tua') ?>

    <?php // echo $form->field($model, 'alamat_orang_tua') ?>

    <?php // echo $form->field($model, 'nama_sma') ?>

    <?php // echo $form->field($model, 'tahun_tamat_sma') ?>

    <?php // echo $form->field($model, 'nama_periode') ?>

    <?php // echo $form->field($model, 'tanggal_yudisium') ?>

    <?php // echo $form->field($model, 'jenjang') ?>

    <?php // echo $form->field($model, 'judul_ta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
