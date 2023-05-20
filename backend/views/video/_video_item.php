<?php

/**
 ** @var $model \common\models\Video
 */

use yii\helpers\StringHelper;

?>

<div class="media d-flex align-tems-center">
    <div class="ratio ratio-16x9 mb-3 me-3" style="width:120px">
        <video 
        class="border rounded"
        poster="<?php echo $model->getThumbnailLink() ?>" src="<?php echo $model->getVideoLink() ?>" title="YouTube video" allowfullscreen>
        </video>
    </div>
    <div class="media-body">
        <h6 class="mt-0"><?php echo $model->title ?></h6>
        <p>
            <?php echo StringHelper::truncateWords($model->description, 10) ?>
        </p>
    </div>
</div>