<?php

namespace GenesisTecnologia\NFePHPSerialize\XMLDSig;

/**
 * Class representing SignedInfoType
 *
 * 
 * XSD Type: SignedInfoType
 */
class SignedInfoType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property
     * \GenesisTecnologia\NFePHPSerialize\XMLDSig\SignedInfoType\CanonicalizationMethodAType
     * $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @property
     * \GenesisTecnologia\NFePHPSerialize\XMLDSig\SignedInfoType\SignatureMethodAType
     * $signatureMethod
     */
    private $signatureMethod = null;

    /**
     * @property \GenesisTecnologia\NFePHPSerialize\XMLDSig\ReferenceType $reference
     */
    private $reference = null;

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
     * Gets as canonicalizationMethod
     *
     * @return
     * \GenesisTecnologia\NFePHPSerialize\XMLDSig\SignedInfoType\CanonicalizationMethodAType
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * @param
     * \GenesisTecnologia\NFePHPSerialize\XMLDSig\SignedInfoType\CanonicalizationMethodAType
     * $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(\GenesisTecnologia\NFePHPSerialize\XMLDSig\SignedInfoType\CanonicalizationMethodAType $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as signatureMethod
     *
     * @return
     * \GenesisTecnologia\NFePHPSerialize\XMLDSig\SignedInfoType\SignatureMethodAType
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * @param \GenesisTecnologia\NFePHPSerialize\XMLDSig\SignedInfoType\SignatureMethodAType
     * $signatureMethod
     * @return self
     */
    public function setSignatureMethod(\GenesisTecnologia\NFePHPSerialize\XMLDSig\SignedInfoType\SignatureMethodAType $signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     * Gets as reference
     *
     * @return \GenesisTecnologia\NFePHPSerialize\XMLDSig\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param \GenesisTecnologia\NFePHPSerialize\XMLDSig\ReferenceType $reference
     * @return self
     */
    public function setReference(\GenesisTecnologia\NFePHPSerialize\XMLDSig\ReferenceType $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

