<?php

namespace CloudyCity\UCMarketingSDK;

use CloudyCity\UCMarketingSDK\Kernel\BaseInvoker;

/**
 * Class Client.
 *
 * @property \CloudyCity\UCMarketingSDK\Report\Client $report
 * @property \CloudyCity\UCMarketingSDK\Account\Client $account
 * @property \CloudyCity\UCMarketingSDK\Group\Client $group
 * @property \CloudyCity\UCMarketingSDK\Campaign\Client $campaign
 * @property \CloudyCity\UCMarketingSDK\Creative\Client $creative
 * @property \CloudyCity\UCMarketingSDK\Material\Client $material
 * @property \CloudyCity\UCMarketingSDK\Order\Client $order
 */
class Client extends BaseInvoker
{
    protected $providers = [
        'report' => \CloudyCity\UCMarketingSDK\Report\Client::class,
        'account' => \CloudyCity\UCMarketingSDK\Account\Client::class,
        'group' => \CloudyCity\UCMarketingSDK\Group\Client::class,
        'campaign' => \CloudyCity\UCMarketingSDK\Campaign\Client::class,
        'creative' => \CloudyCity\UCMarketingSDK\Creative\Client::class,
        'material' => \CloudyCity\UCMarketingSDK\Material\Client::class,
        'order' => \CloudyCity\UCMarketingSDK\Order\Client::class,
    ];
}
