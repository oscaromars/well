<?php

namespace FactelBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ClienteController__JMSInjector
{
    public static function inject($container) {
        require_once '/home/renesan1/public_html/1/app/cache/prod/jms_diextra/proxies/FactelBundle-Controller-ClienteController.php';
        $s = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('FactelBundle\\Controller\\ClienteController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'clientesAction' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'cargarClienteAction' => array(0 => 'security.access.method_interceptor'), 'createClienteAction' => array(0 => 'security.access.method_interceptor'), 'showAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy250234c8_a6f69229ec425e08c9ac13409566e61ba22071ec\__CG__\FactelBundle\Controller\ClienteController();
        $instance->__CGInterception__setLoader($s);
        return $instance;
    }
}