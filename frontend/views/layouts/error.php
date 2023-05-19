<?php
/* @var $this \yii\web\View */

/* @var $content string */

use common\widgets\Alert;

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
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->endContent() ?>