<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int $platform_id  default: (0), max length: 1, raw type: int
 * @property int $user_id  default: (NULL), max length: 11, raw type: int
 * @property string $alipay_user_id  default: (NULL), max length: 50, raw type: varchar
 * @property string|null $alipay_user_account  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $alipay_user_name  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 */
class user_money_recharge_alipay_user_relation extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_user_money_recharge_alipay_user_relation';
    static $primary_key = 'alipay_user_id';
}