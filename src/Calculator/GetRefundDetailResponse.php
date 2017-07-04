<?php

namespace Calculator;

/**
 * Class representing GetRefundDetailResponse
 */
class GetRefundDetailResponse
{

    /**
     * @property \IsrvRefund\ResponseModelType $getRefundDetailResult
     */
    private $getRefundDetailResult = null;

    /**
     * Gets as getRefundDetailResult
     *
     * @return \IsrvRefund\ResponseModelType
     */
    public function getGetRefundDetailResult()
    {
        return $this->getRefundDetailResult;
    }

    /**
     * Sets a new getRefundDetailResult
     *
     * @param \IsrvRefund\ResponseModelType $getRefundDetailResult
     * @return self
     */
    public function setGetRefundDetailResult(\IsrvRefund\ResponseModelType $getRefundDetailResult)
    {
        $this->getRefundDetailResult = $getRefundDetailResult;
        return $this;
    }


}

