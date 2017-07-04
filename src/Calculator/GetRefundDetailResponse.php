<?php

namespace Calculator\Sep;

/**
 * Class representing GetRefundDetailResponse
 */
class GetRefundDetailResponse
{

    /**
     * @property \IsrvRefund\Sep\ResponseModelType $getRefundDetailResult
     */
    private $getRefundDetailResult = null;

    /**
     * Gets as getRefundDetailResult
     *
     * @return \IsrvRefund\Sep\ResponseModelType
     */
    public function getGetRefundDetailResult()
    {
        return $this->getRefundDetailResult;
    }

    /**
     * Sets a new getRefundDetailResult
     *
     * @param \IsrvRefund\Sep\ResponseModelType $getRefundDetailResult
     * @return self
     */
    public function setGetRefundDetailResult(\IsrvRefund\Sep\ResponseModelType $getRefundDetailResult)
    {
        $this->getRefundDetailResult = $getRefundDetailResult;
        return $this;
    }


}

