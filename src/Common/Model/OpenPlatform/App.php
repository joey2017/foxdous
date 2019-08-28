<?php
namespace App\Common\Model\OpenPlatform;

use App\Common\Model\AutoGenerated\api_app_open;
use Ramsey\Uuid\Uuid;

class App extends api_app_open {

    static $table_name = 'yzb_api_app_open';

    // 扣费方式

    const PAY_TYPE_REAL_TIME_DEDUCTION = 1;  // 实时扣费，
    const PAY_TYPE_REAL_TIME_COUNTING  = 2;  // 实时计次
    const PAY_TYPE_COUNT_PACKAGE       = 3;  // 包量计次
    const PAY_TYPE_TIME_PACKAGE        = 4;  // 包量计时
    const PAY_TYPE_COUNT_PER_DAY       = 5;  // 按天计次

    const PAY_TYPES = [
        self::PAY_TYPE_REAL_TIME_DEDUCTION => '实时扣费',
        self::PAY_TYPE_REAL_TIME_COUNTING  => '实时计次',
        self::PAY_TYPE_COUNT_PACKAGE       => '包量计次',
        self::PAY_TYPE_TIME_PACKAGE        => '包量计时',
        self::PAY_TYPE_COUNT_PER_DAY       => '按天计次',
    ];

    // 应用状态
    const APP_STATUS_DISABLED  = 0;
    const APP_STATUS_ONLINE    = 1;
    const APP_STATUS_PAUSE     = 2;
    const APP_STATUS_DEBUGGING = 3;

    const APP_STATUSES = [
        self::APP_STATUS_DISABLED  => '已禁用',
        self::APP_STATUS_ONLINE    => '已上线',
        self::APP_STATUS_PAUSE     => '已暂停',
        self::APP_STATUS_DEBUGGING => '调试中'
    ];

    public function isDebugging() {
        return $this->status === self::APP_STATUS_DEBUGGING;
    }

    public static function generateAppKey() {
        $uuid = Uuid::uuid4()->toString();
        return strtolower(str_replace('-','',$uuid));
    }
}
