<?php
use yii\helpers\Html;
/** @var yii\web\View $this */
use frontend\modules\specialsection\assets\AppAsset;
use frontend\modules\specialsection\widgets\MenuSectionsWidget;
AppAsset::register($this);
$this->registerJsFile('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
$this->registerJsFile('@module_specialsection_js/document.js');
$this->registerCssFile('@module_specialsection_css/styles.css')
    ?>

<head>
    <title>Документы</title>
</head>
<body>
    <?= MenuSectionsWidget::widget(['type' => MenuSectionsWidget::TYPE_SELECT,'items'=> $menuItems]) ?>
    <input type="hidden" id="whatisurl" value=1>
    <h1>Документы</h1>
    <!--Сгенерированные сведения-->
    <form method="post" enctype="multipart/form-data">
        <?php $count_row = 0; ?>
        <h4>Копия устава образовательной организации</h4>
        <?php if (isset($tabledata)) {
            foreach ($tabledata as $table) {
                if ($table["fieldsforms_id"] == 11 && $table["enabled"] == 1) { ?>
                    <div class="row oform_row temporarystyle" value=<?php echo $count_row ?>>
                        <input type="hidden" name="document[<?php echo $count_row ?>][]" value="<?php echo $table["position"] ?>">
                        <input type="hidden" name="document[<?php echo $count_row ?>][]" value=11>
                        <div class="col-sm-11">
                            <label for="document_purpose<?php echo $count_row ?>"> Комментарий</label>
                            <input class="form-control" type="text" name="document[<?php echo $count_row ?>][]"
                                placeholder="Устав; Локальный нормативный акт, регламентирующий режим занятий обучающихся и т.д."
                                value="<?php echo $table["titel"] ?>" required><br>
                            <?php if ($table["data"] == '') { ?>
                                <div><label class="control-label" for="File<?php echo $count_row ?>">Документ для
                                        загрузки</label>
                                    <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                            type="file" id="File<?php echo $count_row ?>" class="form-control file-loading wrong_file"
                                            name="document[<?php echo $count_row ?>]" accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                    <?php } else { ?><input type="file" id="File<?php echo $count_row ?>"
                                            class="form-control file-loading" name="document[<?php echo $count_row ?>]"
                                            accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                <?php } else { ?>
                                    <div class="labeloform"><a class="colorhref" target="_blank"
                                            href="<?php echo $table["data"] ?>">Ссылка на загруженный
                                            файл</a></div>
                                    <div style="margin-top:20px;"><label class="control-label"
                                            for="File<?php echo $count_row ?>">Заменить загруженный файл с сохранением ссылки</label>
                                        <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                type="file" id="File<?php echo $count_row ?>" class="form-control file-loading wrong_file"
                                                name="document[<?php echo $count_row ?>]" accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                        <?php } else { ?><input type="file" id="File<?php echo $count_row ?>"
                                                class="form-control file-loading" name="document[<?php echo $count_row ?>]"
                                                accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div>
                                <button type="button" id="delrow" class="btn btn-danger delbutton" tabindex="-1"
                                    value='/delete_document'>X</button>
                                <button type="button" id="hide_button" value='/delete_document' class="hidebutton btn delbutton"
                                    tabindex="-1" style="background-color: #f5f5f5;"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <?php $count_row++;
                }
            }
            ?>
                <div class="rightbuttonposition"><button type="button" id="add_row" class="btn btn-success" value=11>+
                        Добавить</button></div>
                    <h4>Копия локального нормативного акта, регламентирующего правила приема обучающихся</h4>
                    <?php foreach ($tabledata as $table) {
                        if ($table["fieldsforms_id"] == 13 && $table["enabled"] == 1) { ?>
                            <div class="row oform_row temporarystyle" value=<?php echo $count_row ?>>
                                <input type="hidden" name="document[<?php echo $count_row ?>][]"
                                    value="<?php echo $table["position"] ?>">
                                <input type="hidden" name="document[<?php echo $count_row ?>][]" value=13>
                                <div class="col-sm-11">
                                    <label for="document_purpose<?php echo $count_row ?>"> Комментарий</label>
                                    <input class="form-control" type="text" name="document[<?php echo $count_row ?>][]"
                                        placeholder="Устав; Локальный нормативный акт, регламентирующий режим занятий обучающихся и т.д."
                                        value="<?php echo $table["titel"] ?>" required><br>
                                    <?php if ($table["data"] == '') { ?>
                                        <div><label class="control-label" for="File<?php echo $count_row ?>">Документ для
                                                загрузки</label>
                                            <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                    type="file" id="File<?php echo $count_row ?>"
                                                    class="form-control file-loading wrong_file" name="document[<?php echo $count_row ?>]"
                                                    accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                            <?php } else { ?><input type="file" id="File<?php echo $count_row ?>"
                                                    class="form-control file-loading" name="document[<?php echo $count_row ?>]"
                                                    accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                        <?php } else { ?>
                                            <div class="labeloform"><a class="colorhref" target="_blank"
                                                    href="<?php echo $table["data"] ?>">Ссылка на загруженный
                                                    файл</a></div>
                                            <div style="margin-top:20px;"><label class="control-label"
                                                    for="File<?php echo $count_row ?>">Заменить загруженный файл с сохранением ссылки</label>
                                                <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                        type="file" id="File<?php echo $count_row ?>"
                                                        class="form-control file-loading wrong_file"
                                                        name="document[<?php echo $count_row ?>]"
                                                        accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                <?php } else { ?><input type="file" id="File<?php echo $count_row ?>"
                                                        class="form-control file-loading" name="document[<?php echo $count_row ?>]"
                                                        accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" id="delrow" class="btn btn-danger delbutton" tabindex="-1"
                                            value='/delete_document'>X</button>
                                        <button type="button" id="hide_button" value='/delete_document'
                                            class="btn delbutton hidebutton" tabindex="-1"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                                <?php $count_row++;
                        }
                    }
                    ?>
                        <div class="rightbuttonposition"><button type="button" id="add_row" class="btn btn-success"
                                value=13>+
                                Добавить</button></div>
                        <h4>Копия локального нормативного акта, регламентирующего режим занятий обучающихся</h4>
                        <?php foreach ($tabledata as $table) {
                            if ($table["fieldsforms_id"] == 14 && $table["enabled"] == 1) { ?>
                                <div class="row oform_row temporarystyle" value=<?php echo $count_row ?>>
                                    <input type="hidden" name="document[<?php echo $count_row ?>][]"
                                        value="<?php echo $table["position"] ?>">
                                    <input type="hidden" name="document[<?php echo $count_row ?>][]" value=14>
                                    <div class="col-sm-11">
                                        <label for="document_purpose<?php echo $count_row ?>"> Комментарий</label>
                                        <input class="form-control" type="text" name="document[<?php echo $count_row ?>][]"
                                            placeholder="Устав; Локальный нормативный акт, регламентирующий режим занятий обучающихся и т.д."
                                            value="<?php echo $table["titel"] ?>" required><br>
                                        <?php if ($table["data"] == '') { ?>
                                            <div><label class="control-label" for="File<?php echo $count_row ?>">Документ для
                                                    загрузки</label>
                                                <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                        type="file" id="File<?php echo $count_row ?>"
                                                        class="form-control file-loading wrong_file"
                                                        name="document[<?php echo $count_row ?>]"
                                                        accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                <?php } else { ?><input type="file" id="File<?php echo $count_row ?>"
                                                        class="form-control file-loading" name="document[<?php echo $count_row ?>]"
                                                        accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                            <?php } else { ?>
                                                <div class="labeloform"><a class="colorhref" target="_blank"
                                                        href="<?php echo $table["data"] ?>">Ссылка на загруженный
                                                        файл</a></div>
                                                <div style="margin-top:20px;"><label class="control-label"
                                                        for="File<?php echo $count_row ?>">Заменить загруженный файл с сохранением ссылки</label>
                                                    <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                            type="file" id="File<?php echo $count_row ?>"
                                                            class="form-control file-loading wrong_file"
                                                            name="document[<?php echo $count_row ?>]"
                                                            accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                    <?php } else { ?><input type="file" id="File<?php echo $count_row ?>"
                                                            class="form-control file-loading" name="document[<?php echo $count_row ?>]"
                                                            accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div>
                                            <button type="button" id="delrow" class="btn btn-danger delbutton" tabindex="-1"
                                                value='/delete_document'>X</button>
                                            <button type="button" id="hide_button" value='/delete_document'
                                                class="btn delbutton hidebutton" tabindex="-1"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <?php $count_row++;
                            }
                        }
                        ?>
                            <div class="rightbuttonposition"><button type="button" id="add_row" class="btn btn-success"
                                    value=14>+ Добавить</button></div>
                            <h4>Копия локального нормативного акта, регламентирующего формы, периодичность и порядок
                                текущего контроля
                                успеваемости и промежуточной аттестации обучающихся</h4>
                            <?php foreach ($tabledata as $table) {
                                if ($table["fieldsforms_id"] == 15 && $table["enabled"] == 1) { ?>
                                    <div class="row oform_row temporarystyle" value=<?php echo $count_row ?>>
                                        <input type="hidden" name="document[<?php echo $count_row ?>][]"
                                            value="<?php echo $table["position"] ?>">
                                        <input type="hidden" name="document[<?php echo $count_row ?>][]" value=15>
                                        <div class="col-sm-11">
                                            <label for="document_purpose<?php echo $count_row ?>"> Комментарий</label>
                                            <input class="form-control" type="text" name="document[<?php echo $count_row ?>][]"
                                                placeholder="Устав; Локальный нормативный акт, регламентирующий режим занятий обучающихся и т.д."
                                                value="<?php echo $table["titel"] ?>" required><br>
                                            <?php if ($table["data"] == '') { ?>
                                                <div><label class="control-label" for="File<?php echo $count_row ?>">Документ для
                                                        загрузки</label>
                                                    <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                            type="file" id="File<?php echo $count_row ?>"
                                                            class="form-control file-loading wrong_file"
                                                            name="document[<?php echo $count_row ?>]"
                                                            accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                    <?php } else { ?><input type="file" id="File<?php echo $count_row ?>"
                                                            class="form-control file-loading" name="document[<?php echo $count_row ?>]"
                                                            accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                <?php } else { ?>
                                                    <div class="labeloform"><a class="colorhref" target="_blank"
                                                            href="<?php echo $table["data"] ?>">Ссылка на загруженный
                                                            файл</a></div>
                                                    <div style="margin-top:20px;"><label class="control-label"
                                                            for="File<?php echo $count_row ?>">Заменить загруженный файл с сохранением ссылки</label>
                                                        <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                type="file" id="File<?php echo $count_row ?>"
                                                                class="form-control file-loading wrong_file"
                                                                name="document[<?php echo $count_row ?>]"
                                                                accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                        <?php } else { ?><input type="file" id="File<?php echo $count_row ?>"
                                                                class="form-control file-loading" name="document[<?php echo $count_row ?>]"
                                                                accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="button" id="delrow" class="btn btn-danger delbutton" tabindex="-1"
                                                    value='/delete_document'>X</button>
                                                <button type="button" id="hide_button" value='/delete_document'
                                                    class="btn delbutton hidebutton" tabindex="-1"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                        <?php $count_row++;
                                }
                            }
                            ?>
                                <div class="rightbuttonposition"><button type="button" id="add_row" class="btn btn-success"
                                        value=15>+ Добавить</button></div>
                                <h4>Копия локального нормативного акта, регламентирующего порядок и основания перевода,
                                    отчисления и
                                    восстановления обучающихся</h4>
                                <?php foreach ($tabledata as $table) {
                                    if ($table["fieldsforms_id"] == 16 && $table["enabled"] == 1) { ?>
                                        <div class="row oform_row temporarystyle" value=<?php echo $count_row ?>>
                                            <input type="hidden" name="document[<?php echo $count_row ?>][]"
                                                value="<?php echo $table["position"] ?>">
                                            <input type="hidden" name="document[<?php echo $count_row ?>][]" value=16>
                                            <div class="col-sm-11">
                                                <label for="document_purpose<?php echo $count_row ?>"> Комментарий</label>
                                                <input class="form-control" type="text" name="document[<?php echo $count_row ?>][]"
                                                    placeholder="Устав; Локальный нормативный акт, регламентирующий режим занятий обучающихся и т.д."
                                                    value="<?php echo $table["titel"] ?>" required><br>
                                                <?php if ($table["data"] == '') { ?>
                                                    <div><label class="control-label" for="File<?php echo $count_row ?>">Документ для
                                                            загрузки</label>
                                                        <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                type="file" id="File<?php echo $count_row ?>"
                                                                class="form-control file-loading wrong_file"
                                                                name="document[<?php echo $count_row ?>]"
                                                                accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                        <?php } else { ?><input type="file" id="File<?php echo $count_row ?>"
                                                                class="form-control file-loading" name="document[<?php echo $count_row ?>]"
                                                                accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                    <?php } else { ?>
                                                        <div class="labeloform"><a class="colorhref" target="_blank"
                                                                href="<?php echo $table["data"] ?>">Ссылка на загруженный
                                                                файл</a></div>
                                                        <div style="margin-top:20px;"><label class="control-label"
                                                                for="File<?php echo $count_row ?>">Заменить загруженный файл с сохранением ссылки</label>
                                                            <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                    type="file" id="File<?php echo $count_row ?>"
                                                                    class="form-control file-loading wrong_file"
                                                                    name="document[<?php echo $count_row ?>]"
                                                                    accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                            <?php } else { ?><input type="file" id="File<?php echo $count_row ?>"
                                                                    class="form-control file-loading"
                                                                    name="document[<?php echo $count_row ?>]"
                                                                    accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type="button" id="delrow" class="btn btn-danger delbutton" tabindex="-1"
                                                        value='/delete_document'>X</button>
                                                    <button type="button" id="hide_button" value='/delete_document'
                                                        class="btn delbutton hidebutton" tabindex="-1"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                            <?php $count_row++;
                                    }
                                }
                                ?>
                                    <div class="rightbuttonposition"><button type="button" id="add_row"
                                            class="btn btn-success" value=16>+ Добавить</button></div>
                                    <h4>Копия локального нормативного акта, регламентирующего порядок оформления
                                        возникновения, приостановления и
                                        прекращения отношений между образовательной организацией и обучающимися и (или)
                                        родителями (законными
                                        представителями) несовершеннолетних обучающихся</h4>
                                    <?php foreach ($tabledata as $table) {
                                        if ($table["fieldsforms_id"] == 17 && $table["enabled"] == 1) { ?>
                                            <div class="row oform_row temporarystyle" value=<?php echo $count_row ?>>
                                                <input type="hidden" name="document[<?php echo $count_row ?>][]"
                                                    value="<?php echo $table["position"] ?>">
                                                <input type="hidden" name="document[<?php echo $count_row ?>][]" value=17>
                                                <div class="col-sm-11">
                                                    <label for="document_purpose<?php echo $count_row ?>"> Назначение
                                                        докумета</label>
                                                    <input class="form-control" type="text"
                                                        name="document[<?php echo $count_row ?>][]"
                                                        placeholder="Устав; Локальный нормативный акт, регламентирующий режим занятий обучающихся и т.д."
                                                        value="<?php echo $table["titel"] ?>" required><br>
                                                    <?php if ($table["data"] == '') { ?>
                                                        <div><label class="control-label" for="File<?php echo $count_row ?>">Документ
                                                                для
                                                                загрузки</label>
                                                            <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                    type="file" id="File<?php echo $count_row ?>"
                                                                    class="form-control file-loading wrong_file"
                                                                    name="document[<?php echo $count_row ?>]"
                                                                    accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                            <?php } else { ?><input type="file" id="File<?php echo $count_row ?>"
                                                                    class="form-control file-loading"
                                                                    name="document[<?php echo $count_row ?>]"
                                                                    accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                        <?php } else { ?>
                                                            <div class="labeloform"><a class="colorhref" target="_blank"
                                                                    href="<?php echo $table["data"] ?>">Ссылка на загруженный
                                                                    файл</a></div>
                                                            <div style="margin-top:20px;"><label class="control-label"
                                                                    for="File<?php echo $count_row ?>">Заменить загруженный файл с сохранением ссылки</label>
                                                                <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                        type="file" id="File<?php echo $count_row ?>"
                                                                        class="form-control file-loading wrong_file"
                                                                        name="document[<?php echo $count_row ?>]"
                                                                        accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                <?php } else { ?><input type="file" id="File<?php echo $count_row ?>"
                                                                        class="form-control file-loading"
                                                                        name="document[<?php echo $count_row ?>]"
                                                                        accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="delrow" class="btn btn-danger delbutton"
                                                            tabindex="-1" value='/delete_document'>X</button>
                                                        <button type="button" id="hide_button" value='/delete_document'
                                                            class="btn delbutton hidebutton" tabindex="-1"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <?php $count_row++;
                                        }
                                    }
                                    ?>
                                        <div class="rightbuttonposition"><button type="button" id="add_row"
                                                class="btn btn-success" value=17>+ Добавить</button></div>
                                        <h4>Копия правил внутреннего распорядка обучающихся</h4>
                                        <?php foreach ($tabledata as $table) {
                                            if ($table["fieldsforms_id"] == 18 && $table["enabled"] == 1) { ?>
                                                <div class="row oform_row temporarystyle" value=<?php echo $count_row ?>>
                                                    <input type="hidden" name="document[<?php echo $count_row ?>][]"
                                                        value="<?php echo $table["position"] ?>">
                                                    <input type="hidden" name="document[<?php echo $count_row ?>][]" value=18>
                                                    <div class="col-sm-11">
                                                        <label for="document_purpose<?php echo $count_row ?>"> Назначение
                                                            докумета</label>
                                                        <input class="form-control" type="text"
                                                            name="document[<?php echo $count_row ?>][]"
                                                            placeholder="Устав; Локальный нормативный акт, регламентирующий режим занятий обучающихся и т.д."
                                                            value="<?php echo $table["titel"] ?>" required><br>
                                                        <?php if ($table["data"] == '') { ?>
                                                            <div><label class="control-label"
                                                                    for="File<?php echo $count_row ?>">Документ для
                                                                    загрузки</label>
                                                                <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                        type="file" id="File<?php echo $count_row ?>"
                                                                        class="form-control file-loading wrong_file"
                                                                        name="document[<?php echo $count_row ?>]"
                                                                        accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                <?php } else { ?><input type="file" id="File<?php echo $count_row ?>"
                                                                        class="form-control file-loading"
                                                                        name="document[<?php echo $count_row ?>]"
                                                                        accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                            <?php } else { ?>
                                                                <div class="labeloform"><a class="colorhref" target="_blank"
                                                                        href="<?php echo $table["data"] ?>">Ссылка на загруженный
                                                                        файл</a></div>
                                                                <div style="margin-top:20px;"><label class="control-label"
                                                                        for="File<?php echo $count_row ?>">Заменить загруженный файл с сохранением ссылки</label>
                                                                    <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                            type="file" id="File<?php echo $count_row ?>"
                                                                            class="form-control file-loading wrong_file"
                                                                            name="document[<?php echo $count_row ?>]"
                                                                            accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                    <?php } else { ?><input type="file"
                                                                            id="File<?php echo $count_row ?>"
                                                                            class="form-control file-loading"
                                                                            name="document[<?php echo $count_row ?>]"
                                                                            accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <button type="button" id="delrow" class="btn btn-danger delbutton"
                                                                tabindex="-1" value='/delete_document'>X</button>
                                                            <button type="button" id="hide_button" value='/delete_document'
                                                                class="btn delbutton hidebutton" tabindex="-1"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></button>
                                                        </div>
                                                    </div>
                                                    <?php $count_row++;
                                            }
                                        }
                                        ?>
                                            <div class="rightbuttonposition"><button type="button" id="add_row"
                                                    class="btn btn-success" value=18>+
                                                    Добавить</button></div>
                                            <h4>Копия правил внутреннего трудового распорядка</h4>
                                            <?php foreach ($tabledata as $table) {
                                                if ($table["fieldsforms_id"] == 19 && $table["enabled"] == 1) { ?>
                                                    <div class="row oform_row temporarystyle" value=<?php echo $count_row ?>>
                                                        <input type="hidden" name="document[<?php echo $count_row ?>][]"
                                                            value="<?php echo $table["position"] ?>">
                                                        <input type="hidden" name="document[<?php echo $count_row ?>][]" value=19>
                                                        <div class="col-sm-11">
                                                            <label for="document_purpose<?php echo $count_row ?>"> Назначение
                                                                докумета</label>
                                                            <input class="form-control" type="text"
                                                                name="document[<?php echo $count_row ?>][]"
                                                                placeholder="Устав; Локальный нормативный акт, регламентирующий режим занятий обучающихся и т.д."
                                                                value="<?php echo $table["titel"] ?>" required><br>
                                                            <?php if ($table["data"] == '') { ?>
                                                                <div><label class="control-label"
                                                                        for="File<?php echo $count_row ?>">Документ для
                                                                        загрузки</label>
                                                                    <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                            type="file" id="File<?php echo $count_row ?>"
                                                                            class="form-control file-loading wrong_file"
                                                                            name="document[<?php echo $count_row ?>]"
                                                                            accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                    <?php } else { ?><input type="file"
                                                                            id="File<?php echo $count_row ?>"
                                                                            class="form-control file-loading"
                                                                            name="document[<?php echo $count_row ?>]"
                                                                            accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                                <?php } else { ?>
                                                                    <div class="labeloform"><a class="colorhref" target="_blank"
                                                                            href="<?php echo $table["data"] ?>">Ссылка на загруженный
                                                                            файл</a></div>
                                                                    <div style="margin-top:20px;"><label class="control-label"
                                                                            for="File<?php echo $count_row ?>">Заменить загруженный файл с сохранением ссылки</label>
                                                                        <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                                type="file" id="File<?php echo $count_row ?>"
                                                                                class="form-control file-loading wrong_file"
                                                                                name="document[<?php echo $count_row ?>]"
                                                                                accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                        <?php } else { ?><input type="file"
                                                                                id="File<?php echo $count_row ?>"
                                                                                class="form-control file-loading"
                                                                                name="document[<?php echo $count_row ?>]"
                                                                                accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <button type="button" id="delrow" class="btn btn-danger delbutton"
                                                                    tabindex="-1" value='/delete_document'>X</button>
                                                                <button type="button" id="hide_button" value='/delete_document'
                                                                    class="btn delbutton hidebutton" tabindex="-1"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></button>
                                                            </div>
                                                        </div>
                                                        <?php $count_row++;
                                                }
                                            }
                                            ?>
                                                <div class="rightbuttonposition"><button type="button" id="add_row"
                                                        class="btn btn-success" value=19>+ Добавить</button></div>
                                                <h4>Копия коллективного договора</h4>
                                                <?php foreach ($tabledata as $table) {
                                                    if ($table["fieldsforms_id"] == 20 && $table["enabled"] == 1) { ?>
                                                        <div class="row oform_row temporarystyle" value=<?php echo $count_row ?>>
                                                            <input type="hidden" name="document[<?php echo $count_row ?>][]"
                                                                value="<?php echo $table["position"] ?>">
                                                            <input type="hidden" name="document[<?php echo $count_row ?>][]"
                                                                value=20>
                                                            <div class="col-sm-11">
                                                                <label for="document_purpose<?php echo $count_row ?>"> Назначение
                                                                    докумета</label>
                                                                <input class="form-control" type="text"
                                                                    name="document[<?php echo $count_row ?>][]"
                                                                    placeholder="Устав; Локальный нормативный акт, регламентирующий режим занятий обучающихся и т.д."
                                                                    value="<?php echo $table["titel"] ?>" required><br>
                                                                <?php if ($table["data"] == '') { ?>
                                                                    <div><label class="control-label"
                                                                            for="File<?php echo $count_row ?>">Документ для
                                                                            загрузки</label>
                                                                        <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                                type="file" id="File<?php echo $count_row ?>"
                                                                                class="form-control file-loading wrong_file"
                                                                                name="document[<?php echo $count_row ?>]"
                                                                                accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                        <?php } else { ?><input type="file"
                                                                                id="File<?php echo $count_row ?>"
                                                                                class="form-control file-loading"
                                                                                name="document[<?php echo $count_row ?>]"
                                                                                accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                                    <?php } else { ?>
                                                                        <div class="labeloform"><a class="colorhref" target="_blank"
                                                                                href="<?php echo $table["data"] ?>">Ссылка на
                                                                                загруженный
                                                                                файл</a></div>
                                                                        <div style="margin-top:20px;"><label class="control-label"
                                                                                for="File<?php echo $count_row ?>">Заменить загруженный файл с сохранением ссылки</label>
                                                                            <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                                    type="file" id="File<?php echo $count_row ?>"
                                                                                    class="form-control file-loading wrong_file"
                                                                                    name="document[<?php echo $count_row ?>]"
                                                                                    accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                            <?php } else { ?><input type="file"
                                                                                    id="File<?php echo $count_row ?>"
                                                                                    class="form-control file-loading"
                                                                                    name="document[<?php echo $count_row ?>]"
                                                                                    accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <button type="button" id="delrow"
                                                                        class="btn btn-danger delbutton" tabindex="-1"
                                                                        value='/delete_document'>X</button>
                                                                    <button type="button" id="hide_button" value='/delete_document'
                                                                        class="btn delbutton hidebutton" tabindex="-1"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></button>
                                                                </div>
                                                            </div>
                                                            <?php $count_row++;
                                                    }
                                                }
                                                ?>
                                                    <div class="rightbuttonposition"><button type="button" id="add_row"
                                                            class="btn btn-success" value=20>+ Добавить</button></div>
                                                    <h4>Отчет о результатах самообследования</h4>
                                                    <?php foreach ($tabledata as $table) {
                                                        if ($table["fieldsforms_id"] == 21 && $table["enabled"] == 1) { ?>
                                                            <div class="row oform_row temporarystyle" value=<?php echo $count_row ?>>
                                                                <input type="hidden" name="document[<?php echo $count_row ?>][]"
                                                                    value="<?php echo $table["position"] ?>">
                                                                <input type="hidden" name="document[<?php echo $count_row ?>][]"
                                                                    value=21>
                                                                <div class="col-sm-11">
                                                                    <label for="document_purpose<?php echo $count_row ?>">
                                                                        Комментарий</label>
                                                                    <input class="form-control" type="text"
                                                                        name="document[<?php echo $count_row ?>][]"
                                                                        placeholder="Устав; Локальный нормативный акт, регламентирующий режим занятий обучающихся и т.д."
                                                                        value="<?php echo $table["titel"] ?>" required><br>
                                                                    <?php if ($table["data"] == '') { ?>
                                                                        <div><label class="control-label"
                                                                                for="File<?php echo $count_row ?>">Документ для
                                                                                загрузки</label>
                                                                            <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                                    type="file" id="File<?php echo $count_row ?>"
                                                                                    class="form-control file-loading wrong_file"
                                                                                    name="document[<?php echo $count_row ?>]"
                                                                                    accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                            <?php } else { ?><input type="file"
                                                                                    id="File<?php echo $count_row ?>"
                                                                                    class="form-control file-loading"
                                                                                    name="document[<?php echo $count_row ?>]"
                                                                                    accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls"><?php } ?>
                                                                        <?php } else { ?>
                                                                            <div class="labeloform"><a class="colorhref" target="_blank"
                                                                                    href="<?php echo $table["data"] ?>">Ссылка на
                                                                                    загруженный
                                                                                    файл</a></div>
                                                                            <div style="margin-top:20px;"><label class="control-label"
                                                                                    for="File<?php echo $count_row ?>">Заменить загруженный файл с сохранением ссылки</label>
                                                                                <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                                        type="file" id="File<?php echo $count_row ?>"
                                                                                        class="form-control file-loading wrong_file"
                                                                                        name="document[<?php echo $count_row ?>]"
                                                                                        accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                                <?php } else { ?><input type="file"
                                                                                        id="File<?php echo $count_row ?>"
                                                                                        class="form-control file-loading"
                                                                                        name="document[<?php echo $count_row ?>]"
                                                                                        accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <button type="button" id="delrow"
                                                                            class="btn btn-danger delbutton" tabindex="-1"
                                                                            value='/delete_document'>X</button>
                                                                        <button type="button" id="hide_button"
                                                                            value='/delete_document'
                                                                            class="btn delbutton hidebutton" tabindex="-1"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></button>
                                                                    </div>
                                                                </div>
                                                                <?php $count_row++;
                                                        }
                                                    }
                                                    ?>
                                                        <div class="rightbuttonposition"><button type="button" id="add_row"
                                                                class="btn btn-success" value=21>+ Добавить</button></div>
                                                        <h4>Предписания органов, осуществляющих государственный контроль
                                                            (надзор) в сфере образования</h4>
                                                        <?php foreach ($tabledata as $table) {
                                                            if ($table["fieldsforms_id"] == 22 && $table["enabled"] == 1) { ?>
                                                                <div class="row oform_row temporarystyle" value=<?php echo $count_row ?>>
                                                                    <input type="hidden" name="document[<?php echo $count_row ?>][]"
                                                                        value="<?php echo $table["position"] ?>">
                                                                    <input type="hidden" name="document[<?php echo $count_row ?>][]"
                                                                        value=22>
                                                                    <div class="col-sm-11">
                                                                        <label for="document_purpose<?php echo $count_row ?>">
                                                                            Комментарий</label>
                                                                        <input class="form-control" type="text"
                                                                            name="document[<?php echo $count_row ?>][]"
                                                                            placeholder="Устав; Локальный нормативный акт, регламентирующий режим занятий обучающихся и т.д."
                                                                            value="<?php echo $table["titel"] ?>" required><br>
                                                                        <?php if ($table["data"] == '') { ?>
                                                                            <div><label class="control-label"
                                                                                    for="File<?php echo $count_row ?>">Документ для
                                                                                    загрузки</label>
                                                                                <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                                        type="file" id="File<?php echo $count_row ?>"
                                                                                        class="form-control file-loading wrong_file"
                                                                                        name="document[<?php echo $count_row ?>]"
                                                                                        accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                                <?php } else { ?><input type="file"
                                                                                        id="File<?php echo $count_row ?>"
                                                                                        class="form-control file-loading"
                                                                                        name="document[<?php echo $count_row ?>]"
                                                                                        accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                                <?php } ?>
                                                                            <?php } else { ?>
                                                                                <div class="labeloform"><a class="colorhref"
                                                                                        target="_blank"
                                                                                        href="<?php echo $table["data"] ?>">Ссылка на
                                                                                        загруженный
                                                                                        файл</a></div>
                                                                                <div style="margin-top:20px;"><label
                                                                                        class="control-label"
                                                                                        for="File<?php echo $count_row ?>">Заменить загруженный файл с сохранением ссылки</label>
                                                                                    <?php if (isset($position_wrong) && in_array($table["position"], $position_wrong)) { ?><input
                                                                                            type="file" id="File<?php echo $count_row ?>"
                                                                                            class="form-control file-loading wrong_file"
                                                                                            name="document[<?php echo $count_row ?>]"
                                                                                            accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                                    <?php } else { ?><input type="file"
                                                                                            id="File<?php echo $count_row ?>"
                                                                                            class="form-control file-loading"
                                                                                            name="document[<?php echo $count_row ?>]"
                                                                                            accept=".jpeg,.jpg,.png,.doc,.pdf,.csv,.xls">
                                                                                    <?php } ?>
                                                                                <?php } ?>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <button type="button" id="delrow"
                                                                                class="btn btn-danger delbutton" tabindex="-1"
                                                                                value='/delete_document'>X</button>
                                                                            <button type="button" id="hide_button"
                                                                                value='/delete_document'
                                                                                class="btn delbutton hidebutton" tabindex="-1"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <?php $count_row++;
                                                            }
                                                        }
                                                    }
                                                        ?>
                                                            <div class="rightbuttonposition"><button type="button"
                                                                    id="add_row" class="btn btn-success" value=22>+
                                                                    Добавить</button></div>

                                                            <div class="form-group" style="margin-top:10px;">
                                                                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
                                                            </div>
                                                            <?php echo Html::hiddenInput(\Yii::$app->getRequest()->csrfParam, \Yii::$app->getRequest()->getCsrfToken(), []) ?>
    </form>
    <input type="hidden" id="count_row" value=<?php echo $count_row ?>>
</body>
<!--Конец сведений-->