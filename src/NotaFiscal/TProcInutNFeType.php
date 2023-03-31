<?php

namespace GenesisTecnologia\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TProcInutNFeType
 *
 * Tipo Pedido de inutilzação de númeração de NF-e processado
 * XSD Type: TProcInutNFe
 */
class TProcInutNFeType
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * @property \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TInutNFeType $inutNFe
     */
    private $inutNFe = null;

    /**
     * @property \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TRetInutNFeType $retInutNFe
     */
    private $retInutNFe = null;

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
     * Gets as inutNFe
     *
     * @return \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TInutNFeType
     */
    public function getInutNFe()
    {
        return $this->inutNFe;
    }

    /**
     * Sets a new inutNFe
     *
     * @param \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TInutNFeType $inutNFe
     * @return self
     */
    public function setInutNFe(\GenesisTecnologia\NFePHPSerialize\NotaFiscal\TInutNFeType $inutNFe)
    {
        $this->inutNFe = $inutNFe;
        return $this;
    }

    /**
     * Gets as retInutNFe
     *
     * @return \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TRetInutNFeType
     */
    public function getRetInutNFe()
    {
        return $this->retInutNFe;
    }

    /**
     * Sets a new retInutNFe
     *
     * @param \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TRetInutNFeType $retInutNFe
     * @return self
     */
    public function setRetInutNFe(\GenesisTecnologia\NFePHPSerialize\NotaFiscal\TRetInutNFeType $retInutNFe)
    {
        $this->retInutNFe = $retInutNFe;
        return $this;
    }


}

