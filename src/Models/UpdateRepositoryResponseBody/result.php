<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryResponseBody\result\namespace_;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $archived;

    /**
     * @example https://tcs-devops.aliyuncs.com/thumbnail/112afcb7a6a35c3f67f1bea827c4/w/100/h/100
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @example false
     *
     * @var bool
     */
    public $buildsEnabled;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example 19238
     *
     * @var int
     */
    public $creatorId;

    /**
     * @example master
     *
     * @var string
     */
    public $defaultBranch;

    /**
     * @var string
     */
    public $description;

    /**
     * @example https://codeup.aliyun.com/xxx/test/test.git
     *
     * @var string
     */
    public $httpUrlToRepo;

    /**
     * @example 2825387
     *
     * @var int
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $issuesEnabled;

    /**
     * @example 2022-03-20 14:24:54
     *
     * @var string
     */
    public $lastActivityAt;

    /**
     * @example true
     *
     * @var bool
     */
    public $mergeRequestsEnabled;

    /**
     * @example codeup
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @var namespace_
     */
    public $namespace;

    /**
     * @example codeup
     *
     * @var string
     */
    public $path;

    /**
     * @example codeup-test-org / codeup
     *
     * @var string
     */
    public $pathWithNamespace;

    /**
     * @example false
     *
     * @var bool
     */
    public $snippetsEnabled;

    /**
     * @example git@codeup.aliyun.com:xxx/test/test.git
     *
     * @var string
     */
    public $sshUrlToRepo;

    /**
     * @example 0
     *
     * @var int
     */
    public $visibilityLevel;

    /**
     * @example https://codeup.aliyun.com/xxx/test/test
     *
     * @var string
     */
    public $webUrl;

    /**
     * @example true
     *
     * @var bool
     */
    public $wikiEnabled;
    protected $_name = [
        'archived'             => 'archived',
        'avatarUrl'            => 'avatarUrl',
        'buildsEnabled'        => 'buildsEnabled',
        'createdAt'            => 'createdAt',
        'creatorId'            => 'creatorId',
        'defaultBranch'        => 'defaultBranch',
        'description'          => 'description',
        'httpUrlToRepo'        => 'httpUrlToRepo',
        'id'                   => 'id',
        'issuesEnabled'        => 'issuesEnabled',
        'lastActivityAt'       => 'lastActivityAt',
        'mergeRequestsEnabled' => 'mergeRequestsEnabled',
        'name'                 => 'name',
        'nameWithNamespace'    => 'nameWithNamespace',
        'namespace'            => 'namespace',
        'path'                 => 'path',
        'pathWithNamespace'    => 'pathWithNamespace',
        'snippetsEnabled'      => 'snippetsEnabled',
        'sshUrlToRepo'         => 'sshUrlToRepo',
        'visibilityLevel'      => 'visibilityLevel',
        'webUrl'               => 'webUrl',
        'wikiEnabled'          => 'wikiEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archived) {
            $res['archived'] = $this->archived;
        }
        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->buildsEnabled) {
            $res['buildsEnabled'] = $this->buildsEnabled;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }
        if (null !== $this->defaultBranch) {
            $res['defaultBranch'] = $this->defaultBranch;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->httpUrlToRepo) {
            $res['httpUrlToRepo'] = $this->httpUrlToRepo;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->issuesEnabled) {
            $res['issuesEnabled'] = $this->issuesEnabled;
        }
        if (null !== $this->lastActivityAt) {
            $res['lastActivityAt'] = $this->lastActivityAt;
        }
        if (null !== $this->mergeRequestsEnabled) {
            $res['mergeRequestsEnabled'] = $this->mergeRequestsEnabled;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nameWithNamespace) {
            $res['nameWithNamespace'] = $this->nameWithNamespace;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = null !== $this->namespace ? $this->namespace->toMap() : null;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->pathWithNamespace) {
            $res['pathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->snippetsEnabled) {
            $res['snippetsEnabled'] = $this->snippetsEnabled;
        }
        if (null !== $this->sshUrlToRepo) {
            $res['sshUrlToRepo'] = $this->sshUrlToRepo;
        }
        if (null !== $this->visibilityLevel) {
            $res['visibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->webUrl) {
            $res['webUrl'] = $this->webUrl;
        }
        if (null !== $this->wikiEnabled) {
            $res['wikiEnabled'] = $this->wikiEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['archived'])) {
            $model->archived = $map['archived'];
        }
        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }
        if (isset($map['buildsEnabled'])) {
            $model->buildsEnabled = $map['buildsEnabled'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }
        if (isset($map['defaultBranch'])) {
            $model->defaultBranch = $map['defaultBranch'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['httpUrlToRepo'])) {
            $model->httpUrlToRepo = $map['httpUrlToRepo'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['issuesEnabled'])) {
            $model->issuesEnabled = $map['issuesEnabled'];
        }
        if (isset($map['lastActivityAt'])) {
            $model->lastActivityAt = $map['lastActivityAt'];
        }
        if (isset($map['mergeRequestsEnabled'])) {
            $model->mergeRequestsEnabled = $map['mergeRequestsEnabled'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nameWithNamespace'])) {
            $model->nameWithNamespace = $map['nameWithNamespace'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = namespace_::fromMap($map['namespace']);
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['pathWithNamespace'])) {
            $model->pathWithNamespace = $map['pathWithNamespace'];
        }
        if (isset($map['snippetsEnabled'])) {
            $model->snippetsEnabled = $map['snippetsEnabled'];
        }
        if (isset($map['sshUrlToRepo'])) {
            $model->sshUrlToRepo = $map['sshUrlToRepo'];
        }
        if (isset($map['visibilityLevel'])) {
            $model->visibilityLevel = $map['visibilityLevel'];
        }
        if (isset($map['webUrl'])) {
            $model->webUrl = $map['webUrl'];
        }
        if (isset($map['wikiEnabled'])) {
            $model->wikiEnabled = $map['wikiEnabled'];
        }

        return $model;
    }
}
