<?php

namespace GenesisTecnologia\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TNFeType
 *
 * Tipo Nota Fiscal Eletrônica
 * XSD Type: TNFe
 */
class TNFeType
{

    /**
     * Informações da Nota Fiscal eletrônica
     *
     * @property \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType $infNFe
     */
    private $infNFe = null;

    /**
     * @property \GenesisTecnologia\NFePHPSerialize\XMLDSig\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as infNFe
     *
     * Informações da Nota Fiscal eletrônica
     *
     * @return \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType
     */
    public function getInfNFe()
    {
        return $this->infNFe;
    }

    /**
     * Sets a new infNFe
     *
     * Informações da Nota Fiscal eletrônica
     *
     * @param \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType $infNFe
     * @return self
     */
    public function setInfNFe(\GenesisTecnologia\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType $infNFe)
    {
        $this->infNFe = $infNFe;
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

