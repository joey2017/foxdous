<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int $user_id  default: (0), max length: 11, raw type: int
 * @property int $platform_id  default: (0), max length: 1, raw type: tinyint
 * @property int $status  default: (0), max length: 1, raw type: tinyint
 * @property string $mobile  default: (), max length: 20, raw type: varchar
 * @property int $query_num  default: (1), max length: 11, raw type: int
 * @property string|null $request  default: (NULL), raw type: text
 * @property string|null $params  default: (NULL), raw type: text
 * @property string|null $response  default: (NULL), raw type: text
 * @property string $ip  default: (), max length: 50, raw type: varchar
 * @property int $add_time  default: (0), max length: 11, raw type: int
 */
class mobile_balance_query_log extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_mobile_balance_query_log';
    static $primary_key = 'id';
}
