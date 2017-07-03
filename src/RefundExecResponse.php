<?php

namespace SepRefund;

/**
 * Class representing RefundExecResponse
 */
class RefundExecResponse
{

    /**
     * @property \SepRefund\ResponseModelType $refundExecResult
     */
    private $refundExecResult = null;

    /**
     * Gets as refundExecResult
     *
     * @return \SepRefund\ResponseModelType
     */
    public function getRefundExecResult()
    {
        return $this->refundExecResult;
    }

    /**
     * Sets a new refundExecResult
     *
     * @param \SepRefund\ResponseModelType $refundExecResult
     * @return self
     */
    public function setRefundExecResult(\SepRefund\ResponseModelType $refundExecResult)
    {
        $this->refundExecResult = $refundExecResult;
        return $this;
    }


}

