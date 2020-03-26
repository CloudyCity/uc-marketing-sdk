<?php

namespace CloudyCity\UCMarketingSDK\Kernel;

use CloudyCity\UCMarketingSDK\Kernel\Traits\HasSubInvoker;

class BaseInvoker
{
    use HasSubInvoker;

    /**
     * @var array
     */
    protected $providers = [];

    /**
     * @var string
     */
    protected $responseType;

    /**
     * @return string
     */
    protected function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * @param string $responseType
     */
    protected function setResponseType($responseType)
    {
        $this->responseType = $responseType;
    }

    public function __construct($username, $password, $token, $responseType = 'array')
    {
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setToken($token);
        $this->setResponseType($responseType);
    }
}
