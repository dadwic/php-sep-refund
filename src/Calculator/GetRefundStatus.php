<?php

namespace Sep\Calculator;

/**
 * Class representing GetRefundStatus
 */
class GetRefundStatus
{

    /**
     * @property string $userName
     */
    private $userName = null;

    /**
     * @property string $password
     */
    private $password = null;

    /**
     * @property integer $refundId
     */
    private $refundId = null;

    /**
     * @property integer $termId
     */
    private $termId = null;

    /**
     * Gets as userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets a new userName
     *
     * @param string $userName
     * @return self
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * Gets as password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as refundId
     *
     * @return integer
     */
    public function getRefundId()
    {
        return $this->refundId;
    }

    /**
     * Sets a new refundId
     *
     * @param integer $refundId
     * @return self
     */
    public function setRefundId($refundId)
    {
        $this->refundId = $refundId;
        return $this;
    }

    /**
     * Gets as termId
     *
     * @return integer
     */
    public function getTermId()
    {
        return $this->termId;
    }

    /**
     * Sets a new termId
     *
     * @param integer $termId
     * @return self
     */
    public function setTermId($termId)
    {
        $this->termId = $termId;
        return $this;
    }


}

