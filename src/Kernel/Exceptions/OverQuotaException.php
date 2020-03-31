<?php

namespace CloudyCity\UCMarketingSDK\Kernel\Exceptions;

use Psr\Http\Message\ResponseInterface;

class OverQuotaException extends ApiException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface|null
     */
    public $response;

    /**
     * @var \Psr\Http\Message\ResponseInterface|\Doctrine\Common\Collections\ArrayCollection|array|object|string|null
     */
    public $formattedResponse;

    /**
     * HttpException constructor.
     *
     * @param $url
     * @param \Psr\Http\Message\ResponseInterface|null $response
     * @param mixed                                    $formattedResponse
     * @param int|null                                 $code
     */
    public function __construct($url, ResponseInterface $response = null, $formattedResponse = null, $code = null)
    {
        $quota = $formattedResponse['header']['quota'];
        $leftQuota = $formattedResponse['header']['leftQuota'];
        $message = "接口\"{$url}\"的配额{{$quota}}剩余{{$leftQuota}}";

        parent::__construct($message, $response, $formattedResponse, $code);
    }
}
