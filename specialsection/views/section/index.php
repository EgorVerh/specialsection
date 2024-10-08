<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use frontend\modules\specialsection\assets\AppAsset;
AppAsset::register($this);
$this->registerCssFile('@module_specialsection_css/styles.css');
?>
<div class="takedatam">
    <h2 class="h2_center">Редактирование страницы</h2>
    <p>ФГБОУ ВО &laquo;ВГСПУ&raquo;</p>
<!-- Первая форма ввода -->
<form> 
<div class="row margin_row">
<b class="col-md-4 color_col">О полном наименовании образовательной организации</b>
    <div class="form col-md-8"> 
    <textarea class="form-control form_control_margin" name="Textarea1"><?php echo Yii::$app->request->get("Textarea1")?></textarea>
  </div>
</div>
<!-- Конец Первая форма ввода -->

<!-- Вторая форма ввода -->
<div class="row margin_row">
    <b class="col-md-4 color_col">Сокращенное (при наличии) наименование образовательной организации</b>
    <div class="form col-md-8">
    <textarea class="form-control form_control_margin" name="Textarea2"><?php echo Yii::$app->request->get("Textarea2")?></textarea>
  </div>
</div>
<!-- Коненц Вторая форма ввода -->

<!-- Третья форма ввода -->
<div class="row margin_row">
    <b class="col-md-4 color_col">Дата создания образовательной организации</b>
    <div class="form col-md-8">
    <textarea class="form-control form_control_margin" name="Textarea3"><?php echo Yii::$app->request->get("Textarea3")?></textarea>
  </div>
</div>
<!-- Конец Третья форма ввода -->
<div class="form-group form_group_margin">
<?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
</div>
</form>
</div>
<!-- Ссылка ввиде имени -->