<?php

namespace Calculator;

/**
 * Class representing GetDailyRefundListResponse
 */
class GetDailyRefundListResponse
{

    /**
     * @property \IsrvRefund\ResponseModelType $getDailyRefundListResult
     */
    private $getDailyRefundListResult = null;

    /**
     * Gets as getDailyRefundListResult
     *
     * @return \IsrvRefund\ResponseModelType
     */
    public function getGetDailyRefundListResult()
    {
        return $this->getDailyRefundListResult;
    }

    /**
     * Sets a new getDailyRefundListResult
     *
     * @param \IsrvRefund\ResponseModelType $getDailyRefundListResult
     * @return self
     */
    public function setGetDailyRefundListResult(\IsrvRefund\ResponseModelType $getDailyRefundListResult)
    {
        $this->getDailyRefundListResult = $getDailyRefundListResult;
        return $this;
    }


}

