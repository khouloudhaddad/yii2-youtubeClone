<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Video $model */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="upload_icon">
            <i class="fa-solid fa-file-arrow-up"></i>
        </div>

        <div class="mt-5 mb-3 text-center">
            <p>Drag and drop a video ou want to upload</p>
            <p class="text-muted">Your video will be private until you publish it</p>
        </div>

        <?php \yii\bootstrap5\ActiveForm::begin([
            'options' => ['enctype'=> 'multipart/form-data']
        ]) ?>

        <button class="btn btn-primary btn-file">
            Select File
            <input type="file" id="videoFile" name="video">
        </button>

        <?php \yii\bootstrap5\ActiveForm::end() ?>
    </div>

<!--    --><?php //= $this->render('_form', [
//        'model' => $model,
//    ]) ?>

</div>
