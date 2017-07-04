<?php

namespace Calculator\Sep;

/**
 * Class representing GetRefundStatusResponse
 */
class GetRefundStatusResponse
{

    /**
     * @property \IsrvRefund\Sep\ResponseModelType $getRefundStatusResult
     */
    private $getRefundStatusResult = null;

    /**
     * Gets as getRefundStatusResult
     *
     * @return \IsrvRefund\Sep\ResponseModelType
     */
    public function getGetRefundStatusResult()
    {
        return $this->getRefundStatusResult;
    }

    /**
     * Sets a new getRefundStatusResult
     *
     * @param \IsrvRefund\Sep\ResponseModelType $getRefundStatusResult
     * @return self
     */
    public function setGetRefundStatusResult(\IsrvRefund\Sep\ResponseModelType $getRefundStatusResult)
    {
        $this->getRefundStatusResult = $getRefundStatusResult;
        return $this;
    }


}

