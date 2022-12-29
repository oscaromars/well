<?php

namespace EnhancedProxy250234c8_c5ff45c299c24cf4a5ac87726cee6c2dcc9dc882\__CG__\FactelBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class ReporteController extends \FactelBundle\Controller\ReporteController
{
    private $__CGInterception__loader;

    public function retencionTotalizadaExcel()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'retencionTotalizadaExcel');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function retencionTotalizadaAction($sSearch = '', $excel = false)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'retencionTotalizadaAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sSearch, $excel));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sSearch, $excel), $interceptors);

        return $invocation->proceed();
    }

    public function retencionFacturaExcel()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'retencionFacturaExcel');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function retencionFacturaAction($sSearch = '', $excel = false)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'retencionFacturaAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sSearch, $excel));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sSearch, $excel), $interceptors);

        return $invocation->proceed();
    }

    public function retencionAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'retencionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function reporteVentasFechasAction($comprobante = NULL, $sSearch = '', $pdf = false)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'reporteVentasFechasAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($comprobante, $sSearch, $pdf));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($comprobante, $sSearch, $pdf), $interceptors);

        return $invocation->proceed();
    }

    public function reporteVentasDetalladaFechasAction($sSearch = '', $pdf = false)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'reporteVentasDetalladaFechasAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sSearch, $pdf));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sSearch, $pdf), $interceptors);

        return $invocation->proceed();
    }

    public function reporteVentasDetalladaAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'reporteVentasDetalladaAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function reporteVentasAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'reporteVentasAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function reporteRetencionesTotalizadoAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'reporteRetencionesTotalizadoAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function reporteRetencionesFacturaAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'reporteRetencionesFacturaAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function notaDebitoAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'notaDebitoAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function notaCreditoAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'notaCreditoAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function liquidacionCompraAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'liquidacionCompraAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function guiaAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'guiaAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function facturasAction($comprobante = NULL, $sSearch = '', $excel = false)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'facturasAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($comprobante, $sSearch, $excel));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($comprobante, $sSearch, $excel), $interceptors);

        return $invocation->proceed();
    }

    public function descargarPdfVentasdetallada()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'descargarPdfVentasdetallada');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function descargarPdf()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'descargarPdf');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function descargarExcelVentasDetallada()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'descargarExcelVentasDetallada');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function descargarExcel()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'descargarExcel');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}