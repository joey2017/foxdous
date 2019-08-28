<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int|null $order_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $recharge_num  default: (NULL), max length: 11, raw type: int
 * @property string|null $status  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $recharge_status  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $settle_status  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $order_cate_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $operation_user_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $if_admin  default: (0), max length: 1, raw type: tinyint
 * @property string|null $ip  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $source_id  default: (NULL), max length: 11, raw type: int
 * @property float|null $source_cost  default: (NULL), max length: 15, raw type: decimal
 * @property float|null $source_profit  default: (NULL), max length: 15, raw type: decimal
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $operation_type  default: (0), max length: 1, raw type: tinyint
 */
class order_status_operation_log extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_order_status_operation_log';
    static $primary_key = 'id';
}
