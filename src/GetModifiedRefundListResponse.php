<?php

namespace SepRefund;

/**
 * Class representing GetModifiedRefundListResponse
 */
class GetModifiedRefundListResponse
{

    /**
     * @property \SepRefund\ResponseModelType $getModifiedRefundListResult
     */
    private $getModifiedRefundListResult = null;

    /**
     * Gets as getModifiedRefundListResult
     *
     * @return \SepRefund\ResponseModelType
     */
    public function getGetModifiedRefundListResult()
    {
        return $this->getModifiedRefundListResult;
    }

    /**
     * Sets a new getModifiedRefundListResult
     *
     * @param \SepRefund\ResponseModelType $getModifiedRefundListResult
     * @return self
     */
    public function setGetModifiedRefundListResult(\SepRefund\ResponseModelType $getModifiedRefundListResult)
    {
        $this->getModifiedRefundListResult = $getModifiedRefundListResult;
        return $this;
    }


}

