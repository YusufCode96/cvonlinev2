<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbSkill */
?>
<div class="tb-skill-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_skil',
            'percent',
            'about_id',
        ],
    ]) ?>

</div>
