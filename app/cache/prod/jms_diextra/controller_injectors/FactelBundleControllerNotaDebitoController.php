<?php

namespace FactelBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class NotaDebitoController__JMSInjector
{
    public static function inject($container) {
        require_once '/home/renesan1/public_html/1/app/cache/prod/jms_diextra/proxies/FactelBundle-Controller-NotaDebitoController.php';
        $k = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('FactelBundle\\Controller\\NotaDebitoController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'notasDebitoAction' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'anularAccion' => array(0 => 'security.access.method_interceptor'), 'eliminarAccion' => array(0 => 'security.access.method_interceptor'), 'sendEmail' => array(0 => 'security.access.method_interceptor'), 'procesarAccion' => array(0 => 'security.access.method_interceptor'), 'descargarAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'showAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy250234c8_eb81e5486c3da4dc3a29a367a418894466ac68da\__CG__\FactelBundle\Controller\NotaDebitoController();
        $instance->__CGInterception__setLoader($k);
        return $instance;
    }
}
