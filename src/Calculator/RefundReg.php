<?php

namespace Calculator\Sep;

/**
 * Class representing RefundReg
 */
class RefundReg
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
     * @property string $refNum
     */
    private $refNum = null;

    /**
     * @property string $resNum
     */
    private $resNum = null;

    /**
     * @property integer $transactionTermId
     */
    private $transactionTermId = null;

    /**
     * @property integer $refundTermId
     */
    private $refundTermId = null;

    /**
     * @property integer $amount
     */
    private $amount = null;

    /**
     * @property integer $requestId
     */
    private $requestId = null;

    /**
     * @property integer $exeTime
     */
    private $exeTime = null;

    /**
     * @property string $email
     */
    private $email = null;

    /**
     * @property string $cellNumber
     */
    private $cellNumber = null;

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
     * Gets as refNum
     *
     * @return string
     */
    public function getRefNum()
    {
        return $this->refNum;
    }

    /**
     * Sets a new refNum
     *
     * @param string $refNum
     * @return self
     */
    public function setRefNum($refNum)
    {
        $this->refNum = $refNum;
        return $this;
    }

    /**
     * Gets as resNum
     *
     * @return string
     */
    public function getResNum()
    {
        return $this->resNum;
    }

    /**
     * Sets a new resNum
     *
     * @param string $resNum
     * @return self
     */
    public function setResNum($resNum)
    {
        $this->resNum = $resNum;
        return $this;
    }

    /**
     * Gets as transactionTermId
     *
     * @return integer
     */
    public function getTransactionTermId()
    {
        return $this->transactionTermId;
    }

    /**
     * Sets a new transactionTermId
     *
     * @param integer $transactionTermId
     * @return self
     */
    public function setTransactionTermId($transactionTermId)
    {
        $this->transactionTermId = $transactionTermId;
        return $this;
    }

    /**
     * Gets as refundTermId
     *
     * @return integer
     */
    public function getRefundTermId()
    {
        return $this->refundTermId;
    }

    /**
     * Sets a new refundTermId
     *
     * @param integer $refundTermId
     * @return self
     */
    public function setRefundTermId($refundTermId)
    {
        $this->refundTermId = $refundTermId;
        return $this;
    }

    /**
     * Gets as amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param integer $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as requestId
     *
     * @return integer
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets a new requestId
     *
     * @param integer $requestId
     * @return self
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * Gets as exeTime
     *
     * @return integer
     */
    public function getExeTime()
    {
        return $this->exeTime;
    }

    /**
     * Sets a new exeTime
     *
     * @param integer $exeTime
     * @return self
     */
    public function setExeTime($exeTime)
    {
        $this->exeTime = $exeTime;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as cellNumber
     *
     * @return string
     */
    public function getCellNumber()
    {
        return $this->cellNumber;
    }

    /**
     * Sets a new cellNumber
     *
     * @param string $cellNumber
     * @return self
     */
    public function setCellNumber($cellNumber)
    {
        $this->cellNumber = $cellNumber;
        return $this;
    }


}

