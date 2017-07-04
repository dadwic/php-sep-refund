<?php

namespace Calculator;

/**
 * Class representing RefundExec
 */
class RefundExec
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
     * @property integer $partialRefundId
     */
    private $partialRefundId = null;

    /**
     * @property string $typRefundAction
     */
    private $typRefundAction = null;

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
     * Gets as partialRefundId
     *
     * @return integer
     */
    public function getPartialRefundId()
    {
        return $this->partialRefundId;
    }

    /**
     * Sets a new partialRefundId
     *
     * @param integer $partialRefundId
     * @return self
     */
    public function setPartialRefundId($partialRefundId)
    {
        $this->partialRefundId = $partialRefundId;
        return $this;
    }

    /**
     * Gets as typRefundAction
     *
     * @return string
     */
    public function getTypRefundAction()
    {
        return $this->typRefundAction;
    }

    /**
     * Sets a new typRefundAction
     *
     * @param string $typRefundAction
     * @return self
     */
    public function setTypRefundAction($typRefundAction)
    {
        $this->typRefundAction = $typRefundAction;
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

