<?php

namespace CloudyCity\UCMarketingSDK\Creative;

use CloudyCity\UCMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 创建推广创意.
     *
     * @param $adGroupId
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTemplates(array $adGroupId)
    {
        $params = [
            'adgroupId' => $adGroupId
        ];
        return $this->httpPostJson('creative/getCreativeTemplate', $params);
    }

    /**
     * 创建推广创意.
     *
     * @param $params
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function add(array $params)
    {
        return $this->httpPostJson('creative/add', $params);
    }

    /**
     * 更新推广创意.
     *
     * @param $params
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update(array $params)
    {
        return $this->httpPostJson('creative/update', $params);
    }

    /**
     * 更新推广创意的状态.
     *
     * @param $creativeIds
     * @param bool $paused
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updatePaused(array $creativeIds, $paused)
    {
        $params = [
            'adGroupIds' => $creativeIds,
            'paused' => $paused
        ];
        return $this->httpPostJson('creative/paused/update', $params);
    }

    /**
     * 删除推广创意.
     *
     * @param $creativeIds
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete(array $creativeIds)
    {
        $params = [
            'creativeIds' => $creativeIds,
        ];
        return $this->httpPostJson('creative/delete', $params);
    }

    /**
     * 根据推广计划id获取推广创意.
     *
     * @param $campaignIds
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getByCampaignIds(array $campaignIds)
    {
        $params = [
            'campaignIds' => $campaignIds,
        ];
        return $this->httpPostJson('creative/getCreativeByCampaignId', $params);
    }

    /**
     * 根据推广计划id获取推广创意id.
     *
     * @param $campaignIds
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getIdsByCampaignIds(array $campaignIds)
    {
        $params = [
            'campaignIds' => $campaignIds,
        ];
        return $this->httpPostJson('creative/getCreativeIdByCampaignId', $params);
    }

    /**
     * 根据推广创意id获取推广创意.
     *
     * @param $creativeIds
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getByIds(array $creativeIds)
    {
        $params = [
            'creativeIds' => $creativeIds,
        ];
        return $this->httpPostJson('creative/getCreativeByCreativeId', $params);
    }
}
