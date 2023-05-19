<?php

use yii\bootstrap5\Breadcrumbs;
/* @var $this \yii\web\View */

/* @var $content string */

use common\widgets\Alert;

$this->beginContent('@frontend/views/layouts/base.php');
?>
<!-- header section -->
<?php echo $this->render('_header') ?>
<main role="main" class="d-flex h-100">
    <!-- sidebar section -->
    <?php echo $this->render('_sidebar') ?>
    <div class="content-wrapper p-3">
        <?= Breadcrumbs::widget([
            'homeLink' => [
                'label' => '<i class="fa fa-home">&nbsp;</i>' . Yii::t('yii', 'Home'),
                'url' => Yii::$app->homeUrl,
                'encode' => false // Requested feature
            ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php $this->endContent() ?>