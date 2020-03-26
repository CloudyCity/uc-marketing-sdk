# UC Marketing SDK

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## 安装
```bash
composer require cloudycity/uc-marketing-sdk:*
```

## 环境要求
- PHP 5.6 +

## 使用

```php
use CloudyCity\UCMarketingSDK\Client;
use CloudyCity\UCMarketingSDK\Kernel\Contracts\UcService;

$accounts = UcService::getAccounts();  // 仅提供Interface，需自行实现

// 遍历广告账号
foreach ($accounts as $account) {
    // 第四个参数为可选参数，默认为数组，客户端会自动将响应转为该格式，下载报表的csv文件也会自动转换成该格式
    // 支持的格式有: array、object、collection、raw、实现\CloudyCity\UCMarketingSDK\Kernel\Contracts\Arrayable的自定义类
    $client = new Client($account['username'], $account['password'], $account['token']);

    try {
        $result = $client->account->get();
    } catch (\CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException $e) {
        // 阿里汇川接口未提示成功
    } catch (\CloudyCity\UCMarketingSDK\Kernel\Exceptions\InvalidArgumentException $e) {
        // 实例化客户端时配置的响应格式有误
    } catch (\GuzzleHttp\Exception\GuzzleException $e) {
        // Guzzle工具请求异常
    }
}
```

## 方法

数据报表|执行方式 
---|---
获取账户报表|$client->report->getAccountReports($params)
获取推广组报表|$client->report->getAdgroupReports($params)
获取推广计划报表|$client->report->getCampaignReports($params)
获取推广创意报表|$client->report->getCreativeReports($params)
获取app报表|$client->report->getAppReports($params)
获取受众分析报表|$client->report->getAudienceReports($params)
获取视频报表|$client->report->getVideoReports($params)
查询下载任务状态|$client->report->getFile($taskId, $adReport)
下载报表文件|$client->report->downloadFile($taskId, $adReport)

账户模块|执行方式
---|---
获取账户信息|$client->account->get()
更新账户预算|$client->account->updateBudget($params)
 
推广组|执行方式 
---|---
创建推广组|$client->group->add($params)
更新推广组|$client->group->update($params)
更新组状态|$client->group->updatePaused($adGroupIds, $paused)
删除推广组|$client->group->delete($adGroupIds)
根据组id获取推广组|$client->group->getByIds($adGroupIds)
获取账户下所有推广组|$client->group->get()
获取账户下所有推广组id|$client->group->getIds()

推广计划模块|执行方式
---|---
创建推广计划|$client->campaign->add($params)
更新推广计划|$client->campaign->update($params)
更新出价|$client->campaign->updateBid($params)
更新出价(按百分比)|$client->campaign->updateBidPercentage($params)
更新计划状态|$client->campaign->updatePaused($campaignIds, $paused)
更新地域定向|$client->campaign->updateRegion($campaignIds, $allRegion, $region)
更新网络环境|$client->campaign->updateNetworkEnv($campaignIds, $target)
更新年龄定向|$client->campaign->updateAge($campaignIds, $target)
更新性别定向|$client->campaign->updateGender($campaignIds, $target)
更新操作系统定向|$client->campaign->updatePlatform($campaignIds, $target)
更新转化过滤|$client->campaign->updateConvertFilter($campaignIds, $target)
更新智能定向|$client->campaign->updateIntelli($campaignIds, $target)
更新自定义人群包|$client->campaign->updateAudience($params)
更新计划的预算|$client->campaign->updateBudget($params)
更新投放排期和投放时段|$client->campaign->updateDateAndPeriod($campaignIds, $budget, $forceBudget)
删除计划|$client->campaign->delete($campaignId)
根据组Id查询计划|$client->campaign->getByAdGroupIds($adGroupIds)
根据组Id查询计划Id|$client->campaign->getIdsByAdGroupIds($adGroupIds)
根据计划Id获取计划|$client->campaign->getByIds($campaignIds)

推广创意|执行方式 
---|---
获取创意模板|$client->creative->getTemplates($groupId)
创建推广创意|$client->creative->add($params)
修改创意信息|$client->creative->update($params)
更新创意状态|$client->creative->updatePaused($creativeId, $paused)
删除推广创意|$client->creative->delete($creativeIds)
根据组Id获取创意|$client->creative->getByCampaignIds($campaignIds)
根据组Id获取创意Id|$client->creative->getIdsByCampaignIds($campaignIds)
根据创意Id获取创意|$client->creative->getByIds($creativeIds)

素材|执行方式 
---|---
上传图片|$client->material->uploadImages($imageUrls)
获取图片|$client->material->getImages($params)
上传视频|$client->material->uploadVideos($files)
获取审核通过的视频|$client->material->getVideos()
获取省市列表|$client->material->getProvinces()
获取区县列表|$client->material->getCounties()
获取推荐|$client->material->getRecommend($params)
获取应用分类列表|$client->material->getAppCategories()
获取转化类型列表|$client->material->getConvertTypes($objectiveType)
根据转化类型获取联调通过的转化列表|$client->material->getAdConvert($convertMonitorType)
获取词包列表|$client->material->getWordPackages()
获取android app列表|$client->material->getAndroidApps()
获取ios app|$client->material->getIosAppByAppId($appId)
获取行业列表|$client->material->getIndustries()
获取定向包列表|$client->material->getTargetingPackages()
获取创意分类列表|$client->material->getCreativeIndustries()

订单|执行方式 
---|---
根据订单id获取订单|$client->order->getByIds($orderIds)
获取指定日期内的订单|$client->order->get($startDate, $endDate)
获取指定日期内的订单Id|$client->order->getIds($startDate, $endDate)

## License

MIT

[ico-version]: https://img.shields.io/packagist/v/cloudycity/uc-marketing-sdk.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/cloudycity/uc-marketing-sdk/master.svg?style=flat-square
[ico-code-coverage]: https://img.shields.io/scrutinizer/coverage/g/cloudycity/uc-marketing-sdk.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/249938736/shield?branch=master
[ico-code-quality]: https://img.shields.io/scrutinizer/g/cloudycity/uc-marketing-sdk.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/cloudycity/uc-marketing-sdk.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/cloudycity/uc-marketing-sdk
[link-travis]: https://travis-ci.org/cloudycity/uc-marketing-sdk
[link-code-coverage]: https://scrutinizer-ci.com/g/cloudycity/uc-marketing-sdk/code-structure
[link-styleci]: https://styleci.io/repos/249938736
[link-code-quality]: https://scrutinizer-ci.com/g/cloudycity/uc-marketing-sdk
[link-downloads]: https://packagist.org/cloudycity/uc-marketing-sdk
[link-author]: https://github.com/cloudycity