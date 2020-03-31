<?php

namespace CloudyCity\UCMarketingSDK\Kernel\Exceptions;

use Psr\Http\Message\ResponseInterface;

class DownloadFileException extends ApiException
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
     * @param $message
     * @param \Psr\Http\Message\ResponseInterface|null $response
     * @param mixed                                    $formattedResponse
     * @param int|null                                 $code
     */
    public function __construct($message, ResponseInterface $response = null, $formattedResponse = null, $code = null)
    {
        $message = $message ?: 'Empty report, make sure taskId is right and ready.';

        parent::__construct($message, $response, $formattedResponse, $code);
    }
}
