<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbAward */
?>
<div class="tb-award-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'judul',
            'about_id',
        ],
    ]) ?>

</div>
