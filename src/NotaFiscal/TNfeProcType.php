<?php

namespace GenesisTecnologia\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TNfeProcType
 *
 * Tipo da NF-e processada
 * XSD Type: TNfeProc
 */
class TNfeProcType
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * @property \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TNFeType $nFe
     */
    private $nFe = null;

    /**
     * @property \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TProtNFeType $protNFe
     */
    private $protNFe = null;

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
     * Gets as nFe
     *
     * @return \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TNFeType
     */
    public function getNFe()
    {
        return $this->nFe;
    }

    /**
     * Sets a new nFe
     *
     * @param \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TNFeType $nFe
     * @return self
     */
    public function setNFe(\GenesisTecnologia\NFePHPSerialize\NotaFiscal\TNFeType $nFe)
    {
        $this->nFe = $nFe;
        return $this;
    }

    /**
     * Gets as protNFe
     *
     * @return \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TProtNFeType
     */
    public function getProtNFe()
    {
        return $this->protNFe;
    }

    /**
     * Sets a new protNFe
     *
     * @param \GenesisTecnologia\NFePHPSerialize\NotaFiscal\TProtNFeType $protNFe
     * @return self
     */
    public function setProtNFe(\GenesisTecnologia\NFePHPSerialize\NotaFiscal\TProtNFeType $protNFe)
    {
        $this->protNFe = $protNFe;
        return $this;
    }


}

