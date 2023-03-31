<?php

namespace GenesisTecnologia\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TEventoType
 *
 * Tipo Evento
 * XSD Type: TEvento
 */
class TEventoType
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * @property \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TEventoType\InfEventoAType
     * $infEvento
     */
    private $infEvento = null;

    /**
     * @property \GenesisTecnologia\NFePHPSerialize\XMLDSig\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as versao
     *
     * @return string
     */
    public function getVersao()
    {
        return $this->versao;
    }

    /**
     * Sets a new versao
     *
     * @param string $versao
     * @return self
     */
    public function setVersao($versao)
    {
        $this->versao = $versao;
        return $this;
    }

    /**
     * Gets as infEvento
     *
     * @return \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TEventoType\InfEventoAType
     */
    public function getInfEvento()
    {
        return $this->infEvento;
    }

    /**
     * Sets a new infEvento
     *
     * @param \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TEventoType\InfEventoAType
     * $infEvento
     * @return self
     */
    public function setInfEvento(\GenesisTecnologia\NFePHPSerialize\NotaFiscal\TEventoType\InfEventoAType $infEvento)
    {
        $this->infEvento = $infEvento;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \GenesisTecnologia\NFePHPSerialize\XMLDSig\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \GenesisTecnologia\NFePHPSerialize\XMLDSig\Signature $signature
     * @return self
     */
    public function setSignature(\GenesisTecnologia\NFePHPSerialize\XMLDSig\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

