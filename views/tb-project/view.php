<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbProject */
?>
<div class="tb-project-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_project',
            'desk_project:ntext',
            'desk2_project:ntext',
            'image1',
            'image2',
            'image3',
            'client_project',
            'team_project',
            'services_project',
            'date_project',
            'about_id',
        ],
    ]) ?>

</div>
