<?php

namespace CloudyCity\UCMarketingSDK\Kernel\Traits;

trait HasSdkBaseInfo
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $token;

    /**
     * @return string
     */
    protected function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    protected function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    protected function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    protected function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return array
     */
    protected function getAuthorization()
    {
        return [
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
            'token' => $this->getToken(),
        ];
    }
}
