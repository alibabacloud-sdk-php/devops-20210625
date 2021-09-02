<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkspaceResponseBody\workspace;
use AlibabaCloud\Tea\Model;

class GetWorkspaceResponseBody extends Model
{
    /**
     * @description 工作空间信息
     *
     * @var workspace
     */
    public $workspace;

    /**
     * @description 请求是否成功
     *
     * @var bool
     */
    public $success;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'workspace'    => 'workspace',
        'success'      => 'success',
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
        'requestId'    => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workspace) {
            $res['workspace'] = null !== $this->workspace ? $this->workspace->toMap() : null;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkspaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['workspace'])) {
            $model->workspace = workspace::fromMap($map['workspace']);
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
