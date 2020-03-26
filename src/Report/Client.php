<?php

namespace CloudyCity\UCMarketingSDK\Report;

use CloudyCity\UCMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 获取账户报表.
     *
     * @param array $params
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAccountReports(array $params)
    {
        return $this->httpPostJson('report/account', $params);
    }

    /**
     * 获取推广组报表.
     *
     * @param array $params
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAdGroupReports(array $params)
    {
        return $this->httpPostJson('report/adgroup', $params);
    }

    /**
     * 获取推广计划报表.
     *
     * @param array $params
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCampaignReports(array $params)
    {
        return $this->httpPostJson('report/campaign', $params);
    }

    /**
     * 获取推广创意报表.
     *
     * @param array $params
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCreativeReports(array $params)
    {
        return $this->httpPostJson('report/creative', $params);
    }

    /**
     * 获取app报表.
     *
     * @param array $params
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAppReports(array $params)
    {
        return $this->httpPostJson('report/app', $params);
    }

    /**
     * 获取受众分析报表.
     *
     * @param array $params
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAudienceReports(array $params)
    {
        return $this->httpPostJson('report/audience', $params);
    }

    /**
     * 获取视频报表.
     *
     * @param array $params
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getVideoReports(array $params)
    {
        return $this->httpPostJson('report/video', $params);
    }

    /**
     * 查询下载任务状态.
     *
     * @param number $taskId
     * @param bool $adReport
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getFile($taskId, $adReport = true)
    {
        $params = [
            'taskId' => $taskId,
            'adReport' => $adReport
        ];
        return $this->httpPostJson('report/getFile', $params);
    }

    /**
     * 下载报表文件并转为数组.
     *
     * @param number $taskId
     * @param bool $adReport
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function downloadFile($taskId, $adReport = true)
    {
        $params = [
            'taskId' => $taskId,
            'adReport' => $adReport
        ];
        return $this->httpPostJson('report/downloadFile', $params);
    }
}
