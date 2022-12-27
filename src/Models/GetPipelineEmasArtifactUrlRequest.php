<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetPipelineEmasArtifactUrlRequest extends Model
{
    /**
     * @example 122
     *
     * @var int
     */
    public $serviceConnectionId;
    protected $_name = [
        'serviceConnectionId' => 'serviceConnectionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceConnectionId) {
            $res['serviceConnectionId'] = $this->serviceConnectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPipelineEmasArtifactUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceConnectionId'])) {
            $model->serviceConnectionId = $map['serviceConnectionId'];
        }

        return $model;
    }
}
