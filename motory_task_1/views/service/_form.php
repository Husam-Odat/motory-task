<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;

// to select category in the form
use yii\helpers\ArrayHelper;
use app\models\Category;

/** @var yii\web\View $this */
/** @var app\models\Service $model */
/** @var yii\widgets\ActiveForm $form */
?>
<style>
    .has-error .help-block {
    color: #a94442;  /* Red color for error messages */
}

.has-success .help-block {
    color: #3c763d;  /* Green color for success messages */
}
</style>

<div class="service-form">
 <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
        'errorCssClass' => 'has-error', // Set the CSS class for error state
        'successCssClass' => 'has-success', // Set the CSS class for success state
    ]); ?>
    

   <?= $form->field($model, 'category_id')->dropDownList(
    ArrayHelper::map(Category::find()->all(), 'id', 'name'),
    [
        'prompt' => 'Select Category', // This is the prompt text for the first option
    ]
) ?>

<?= $form->field($model, 'icon')->fileInput() ?>
    

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'title_ar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'warranty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->hiddenInput()->label(false) ?>

   
    <?= $form->field($model, 'updated_at')->hiddenInput()->label(false) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
