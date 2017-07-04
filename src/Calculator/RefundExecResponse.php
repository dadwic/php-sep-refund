<?php

namespace Sep\Calculator;

/**
 * Class representing RefundExecResponse
 */
class RefundExecResponse
{

    /**
     * @property \Sep\IsrvRefund\ResponseModelType $refundExecResult
     */
    private $refundExecResult = null;

    /**
     * Gets as refundExecResult
     *
     * @return \Sep\IsrvRefund\ResponseModelType
     */
    public function getRefundExecResult()
    {
        return $this->refundExecResult;
    }

    /**
     * Sets a new refundExecResult
     *
     * @param \Sep\IsrvRefund\ResponseModelType $refundExecResult
     * @return self
     */
    public function setRefundExecResult(\Sep\IsrvRefund\ResponseModelType $refundExecResult)
    {
        $this->refundExecResult = $refundExecResult;
        return $this;
    }


}

