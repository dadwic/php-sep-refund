<?php

namespace Calculator;

/**
 * Class representing GetRefundStatusResponse
 */
class GetRefundStatusResponse
{

    /**
     * @property \IsrvRefund\ResponseModelType $getRefundStatusResult
     */
    private $getRefundStatusResult = null;

    /**
     * Gets as getRefundStatusResult
     *
     * @return \IsrvRefund\ResponseModelType
     */
    public function getGetRefundStatusResult()
    {
        return $this->getRefundStatusResult;
    }

    /**
     * Sets a new getRefundStatusResult
     *
     * @param \IsrvRefund\ResponseModelType $getRefundStatusResult
     * @return self
     */
    public function setGetRefundStatusResult(\IsrvRefund\ResponseModelType $getRefundStatusResult)
    {
        $this->getRefundStatusResult = $getRefundStatusResult;
        return $this;
    }


}

