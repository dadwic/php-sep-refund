<?php

namespace Calculator\Sep;

/**
 * Class representing GetModifiedRefundListResponse
 */
class GetModifiedRefundListResponse
{

    /**
     * @property \IsrvRefund\Sep\ResponseModelType $getModifiedRefundListResult
     */
    private $getModifiedRefundListResult = null;

    /**
     * Gets as getModifiedRefundListResult
     *
     * @return \IsrvRefund\Sep\ResponseModelType
     */
    public function getGetModifiedRefundListResult()
    {
        return $this->getModifiedRefundListResult;
    }

    /**
     * Sets a new getModifiedRefundListResult
     *
     * @param \IsrvRefund\Sep\ResponseModelType $getModifiedRefundListResult
     * @return self
     */
    public function setGetModifiedRefundListResult(\IsrvRefund\Sep\ResponseModelType $getModifiedRefundListResult)
    {
        $this->getModifiedRefundListResult = $getModifiedRefundListResult;
        return $this;
    }


}

