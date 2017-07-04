<?php

namespace Calculator;

/**
 * Class representing RefundRegResponse
 */
class RefundRegResponse
{

    /**
     * @property \IsrvRefund\ResponseModelType $refundRegResult
     */
    private $refundRegResult = null;

    /**
     * Gets as refundRegResult
     *
     * @return \IsrvRefund\ResponseModelType
     */
    public function getRefundRegResult()
    {
        return $this->refundRegResult;
    }

    /**
     * Sets a new refundRegResult
     *
     * @param \IsrvRefund\ResponseModelType $refundRegResult
     * @return self
     */
    public function setRefundRegResult(\IsrvRefund\ResponseModelType $refundRegResult)
    {
        $this->refundRegResult = $refundRegResult;
        return $this;
    }


}

