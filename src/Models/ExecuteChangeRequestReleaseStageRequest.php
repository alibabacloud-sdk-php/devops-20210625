<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ExecuteChangeRequestReleaseStageRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $params;

    /**
     * @example 66c0c9fffeb86b450c199fcd
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'params'         => 'params',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteChangeRequestReleaseStageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
