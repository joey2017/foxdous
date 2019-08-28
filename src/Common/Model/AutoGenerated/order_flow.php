<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int $pintai  default: (NULL), max length: 1, raw type: tinyint
 * @property string $sn  default: (NULL), max length: 30, raw type: varchar
 * @property string $trade_sn  default: (NULL), max length: 30, raw type: varchar
 * @property string|null $request_order_id  default: (NULL), max length: 50, raw type: varchar
 * @property int $product_type  default: (NULL), max length: 1, raw type: tinyint
 * @property int $kuai_man  default: (NULL), max length: 1, raw type: tinyint
 * @property string $product_name  default: (NULL), max length: 255, raw type: varchar
 * @property int $product_id  default: (NULL), max length: 11, raw type: int
 * @property int $user_id  default: (NULL), max length: 11, raw type: int
 * @property string $senfen  default: (NULL), max length: 20, raw type: varchar
 * @property string|null $city  default: (NULL), max length: 20, raw type: varchar
 * @property string|null $icp  default: (NULL), max length: 20, raw type: varchar
 * @property float|null $user_money  default: (NULL), max length: 12, raw type: decimal
 * @property string $on  default: (NULL), max length: 11, raw type: varchar
 * @property int|null $sell_user_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $qudao_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $t_id  default: (NULL), max length: 11, raw type: int
 * @property string|null $t_sn  default: (NULL), max length: 20, raw type: varchar
 * @property string|null $template_name  default: (NULL), max length: 50, raw type: varchar
 * @property float $product_mianzi  default: (NULL), max length: 10, raw type: decimal
 * @property float $rechage_price  default: (NULL), max length: 10, raw type: decimal
 * @property int|null $rechage_way  default: (NULL), max length: 1, raw type: tinyint
 * @property int $rechage_num  default: (0), max length: 11, raw type: int
 * @property int $num  default: (0), max length: 11, raw type: int
 * @property float|null $cenben  default: (NULL), max length: 12, raw type: decimal
 * @property float|null $old_price  default: (NULL), max length: 12, raw type: decimal
 * @property float|null $sell_price  default: (NULL), max length: 12, raw type: decimal
 * @property float|null $lirun  default: (NULL), max length: 12, raw type: decimal
 * @property int $status  default: (0), max length: 2, raw type: tinyint
 * @property int $rechage_status  default: (NULL), max length: 2, raw type: tinyint
 * @property int $closing_status  default: (1), max length: 1, raw type: tinyint
 * @property int $rechage_yes_no  default: (0), max length: 1, raw type: tinyint
 * @property string|null $order_ip  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $user_info  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $admin_info  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $add_time  default: (0), max length: 11, raw type: int
 * @property int|null $pay_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $finish_time  default: (0), max length: 11, raw type: int
 * @property string|null $official_sn  default: (NULL), max length: 255, raw type: varchar
 * @property float|null $life_real_sell_price  default: (0), max length: 17, raw type: decimal
 * @property string $on_before_info  default: (), max length: 255, raw type: varchar
 * @property string $sup_info  default: (), max length: 255, raw type: varchar
 * @property int $app_id  default: (0), max length: 11, raw type: int
 */
class order_flow extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_order_flow';
    static $primary_key = 'sn';
}
