<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbSpecialis */
?>
<div class="tb-specialis-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_spes',
            'desk_spes',
            'icon_spes',
            'about_id',
        ],
    ]) ?>

</div>
