<?php

namespace Sep\Calculator;

/**
 * Class representing GetRefundStatusResponse
 */
class GetRefundStatusResponse
{

    /**
     * @property \Sep\IsrvRefund\ResponseModelType $getRefundStatusResult
     */
    private $getRefundStatusResult = null;

    /**
     * Gets as getRefundStatusResult
     *
     * @return \Sep\IsrvRefund\ResponseModelType
     */
    public function getGetRefundStatusResult()
    {
        return $this->getRefundStatusResult;
    }

    /**
     * Sets a new getRefundStatusResult
     *
     * @param \Sep\IsrvRefund\ResponseModelType $getRefundStatusResult
     * @return self
     */
    public function setGetRefundStatusResult(\Sep\IsrvRefund\ResponseModelType $getRefundStatusResult)
    {
        $this->getRefundStatusResult = $getRefundStatusResult;
        return $this;
    }


}

