<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Video $model */
/** @var yii\widgets\ActiveForm $form */
\backend\assets\TagsInputAsset::register($this);
?>

<div class="video-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <div class="row">
        <div class="col-sm-8">
            <?php echo $form->errorSummary($model) ?>
            <div class="mb-3">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="mb-3">
                <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
            </div>

            <div class="form-group mb-3">
                <label for="thumbnail"><?php echo $model->attributeLabels()['thumbnail'] ?></label>
                <div class="input-group">
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                    <label class="input-group-text" for="thumbnail">Upload</label>
                </div>
            </div>

            <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-sm-4">
            <div class="ratio ratio-16x9 mb-3">
                <video poster="<?php echo $model->getThumbnailLink() ?>" src="<?php echo $model->getVideoLink() ?>" title="YouTube video" controls allowfullscreen>
                </video>
            </div>
            <div class="mb-3">
                <a href="<?php echo $model->getVideoLink() ?>">
                    Open Video
                </a>
            </div>

            <div>
                <span class="text-muted">Video Name</span>
                <?php echo $model->video_name ?>
            </div>

            <?= $form
                ->field($model, 'status')
                ->label('Status')
                ->dropDownList(
                    $model->getStatusLabels(),
                    [
                        'prompt' => 'Choose ...',
                        'class' => 'form-select',

                        'options' =>
                        [
                            $model->getStatus() => ['selected' => true]
                        ]

                    ]
                )
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'video_id')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-4">
            <?= $form->field($model, 'video_name')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'has_thumbnail')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'created_by')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'created_at')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'updated_at')->textInput() ?>
        </div>
    </div>

    <div class="form-group my-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>