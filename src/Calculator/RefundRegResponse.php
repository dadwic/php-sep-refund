<?php

namespace Calculator\Sep;

/**
 * Class representing RefundRegResponse
 */
class RefundRegResponse
{

    /**
     * @property \IsrvRefund\Sep\ResponseModelType $refundRegResult
     */
    private $refundRegResult = null;

    /**
     * Gets as refundRegResult
     *
     * @return \IsrvRefund\Sep\ResponseModelType
     */
    public function getRefundRegResult()
    {
        return $this->refundRegResult;
    }

    /**
     * Sets a new refundRegResult
     *
     * @param \IsrvRefund\Sep\ResponseModelType $refundRegResult
     * @return self
     */
    public function setRefundRegResult(\IsrvRefund\Sep\ResponseModelType $refundRegResult)
    {
        $this->refundRegResult = $refundRegResult;
        return $this;
    }


}

