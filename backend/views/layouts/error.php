<?php
/* @var $this \yii\web\View */

/* @var $content string */

use common\widgets\Alert;
use yii\bootstrap5\Html;

$this->beginContent('@frontend/views/layouts/base.php');
?>
<main role="main" class="auth d-flex h-100">
    <div class="content-wrapper p-3 error_page">
        <div class="container">
            <div class="row align-items-center p-md-5">
                <div class="col-md-6 mb-4">
                    <img class="img-fluid" src="https://static-00.iconduck.com/assets.00/14-location-not-found-illustration-1024x724-ab2fnq2x.png" alt="Error">
                </div>
                <div class="col-md-6">
                    <?= Alert::widget() ?>
                    <?= $content ?>
                    <div class="d-block mt-4">
                        <?= Html::a(Html::tag('i', '', ['class' => 'fa-solid fa-arrow-left']) . ' Back to Homepage ', ['site/index'], ['class' => 'btn-back btn btn-primary', 'title' => 'Back to Homepage']) ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->endContent() ?>