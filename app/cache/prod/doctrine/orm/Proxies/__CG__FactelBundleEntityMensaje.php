<?php

namespace Proxies\__CG__\FactelBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Mensaje extends \FactelBundle\Entity\Mensaje implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'identificador', 'mensaje', 'informacionAdicional', 'tipo', 'factura', 'proforma', 'liquidacionCompra', 'notaCredito', 'notaDebito', 'retencion', 'guia'];
        }

        return ['__isInitialized__', 'id', 'identificador', 'mensaje', 'informacionAdicional', 'tipo', 'factura', 'proforma', 'liquidacionCompra', 'notaCredito', 'notaDebito', 'retencion', 'guia'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Mensaje $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdentificador($identificador)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdentificador', [$identificador]);

        return parent::setIdentificador($identificador);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentificador()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentificador', []);

        return parent::getIdentificador();
    }

    /**
     * {@inheritDoc}
     */
    public function setMensaje($mensaje)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMensaje', [$mensaje]);

        return parent::setMensaje($mensaje);
    }

    /**
     * {@inheritDoc}
     */
    public function getMensaje()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMensaje', []);

        return parent::getMensaje();
    }

    /**
     * {@inheritDoc}
     */
    public function setInformacionAdicional($informacionAdicional)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInformacionAdicional', [$informacionAdicional]);

        return parent::setInformacionAdicional($informacionAdicional);
    }

    /**
     * {@inheritDoc}
     */
    public function getInformacionAdicional()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInformacionAdicional', []);

        return parent::getInformacionAdicional();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipo($tipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo', [$tipo]);

        return parent::setTipo($tipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', []);

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setFactura(\FactelBundle\Entity\Factura $factura = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFactura', [$factura]);

        return parent::setFactura($factura);
    }

    /**
     * {@inheritDoc}
     */
    public function getFactura()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFactura', []);

        return parent::getFactura();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotaCredito(\FactelBundle\Entity\NotaCredito $notaCredito = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotaCredito', [$notaCredito]);

        return parent::setNotaCredito($notaCredito);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotaCredito()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotaCredito', []);

        return parent::getNotaCredito();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotaDebito(\FactelBundle\Entity\NotaDebito $notaDebito = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotaDebito', [$notaDebito]);

        return parent::setNotaDebito($notaDebito);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotaDebito()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotaDebito', []);

        return parent::getNotaDebito();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetencion(\FactelBundle\Entity\Retencion $retencion = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetencion', [$retencion]);

        return parent::setRetencion($retencion);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetencion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetencion', []);

        return parent::getRetencion();
    }

    /**
     * {@inheritDoc}
     */
    public function setGuia(\FactelBundle\Entity\Guia $guia = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGuia', [$guia]);

        return parent::setGuia($guia);
    }

    /**
     * {@inheritDoc}
     */
    public function getGuia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGuia', []);

        return parent::getGuia();
    }

    /**
     * {@inheritDoc}
     */
    public function setLiquidacionCompra(\FactelBundle\Entity\LiquidacionCompra $liquidacionCompra = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLiquidacionCompra', [$liquidacionCompra]);

        return parent::setLiquidacionCompra($liquidacionCompra);
    }

    /**
     * {@inheritDoc}
     */
    public function getLiquidacionCompra()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLiquidacionCompra', []);

        return parent::getLiquidacionCompra();
    }

    /**
     * {@inheritDoc}
     */
    public function setProforma(\FactelBundle\Entity\Proforma $proforma = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProforma', [$proforma]);

        return parent::setProforma($proforma);
    }

    /**
     * {@inheritDoc}
     */
    public function getProforma()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProforma', []);

        return parent::getProforma();
    }

}
