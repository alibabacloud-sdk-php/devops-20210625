<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline\pipelineConfig\sources;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 分支
     *
     * @var string
     */
    public $branch;

    /**
     * @description 服务连接Id
     *
     * @var int
     */
    public $serviceConnectionId;

    /**
     * @description 代码源显示标签
     *
     * @var string
     */
    public $label;

    /**
     * @description 是否提交触发
     *
     * @var bool
     */
    public $isTrigger;

    /**
     * @description 代码库地址
     *
     * @var string
     */
    public $repo;

    /**
     * @description 触发过滤条件
     *
     * @var string
     */
    public $triggerFilter;

    /**
     * @description webhhook地址
     *
     * @var string
     */
    public $webhook;

    /**
     * @description 触发事件
     *
     * @var string[]
     */
    public $events;

    /**
     * @description 是否分支模式
     *
     * @var bool
     */
    public $isBranchMode;

    /**
     * @description 是否子模块
     *
     * @var bool
     */
    public $isSubmodule;

    /**
     * @description 是否设置clone深度
     *
     * @var bool
     */
    public $isCloneDepth;

    /**
     * @description 克隆深度
     *
     * @var int
     */
    public $cloneDepth;

    /**
     * @description Credential Id
     *
     * @var int
     */
    public $credentialId;

    /**
     * @description Credential Type
     *
     * @var string
     */
    public $credentialType;

    /**
     * @description Credential Label
     *
     * @var string
     */
    public $credentialLabel;

    /**
     * @description github命名空间
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'branch'              => 'branch',
        'serviceConnectionId' => 'serviceConnectionId',
        'label'               => 'label',
        'isTrigger'           => 'isTrigger',
        'repo'                => 'repo',
        'triggerFilter'       => 'triggerFilter',
        'webhook'             => 'webhook',
        'events'              => 'events',
        'isBranchMode'        => 'isBranchMode',
        'isSubmodule'         => 'isSubmodule',
        'isCloneDepth'        => 'isCloneDepth',
        'cloneDepth'          => 'cloneDepth',
        'credentialId'        => 'credentialId',
        'credentialType'      => 'credentialType',
        'credentialLabel'     => 'credentialLabel',
        'namespace'           => 'namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }
        if (null !== $this->serviceConnectionId) {
            $res['serviceConnectionId'] = $this->serviceConnectionId;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->isTrigger) {
            $res['isTrigger'] = $this->isTrigger;
        }
        if (null !== $this->repo) {
            $res['repo'] = $this->repo;
        }
        if (null !== $this->triggerFilter) {
            $res['triggerFilter'] = $this->triggerFilter;
        }
        if (null !== $this->webhook) {
            $res['webhook'] = $this->webhook;
        }
        if (null !== $this->events) {
            $res['events'] = $this->events;
        }
        if (null !== $this->isBranchMode) {
            $res['isBranchMode'] = $this->isBranchMode;
        }
        if (null !== $this->isSubmodule) {
            $res['isSubmodule'] = $this->isSubmodule;
        }
        if (null !== $this->isCloneDepth) {
            $res['isCloneDepth'] = $this->isCloneDepth;
        }
        if (null !== $this->cloneDepth) {
            $res['cloneDepth'] = $this->cloneDepth;
        }
        if (null !== $this->credentialId) {
            $res['credentialId'] = $this->credentialId;
        }
        if (null !== $this->credentialType) {
            $res['credentialType'] = $this->credentialType;
        }
        if (null !== $this->credentialLabel) {
            $res['credentialLabel'] = $this->credentialLabel;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }
        if (isset($map['serviceConnectionId'])) {
            $model->serviceConnectionId = $map['serviceConnectionId'];
        }
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['isTrigger'])) {
            $model->isTrigger = $map['isTrigger'];
        }
        if (isset($map['repo'])) {
            $model->repo = $map['repo'];
        }
        if (isset($map['triggerFilter'])) {
            $model->triggerFilter = $map['triggerFilter'];
        }
        if (isset($map['webhook'])) {
            $model->webhook = $map['webhook'];
        }
        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = $map['events'];
            }
        }
        if (isset($map['isBranchMode'])) {
            $model->isBranchMode = $map['isBranchMode'];
        }
        if (isset($map['isSubmodule'])) {
            $model->isSubmodule = $map['isSubmodule'];
        }
        if (isset($map['isCloneDepth'])) {
            $model->isCloneDepth = $map['isCloneDepth'];
        }
        if (isset($map['cloneDepth'])) {
            $model->cloneDepth = $map['cloneDepth'];
        }
        if (isset($map['credentialId'])) {
            $model->credentialId = $map['credentialId'];
        }
        if (isset($map['credentialType'])) {
            $model->credentialType = $map['credentialType'];
        }
        if (isset($map['credentialLabel'])) {
            $model->credentialLabel = $map['credentialLabel'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        return $model;
    }
}
