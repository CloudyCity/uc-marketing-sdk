<?php

namespace CloudyCity\UCMarketingSDK\Order;

use CloudyCity\UCMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 根据订单id获取订单.
     *
     * @param array $orderIds
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getByIds(array $orderIds)
    {
        $params = [
            'orderIds' => $orderIds,
        ];

        return $this->httpPostJson('goodsorder/getOrderByOrderId', $params);
    }

    /**
     * 获取指定日期内的订单.
     *
     * @param string $startDate
     * @param string $endDate
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function get($startDate, $endDate)
    {
        $params = [
            'startDate' => $startDate,
            'endDate'   => $endDate,
        ];

        return $this->httpPostJson('goodsorder/getAllOrder', $params);
    }

    /**
     * 获取指定日期内的订单Id.
     *
     * @param string $startDate
     * @param string $endDate
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getIds($startDate, $endDate)
    {
        $params = [
            'startDate' => $startDate,
            'endDate'   => $endDate,
        ];

        return $this->httpPostJson('goodsorder/getAllOrderId', $params);
    }
}
