<?php

namespace Calculator;

/**
 * Class representing RefundExecResponse
 */
class RefundExecResponse
{

    /**
     * @property \IsrvRefund\ResponseModelType $refundExecResult
     */
    private $refundExecResult = null;

    /**
     * Gets as refundExecResult
     *
     * @return \IsrvRefund\ResponseModelType
     */
    public function getRefundExecResult()
    {
        return $this->refundExecResult;
    }

    /**
     * Sets a new refundExecResult
     *
     * @param \IsrvRefund\ResponseModelType $refundExecResult
     * @return self
     */
    public function setRefundExecResult(\IsrvRefund\ResponseModelType $refundExecResult)
    {
        $this->refundExecResult = $refundExecResult;
        return $this;
    }


}

