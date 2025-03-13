<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListServiceCredentialsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example username_password
     *
     * @var string
     */
    public $serviceCredentialType;
    protected $_name = [
        'serviceCredentialType' => 'serviceCredentialType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceCredentialType) {
            $res['serviceCredentialType'] = $this->serviceCredentialType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceCredentialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceCredentialType'])) {
            $model->serviceCredentialType = $map['serviceCredentialType'];
        }

        return $model;
    }
}
