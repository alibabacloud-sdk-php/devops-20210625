<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectMembersResponseBody\members;

use AlibabaCloud\Tea\Model;

class division extends Model
{
    /**
     * @description 部门唯一标识
     *
     * @var string
     */
    public $identifier;
    protected $_name = [
        'identifier' => 'identifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return division
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        return $model;
    }
}