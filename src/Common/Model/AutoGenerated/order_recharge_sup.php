<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property string $id  default: (NULL), max length: 36, raw type: varchar
 * @property string $order_id  default: (NULL), max length: 36, raw type: varchar
 * @property string|null $official_sn  default: (), max length: 255, raw type: varchar
 * @property int|null $sup_order_cate_id  default: (NULL), max length: 11, raw type: int
 * @property string|null $template_id  default: (NULL), max length: 36, raw type: varchar
 * @property int|null $sup_user_id  default: (0), max length: 11, raw type: int
 * @property int|null $source_id  default: (NULL), max length: 11, raw type: int
 * @property float|null $source_face_value  default: (NULL), max length: 10, raw type: decimal
 * @property float|null $source_buy_num  default: (NULL), max length: 11, raw type: decimal
 * @property float|null $sup_cost  default: (0), max length: 12, raw type: decimal
 * @property float|null $sup_price  default: (0), max length: 12, raw type: decimal
 * @property float|null $sup_profit  default: (NULL), max length: 12, raw type: decimal
 * @property string|null $on_before_info  default: (), max length: 255, raw type: varchar
 * @property string|null $on_after_info  default: (), max length: 255, raw type: varchar
 * @property string|null $phone_number  default: (NULL), max length: 120, raw type: varchar
 * @property string|null $on_other  default: (), max length: 255, raw type: varchar
 * @property int|null $recharge_status  default: (NULL), max length: 8, raw type: smallint
 * @property int|null $last_recharge_status_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $recharge_sequence  default: (0), max length: 11, raw type: int
 * @property string|null $settle_status  default: (NULL), max length: 20, raw type: varchar
 * @property int|null $can_recharge  default: (0), max length: 1, raw type: tinyint
 * @property string|null $sup_admin_info  default: (), max length: 255, raw type: varchar
 * @property \SimpleRecord\DateTime|null $add_time  default: (NULL), max length: 19, raw type: datetime
 * @property \SimpleRecord\DateTime|null $edit_time  default: (NULL), max length: 19, raw type: datetime
 * @property \SimpleRecord\DateTime|null $end_time  default: (NULL), max length: 19, raw type: datetime
 * @property string|null $sup_info  default: (), max length: 255, raw type: varchar
 * @property int|null $careful_status  default: (0), max length: 1, raw type: tinyint
 * @property string|null $sup_speed  default: (1), max length: 8, raw type: varchar
 * @property string|null $source_product_name  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $source_product_cate_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $source_product_master_id  default: (0), max length: 11, raw type: int
 * @property int|null $source_product_unit  default: (3), max length: 1, raw type: tinyint
 * @property string|null $province_code  default: (), max length: 10, raw type: varchar
 * @property string|null $city_code  default: (), max length: 20, raw type: varchar
 * @property int|null $is_mvno  default: (0), max length: 4, raw type: tinyint
 * @property int|null $operator_id  default: (0), max length: 4, raw type: tinyint
 * @property string|null $recharge_ip  default: (), max length: 130, raw type: varchar
 * @property string|null $provider_id  default: (NULL), max length: 16, raw type: varchar
 * @property int|null $paid_to_sup  default: (NULL), max length: 11, raw type: int
 */
class order_recharge_sup extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_order_recharge_sup';
    static $primary_key = 'id';
}