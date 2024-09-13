<?php

namespace frontend\modules\specialsection;


use Yii\base\BootstrapInterface;
/**
 * newmodules module definition class
 */
class SpecialSection extends \yii\base\Module implements BootstrapInterface
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'frontend\modules\specialsection\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        \Yii::setAlias('@modulestakedatamroot', '/home/vagrant/test/portal_local_repo/app/frontend/modules/specialsection/public');
        \Yii::setAlias('@modulestakedatamscript','@web/assets/92b8fded/js');
        \Yii::setAlias('@modulestakedatamcss','@web/assets/92b8fded/css');
        // custom initialization code goes here
    }
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
        '/delete_paid_edu'                                         => 'specialsection/section/deletepaidedu',
        '/delete_grants'                                           => 'specialsection/section/deletegrants',
        '/delete_document'                                         => 'specialsection/section/deletedocument',
        '/delete_inter'                                            => 'specialsection/section/deleteinter',
        '/delete_budget'                                           => 'specialsection/section/deletebudget',
        '/delete_objects'                                          => 'specialsection/section/deleteobjects',
        ], false);
    }
}
