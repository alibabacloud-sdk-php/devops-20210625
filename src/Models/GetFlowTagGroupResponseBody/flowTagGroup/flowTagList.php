<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetFlowTagGroupResponseBody\flowTagGroup;

use AlibabaCloud\Dara\Model;

class flowTagList extends Model
{
    /**
     * @var string
     */
    public $color;
    /**
     * @var string
     */
    public $creatorAccountId;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $modiferAccountId;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'color'            => 'color',
        'creatorAccountId' => 'creatorAccountId',
        'id'               => 'id',
        'modiferAccountId' => 'modiferAccountId',
        'name'             => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->color) {
            $res['color'] = $this->color;
        }

        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->modiferAccountId) {
            $res['modiferAccountId'] = $this->modiferAccountId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['color'])) {
            $model->color = $map['color'];
        }

        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['modiferAccountId'])) {
            $model->modiferAccountId = $map['modiferAccountId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
