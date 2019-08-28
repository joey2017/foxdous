<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property string $order_sn  default: (NULL), max length: 30, raw type: varchar
 * @property string $trade_sn  default: (NULL), max length: 30, raw type: varchar
 * @property string $outer_sn  default: (NULL), max length: 50, raw type: varchar
 * @property int $product_id  default: (NULL), max length: 11, raw type: int
 * @property int $request_id  default: (0), max length: 11, raw type: bigint
 * @property int $pintai  default: (NULL), max length: 1, raw type: tinyint
 * @property int $order_cate  default: (NULL), max length: 11, raw type: int
 * @property int $product_master_id  default: (NULL), max length: 11, raw type: int
 * @property int $product_cate  default: (NULL), max length: 11, raw type: int
 * @property string $product_name  default: (NULL), max length: 255, raw type: varchar
 * @property float $product_mianzi  default: (NULL), max length: 10, raw type: decimal
 * @property int $user_id  default: (NULL), max length: 11, raw type: int
 * @property int $icp  default: (0), max length: 4, raw type: tinyint
 * @property string $on  default: (NULL), max length: 120, raw type: varchar
 * @property string $on_before_info  default: (), max length: 255, raw type: varchar
 * @property string $on_after_info  default: (), max length: 255, raw type: varchar
 * @property string $on_other  default: (), max length: 255, raw type: varchar
 * @property float $recharge_amount  default: (NULL), max length: 10, raw type: decimal
 * @property int $recharge_way  default: (NULL), max length: 1, raw type: tinyint
 * @property int $recharge_sequence  default: (NULL), max length: 11, raw type: int
 * @property float $buy_num  default: (1), max length: 11, raw type: decimal
 * @property float $sell_price  default: (NULL), max length: 12, raw type: decimal
 * @property int $order_status  default: (NULL), max length: 2, raw type: tinyint
 * @property string $user_ip  default: (), max length: 130, raw type: varchar
 * @property string $recharge_ip  default: (), max length: 130, raw type: varchar
 * @property string $user_info  default: (), max length: 120, raw type: varchar
 * @property int $app_id  default: (0), max length: 11, raw type: int
 * @property float $life_real_sell_price  default: (0), max length: 17, raw type: decimal
 * @property \SimpleRecord\DateTime $add_time  default: (NULL), max length: 19, raw type: datetime
 * @property \SimpleRecord\DateTime $pay_time  default: (NULL), max length: 19, raw type: datetime
 * @property \SimpleRecord\DateTime $end_time  default: (NULL), max length: 19, raw type: datetime
 * @property int $speed  default: (1), max length: 4, raw type: tinyint
 * @property string $province  default: (), max length: 10, raw type: varchar
 * @property string $city  default: (), max length: 20, raw type: varchar
 * @property int $mvno  default: (0), max length: 4, raw type: tinyint
 * @property string $admin_info  default: (), max length: 255, raw type: varchar
 */
class order_recharge_beifen extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_order_recharge_beifen';
    static $primary_key = 'order_sn';
}
