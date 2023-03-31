<?php

namespace GenesisTecnologia\NFePHPSerialize\XMLDSig;

/**
 * Class representing SignatureType
 *
 * 
 * XSD Type: SignatureType
 */
class SignatureType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \GenesisTecnologia\NFePHPSerialize\XMLDSig\SignedInfoType $signedInfo
     */
    private $signedInfo = null;

    /**
     * @property \GenesisTecnologia\NFePHPSerialize\XMLDSig\SignatureValueType
     * $signatureValue
     */
    private $signatureValue = null;

    /**
     * @property \GenesisTecnologia\NFePHPSerialize\XMLDSig\KeyInfoType $keyInfo
     */
    private $keyInfo = null;

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
     * Gets as signedInfo
     *
     * @return \GenesisTecnologia\NFePHPSerialize\XMLDSig\SignedInfoType
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \GenesisTecnologia\NFePHPSerialize\XMLDSig\SignedInfoType $signedInfo
     * @return self
     */
    public function setSignedInfo(\GenesisTecnologia\NFePHPSerialize\XMLDSig\SignedInfoType $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \GenesisTecnologia\NFePHPSerialize\XMLDSig\SignatureValueType
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \GenesisTecnologia\NFePHPSerialize\XMLDSig\SignatureValueType $signatureValue
     * @return self
     */
    public function setSignatureValue(\GenesisTecnologia\NFePHPSerialize\XMLDSig\SignatureValueType $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \GenesisTecnologia\NFePHPSerialize\XMLDSig\KeyInfoType
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \GenesisTecnologia\NFePHPSerialize\XMLDSig\KeyInfoType $keyInfo
     * @return self
     */
    public function setKeyInfo(\GenesisTecnologia\NFePHPSerialize\XMLDSig\KeyInfoType $keyInfo)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }


}

