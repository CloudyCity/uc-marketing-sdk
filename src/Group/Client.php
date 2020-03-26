<?php

namespace CloudyCity\UCMarketingSDK\Group;

use CloudyCity\UCMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 创建推广组.
     *
     * @param array $params
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function add(array $params)
    {
        return $this->httpPostJson('adgroup/add', $params);
    }

    /**
     * 更新推广组.
     *
     * @param array $params
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update(array $params)
    {
        return $this->httpPostJson('adgroup/update', $params);
    }

    /**
     * 更新推广组状态.
     *
     * @param array $adGroupIds
     * @param bool $paused
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updatePaused(array $adGroupIds, $paused)
    {
        $params = [
            'adGroupIds' => $adGroupIds,
            'paused' => $paused
        ];
        return $this->httpPostJson('adgroup/paused/update', $params);
    }

    /**
     * 删除推广组.
     *
     * @param array $adGroupIds
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete(array $adGroupIds)
    {
        $params = [
            'adGroupIds' => $adGroupIds,
        ];
        return $this->httpPostJson('adgroup/delete', $params);
    }

    /**
     * 根据推广组id获取推广组.
     *
     * @param array $adGroupIds
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getByIds(array $adGroupIds)
    {
        $params = [
            'adGroupIds' => $adGroupIds,
        ];
        return $this->httpPostJson('adgroup/getAdGroupByAdGroupId', $params);
    }

    /**
     * 获取账户下所有推广组.
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get()
    {
        return $this->httpPostJson('adgroup/getAllAdGroup');
    }

    /**
     * 获取账户下所有推广组id.
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getIds()
    {
        return $this->httpPostJson('adgroup/getAllAdGroupID');
    }
}
