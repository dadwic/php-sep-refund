<?php

namespace SepRefund;

/**
 * Class representing GetDailyRefundListResponse
 */
class GetDailyRefundListResponse
{

    /**
     * @property \SepRefund\ResponseModelType $getDailyRefundListResult
     */
    private $getDailyRefundListResult = null;

    /**
     * Gets as getDailyRefundListResult
     *
     * @return \SepRefund\ResponseModelType
     */
    public function getGetDailyRefundListResult()
    {
        return $this->getDailyRefundListResult;
    }

    /**
     * Sets a new getDailyRefundListResult
     *
     * @param \SepRefund\ResponseModelType $getDailyRefundListResult
     * @return self
     */
    public function setGetDailyRefundListResult(\SepRefund\ResponseModelType $getDailyRefundListResult)
    {
        $this->getDailyRefundListResult = $getDailyRefundListResult;
        return $this;
    }


}

