<?php

namespace FactelBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ProformaController__JMSInjector
{
    public static function inject($container) {
        require_once '/home/renesan1/public_html/1/app/cache/prod/jms_diextra/proxies/FactelBundle-Controller-ProformaController.php';
        $n = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('FactelBundle\\Controller\\ProformaController' => array('proformasAction' => array(0 => 'security.access.method_interceptor'), 'eliminarAccion' => array(0 => 'security.access.method_interceptor'), 'migrarProformaAccion' => array(0 => 'security.access.method_interceptor'), 'procesarAccion' => array(0 => 'security.access.method_interceptor'), 'anularAccion' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'descargarAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'showAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy250234c8_945f2eabf9f4f246cf201edd2e927a4e8edd2f04\__CG__\FactelBundle\Controller\ProformaController();
        $instance->__CGInterception__setLoader($n);
        return $instance;
    }
}
