<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkspaceResponseBody;

use AlibabaCloud\Tea\Model;

class workspace extends Model
{
    /**
     * @description 代码来源URL
     *
     * @var string
     */
    public $codeUrl;

    /**
     * @description 代码版本，支持 commitSHA、分支、标签
     *
     * @var string
     */
    public $codeVersion;

    /**
     * @description 创建时间戳
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 工作空间唯一标识，字符串形式，可在云效DevStudio访问空间链接中获取
     *
     * @var string
     */
    public $id;

    /**
     * @description 工作空间名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 机器规格
     *
     * @var string
     */
    public $spec;

    /**
     * @description 空间状态，枚举：CREATING-创建中, SUCCESS-运行中, FROZEN-冻结中, RECOVERING-恢复中
     *
     * @var string
     */
    public $status;

    /**
     * @description 工作空间模板
     *
     * @var string
     */
    public $template;

    /**
     * @description 用户阿里云PK
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'codeUrl'     => 'codeUrl',
        'codeVersion' => 'codeVersion',
        'createTime'  => 'createTime',
        'id'          => 'id',
        'name'        => 'name',
        'spec'        => 'spec',
        'status'      => 'status',
        'template'    => 'template',
        'userId'      => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeUrl) {
            $res['codeUrl'] = $this->codeUrl;
        }
        if (null !== $this->codeVersion) {
            $res['codeVersion'] = $this->codeVersion;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->template) {
            $res['template'] = $this->template;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workspace
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['codeUrl'])) {
            $model->codeUrl = $map['codeUrl'];
        }
        if (isset($map['codeVersion'])) {
            $model->codeVersion = $map['codeVersion'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
