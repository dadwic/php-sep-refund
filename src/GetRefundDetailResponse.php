<?php

namespace SepRefund;

/**
 * Class representing GetRefundDetailResponse
 */
class GetRefundDetailResponse
{

    /**
     * @property \SepRefund\ResponseModelType $getRefundDetailResult
     */
    private $getRefundDetailResult = null;

    /**
     * Gets as getRefundDetailResult
     *
     * @return \SepRefund\ResponseModelType
     */
    public function getGetRefundDetailResult()
    {
        return $this->getRefundDetailResult;
    }

    /**
     * Sets a new getRefundDetailResult
     *
     * @param \SepRefund\ResponseModelType $getRefundDetailResult
     * @return self
     */
    public function setGetRefundDetailResult(\SepRefund\ResponseModelType $getRefundDetailResult)
    {
        $this->getRefundDetailResult = $getRefundDetailResult;
        return $this;
    }


}

