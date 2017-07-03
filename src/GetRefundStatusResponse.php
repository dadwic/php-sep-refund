<?php

namespace SepRefund;

/**
 * Class representing GetRefundStatusResponse
 */
class GetRefundStatusResponse
{

    /**
     * @property \SepRefund\ResponseModelType $getRefundStatusResult
     */
    private $getRefundStatusResult = null;

    /**
     * Gets as getRefundStatusResult
     *
     * @return \SepRefund\ResponseModelType
     */
    public function getGetRefundStatusResult()
    {
        return $this->getRefundStatusResult;
    }

    /**
     * Sets a new getRefundStatusResult
     *
     * @param \SepRefund\ResponseModelType $getRefundStatusResult
     * @return self
     */
    public function setGetRefundStatusResult(\SepRefund\ResponseModelType $getRefundStatusResult)
    {
        $this->getRefundStatusResult = $getRefundStatusResult;
        return $this;
    }


}

