<?php

namespace Calculator\Sep;

/**
 * Class representing RefundExecResponse
 */
class RefundExecResponse
{

    /**
     * @property \IsrvRefund\Sep\ResponseModelType $refundExecResult
     */
    private $refundExecResult = null;

    /**
     * Gets as refundExecResult
     *
     * @return \IsrvRefund\Sep\ResponseModelType
     */
    public function getRefundExecResult()
    {
        return $this->refundExecResult;
    }

    /**
     * Sets a new refundExecResult
     *
     * @param \IsrvRefund\Sep\ResponseModelType $refundExecResult
     * @return self
     */
    public function setRefundExecResult(\IsrvRefund\Sep\ResponseModelType $refundExecResult)
    {
        $this->refundExecResult = $refundExecResult;
        return $this;
    }


}

