<?php

namespace Proxies\__CG__\FactelBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class NotaDebito extends \FactelBundle\Entity\NotaDebito implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'claveAcceso', 'numeroAutorizacion', 'fechaAutorizacion', 'estado', 'ambiente', 'tipoEmision', 'secuencial', 'fechaEmision', 'tipoDocMod', 'fechaEmisionDocMod', 'nroDocMod', 'nombreArchivo', 'cliente', 'emisor', 'establecimiento', 'ptoEmision', 'composAdic', 'mensajes', 'impuestos', 'motivos', 'totalSinImpuestos', 'subtotal12', 'subtotal0', 'subtotalNoIVA', 'subtotalExentoIVA', 'valorICE', 'iva12', 'valorTotal', '' . "\0" . 'FactelBundle\\Entity\\NotaDebito' . "\0" . 'firmado', '' . "\0" . 'FactelBundle\\Entity\\NotaDebito' . "\0" . 'enviarSiAutorizado', 'createdAt', 'updatedAt', 'createdBy', 'updatedBy', 'deletedBy'];
        }

        return ['__isInitialized__', 'id', 'claveAcceso', 'numeroAutorizacion', 'fechaAutorizacion', 'estado', 'ambiente', 'tipoEmision', 'secuencial', 'fechaEmision', 'tipoDocMod', 'fechaEmisionDocMod', 'nroDocMod', 'nombreArchivo', 'cliente', 'emisor', 'establecimiento', 'ptoEmision', 'composAdic', 'mensajes', 'impuestos', 'motivos', 'totalSinImpuestos', 'subtotal12', 'subtotal0', 'subtotalNoIVA', 'subtotalExentoIVA', 'valorICE', 'iva12', 'valorTotal', '' . "\0" . 'FactelBundle\\Entity\\NotaDebito' . "\0" . 'firmado', '' . "\0" . 'FactelBundle\\Entity\\NotaDebito' . "\0" . 'enviarSiAutorizado', 'createdAt', 'updatedAt', 'createdBy', 'updatedBy', 'deletedBy'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (NotaDebito $proxy) {
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
    public function setClaveAcceso($claveAcceso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClaveAcceso', [$claveAcceso]);

        return parent::setClaveAcceso($claveAcceso);
    }

    /**
     * {@inheritDoc}
     */
    public function getClaveAcceso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClaveAcceso', []);

        return parent::getClaveAcceso();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', [$estado]);

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', []);

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setAmbiente($ambiente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAmbiente', [$ambiente]);

        return parent::setAmbiente($ambiente);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmbiente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmbiente', []);

        return parent::getAmbiente();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoEmision($tipoEmision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoEmision', [$tipoEmision]);

        return parent::setTipoEmision($tipoEmision);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoEmision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoEmision', []);

        return parent::getTipoEmision();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecuencial($secuencial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecuencial', [$secuencial]);

        return parent::setSecuencial($secuencial);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecuencial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecuencial', []);

        return parent::getSecuencial();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaEmision($fechaEmision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaEmision', [$fechaEmision]);

        return parent::setFechaEmision($fechaEmision);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaEmision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaEmision', []);

        return parent::getFechaEmision();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoDocMod($tipoDocMod)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoDocMod', [$tipoDocMod]);

        return parent::setTipoDocMod($tipoDocMod);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoDocMod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoDocMod', []);

        return parent::getTipoDocMod();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaEmisionDocMod($fechaEmisionDocMod)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaEmisionDocMod', [$fechaEmisionDocMod]);

        return parent::setFechaEmisionDocMod($fechaEmisionDocMod);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaEmisionDocMod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaEmisionDocMod', []);

        return parent::getFechaEmisionDocMod();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroDocMod($nroDocMod)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroDocMod', [$nroDocMod]);

        return parent::setNroDocMod($nroDocMod);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroDocMod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroDocMod', []);

        return parent::getNroDocMod();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalSinImpuestos($totalSinImpuestos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalSinImpuestos', [$totalSinImpuestos]);

        return parent::setTotalSinImpuestos($totalSinImpuestos);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalSinImpuestos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalSinImpuestos', []);

        return parent::getTotalSinImpuestos();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubtotal12($subtotal12)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubtotal12', [$subtotal12]);

        return parent::setSubtotal12($subtotal12);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubtotal12()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubtotal12', []);

        return parent::getSubtotal12();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubtotal0($subtotal0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubtotal0', [$subtotal0]);

        return parent::setSubtotal0($subtotal0);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubtotal0()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubtotal0', []);

        return parent::getSubtotal0();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubtotalNoIVA($subtotalNoIVA)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubtotalNoIVA', [$subtotalNoIVA]);

        return parent::setSubtotalNoIVA($subtotalNoIVA);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubtotalNoIVA()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubtotalNoIVA', []);

        return parent::getSubtotalNoIVA();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubtotalExentoIVA($subtotalExentoIVA)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubtotalExentoIVA', [$subtotalExentoIVA]);

        return parent::setSubtotalExentoIVA($subtotalExentoIVA);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubtotalExentoIVA()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubtotalExentoIVA', []);

        return parent::getSubtotalExentoIVA();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorICE($valorICE)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorICE', [$valorICE]);

        return parent::setValorICE($valorICE);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorICE()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorICE', []);

        return parent::getValorICE();
    }

    /**
     * {@inheritDoc}
     */
    public function setIva12($iva12)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIva12', [$iva12]);

        return parent::setIva12($iva12);
    }

    /**
     * {@inheritDoc}
     */
    public function getIva12()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIva12', []);

        return parent::getIva12();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorTotal($valorTotal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorTotal', [$valorTotal]);

        return parent::setValorTotal($valorTotal);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorTotal', []);

        return parent::getValorTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCliente(\FactelBundle\Entity\Cliente $cliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCliente', [$cliente]);

        return parent::setCliente($cliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCliente', []);

        return parent::getCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmisor(\FactelBundle\Entity\Emisor $emisor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmisor', [$emisor]);

        return parent::setEmisor($emisor);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmisor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmisor', []);

        return parent::getEmisor();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstablecimiento(\FactelBundle\Entity\Establecimiento $establecimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstablecimiento', [$establecimiento]);

        return parent::setEstablecimiento($establecimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstablecimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstablecimiento', []);

        return parent::getEstablecimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setPtoEmision(\FactelBundle\Entity\PtoEmision $ptoEmision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPtoEmision', [$ptoEmision]);

        return parent::setPtoEmision($ptoEmision);
    }

    /**
     * {@inheritDoc}
     */
    public function getPtoEmision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPtoEmision', []);

        return parent::getPtoEmision();
    }

    /**
     * {@inheritDoc}
     */
    public function addComposAdic(\FactelBundle\Entity\CampoAdicional $composAdic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComposAdic', [$composAdic]);

        return parent::addComposAdic($composAdic);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComposAdic(\FactelBundle\Entity\CampoAdicional $composAdic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComposAdic', [$composAdic]);

        return parent::removeComposAdic($composAdic);
    }

    /**
     * {@inheritDoc}
     */
    public function getComposAdic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComposAdic', []);

        return parent::getComposAdic();
    }

    /**
     * {@inheritDoc}
     */
    public function addMotivo(\FactelBundle\Entity\Motivo $motivos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMotivo', [$motivos]);

        return parent::addMotivo($motivos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMotivo(\FactelBundle\Entity\Motivo $motivos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMotivo', [$motivos]);

        return parent::removeMotivo($motivos);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotivos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotivos', []);

        return parent::getMotivos();
    }

    /**
     * {@inheritDoc}
     */
    public function addImpuesto(\FactelBundle\Entity\Impuesto $impuestos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImpuesto', [$impuestos]);

        return parent::addImpuesto($impuestos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImpuesto(\FactelBundle\Entity\Impuesto $impuestos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImpuesto', [$impuestos]);

        return parent::removeImpuesto($impuestos);
    }

    /**
     * {@inheritDoc}
     */
    public function getImpuestos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImpuestos', []);

        return parent::getImpuestos();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroAutorizacion($numeroAutorizacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroAutorizacion', [$numeroAutorizacion]);

        return parent::setNumeroAutorizacion($numeroAutorizacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroAutorizacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroAutorizacion', []);

        return parent::getNumeroAutorizacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaAutorizacion($fechaAutorizacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaAutorizacion', [$fechaAutorizacion]);

        return parent::setFechaAutorizacion($fechaAutorizacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaAutorizacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaAutorizacion', []);

        return parent::getFechaAutorizacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreArchivo($nombreArchivo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreArchivo', [$nombreArchivo]);

        return parent::setNombreArchivo($nombreArchivo);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreArchivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreArchivo', []);

        return parent::getNombreArchivo();
    }

    /**
     * {@inheritDoc}
     */
    public function addMensaje(\FactelBundle\Entity\Mensaje $mensajes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMensaje', [$mensajes]);

        return parent::addMensaje($mensajes);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMensaje(\FactelBundle\Entity\Mensaje $mensajes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMensaje', [$mensajes]);

        return parent::removeMensaje($mensajes);
    }

    /**
     * {@inheritDoc}
     */
    public function getMensajes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMensajes', []);

        return parent::getMensajes();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirmado($firmado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirmado', [$firmado]);

        return parent::setFirmado($firmado);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirmado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirmado', []);

        return parent::getFirmado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnviarSiAutorizado($enviarSiAutorizado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnviarSiAutorizado', [$enviarSiAutorizado]);

        return parent::setEnviarSiAutorizado($enviarSiAutorizado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnviarSiAutorizado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnviarSiAutorizado', []);

        return parent::getEnviarSiAutorizado();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function updateTimestamps()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateTimestamps', []);

        return parent::updateTimestamps();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$user]);

        return parent::setCreatedBy($user);
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedBy($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$user]);

        return parent::setUpdatedBy($user);
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedBy($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedBy', [$user]);

        return parent::setDeletedBy($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedBy', []);

        return parent::getUpdatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedBy', []);

        return parent::getDeletedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function isBlameable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isBlameable', []);

        return parent::isBlameable();
    }

}
