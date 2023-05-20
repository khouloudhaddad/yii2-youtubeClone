<?php

/**
 ** @var $model \common\models\Video
 */

use yii\helpers\StringHelper;
use yii\helpers\Url;

?>

<div class="media d-flex align-tems-center">
    <div class="me-2 flex-inline flex-1">
        <a href="<?php echo Url::to(['/video/update', 'video_id' => $model->video_id]) ?>">
            <div class="ratio ratio-16x9">

                <video class="border rounded" poster="<?php echo $model->getThumbnailLink() ?>" src="<?php echo $model->getVideoLink() ?>" title="YouTube video" allowfullscreen>
                </video>

            </div>
        </a>
    </div>

    <div class="media-body">
        <h6 class="mt-0"><?php echo $model->title ?></h6>
        <p>
            <?php echo StringHelper::truncateWords($model->description, 10) ?>
        </p>
    </div>
</div>