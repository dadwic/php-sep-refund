<?php

namespace Sep\Calculator;

/**
 * Class representing RefundRegResponse
 */
class RefundRegResponse
{

    /**
     * @property \Sep\IsrvRefund\ResponseModelType $refundRegResult
     */
    private $refundRegResult = null;

    /**
     * Gets as refundRegResult
     *
     * @return \Sep\IsrvRefund\ResponseModelType
     */
    public function getRefundRegResult()
    {
        return $this->refundRegResult;
    }

    /**
     * Sets a new refundRegResult
     *
     * @param \Sep\IsrvRefund\ResponseModelType $refundRegResult
     * @return self
     */
    public function setRefundRegResult(\Sep\IsrvRefund\ResponseModelType $refundRegResult)
    {
        $this->refundRegResult = $refundRegResult;
        return $this;
    }


}

