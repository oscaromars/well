<?php

namespace FactelBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ImpuestoIVAController__JMSInjector
{
    public static function inject($container) {
        require_once '/home/renesan1/public_html/1/app/cache/prod/jms_diextra/proxies/FactelBundle-Controller-ImpuestoIVAController.php';
        $h = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('FactelBundle\\Controller\\ImpuestoIVAController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy250234c8_445667f5c354adf42deba1f3760f7181e231dffa\__CG__\FactelBundle\Controller\ImpuestoIVAController();
        $instance->__CGInterception__setLoader($h);
        return $instance;
    }
}
