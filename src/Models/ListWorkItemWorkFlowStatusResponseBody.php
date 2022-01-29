<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemWorkFlowStatusResponseBody\statuses;
use AlibabaCloud\Tea\Model;

class ListWorkItemWorkFlowStatusResponseBody extends Model
{
    /**
     * @description 错误返回码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 错误返回信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description openapi平台的request id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 工作流状态
     *
     * @var statuses[]
     */
    public $statuses;

    /**
     * @description 接口是否正常返回
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
        'requestId'    => 'requestId',
        'statuses'     => 'statuses',
        'success'      => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->statuses) {
            $res['statuses'] = [];
            if (null !== $this->statuses && \is_array($this->statuses)) {
                $n = 0;
                foreach ($this->statuses as $item) {
                    $res['statuses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkItemWorkFlowStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['statuses'])) {
            if (!empty($map['statuses'])) {
                $model->statuses = [];
                $n               = 0;
                foreach ($map['statuses'] as $item) {
                    $model->statuses[$n++] = null !== $item ? statuses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
