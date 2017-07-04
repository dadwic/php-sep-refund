<?php

namespace Calculator;

/**
 * Class representing GetModifiedRefundListResponse
 */
class GetModifiedRefundListResponse
{

    /**
     * @property \IsrvRefund\ResponseModelType $getModifiedRefundListResult
     */
    private $getModifiedRefundListResult = null;

    /**
     * Gets as getModifiedRefundListResult
     *
     * @return \IsrvRefund\ResponseModelType
     */
    public function getGetModifiedRefundListResult()
    {
        return $this->getModifiedRefundListResult;
    }

    /**
     * Sets a new getModifiedRefundListResult
     *
     * @param \IsrvRefund\ResponseModelType $getModifiedRefundListResult
     * @return self
     */
    public function setGetModifiedRefundListResult(\IsrvRefund\ResponseModelType $getModifiedRefundListResult)
    {
        $this->getModifiedRefundListResult = $getModifiedRefundListResult;
        return $this;
    }


}

