<?php

namespace Sep\Calculator;

/**
 * Class representing GetDailyRefundListResponse
 */
class GetDailyRefundListResponse
{

    /**
     * @property \Sep\IsrvRefund\ResponseModelType $getDailyRefundListResult
     */
    private $getDailyRefundListResult = null;

    /**
     * Gets as getDailyRefundListResult
     *
     * @return \Sep\IsrvRefund\ResponseModelType
     */
    public function getGetDailyRefundListResult()
    {
        return $this->getDailyRefundListResult;
    }

    /**
     * Sets a new getDailyRefundListResult
     *
     * @param \Sep\IsrvRefund\ResponseModelType $getDailyRefundListResult
     * @return self
     */
    public function setGetDailyRefundListResult(\Sep\IsrvRefund\ResponseModelType $getDailyRefundListResult)
    {
        $this->getDailyRefundListResult = $getDailyRefundListResult;
        return $this;
    }


}

