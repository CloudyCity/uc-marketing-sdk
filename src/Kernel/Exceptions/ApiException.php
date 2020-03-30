<?php

namespace CloudyCity\UCMarketingSDK\Kernel\Exceptions;

use Psr\Http\Message\ResponseInterface;

/**
 * Class ApiException.
 */
class ApiException extends Exception
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
     * @param string                                   $message
     * @param \Psr\Http\Message\ResponseInterface|null $response
     * @param mixed                                    $formattedResponse
     * @param int|null                                 $code
     */
    public function __construct($message, ResponseInterface $response = null, $formattedResponse = null, $code = null)
    {
        parent::__construct($message, $code);

        $this->response = $response;
        $this->formattedResponse = $formattedResponse;

        if ($response) {
            $response->getBody()->rewind();
        }
    }

    /**
     * @return array
     */
    public function getApiFailures()
    {
        if (isset($this->formattedResponse['header']['failures'])) {
            return $this->formattedResponse['header']['failures'];
        } else {
            return [];
        }
    }

    /**
     * @return string|null
     */
    public function getApiMessage()
    {
        if (isset($this->formattedResponse['header']['failures'][0]['message'])) {
            return $this->formattedResponse['header']['failures'][0]['message'];
        } else {
            return null;
        }
    }

    /**
     * @return int|null
     */
    public function getApiCode()
    {
        if (isset($this->formattedResponse['header']['failures'][0]['code'])) {
            return $this->formattedResponse['header']['failures'][0]['code'];
        } else {
            return null;
        }
    }
}
