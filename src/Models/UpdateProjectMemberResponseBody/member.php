<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectMemberResponseBody;

use AlibabaCloud\Tea\Model;

class member extends Model
{
    /**
     * @description 创建时间
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 修改时间
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description 角色id
     *
     * @var string
     */
    public $roleIdentifier;

    /**
     * @description 资源id，也就是项目id
     *
     * @var string
     */
    public $targetIdentifier;

    /**
     * @description 资源类型
     *
     * @var string
     */
    public $targetType;

    /**
     * @description 用户id
     *
     * @var string
     */
    public $userIdentifier;

    /**
     * @description 用户类型
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'gmtCreate'        => 'gmtCreate',
        'gmtModified'      => 'gmtModified',
        'id'               => 'id',
        'roleIdentifier'   => 'roleIdentifier',
        'targetIdentifier' => 'targetIdentifier',
        'targetType'       => 'targetType',
        'userIdentifier'   => 'userIdentifier',
        'userType'         => 'userType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->roleIdentifier) {
            $res['roleIdentifier'] = $this->roleIdentifier;
        }
        if (null !== $this->targetIdentifier) {
            $res['targetIdentifier'] = $this->targetIdentifier;
        }
        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }
        if (null !== $this->userIdentifier) {
            $res['userIdentifier'] = $this->userIdentifier;
        }
        if (null !== $this->userType) {
            $res['userType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return member
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['roleIdentifier'])) {
            $model->roleIdentifier = $map['roleIdentifier'];
        }
        if (isset($map['targetIdentifier'])) {
            $model->targetIdentifier = $map['targetIdentifier'];
        }
        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }
        if (isset($map['userIdentifier'])) {
            $model->userIdentifier = $map['userIdentifier'];
        }
        if (isset($map['userType'])) {
            $model->userType = $map['userType'];
        }

        return $model;
    }
}