<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetBranchInfoResponseBody\result\commit;

use AlibabaCloud\Tea\Model;

class committer extends Model
{
    /**
     * @example https://tcs-devops.aliyuncs.com/thumbnail/112afcb7a6a35c3f67f1bea827c4/w/100/h/100
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 62c795c9cf51ade33b468af8
     *
     * @var string
     */
    public $externUid;

    /**
     * @example 5035
     *
     * @var int
     */
    public $id;

    /**
     * @example codeup-commit
     *
     * @var string
     */
    public $name;

    /**
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @example 62c795c9cf51ade33b468af8
     *
     * @var string
     */
    public $tbUserId;

    /**
     * @example commitcommit
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'avatarUrl' => 'avatarUrl',
        'email'     => 'email',
        'externUid' => 'externUid',
        'id'        => 'id',
        'name'      => 'name',
        'state'     => 'state',
        'tbUserId'  => 'tbUserId',
        'username'  => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->externUid) {
            $res['externUid'] = $this->externUid;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->tbUserId) {
            $res['tbUserId'] = $this->tbUserId;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return committer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['externUid'])) {
            $model->externUid = $map['externUid'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['tbUserId'])) {
            $model->tbUserId = $map['tbUserId'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
