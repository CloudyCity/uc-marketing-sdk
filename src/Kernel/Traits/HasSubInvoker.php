<?php

namespace CloudyCity\UCMarketingSDK\Kernel\Traits;

use CloudyCity\UCMarketingSDK\Kernel\Exceptions\Exception;

/**
 * Trait HasSubInvoker.
 *
 * @property array $providers
 */
trait HasSubInvoker
{
    use HasSdkBaseInfo;

    protected $instances = [];

    abstract public function getResponseType();

    abstract public function setResponseType($responseType);

    /**
     * @param $name
     *
     * @throws Exception
     *
     * @return mixed
     */
    public function __get($name)
    {
        if (!property_exists($this, $name)) {
            if (array_key_exists($name, $this->instances)) {
                return $this->instances[$name];
            }
            if (property_exists($this, 'providers') && array_key_exists($name, $this->providers)) {
                $username = $this->getUsername();
                $password = $this->getPassword();
                $token = $this->getToken();
                $responseType = $this->getResponseType();

                return new $this->providers[$name]($username, $password, $token, $responseType);
            }

            throw new Exception("Undefined property $name", 500);
        }

        return $this->$name;
    }
}
