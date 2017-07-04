<?php

namespace Sep\Calculator;

/**
 * Class representing GetModifiedRefundListResponse
 */
class GetModifiedRefundListResponse
{

    /**
     * @property \Sep\IsrvRefund\ResponseModelType $getModifiedRefundListResult
     */
    private $getModifiedRefundListResult = null;

    /**
     * Gets as getModifiedRefundListResult
     *
     * @return \Sep\IsrvRefund\ResponseModelType
     */
    public function getGetModifiedRefundListResult()
    {
        return $this->getModifiedRefundListResult;
    }

    /**
     * Sets a new getModifiedRefundListResult
     *
     * @param \Sep\IsrvRefund\ResponseModelType $getModifiedRefundListResult
     * @return self
     */
    public function setGetModifiedRefundListResult(\Sep\IsrvRefund\ResponseModelType $getModifiedRefundListResult)
    {
        $this->getModifiedRefundListResult = $getModifiedRefundListResult;
        return $this;
    }


}

