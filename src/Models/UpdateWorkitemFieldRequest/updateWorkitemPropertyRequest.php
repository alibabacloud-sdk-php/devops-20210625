<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkitemFieldRequest;

use AlibabaCloud\Tea\Model;

class updateWorkitemPropertyRequest extends Model
{
    /**
     * @example tag
     *
     * @var string
     */
    public $fieldIdentifier;

    /**
     * @var string
     */
    public $fieldValue;
    protected $_name = [
        'fieldIdentifier' => 'fieldIdentifier',
        'fieldValue'      => 'fieldValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldIdentifier) {
            $res['fieldIdentifier'] = $this->fieldIdentifier;
        }
        if (null !== $this->fieldValue) {
            $res['fieldValue'] = $this->fieldValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateWorkitemPropertyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldIdentifier'])) {
            $model->fieldIdentifier = $map['fieldIdentifier'];
        }
        if (isset($map['fieldValue'])) {
            $model->fieldValue = $map['fieldValue'];
        }

        return $model;
    }
}
