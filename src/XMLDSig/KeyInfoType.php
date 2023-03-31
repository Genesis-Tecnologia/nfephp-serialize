<?php

namespace GenesisTecnologia\NFePHPSerialize\XMLDSig;

/**
 * Class representing KeyInfoType
 *
 * 
 * XSD Type: KeyInfoType
 */
class KeyInfoType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \GenesisTecnologia\NFePHPSerialize\XMLDSig\X509DataType $x509Data
     */
    private $x509Data = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as x509Data
     *
     * @return \GenesisTecnologia\NFePHPSerialize\XMLDSig\X509DataType
     */
    public function getX509Data()
    {
        return $this->x509Data;
    }

    /**
     * Sets a new x509Data
     *
     * @param \GenesisTecnologia\NFePHPSerialize\XMLDSig\X509DataType $x509Data
     * @return self
     */
    public function setX509Data(\GenesisTecnologia\NFePHPSerialize\XMLDSig\X509DataType $x509Data)
    {
        $this->x509Data = $x509Data;
        return $this;
    }


}

