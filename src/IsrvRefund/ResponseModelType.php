<?php

namespace Sep\IsrvRefund;

/**
 * Class representing ResponseModelType
 *
 *
 * XSD Type: ResponseModel
 */
class ResponseModelType
{

    /**
     * @property string $actionName
     */
    private $actionName = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $errorCode
     */
    private $errorCode = null;

    /**
     * @property string $errorMessage
     */
    private $errorMessage = null;

    /**
     * @property integer $referenceId
     */
    private $referenceId = null;

    /**
     * @property integer $requestStatus
     */
    private $requestStatus = null;

    /**
     * Gets as actionName
     *
     * @return string
     */
    public function getActionName()
    {
        return $this->actionName;
    }

    /**
     * Sets a new actionName
     *
     * @param string $actionName
     * @return self
     */
    public function setActionName($actionName)
    {
        $this->actionName = $actionName;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as errorCode
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Sets a new errorCode
     *
     * @param string $errorCode
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * Gets as errorMessage
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * Gets as referenceId
     *
     * @return integer
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * Sets a new referenceId
     *
     * @param integer $referenceId
     * @return self
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
        return $this;
    }

    /**
     * Gets as requestStatus
     *
     * @return integer
     */
    public function getRequestStatus()
    {
        return $this->requestStatus;
    }

    /**
     * Sets a new requestStatus
     *
     * @param integer $requestStatus
     * @return self
     */
    public function setRequestStatus($requestStatus)
    {
        $this->requestStatus = $requestStatus;
        return $this;
    }


}

