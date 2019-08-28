<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int $user_id  default: (NULL), max length: 11, raw type: int
 * @property int $user_type  default: (NULL), max length: 1, raw type: tinyint
 * @property string $legal_person_name  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $legal_person_identity_card_no  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $legal_person_address  default: (), max length: 255, raw type: varchar
 * @property int|null $legal_person_identity_card_valid_time_start  default: (0), max length: 11, raw type: int
 * @property int|null $legal_person_identity_card_valid_time_end  default: (0), max length: 11, raw type: int
 * @property string|null $positive_photo_of_legal_person_identity_card  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $negative_photo_of_legal_person_identity_card  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $hand_photo_of_legal_person_identity_card  default: (NULL), max length: 255, raw type: varchar
 * @property string $business_name  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $business_address  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $business_scope  default: (NULL), max length: 255, raw type: varchar
 * @property string $business_license_no  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $business_license_valid_time_start  default: (0), max length: 11, raw type: int
 * @property int|null $business_license_valid_time_end  default: (0), max length: 11, raw type: int
 * @property string|null $business_license_photo  default: (NULL), max length: 255, raw type: varchar
 * @property int $status  default: (0), max length: 1, raw type: tinyint
 * @property int $status_info  default: (0), max length: 1, raw type: tinyint
 * @property int $status_positive_photo  default: (0), max length: 1, raw type: tinyint
 * @property int $status_negative_photo  default: (0), max length: 1, raw type: tinyint
 * @property int $status_business_license_photo  default: (0), max length: 1, raw type: tinyint
 * @property string|null $submission_of_authentication_ip  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $sub_info_authentication_ip  default: (NULL), max length: 255, raw type: varchar
 * @property int $add_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $edit_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $submission_of_authentication_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $real_name_authentication_finish_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $info_authentication_finish_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $admin_id  default: (NULL), max length: 11, raw type: int
 * @property string|null $cause  default: (NULL), max length: 255, raw type: varchar
 */
class users_aduit_log extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_users_aduit_log';
    static $primary_key = 'id';
}
