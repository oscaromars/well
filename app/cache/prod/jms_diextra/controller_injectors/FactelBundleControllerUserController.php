<?php

namespace FactelBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class UserController__JMSInjector
{
    public static function inject($container) {
        require_once '/home/renesan1/public_html/1/app/cache/prod/jms_diextra/proxies/FactelBundle-Controller-UserController.php';
        $r = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('FactelBundle\\Controller\\UserController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'showAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy250234c8_e7af18f5f6a9bf9f8f47aaa1ce96eb92a928e900\__CG__\FactelBundle\Controller\UserController();
        $instance->__CGInterception__setLoader($r);
        return $instance;
    }
}
