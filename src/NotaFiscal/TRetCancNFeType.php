<?php

namespace GenesisTecnologia\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TRetCancNFeType
 *
 * Tipo retorno Pedido de Cancelamento da Nota Fiscal Eletrônica
 * XSD Type: TRetCancNFe
 */
class TRetCancNFeType
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * Dados do Resultado do Pedido de Cancelamento da Nota Fiscal Eletrônica
     *
     * @property \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TRetCancNFeType\InfCancAType
     * $infCanc
     */
    private $infCanc = null;

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
     * Gets as infCanc
     *
     * Dados do Resultado do Pedido de Cancelamento da Nota Fiscal Eletrônica
     *
     * @return \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TRetCancNFeType\InfCancAType
     */
    public function getInfCanc()
    {
        return $this->infCanc;
    }

    /**
     * Sets a new infCanc
     *
     * Dados do Resultado do Pedido de Cancelamento da Nota Fiscal Eletrônica
     *
     * @param \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TRetCancNFeType\InfCancAType
     * $infCanc
     * @return self
     */
    public function setInfCanc(\GenesisTecnologia\NFePHPSerialize\NotaFiscal\TRetCancNFeType\InfCancAType $infCanc)
    {
        $this->infCanc = $infCanc;
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

