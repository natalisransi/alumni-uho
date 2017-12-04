<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Alumni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_didaftar')->textInput() ?>

    <?= $form->field($model, 'lama_tahun')->textInput() ?>

    <?= $form->field($model, 'lama_bulan')->textInput() ?>

    <?= $form->field($model, 'ipk_prodi')->textInput() ?>

    <?= $form->field($model, 'tgl_ujian_mhs_prodi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jalur_masuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pembiayaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pembimbing1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pembimbing2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput() ?>

    <?= $form->field($model, 'nama_orang_tua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_orang_tua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_sma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_tamat_sma')->textInput() ?>

    <?= $form->field($model, 'nama_periode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_yudisium')->textInput() ?>

    <?= $form->field($model, 'jenjang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_ta')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
