<?php

namespace CloudyCity\UCMarketingSDK\Campaign;

use CloudyCity\UCMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 创建推广计划.
     *
     * @param array $params
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function add(array $params)
    {
        return $this->httpPostJson('campaign/add', $params);
    }

    /**
     * 更新推广计划.
     *
     * @param array $params
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function update(array $params)
    {
        return $this->httpPostJson('campaign/update', $params);
    }

    /**
     * 更新推广计划的出价.
     *
     * @param array $params
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateBid(array $params)
    {
        return $this->httpPostJson('campaign/bid/update', $params);
    }

    /**
     * 更新推广计划的出价(按百分比).
     *
     * @param array $params
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateBidPercentage(array $params)
    {
        return $this->httpPostJson('campaign/bid/percentage/update', $params);
    }

    /**
     * 更新推广计划的状态.
     *
     * @param array $campaignIds
     * @param bool  $paused
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updatePaused(array $campaignIds, $paused)
    {
        $params = [
            'campaignIds' => $campaignIds,
            'paused'      => $paused,
        ];

        return $this->httpPostJson('campaign/paused/update', $params);
    }

    /**
     * 更新推广计划的地域.
     *
     * @param array $campaignIds
     * @param int   $allRegion
     * @param int[] $region
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateRegion(array $campaignIds, $allRegion, array $region = [])
    {
        $params = [
            'campaignIds' => $campaignIds,
            'allRegion'   => $allRegion,
            'region'      => $region,
        ];

        return $this->httpPostJson('campaign/region/update', $params);
    }

    /**
     * 更新推广计划网络环境.
     *
     * @param array  $campaignIds
     * @param string $target
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateNetworkEnv(array $campaignIds, $target)
    {
        $params = [
            'campaignIds' => $campaignIds,
            'target'      => $target,
        ];

        return $this->httpPostJson('campaign/network/update', $params);
    }

    /**
     * 更新推广计划的年龄.
     *
     * @param array  $campaignIds
     * @param number $target
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateAge(array $campaignIds, $target)
    {
        $params = [
            'campaignIds' => $campaignIds,
            'target'      => $target,
        ];

        return $this->httpPostJson('campaign/age/update', $params);
    }

    /**
     * 更新推广计划的性别.
     *
     * @param array  $campaignIds
     * @param number $target
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateGender(array $campaignIds, $target)
    {
        $params = [
            'campaignIds' => $campaignIds,
            'target'      => $target,
        ];

        return $this->httpPostJson('campaign/gender/update', $params);
    }

    /**
     * 更新推广计划的投放平台.
     *
     * @param array  $campaignIds
     * @param number $target
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updatePlatform(array $campaignIds, $target)
    {
        $params = [
            'campaignIds' => $campaignIds,
            'target'      => $target,
        ];

        return $this->httpPostJson('campaign/platform/update', $params);
    }

    /**
     * 更新推广计划的转化过滤.
     *
     * @param array  $campaignIds
     * @param number $target
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateConvertFilter(array $campaignIds, $target)
    {
        $params = [
            'campaignIds' => $campaignIds,
            'target'      => $target,
        ];

        return $this->httpPostJson('campaign/convertfilter/update', $params);
    }

    /**
     * 更新推广计划的转化过滤.
     *
     * @param array  $campaignIds
     * @param number $target
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateIntelli(array $campaignIds, $target)
    {
        $params = [
            'campaignIds' => $campaignIds,
            'target'      => $target,
        ];

        return $this->httpPostJson('campaign/intelli/update', $params);
    }

    /**
     * 更新推广计划的人群包.
     *
     * @param array $params
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateAudience(array $params)
    {
        return $this->httpPostJson('campaign/audience/update', $params);
    }

    /**
     * 更新推广计划的预算.
     *
     * @param array  $campaignIds
     * @param number $budget
     * @param bool   $forceBudget
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateBudget(array $campaignIds, $budget, $forceBudget)
    {
        $params = [
            'campaignIds' => $campaignIds,
            'budget'      => $budget,
            'forceBudget' => $forceBudget,
        ];

        return $this->httpPostJson('campaign/budget/update', $params);
    }

    /**
     * 更新推广计划的投放排期和投放时段.
     *
     * @param array $params
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateDataAndPeriod(array $params)
    {
        return $this->httpPostJson('campaign/budget/update', $params);
    }

    /**
     * 删除推广计划.
     *
     * @param array $campaignIds
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function delete(array $campaignIds)
    {
        $params = [
            'campaignIds' => $campaignIds,
        ];

        return $this->httpPostJson('campaign/delete', $params);
    }

    /**
     * 根据推广组id获取推广计划.
     *
     * @param $adGroupIds
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getByAdGroupIds(array $adGroupIds)
    {
        $params = [
            'adGroupIds' => $adGroupIds,
        ];

        return $this->httpPostJson('campaign/getCampaignByAdGroupId', $params);
    }

    /**
     * 根据推广组id获取推广计划id.
     *
     * @param array $adGroupIds
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getIdsByAdGroupIds(array $adGroupIds)
    {
        $params = [
            'adGroupIds' => $adGroupIds,
        ];

        return $this->httpPostJson('campaign/getCampaignIdByAdGroupId', $params);
    }

    /**
     * 根据推广计划id获取推广计划.
     *
     * @param array $campaignIds
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getByIds(array $campaignIds)
    {
        $params = [
            'campaignIds' => $campaignIds,
        ];

        return $this->httpPostJson('campaign/getCampaignByCampaignId', $params);
    }
}
