<?php
use yii\helpers\Html;
/** @var yii\web\View $this */
use frontend\modules\specialsection\assets\AppAsset;
use frontend\modules\specialsection\widgets\MenuSectionsWidget;
AppAsset::register($this);
$this->registerJsFile('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
$this->registerCssFile('@module_specialsection_css/styles.css');
?>
<h1>Сведения об образовательной организации</h1>
<!--Сгенерированные сведения-->
<h3>Выберите подраздел</h3>

<?php

echo MenuSectionsWidget::widget(['type' => MenuSectionsWidget::TYPE_LIST,'items'=> $menuItems]);

?>

<!--Конец сведений-->