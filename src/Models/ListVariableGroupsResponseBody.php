<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsResponseBody\variableGroups;
use AlibabaCloud\Tea\Model;

class ListVariableGroupsResponseBody extends Model
{
    /**
     * @description 请求id，每次请求都是唯一值，便于后续排查问题
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description true 接口调用成功，false 接口调用失败
     *
     * @var bool
     */
    public $success;

    /**
     * @description 变量组
     *
     * @var variableGroups[]
     */
    public $variableGroups;

    /**
     * @description 变量组总数
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description 下一次查询的token，为空表示最后一页
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'requestId'      => 'requestId',
        'errorMessage'   => 'errorMessage',
        'errorCode'      => 'errorCode',
        'success'        => 'success',
        'variableGroups' => 'variableGroups',
        'totalCount'     => 'totalCount',
        'nextToken'      => 'nextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->variableGroups) {
            $res['variableGroups'] = [];
            if (null !== $this->variableGroups && \is_array($this->variableGroups)) {
                $n = 0;
                foreach ($this->variableGroups as $item) {
                    $res['variableGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVariableGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['variableGroups'])) {
            if (!empty($map['variableGroups'])) {
                $model->variableGroups = [];
                $n                     = 0;
                foreach ($map['variableGroups'] as $item) {
                    $model->variableGroups[$n++] = null !== $item ? variableGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
