<?php

namespace CloudyCity\UCMarketingSDK\Material;

use CloudyCity\UCMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 上传图片.
     *
     * @param array $imageUrls
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function uploadImages(array $imageUrls)
    {
        $params = [
            'imageUrls' => $imageUrls,
        ];

        return $this->httpPostJson('material/uploadImage', $params);
    }

    /**
     * 获取图片.
     *
     * @param array $params
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getImages(array $params)
    {
        return $this->httpPostJson('material/getImage', $params);
    }

    /**
     * 上传视频.
     *
     * @see http://docs.guzzlephp.org/en/stable/quickstart.html#sending-form-files
     *
     * @param array $files
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function uploadVideos(array $files)
    {
        return $this->httpPostFile('material/uploadVideo', $files);
    }

    /**
     * 获取审核通过的视频.
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getVideos()
    {
        return $this->httpPostJson('material/getVideo');
    }

    /**
     * 获取省市列表.
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getProvinces()
    {
        return $this->httpPostJson('material/getProvince');
    }

    /**
     * 获取区县列表.
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getCounties()
    {
        return $this->httpPostJson('material/getCounty');
    }

    /**
     * 获取兴趣列表.
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getInterests()
    {
        return $this->httpPostJson('material/getInterest');
    }

    /**
     * 获取关键词推荐、站点推荐、 APP推荐结果.
     *
     * @param array $params
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getRecommend(array $params)
    {
        return $this->httpPostJson('material/getRecommend', $params);
    }

    /**
     * 获取应用分类列表.
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getAppCategories()
    {
        return $this->httpPostJson('material/getAppCategory');
    }

    /**
     * 获取转化类型列表.
     *
     * @param $objectiveType
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getConvertTypes($objectiveType)
    {
        $params = [
            'objectiveType' => $objectiveType,
        ];

        return $this->httpPostJson('material/getConvertTypes', $params);
    }

    /**
     * 根据转化类型获取联调通过的转化列表.
     *
     * @param $convertMonitorType
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getAdConvert($convertMonitorType)
    {
        $params = [
            'convertMonitorType' => $convertMonitorType,
        ];

        return $this->httpPostJson('material/getAdConvert', $params);
    }

    /**
     * 获取词包列表.
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getWordPackages()
    {
        return $this->httpPostJson('material/getWordPackage');
    }

    /**
     * 获取android-app列表.
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getAndroidApps()
    {
        return $this->httpPostJson('material/getAndroidApp');
    }

    /**
     * 获取ios app.
     *
     * @param string $appId
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getIosAppByAppId($appId)
    {
        $params = [
            'appId' => $appId,
        ];

        return $this->httpPostJson('material/getIosAppByAppId', $params);
    }

    /**
     * 获取行业列表.
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getIndustries()
    {
        return $this->httpPostJson('material/getIndustry');
    }

    /**
     * 获取定向包列表.
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getTargetingPackages()
    {
        return $this->httpPostJson('material/getAllTargetingPackage');
    }

    /**
     * 获取创意分类列表.
     *
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\Doctrine\Common\Collections\ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getCreativeIndustries()
    {
        return $this->httpPostJson('material/getCreativeIndustry');
    }
}
