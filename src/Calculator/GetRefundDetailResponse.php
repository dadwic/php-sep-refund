<?php

namespace Sep\Calculator;

/**
 * Class representing GetRefundDetailResponse
 */
class GetRefundDetailResponse
{

    /**
     * @property \Sep\IsrvRefund\ResponseModelType $getRefundDetailResult
     */
    private $getRefundDetailResult = null;

    /**
     * Gets as getRefundDetailResult
     *
     * @return \Sep\IsrvRefund\ResponseModelType
     */
    public function getGetRefundDetailResult()
    {
        return $this->getRefundDetailResult;
    }

    /**
     * Sets a new getRefundDetailResult
     *
     * @param \Sep\IsrvRefund\ResponseModelType $getRefundDetailResult
     * @return self
     */
    public function setGetRefundDetailResult(\Sep\IsrvRefund\ResponseModelType $getRefundDetailResult)
    {
        $this->getRefundDetailResult = $getRefundDetailResult;
        return $this;
    }


}

