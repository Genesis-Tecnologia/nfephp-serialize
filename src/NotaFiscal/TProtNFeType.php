<?php

namespace GenesisTecnologia\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TProtNFeType
 *
 * Tipo Protocolo de status resultado do processamento da NF-e
 * XSD Type: TProtNFe
 */
class TProtNFeType
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * Dados do protocolo de status
     *
     * @property \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TProtNFeType\InfProtAType
     * $infProt
     */
    private $infProt = null;

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
     * Gets as infProt
     *
     * Dados do protocolo de status
     *
     * @return \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TProtNFeType\InfProtAType
     */
    public function getInfProt()
    {
        return $this->infProt;
    }

    /**
     * Sets a new infProt
     *
     * Dados do protocolo de status
     *
     * @param \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TProtNFeType\InfProtAType
     * $infProt
     * @return self
     */
    public function setInfProt(\GenesisTecnologia\NFePHPSerialize\NotaFiscal\TProtNFeType\InfProtAType $infProt)
    {
        $this->infProt = $infProt;
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

