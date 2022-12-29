<?php

namespace EnhancedProxy250234c8_02b16ef5951b08e87be0dbf4b467fd75d3516d85\__CG__\FactelBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class LiquidacionCompraController extends \FactelBundle\Controller\LiquidacionCompraController
{
    private $__CGInterception__loader;

    public function showAction($id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\LiquidacionCompraController', 'showAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function procesarAccion($id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\LiquidacionCompraController', 'procesarAccion');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function newAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\LiquidacionCompraController', 'newAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function liquidacionesAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\LiquidacionCompraController', 'liquidacionesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function eliminarAccion($id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\LiquidacionCompraController', 'eliminarAccion');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function editAction($id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\LiquidacionCompraController', 'editAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function descargarAction($id, $type = 'zip')
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\LiquidacionCompraController', 'descargarAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id, $type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id, $type), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\LiquidacionCompraController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\LiquidacionCompraController', 'createAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function anularAccion($id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\LiquidacionCompraController', 'anularAccion');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}