<?php

namespace SepRefund;

/**
 * Class representing RefundRegResponse
 */
class RefundRegResponse
{

    /**
     * @property \SepRefund\ResponseModelType $refundRegResult
     */
    private $refundRegResult = null;

    /**
     * Gets as refundRegResult
     *
     * @return \SepRefund\ResponseModelType
     */
    public function getRefundRegResult()
    {
        return $this->refundRegResult;
    }

    /**
     * Sets a new refundRegResult
     *
     * @param \SepRefund\ResponseModelType $refundRegResult
     * @return self
     */
    public function setRefundRegResult(\SepRefund\ResponseModelType $refundRegResult)
    {
        $this->refundRegResult = $refundRegResult;
        return $this;
    }


}

