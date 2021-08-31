<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateVariableGroupRequest extends Model
{
    /**
     * @description 变量组名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 变量组描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 变量信息json字符串 isEncrypted 是否加密 name 变量名称 value 变量值
     *
     * @var string
     */
    public $variables;
    protected $_name = [
        'name'        => 'name',
        'description' => 'description',
        'variables'   => 'variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->variables) {
            $res['variables'] = $this->variables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVariableGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['variables'])) {
            $model->variables = $map['variables'];
        }

        return $model;
    }
}
