<?php
namespace App\Admin\Model;

use App\Common\Model\AutoGenerated\admins;
use Symfony\Component\Security\Core\User\UserInterface;

class AdminUser extends admins implements UserInterface, \Serializable {
    static $table_name = 'yzb_admins';


    // 账号状态
    const STATUS_ACTIVE   = 'ACTIVE';      // 正常
    const STATUS_INACTIVE = 'INACTIVE';    // 已禁用
    const STATUS_LOCKED   = 'LOCKED';   // 被冻结
    const STATUS_DELETED  = 'DELETED';     // 已删除

    const STATUSES = [
        self::STATUS_ACTIVE   => '正常',
        self::STATUS_INACTIVE => '已禁用',
        self::STATUS_LOCKED   => '已冻结',
        self::STATUS_DELETED  => '已删除',
    ];

    const MAX_LOGIN_FAIL_NUM         = 10;
    const PASSWORD_FAIL_WARN_NUM     = 3;

    const ROLE_ADMIN_SUPER_ADMIN        = 'ROLE_ADMIN_SUPER_ADMIN';
    const ROLE_ADMIN_ADMINISTRATOR      = 'ROLE_ADMIN_ADMINISTRATOR';
    const ROLE_ADMIN_OPERATIONS_MANAGER = 'ROLE_ADMIN_OPERATIONS_MANAGER';
    const ROLE_ADMIN_EDITOR             = 'ROLE_ADMIN_EDITOR';

    const ADMIN_ROLES = [
        self::ROLE_ADMIN_SUPER_ADMIN        => '超级管理员',
        self::ROLE_ADMIN_ADMINISTRATOR      => '管理员',
        self::ROLE_ADMIN_OPERATIONS_MANAGER => '运营经理',
        self::ROLE_ADMIN_EDITOR             => '内容编辑',
    ];

    private $roleList = [];

    public function set_password($password) {
        $this->assign_attribute('password', password_hash($password, PASSWORD_BCRYPT));
    }

    public function isValid() {
        return $this->status === self::STATUS_ACTIVE;
    }

    public function allowLogin() {
        if(!$this->isValid()) {
            return false;
        }

        if ($this->password_error_num >= self::MAX_LOGIN_FAIL_NUM) {
            return false;
        }

        return true;
    }

    public function getAvatarUrl() {
        $defaultAvatar = "//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/img/default-head-portrait.jpg";

        return $this->read_attribute('avatar_url') ?: $defaultAvatar;
    }

    public function getDisplayName() {
        return $this->name ?: $this->user_name;
    }

    public function getMobile($masked = false) {
        $mobileNumber = $this->mobile;
        if ($mobileNumber && $masked) {
            $mobileNumber = substr($mobileNumber, 0, 3) . "****" . substr($mobileNumber, -4);
        }

        return $mobileNumber;
    }

    public function getEmail($masked = false) {
        $email = $this->bind_email;
        if ($email && $masked) {
            $email = substr($email, 0, 3) . "****" . substr($email, -4);
        }

        return $email;
    }

    public function getUsername(): string {
        return $this->read_attribute('user_name');
    }

    public function getPassword(): string {
        return $this->read_attribute('password') ?: "";
    }

    /**
     * Returns the roles or permissions granted to the user for security.
     */
    public function getRoles(): array {
        $this->roleList = array_unique(explode(",", $this->roles));

        // guarantees that a user always has at least one role for security
        if (!$this->roleList) {
            $this->roleList = ['ROLE_USER'];
        }

        return $this->roleList;
    }

    public function setRoles(array $roles) {
        $this->roleList = $roles;
        $rolesStr    = join(",", $roles);
        $this->assign_attribute("roles", $rolesStr);
    }

    public function set_roles($roles) {
        if(is_array($roles)) {
            $rolesStr = join(',', $roles);
            $this->roleList = $roles;
        } else {
            $rolesStr = $roles;
            $this->roleList = array_unique(explode(",", $roles));
        }

        $this->assign_attribute("roles", $rolesStr);
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * {@inheritdoc}
     */
    public function getSalt(): ?string {
        return null;
    }

    /**
     * Removes sensitive data from the user.
     *
     * {@inheritdoc}
     */
    public function eraseCredentials(): void {
        // if you had a plainPassword property, you'd nullify it here
        // $this->plainPassword = null;
    }

    /**
     * {@inheritdoc}
     */
    public function serialize(): string {
        // add $this->salt too if you don't use Bcrypt or Argon2i
        return serialize([$this->id, $this->getUsername(), $this->password]);
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized): void {
        // add $this->salt too if you don't use Bcrypt or Argon2i
        [$id, $user_name, $password] = unserialize($serialized, ['allowed_classes' => false]);
        $this->assign_attribute('id', $id);
        $this->assign_attribute('user_name', $user_name);
        $this->assign_attribute('password', $password);
    }

    public function __toString() {
        return sprintf("[%s(%s)]", $this->user_name, $this->id);
    }

    public function isDeleted() {
        return $this->is_deleted;
    }

    public function isActive() {
        return $this->status === self::STATUS_ACTIVE;
    }

    // public function isLocked() {
    //     $now = time();
    //     if($this->lock_expires_at && $this->lock_expires_at < $now) {
    //         $this->lock_expires_at = null;
    //         $this->save();
    //     }
    //
    //     return $this->status === self::STATUS_LOCKED && $this->lock_expires_at && $this->lock_expires_at >= $now;
    // }
    //
    // /**
    //  * @param int $period lock period in seconds, 0 means forever
    //  */
    // public function lock($period = 0) {
    //     $expiresAt             = time() + ($period ?: 86400 * 365 * 100); // 坚持 100 年不动摇
    //     $this->status          = self::STATUS_LOCKED;
    //     $this->lock_expires_at = $expiresAt;
    // }
}