<?php

use yii\bootstrap5\Nav;

?>
<aside class="shadow">
    <?php echo Nav::widget([
        'options' => [
            'class' => 'd-flex flex-column nav-pills'
        ],
        'encodeLabels' => false,
        'items' => [
            [
                'label' => '<i class="fas fa-home"></i> Dashboard',
                'url' => ['/site/index']
            ],
            [
                'label' => '<i class="fas fa-list"></i> Home',
                'url' => ['/video/index']
            ],
            [
                'label' => '<i class="fas fa-history"></i> History',
                'url' => ['/video/history']
            ]
        ]
    ]) ?>
</aside>