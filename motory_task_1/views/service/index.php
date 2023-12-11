<?php

use app\models\Service;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ServiceSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
            'attribute' => 'category_id',
            'label' => 'Category name',
            'value' => function ($model) {
                return $model->category->name; // Assuming 'category' is the relation name
            },
        ],
            'iconName',
            [
            'attribute' => 'iconName',
            'format' => 'html', // Set the format to HTML
            'value' => function ($model) {
                // Assuming 'iconName' is the file name or path
                $imagePath = Yii::getAlias('@web') . '/uploads/' . $model->iconName;
                return Html::img($imagePath, ['alt' => 'Icon', 'style' => 'max-width:50px;']);
            },
        ],
            
            'title',
            'title_ar',
            'price',
            'warranty',
            'created_at',
            'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Service $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
