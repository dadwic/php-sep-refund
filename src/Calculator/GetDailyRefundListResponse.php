<?php

namespace Calculator\Sep;

/**
 * Class representing GetDailyRefundListResponse
 */
class GetDailyRefundListResponse
{

    /**
     * @property \IsrvRefund\Sep\ResponseModelType $getDailyRefundListResult
     */
    private $getDailyRefundListResult = null;

    /**
     * Gets as getDailyRefundListResult
     *
     * @return \IsrvRefund\Sep\ResponseModelType
     */
    public function getGetDailyRefundListResult()
    {
        return $this->getDailyRefundListResult;
    }

    /**
     * Sets a new getDailyRefundListResult
     *
     * @param \IsrvRefund\Sep\ResponseModelType $getDailyRefundListResult
     * @return self
     */
    public function setGetDailyRefundListResult(\IsrvRefund\Sep\ResponseModelType $getDailyRefundListResult)
    {
        $this->getDailyRefundListResult = $getDailyRefundListResult;
        return $this;
    }


}

