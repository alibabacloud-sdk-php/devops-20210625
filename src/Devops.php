<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddRepositoryMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddRepositoryMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddWebhookRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddWebhookResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateBranchRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateBranchResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFileRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFileResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFlowTagGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFlowTagGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFlowTagRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFlowTagResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateHostGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateOAuthTokenRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateOAuthTokenResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateRepositoryRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateRepositoryResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateResourceMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateResourceMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateSprintRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateSprintResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateSshKeyResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateVariableGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemCommentRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemCommentResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemEstimateRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemEstimateResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRecordRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRecordResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteBranchRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteBranchResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteFileRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteFlowTagGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteFlowTagResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeletePipelineGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeletePipelineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteProtectedBranchRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteProtectedBranchResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteRepositoryRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteRepositoryResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteResourceMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteWorkitemAllCommentRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteWorkitemAllCommentResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteWorkitemCommentRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteWorkitemCommentResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\FrozenWorkspaceResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetBranchInfoRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetBranchInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCodeupOrganizationRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCodeupOrganizationResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCustomFieldOptionRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCustomFieldOptionResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetFileBlobsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetFileBlobsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetFileLastCommitRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetFileLastCommitResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetFlowTagGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetOrganizationMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineArtifactUrlRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineArtifactUrlResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineEmasArtifactUrlRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineEmasArtifactUrlResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineScanReportUrlRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineScanReportUrlResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetProjectInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetProjectMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetProjectMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetRepositoryRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetRepositoryResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetSprintInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemCommentListResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemRelationsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemRelationsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemTimeTypeListResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemWorkFlowInfoRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemWorkFlowInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\JoinPipelineGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\JoinPipelineGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListFlowTagGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListHostGroupsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListHostGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListOrganizationMembersRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListOrganizationMembersResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineGroupPipelinesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineGroupPipelinesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineGroupsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineJobHistorysRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineJobHistorysResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineJobsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineJobsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRunsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRunsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectMembersRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectMembersResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectTemplatesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectTemplatesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectWorkitemTypesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectWorkitemTypesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoriesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoriesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryBranchesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryBranchesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryCommitDiffRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryCommitDiffResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryMemberWithInheritedRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryMemberWithInheritedResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryTreeRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryTreeResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryWebhookRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryWebhookResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListResourceMembersResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceConnectionsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceConnectionsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSprintsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSprintsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemAllFieldsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemAllFieldsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemTimeResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemWorkFlowStatusRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemWorkFlowStatusResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\LogPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\LogVMDeployMachineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\PassPipelineValidateResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\RefusePipelineValidateResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ReleaseWorkspaceResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ResetSshKeyResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ResumeVMDeployOrderResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\RetryPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\RetryVMDeployMachineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\SkipPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\SkipVMDeployMachineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StartPipelineRunRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\StartPipelineRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StopPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StopPipelineRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StopVMDeployOrderResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\TriggerRepositoryMirrorSyncRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\TriggerRepositoryMirrorSyncResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFileRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFileResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFlowTagGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFlowTagGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFlowTagRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFlowTagResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateHostGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineBaseInfoRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineBaseInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateResourceMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateResourceMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateVariableGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkitemCommentRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkitemCommentResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkItemRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkItemResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Devops extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('devops', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param string                     $repositoryId
     * @param AddRepositoryMemberRequest $request
     *
     * @return AddRepositoryMemberResponse
     */
    public function addRepositoryMember($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addRepositoryMemberWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $repositoryId
     * @param AddRepositoryMemberRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return AddRepositoryMemberResponse
     */
    public function addRepositoryMemberWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->accessLevel)) {
            $body['accessLevel'] = $request->accessLevel;
        }
        if (!Utils::isUnset($request->aliyunPks)) {
            $body['aliyunPks'] = $request->aliyunPks;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddRepositoryMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/members',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddRepositoryMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $repositoryId
     * @param AddWebhookRequest $request
     *
     * @return AddWebhookResponse
     */
    public function addWebhook($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addWebhookWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string            $repositoryId
     * @param AddWebhookRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AddWebhookResponse
     */
    public function addWebhookWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableSslVerification)) {
            $body['enableSslVerification'] = $request->enableSslVerification;
        }
        if (!Utils::isUnset($request->mergeRequestsEvents)) {
            $body['mergeRequestsEvents'] = $request->mergeRequestsEvents;
        }
        if (!Utils::isUnset($request->noteEvents)) {
            $body['noteEvents'] = $request->noteEvents;
        }
        if (!Utils::isUnset($request->pushEvents)) {
            $body['pushEvents'] = $request->pushEvents;
        }
        if (!Utils::isUnset($request->secretToken)) {
            $body['secretToken'] = $request->secretToken;
        }
        if (!Utils::isUnset($request->tagPushEvents)) {
            $body['tagPushEvents'] = $request->tagPushEvents;
        }
        if (!Utils::isUnset($request->url)) {
            $body['url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddWebhook',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/webhooks/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $repositoryId
     * @param CreateBranchRequest $request
     *
     * @return CreateBranchResponse
     */
    public function createBranch($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBranchWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string              $repositoryId
     * @param CreateBranchRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBranchResponse
     */
    public function createBranchWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->branchName)) {
            $body['branchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->ref)) {
            $body['ref'] = $request->ref;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateBranch',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/branches',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBranchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $repositoryId
     * @param CreateFileRequest $request
     *
     * @return CreateFileResponse
     */
    public function createFile($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFileWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string            $repositoryId
     * @param CreateFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFileResponse
     */
    public function createFileWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->branchName)) {
            $body['branchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->commitMessage)) {
            $body['commitMessage'] = $request->commitMessage;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->encoding)) {
            $body['encoding'] = $request->encoding;
        }
        if (!Utils::isUnset($request->filePath)) {
            $body['filePath'] = $request->filePath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFile',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/files',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $organizationId
     * @param CreateFlowTagRequest $request
     *
     * @return CreateFlowTagResponse
     */
    public function createFlowTag($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowTagWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string               $organizationId
     * @param CreateFlowTagRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateFlowTagResponse
     */
    public function createFlowTagWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->color)) {
            $query['color'] = $request->color;
        }
        if (!Utils::isUnset($request->flowTagGroupId)) {
            $query['flowTagGroupId'] = $request->flowTagGroupId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowTag',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFlowTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $organizationId
     * @param CreateFlowTagGroupRequest $request
     *
     * @return CreateFlowTagGroupResponse
     */
    public function createFlowTagGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowTagGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $organizationId
     * @param CreateFlowTagGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFlowTagGroupResponse
     */
    public function createFlowTagGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowTagGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tagGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $organizationId
     * @param CreateHostGroupRequest $request
     *
     * @return CreateHostGroupResponse
     */
    public function createHostGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHostGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $organizationId
     * @param CreateHostGroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateHostGroupResponse
     */
    public function createHostGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliyunRegion)) {
            $body['aliyunRegion'] = $request->aliyunRegion;
        }
        if (!Utils::isUnset($request->ecsLabelKey)) {
            $body['ecsLabelKey'] = $request->ecsLabelKey;
        }
        if (!Utils::isUnset($request->ecsLabelValue)) {
            $body['ecsLabelValue'] = $request->ecsLabelValue;
        }
        if (!Utils::isUnset($request->ecsType)) {
            $body['ecsType'] = $request->ecsType;
        }
        if (!Utils::isUnset($request->envId)) {
            $body['envId'] = $request->envId;
        }
        if (!Utils::isUnset($request->machineInfos)) {
            $body['machineInfos'] = $request->machineInfos;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceConnectionId)) {
            $body['serviceConnectionId'] = $request->serviceConnectionId;
        }
        if (!Utils::isUnset($request->tagIds)) {
            $body['tagIds'] = $request->tagIds;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateHostGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/hostGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOAuthTokenRequest $request
     *
     * @return CreateOAuthTokenResponse
     */
    public function createOAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOAuthTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateOAuthTokenRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateOAuthTokenResponse
     */
    public function createOAuthTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientId)) {
            $body['clientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientSecret)) {
            $body['clientSecret'] = $request->clientSecret;
        }
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->grantType)) {
            $body['grantType'] = $request->grantType;
        }
        if (!Utils::isUnset($request->login)) {
            $body['login'] = $request->login;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOAuthToken',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/login/oauth/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateOAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $organizationId
     * @param CreatePipelineGroupRequest $request
     *
     * @return CreatePipelineGroupResponse
     */
    public function createPipelineGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $organizationId
     * @param CreatePipelineGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePipelineGroupResponse
     */
    public function createPipelineGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePipelineGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $organizationId
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string               $organizationId
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->customCode)) {
            $body['customCode'] = $request->customCode;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->templateIdentifier)) {
            $body['templateIdentifier'] = $request->templateIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/projects/createProject',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRepositoryRequest $request
     *
     * @return CreateRepositoryResponse
     */
    public function createRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateRepositoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRepositoryResponse
     */
    public function createRepositoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->createParentPath)) {
            $query['createParentPath'] = $request->createParentPath;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->sync)) {
            $query['sync'] = $request->sync;
        }
        $body = [];
        if (!Utils::isUnset($request->avatarUrl)) {
            $body['avatarUrl'] = $request->avatarUrl;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->gitignoreType)) {
            $body['gitignoreType'] = $request->gitignoreType;
        }
        if (!Utils::isUnset($request->importAccount)) {
            $body['importAccount'] = $request->importAccount;
        }
        if (!Utils::isUnset($request->importDemoProject)) {
            $body['importDemoProject'] = $request->importDemoProject;
        }
        if (!Utils::isUnset($request->importRepoType)) {
            $body['importRepoType'] = $request->importRepoType;
        }
        if (!Utils::isUnset($request->importToken)) {
            $body['importToken'] = $request->importToken;
        }
        if (!Utils::isUnset($request->importTokenEncrypted)) {
            $body['importTokenEncrypted'] = $request->importTokenEncrypted;
        }
        if (!Utils::isUnset($request->importUrl)) {
            $body['importUrl'] = $request->importUrl;
        }
        if (!Utils::isUnset($request->initStandardService)) {
            $body['initStandardService'] = $request->initStandardService;
        }
        if (!Utils::isUnset($request->isCryptoEnabled)) {
            $body['isCryptoEnabled'] = $request->isCryptoEnabled;
        }
        if (!Utils::isUnset($request->localImportUrl)) {
            $body['localImportUrl'] = $request->localImportUrl;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $body['namespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->path)) {
            $body['path'] = $request->path;
        }
        if (!Utils::isUnset($request->readmeType)) {
            $body['readmeType'] = $request->readmeType;
        }
        if (!Utils::isUnset($request->visibilityLevel)) {
            $body['visibilityLevel'] = $request->visibilityLevel;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRepository',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param CreateResourceMemberRequest $request
     *
     * @return CreateResourceMemberResponse
     */
    public function createResourceMember($organizationId, $resourceType, $resourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param CreateResourceMemberRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateResourceMemberResponse
     */
    public function createResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['accountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->roleName)) {
            $body['roleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/' . OpenApiUtilClient::getEncodeParam($resourceType) . '/' . OpenApiUtilClient::getEncodeParam($resourceId) . '/members',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResourceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $organizationId
     * @param CreateSprintRequest $request
     *
     * @return CreateSprintResponse
     */
    public function createSprint($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSprintWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string              $organizationId
     * @param CreateSprintRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSprintResponse
     */
    public function createSprintWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endDate)) {
            $body['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $body['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->staffIds)) {
            $body['staffIds'] = $request->staffIds;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['startDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSprint',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/sprints/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSprintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     *
     * @return CreateSshKeyResponse
     */
    public function createSshKey($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSshKeyWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateSshKeyResponse
     */
    public function createSshKeyWithOptions($organizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateSshKey',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/sshKey',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSshKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $organizationId
     * @param CreateVariableGroupRequest $request
     *
     * @return CreateVariableGroupResponse
     */
    public function createVariableGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVariableGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $organizationId
     * @param CreateVariableGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVariableGroupResponse
     */
    public function createVariableGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->variables)) {
            $body['variables'] = $request->variables;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVariableGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/variableGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $organizationId
     * @param CreateWorkitemRequest $request
     *
     * @return CreateWorkitemResponse
     */
    public function createWorkitem($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                $organizationId
     * @param CreateWorkitemRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateWorkitemResponse
     */
    public function createWorkitemWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignedTo)) {
            $body['assignedTo'] = $request->assignedTo;
        }
        if (!Utils::isUnset($request->category)) {
            $body['category'] = $request->category;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->descriptionFormat)) {
            $body['descriptionFormat'] = $request->descriptionFormat;
        }
        if (!Utils::isUnset($request->fieldValueList)) {
            $body['fieldValueList'] = $request->fieldValueList;
        }
        if (!Utils::isUnset($request->parent)) {
            $body['parent'] = $request->parent;
        }
        if (!Utils::isUnset($request->participant)) {
            $body['participant'] = $request->participant;
        }
        if (!Utils::isUnset($request->space)) {
            $body['space'] = $request->space;
        }
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $body['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $body['spaceType'] = $request->spaceType;
        }
        if (!Utils::isUnset($request->sprint)) {
            $body['sprint'] = $request->sprint;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->tracker)) {
            $body['tracker'] = $request->tracker;
        }
        if (!Utils::isUnset($request->verifier)) {
            $body['verifier'] = $request->verifier;
        }
        if (!Utils::isUnset($request->workitemType)) {
            $body['workitemType'] = $request->workitemType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkitem',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWorkitemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $organizationId
     * @param CreateWorkitemCommentRequest $request
     *
     * @return CreateWorkitemCommentResponse
     */
    public function createWorkitemComment($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $organizationId
     * @param CreateWorkitemCommentRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateWorkitemCommentResponse
     */
    public function createWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->formatType)) {
            $body['formatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->parentId)) {
            $body['parentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->workitemIdentifier)) {
            $body['workitemIdentifier'] = $request->workitemIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkitemComment',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/comment',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWorkitemCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $organizationId
     * @param CreateWorkitemEstimateRequest $request
     *
     * @return CreateWorkitemEstimateResponse
     */
    public function createWorkitemEstimate($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemEstimateWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $organizationId
     * @param CreateWorkitemEstimateRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateWorkitemEstimateResponse
     */
    public function createWorkitemEstimateWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->recordUserIdentifier)) {
            $body['recordUserIdentifier'] = $request->recordUserIdentifier;
        }
        if (!Utils::isUnset($request->spentTime)) {
            $body['spentTime'] = $request->spentTime;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->workitemIdentifier)) {
            $body['workitemIdentifier'] = $request->workitemIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkitemEstimate',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/estimate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWorkitemEstimateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $organizationId
     * @param CreateWorkitemRecordRequest $request
     *
     * @return CreateWorkitemRecordResponse
     */
    public function createWorkitemRecord($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemRecordWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $organizationId
     * @param CreateWorkitemRecordRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateWorkitemRecordResponse
     */
    public function createWorkitemRecordWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->actualTime)) {
            $body['actualTime'] = $request->actualTime;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->gmtEnd)) {
            $body['gmtEnd'] = $request->gmtEnd;
        }
        if (!Utils::isUnset($request->gmtStart)) {
            $body['gmtStart'] = $request->gmtStart;
        }
        if (!Utils::isUnset($request->recordUserIdentifier)) {
            $body['recordUserIdentifier'] = $request->recordUserIdentifier;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->workitemIdentifier)) {
            $body['workitemIdentifier'] = $request->workitemIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkitemRecord',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/record',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWorkitemRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeUrl)) {
            $body['codeUrl'] = $request->codeUrl;
        }
        if (!Utils::isUnset($request->codeVersion)) {
            $body['codeVersion'] = $request->codeVersion;
        }
        if (!Utils::isUnset($request->filePath)) {
            $body['filePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->requestFrom)) {
            $body['requestFrom'] = $request->requestFrom;
        }
        if (!Utils::isUnset($request->resourceIdentifier)) {
            $body['resourceIdentifier'] = $request->resourceIdentifier;
        }
        if (!Utils::isUnset($request->reuse)) {
            $body['reuse'] = $request->reuse;
        }
        if (!Utils::isUnset($request->workspaceTemplate)) {
            $body['workspaceTemplate'] = $request->workspaceTemplate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspace',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $repositoryId
     * @param DeleteBranchRequest $request
     *
     * @return DeleteBranchResponse
     */
    public function deleteBranch($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBranchWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string              $repositoryId
     * @param DeleteBranchRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBranchResponse
     */
    public function deleteBranchWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->branchName)) {
            $query['branchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBranch',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/branches/delete',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteBranchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $repositoryId
     * @param DeleteFileRequest $request
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFileWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string            $repositoryId
     * @param DeleteFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->branchName)) {
            $query['branchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->commitMessage)) {
            $query['commitMessage'] = $request->commitMessage;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['filePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFile',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/files/delete',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteFlowTagResponse
     */
    public function deleteFlowTag($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowTagWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFlowTagResponse
     */
    public function deleteFlowTagWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowTag',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tags/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteFlowTagGroupResponse
     */
    public function deleteFlowTagGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFlowTagGroupResponse
     */
    public function deleteFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowTagGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tagGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteHostGroupResponse
     */
    public function deleteHostGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHostGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteHostGroupResponse
     */
    public function deleteHostGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteHostGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/hostGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     *
     * @return DeletePipelineResponse
     */
    public function deletePipeline($organizationId, $pipelineId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineWithOptions($organizationId, $pipelineId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePipelineResponse
     */
    public function deletePipelineWithOptions($organizationId, $pipelineId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeletePipeline',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $groupId
     *
     * @return DeletePipelineGroupResponse
     */
    public function deletePipelineGroup($organizationId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineGroupWithOptions($organizationId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePipelineGroupResponse
     */
    public function deletePipelineGroupWithOptions($organizationId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeletePipelineGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups/' . OpenApiUtilClient::getEncodeParam($groupId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $organizationId
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string               $organizationId
     * @param DeleteProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifier)) {
            $query['identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/projects/delete',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $repositoryId
     * @param string                       $protectedBranchId
     * @param DeleteProtectedBranchRequest $request
     *
     * @return DeleteProtectedBranchResponse
     */
    public function deleteProtectedBranch($repositoryId, $protectedBranchId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProtectedBranchWithOptions($repositoryId, $protectedBranchId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $repositoryId
     * @param string                       $protectedBranchId
     * @param DeleteProtectedBranchRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteProtectedBranchResponse
     */
    public function deleteProtectedBranchWithOptions($repositoryId, $protectedBranchId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProtectedBranch',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/protect_branches/' . OpenApiUtilClient::getEncodeParam($protectedBranchId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProtectedBranchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $repositoryId
     * @param DeleteRepositoryRequest $request
     *
     * @return DeleteRepositoryResponse
     */
    public function deleteRepository($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $repositoryId
     * @param DeleteRepositoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRepositoryResponse
     */
    public function deleteRepositoryWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->reason)) {
            $body['reason'] = $request->reason;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRepository',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/remove',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $resourceType
     * @param string $resourceId
     * @param string $accountId
     *
     * @return DeleteResourceMemberResponse
     */
    public function deleteResourceMember($organizationId, $resourceType, $resourceId, $accountId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $resourceType
     * @param string         $resourceId
     * @param string         $accountId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceMemberResponse
     */
    public function deleteResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/' . OpenApiUtilClient::getEncodeParam($resourceType) . '/' . OpenApiUtilClient::getEncodeParam($resourceId) . '/members/' . OpenApiUtilClient::getEncodeParam($accountId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteVariableGroupResponse
     */
    public function deleteVariableGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVariableGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteVariableGroupResponse
     */
    public function deleteVariableGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteVariableGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/variableGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $organizationId
     * @param DeleteWorkitemAllCommentRequest $request
     *
     * @return DeleteWorkitemAllCommentResponse
     */
    public function deleteWorkitemAllComment($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkitemAllCommentWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                          $organizationId
     * @param DeleteWorkitemAllCommentRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteWorkitemAllCommentResponse
     */
    public function deleteWorkitemAllCommentWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifier)) {
            $query['identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkitemAllComment',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/deleteAllComment',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkitemAllCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $organizationId
     * @param DeleteWorkitemCommentRequest $request
     *
     * @return DeleteWorkitemCommentResponse
     */
    public function deleteWorkitemComment($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $organizationId
     * @param DeleteWorkitemCommentRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteWorkitemCommentResponse
     */
    public function deleteWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->commentId)) {
            $body['commentId'] = $request->commentId;
        }
        if (!Utils::isUnset($request->identifier)) {
            $body['identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkitemComment',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/deleteComent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkitemCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $workspaceId
     *
     * @return FrozenWorkspaceResponse
     */
    public function frozenWorkspace($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->frozenWorkspaceWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * @param string         $workspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return FrozenWorkspaceResponse
     */
    public function frozenWorkspaceWithOptions($workspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'FrozenWorkspace',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/frozen',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FrozenWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $repositoryId
     * @param GetBranchInfoRequest $request
     *
     * @return GetBranchInfoResponse
     */
    public function getBranchInfo($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBranchInfoWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string               $repositoryId
     * @param GetBranchInfoRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetBranchInfoResponse
     */
    public function getBranchInfoWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->branchName)) {
            $query['branchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBranchInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/branches/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetBranchInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $identity
     * @param GetCodeupOrganizationRequest $request
     *
     * @return GetCodeupOrganizationResponse
     */
    public function getCodeupOrganization($identity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCodeupOrganizationWithOptions($identity, $request, $headers, $runtime);
    }

    /**
     * @param string                       $identity
     * @param GetCodeupOrganizationRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetCodeupOrganizationResponse
     */
    public function getCodeupOrganizationWithOptions($identity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['AccessToken'] = $request->accessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCodeupOrganization',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/organization/' . OpenApiUtilClient::getEncodeParam($identity) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCodeupOrganizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $organizationId
     * @param string                      $fieldId
     * @param GetCustomFieldOptionRequest $request
     *
     * @return GetCustomFieldOptionResponse
     */
    public function getCustomFieldOption($organizationId, $fieldId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCustomFieldOptionWithOptions($organizationId, $fieldId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $organizationId
     * @param string                      $fieldId
     * @param GetCustomFieldOptionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetCustomFieldOptionResponse
     */
    public function getCustomFieldOptionWithOptions($organizationId, $fieldId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $query['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $query['spaceType'] = $request->spaceType;
        }
        if (!Utils::isUnset($request->workitemTypeIdentifier)) {
            $query['workitemTypeIdentifier'] = $request->workitemTypeIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomFieldOption',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/fields/' . OpenApiUtilClient::getEncodeParam($fieldId) . '/getCustomOption',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCustomFieldOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $repositoryId
     * @param GetFileBlobsRequest $request
     *
     * @return GetFileBlobsResponse
     */
    public function getFileBlobs($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileBlobsWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string              $repositoryId
     * @param GetFileBlobsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetFileBlobsResponse
     */
    public function getFileBlobsWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['filePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->ref)) {
            $query['ref'] = $request->ref;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFileBlobs',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/files/blobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFileBlobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $repositoryId
     * @param GetFileLastCommitRequest $request
     *
     * @return GetFileLastCommitResponse
     */
    public function getFileLastCommit($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileLastCommitWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $repositoryId
     * @param GetFileLastCommitRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetFileLastCommitResponse
     */
    public function getFileLastCommitWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->filepath)) {
            $query['filepath'] = $request->filepath;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->sha)) {
            $query['sha'] = $request->sha;
        }
        if (!Utils::isUnset($request->showSignature)) {
            $query['showSignature'] = $request->showSignature;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFileLastCommit',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/files/lastCommit',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFileLastCommitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return GetFlowTagGroupResponse
     */
    public function getFlowTagGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFlowTagGroupResponse
     */
    public function getFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFlowTagGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tagGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return GetHostGroupResponse
     */
    public function getHostGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHostGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetHostGroupResponse
     */
    public function getHostGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetHostGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/hostGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $accountId
     *
     * @return GetOrganizationMemberResponse
     */
    public function getOrganizationMember($organizationId, $accountId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrganizationMemberWithOptions($organizationId, $accountId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $accountId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetOrganizationMemberResponse
     */
    public function getOrganizationMemberWithOptions($organizationId, $accountId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetOrganizationMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/members/' . OpenApiUtilClient::getEncodeParam($accountId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOrganizationMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     *
     * @return GetPipelineResponse
     */
    public function getPipeline($organizationId, $pipelineId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineWithOptions($organizationId, $pipelineId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPipelineResponse
     */
    public function getPipelineWithOptions($organizationId, $pipelineId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipeline',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $organizationId
     * @param GetPipelineArtifactUrlRequest $request
     *
     * @return GetPipelineArtifactUrlResponse
     */
    public function getPipelineArtifactUrl($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineArtifactUrlWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $organizationId
     * @param GetPipelineArtifactUrlRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetPipelineArtifactUrlResponse
     */
    public function getPipelineArtifactUrlWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['filePath'] = $request->filePath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPipelineArtifactUrl',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipeline/getArtifactDownloadUrl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineArtifactUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                            $organizationId
     * @param string                            $emasJobInstanceId
     * @param string                            $md5
     * @param string                            $pipelineId
     * @param string                            $pipelineRunId
     * @param GetPipelineEmasArtifactUrlRequest $request
     *
     * @return GetPipelineEmasArtifactUrlResponse
     */
    public function getPipelineEmasArtifactUrl($organizationId, $emasJobInstanceId, $md5, $pipelineId, $pipelineRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineEmasArtifactUrlWithOptions($organizationId, $emasJobInstanceId, $md5, $pipelineId, $pipelineRunId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $organizationId
     * @param string                            $emasJobInstanceId
     * @param string                            $md5
     * @param string                            $pipelineId
     * @param string                            $pipelineRunId
     * @param GetPipelineEmasArtifactUrlRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetPipelineEmasArtifactUrlResponse
     */
    public function getPipelineEmasArtifactUrlWithOptions($organizationId, $emasJobInstanceId, $md5, $pipelineId, $pipelineRunId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceConnectionId)) {
            $query['serviceConnectionId'] = $request->serviceConnectionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPipelineEmasArtifactUrl',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipeline/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRun/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/emas/artifact/' . OpenApiUtilClient::getEncodeParam($emasJobInstanceId) . '/' . OpenApiUtilClient::getEncodeParam($md5) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineEmasArtifactUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $groupId
     *
     * @return GetPipelineGroupResponse
     */
    public function getPipelineGroup($organizationId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineGroupWithOptions($organizationId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPipelineGroupResponse
     */
    public function getPipelineGroupWithOptions($organizationId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipelineGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups/' . OpenApiUtilClient::getEncodeParam($groupId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     *
     * @return GetPipelineRunResponse
     */
    public function getPipelineRun($organizationId, $pipelineId, $pipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPipelineRunResponse
     */
    public function getPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipelineRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $organizationId
     * @param GetPipelineScanReportUrlRequest $request
     *
     * @return GetPipelineScanReportUrlResponse
     */
    public function getPipelineScanReportUrl($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineScanReportUrlWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                          $organizationId
     * @param GetPipelineScanReportUrlRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetPipelineScanReportUrlResponse
     */
    public function getPipelineScanReportUrlWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->reportPath)) {
            $body['reportPath'] = $request->reportPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPipelineScanReportUrl',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipeline/getPipelineScanReportUrl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPipelineScanReportUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $projectId
     *
     * @return GetProjectInfoResponse
     */
    public function getProjectInfo($organizationId, $projectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectInfoWithOptions($organizationId, $projectId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $projectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectInfoResponse
     */
    public function getProjectInfoWithOptions($organizationId, $projectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProjectInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/project/' . OpenApiUtilClient::getEncodeParam($projectId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProjectMemberRequest $request
     *
     * @return GetProjectMemberResponse
     */
    public function getProjectMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetProjectMemberRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetProjectMemberResponse
     */
    public function getProjectMemberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryId)) {
            $query['repositoryId'] = $request->repositoryId;
        }
        if (!Utils::isUnset($request->userAliyunPk)) {
            $query['userAliyunPk'] = $request->userAliyunPk;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProjectMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/member/get',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRepositoryRequest $request
     *
     * @return GetRepositoryResponse
     */
    public function getRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetRepositoryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetRepositoryResponse
     */
    public function getRepositoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->identity)) {
            $query['identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRepository',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/get',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $sprintId
     *
     * @return GetSprintInfoResponse
     */
    public function getSprintInfo($organizationId, $sprintId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSprintInfoWithOptions($organizationId, $sprintId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $sprintId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSprintInfoResponse
     */
    public function getSprintInfoWithOptions($organizationId, $sprintId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSprintInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/sprints/' . OpenApiUtilClient::getEncodeParam($sprintId) . '/getSprintinfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSprintInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     *
     * @return GetVMDeployOrderResponse
     */
    public function getVMDeployOrder($organizationId, $pipelineId, $deployOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetVMDeployOrderResponse
     */
    public function getVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetVMDeployOrder',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/deploy/' . OpenApiUtilClient::getEncodeParam($deployOrderId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetVMDeployOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $id
     *
     * @return GetVariableGroupResponse
     */
    public function getVariableGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVariableGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetVariableGroupResponse
     */
    public function getVariableGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetVariableGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/variableGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return GetWorkItemActivityResponse
     */
    public function getWorkItemActivity($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkItemActivityWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkItemActivityResponse
     */
    public function getWorkItemActivityWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetWorkItemActivity',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/' . OpenApiUtilClient::getEncodeParam($workitemId) . '/getActivity',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkItemActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return GetWorkItemInfoResponse
     */
    public function getWorkItemInfo($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkItemInfoWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkItemInfoResponse
     */
    public function getWorkItemInfoWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetWorkItemInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/' . OpenApiUtilClient::getEncodeParam($workitemId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkItemInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $organizationId
     * @param string                         $workitemId
     * @param GetWorkItemWorkFlowInfoRequest $request
     *
     * @return GetWorkItemWorkFlowInfoResponse
     */
    public function getWorkItemWorkFlowInfo($organizationId, $workitemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkItemWorkFlowInfoWithOptions($organizationId, $workitemId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $organizationId
     * @param string                         $workitemId
     * @param GetWorkItemWorkFlowInfoRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetWorkItemWorkFlowInfoResponse
     */
    public function getWorkItemWorkFlowInfoWithOptions($organizationId, $workitemId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configurationId)) {
            $query['configurationId'] = $request->configurationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkItemWorkFlowInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/' . OpenApiUtilClient::getEncodeParam($workitemId) . '/getWorkflowInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkItemWorkFlowInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return GetWorkitemCommentListResponse
     */
    public function getWorkitemCommentList($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkitemCommentListWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkitemCommentListResponse
     */
    public function getWorkitemCommentListWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetWorkitemCommentList',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/' . OpenApiUtilClient::getEncodeParam($workitemId) . '/commentList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkitemCommentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $organizationId
     * @param string                      $workitemId
     * @param GetWorkitemRelationsRequest $request
     *
     * @return GetWorkitemRelationsResponse
     */
    public function getWorkitemRelations($organizationId, $workitemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkitemRelationsWithOptions($organizationId, $workitemId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $organizationId
     * @param string                      $workitemId
     * @param GetWorkitemRelationsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetWorkitemRelationsResponse
     */
    public function getWorkitemRelationsWithOptions($organizationId, $workitemId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->relationType)) {
            $query['relationType'] = $request->relationType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkitemRelations',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/' . OpenApiUtilClient::getEncodeParam($workitemId) . '/getRelations',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkitemRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     *
     * @return GetWorkitemTimeTypeListResponse
     */
    public function getWorkitemTimeTypeList($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkitemTimeTypeListWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkitemTimeTypeListResponse
     */
    public function getWorkitemTimeTypeListWithOptions($organizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetWorkitemTimeTypeList',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/type/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkitemTimeTypeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $workspaceId
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * @param string         $workspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($workspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetWorkspace',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $organizationId
     * @param JoinPipelineGroupRequest $request
     *
     * @return JoinPipelineGroupResponse
     */
    public function joinPipelineGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->joinPipelineGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $organizationId
     * @param JoinPipelineGroupRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return JoinPipelineGroupResponse
     */
    public function joinPipelineGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['groupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            $query['pipelineIds'] = $request->pipelineIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JoinPipelineGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups/join',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return JoinPipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     *
     * @return ListFlowTagGroupsResponse
     */
    public function listFlowTagGroups($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowTagGroupsWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListFlowTagGroupsResponse
     */
    public function listFlowTagGroupsWithOptions($organizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListFlowTagGroups',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tagGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowTagGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $organizationId
     * @param ListHostGroupsRequest $request
     *
     * @return ListHostGroupsResponse
     */
    public function listHostGroups($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHostGroupsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                $organizationId
     * @param ListHostGroupsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListHostGroupsResponse
     */
    public function listHostGroupsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createEndTime)) {
            $query['createEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            $query['createStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->creatorAccountIds)) {
            $query['creatorAccountIds'] = $request->creatorAccountIds;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageOrder)) {
            $query['pageOrder'] = $request->pageOrder;
        }
        if (!Utils::isUnset($request->pageSort)) {
            $query['pageSort'] = $request->pageSort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostGroups',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/hostGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHostGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $organizationId
     * @param ListOrganizationMembersRequest $request
     *
     * @return ListOrganizationMembersResponse
     */
    public function listOrganizationMembers($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOrganizationMembersWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $organizationId
     * @param ListOrganizationMembersRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOrganizationMembersResponse
     */
    public function listOrganizationMembersWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->externUid)) {
            $query['externUid'] = $request->externUid;
        }
        if (!Utils::isUnset($request->joinTimeFrom)) {
            $query['joinTimeFrom'] = $request->joinTimeFrom;
        }
        if (!Utils::isUnset($request->joinTimeTo)) {
            $query['joinTimeTo'] = $request->joinTimeTo;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->organizationMemberName)) {
            $query['organizationMemberName'] = $request->organizationMemberName;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->state)) {
            $query['state'] = $request->state;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOrganizationMembers',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/members',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOrganizationMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                            $organizationId
     * @param string                            $groupId
     * @param ListPipelineGroupPipelinesRequest $request
     *
     * @return ListPipelineGroupPipelinesResponse
     */
    public function listPipelineGroupPipelines($organizationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineGroupPipelinesWithOptions($organizationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $organizationId
     * @param string                            $groupId
     * @param ListPipelineGroupPipelinesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListPipelineGroupPipelinesResponse
     */
    public function listPipelineGroupPipelinesWithOptions($organizationId, $groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createEndTime)) {
            $query['createEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            $query['createStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->executeEndTime)) {
            $query['executeEndTime'] = $request->executeEndTime;
        }
        if (!Utils::isUnset($request->executeStartTime)) {
            $query['executeStartTime'] = $request->executeStartTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pipelineName)) {
            $query['pipelineName'] = $request->pipelineName;
        }
        if (!Utils::isUnset($request->resultStatusList)) {
            $query['resultStatusList'] = $request->resultStatusList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineGroupPipelines',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/pipelines',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineGroupPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $organizationId
     * @param ListPipelineGroupsRequest $request
     *
     * @return ListPipelineGroupsResponse
     */
    public function listPipelineGroups($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineGroupsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $organizationId
     * @param ListPipelineGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListPipelineGroupsResponse
     */
    public function listPipelineGroupsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineGroups',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $organizationId
     * @param string                         $pipelineId
     * @param ListPipelineJobHistorysRequest $request
     *
     * @return ListPipelineJobHistorysResponse
     */
    public function listPipelineJobHistorys($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineJobHistorysWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $organizationId
     * @param string                         $pipelineId
     * @param ListPipelineJobHistorysRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListPipelineJobHistorysResponse
     */
    public function listPipelineJobHistorysWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineJobHistorys',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipeline/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/job/historys',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineJobHistorysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineJobsRequest $request
     *
     * @return ListPipelineJobsResponse
     */
    public function listPipelineJobs($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineJobsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineJobsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListPipelineJobsResponse
     */
    public function listPipelineJobsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineJobs',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipeline/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineRunsRequest $request
     *
     * @return ListPipelineRunsResponse
     */
    public function listPipelineRuns($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineRunsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineRunsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListPipelineRunsResponse
     */
    public function listPipelineRunsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->triggerMode)) {
            $query['triggerMode'] = $request->triggerMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineRuns',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $organizationId
     * @param ListPipelinesRequest $request
     *
     * @return ListPipelinesResponse
     */
    public function listPipelines($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelinesWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string               $organizationId
     * @param ListPipelinesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListPipelinesResponse
     */
    public function listPipelinesWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createEndTime)) {
            $query['createEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            $query['createStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->creatorAccountIds)) {
            $query['creatorAccountIds'] = $request->creatorAccountIds;
        }
        if (!Utils::isUnset($request->executeAccountIds)) {
            $query['executeAccountIds'] = $request->executeAccountIds;
        }
        if (!Utils::isUnset($request->executeEndTime)) {
            $query['executeEndTime'] = $request->executeEndTime;
        }
        if (!Utils::isUnset($request->executeStartTime)) {
            $query['executeStartTime'] = $request->executeStartTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pipelineName)) {
            $query['pipelineName'] = $request->pipelineName;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['statusList'] = $request->statusList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelines',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $organizationId
     * @param string                    $projectId
     * @param ListProjectMembersRequest $request
     *
     * @return ListProjectMembersResponse
     */
    public function listProjectMembers($organizationId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectMembersWithOptions($organizationId, $projectId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $organizationId
     * @param string                    $projectId
     * @param ListProjectMembersRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListProjectMembersResponse
     */
    public function listProjectMembersWithOptions($organizationId, $projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->targetType)) {
            $query['targetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjectMembers',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/listMembers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $organizationId
     * @param ListProjectTemplatesRequest $request
     *
     * @return ListProjectTemplatesResponse
     */
    public function listProjectTemplates($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectTemplatesWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $organizationId
     * @param ListProjectTemplatesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListProjectTemplatesResponse
     */
    public function listProjectTemplatesWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjectTemplates',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/projects/listTemplates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $organizationId
     * @param string                          $projectId
     * @param ListProjectWorkitemTypesRequest $request
     *
     * @return ListProjectWorkitemTypesResponse
     */
    public function listProjectWorkitemTypes($organizationId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectWorkitemTypesWithOptions($organizationId, $projectId, $request, $headers, $runtime);
    }

    /**
     * @param string                          $organizationId
     * @param string                          $projectId
     * @param ListProjectWorkitemTypesRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListProjectWorkitemTypesResponse
     */
    public function listProjectWorkitemTypesWithOptions($organizationId, $projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $query['spaceType'] = $request->spaceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjectWorkitemTypes',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/getWorkitemType',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectWorkitemTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $organizationId
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string              $organizationId
     * @param ListProjectsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        if (!Utils::isUnset($request->conditions)) {
            $query['conditions'] = $request->conditions;
        }
        if (!Utils::isUnset($request->extraConditions)) {
            $query['extraConditions'] = $request->extraConditions;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjects',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/listProjects',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $repositoryId
     * @param ListProtectedBranchesRequest $request
     *
     * @return ListProtectedBranchesResponse
     */
    public function listProtectedBranches($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProtectedBranchesWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $repositoryId
     * @param ListProtectedBranchesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListProtectedBranchesResponse
     */
    public function listProtectedBranchesWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProtectedBranches',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/protect_branches',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProtectedBranchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRepositoriesRequest $request
     *
     * @return ListRepositoriesResponse
     */
    public function listRepositories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListRepositoriesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListRepositoriesResponse
     */
    public function listRepositoriesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->archived)) {
            $query['archived'] = $request->archived;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->perPage)) {
            $query['perPage'] = $request->perPage;
        }
        if (!Utils::isUnset($request->search)) {
            $query['search'] = $request->search;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositories',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $repositoryId
     * @param ListRepositoryBranchesRequest $request
     *
     * @return ListRepositoryBranchesResponse
     */
    public function listRepositoryBranches($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryBranchesWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $repositoryId
     * @param ListRepositoryBranchesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListRepositoryBranchesResponse
     */
    public function listRepositoryBranchesWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->search)) {
            $query['search'] = $request->search;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositoryBranches',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/branches',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryBranchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $repositoryId
     * @param string                          $sha
     * @param ListRepositoryCommitDiffRequest $request
     *
     * @return ListRepositoryCommitDiffResponse
     */
    public function listRepositoryCommitDiff($repositoryId, $sha, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryCommitDiffWithOptions($repositoryId, $sha, $request, $headers, $runtime);
    }

    /**
     * @param string                          $repositoryId
     * @param string                          $sha
     * @param ListRepositoryCommitDiffRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRepositoryCommitDiffResponse
     */
    public function listRepositoryCommitDiffWithOptions($repositoryId, $sha, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->contextLine)) {
            $query['contextLine'] = $request->contextLine;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositoryCommitDiff',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/commits/' . OpenApiUtilClient::getEncodeParam($sha) . '/diff',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryCommitDiffResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                   $repositoryId
     * @param ListRepositoryMemberWithInheritedRequest $request
     *
     * @return ListRepositoryMemberWithInheritedResponse
     */
    public function listRepositoryMemberWithInherited($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryMemberWithInheritedWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string                                   $repositoryId
     * @param ListRepositoryMemberWithInheritedRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListRepositoryMemberWithInheritedResponse
     */
    public function listRepositoryMemberWithInheritedWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositoryMemberWithInherited',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/members/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryMemberWithInheritedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $repositoryId
     * @param ListRepositoryTreeRequest $request
     *
     * @return ListRepositoryTreeResponse
     */
    public function listRepositoryTree($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryTreeWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $repositoryId
     * @param ListRepositoryTreeRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListRepositoryTreeResponse
     */
    public function listRepositoryTreeWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['path'] = $request->path;
        }
        if (!Utils::isUnset($request->refName)) {
            $query['refName'] = $request->refName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositoryTree',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/files/tree',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $repositoryId
     * @param ListRepositoryWebhookRequest $request
     *
     * @return ListRepositoryWebhookResponse
     */
    public function listRepositoryWebhook($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryWebhookWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $repositoryId
     * @param ListRepositoryWebhookRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListRepositoryWebhookResponse
     */
    public function listRepositoryWebhookWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositoryWebhook',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/webhooks/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $resourceType
     * @param string $resourceId
     *
     * @return ListResourceMembersResponse
     */
    public function listResourceMembers($organizationId, $resourceType, $resourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceMembersWithOptions($organizationId, $resourceType, $resourceId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $resourceType
     * @param string         $resourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListResourceMembersResponse
     */
    public function listResourceMembersWithOptions($organizationId, $resourceType, $resourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListResourceMembers',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/' . OpenApiUtilClient::getEncodeParam($resourceType) . '/' . OpenApiUtilClient::getEncodeParam($resourceId) . '/members',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $organizationId
     * @param ListServiceConnectionsRequest $request
     *
     * @return ListServiceConnectionsResponse
     */
    public function listServiceConnections($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceConnectionsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $organizationId
     * @param ListServiceConnectionsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListServiceConnectionsResponse
     */
    public function listServiceConnectionsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sericeConnectionType)) {
            $query['sericeConnectionType'] = $request->sericeConnectionType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceConnections',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/serviceConnections',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $organizationId
     * @param ListSprintsRequest $request
     *
     * @return ListSprintsResponse
     */
    public function listSprints($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSprintsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string             $organizationId
     * @param ListSprintsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListSprintsResponse
     */
    public function listSprintsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $query['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $query['spaceType'] = $request->spaceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSprints',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/sprints/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSprintsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $organizationId
     * @param ListVariableGroupsRequest $request
     *
     * @return ListVariableGroupsResponse
     */
    public function listVariableGroups($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVariableGroupsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $organizationId
     * @param ListVariableGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListVariableGroupsResponse
     */
    public function listVariableGroupsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageOrder)) {
            $query['pageOrder'] = $request->pageOrder;
        }
        if (!Utils::isUnset($request->pageSort)) {
            $query['pageSort'] = $request->pageSort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVariableGroups',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/variableGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVariableGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $organizationId
     * @param ListWorkItemAllFieldsRequest $request
     *
     * @return ListWorkItemAllFieldsResponse
     */
    public function listWorkItemAllFields($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkItemAllFieldsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $organizationId
     * @param ListWorkItemAllFieldsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListWorkItemAllFieldsResponse
     */
    public function listWorkItemAllFieldsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $query['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $query['spaceType'] = $request->spaceType;
        }
        if (!Utils::isUnset($request->workitemTypeIdentifier)) {
            $query['workitemTypeIdentifier'] = $request->workitemTypeIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkItemAllFields',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/fields/listAll',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkItemAllFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                            $organizationId
     * @param ListWorkItemWorkFlowStatusRequest $request
     *
     * @return ListWorkItemWorkFlowStatusResponse
     */
    public function listWorkItemWorkFlowStatus($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkItemWorkFlowStatusWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $organizationId
     * @param ListWorkItemWorkFlowStatusRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListWorkItemWorkFlowStatusResponse
     */
    public function listWorkItemWorkFlowStatusWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $query['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $query['spaceType'] = $request->spaceType;
        }
        if (!Utils::isUnset($request->workitemCategoryIdentifier)) {
            $query['workitemCategoryIdentifier'] = $request->workitemCategoryIdentifier;
        }
        if (!Utils::isUnset($request->workitemTypeIdentifier)) {
            $query['workitemTypeIdentifier'] = $request->workitemTypeIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkItemWorkFlowStatus',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/workflow/listWorkflowStatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkItemWorkFlowStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return ListWorkitemTimeResponse
     */
    public function listWorkitemTime($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkitemTimeWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListWorkitemTimeResponse
     */
    public function listWorkitemTimeWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListWorkitemTime',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/' . OpenApiUtilClient::getEncodeParam($workitemId) . '/time/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkitemTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $organizationId
     * @param ListWorkitemsRequest $request
     *
     * @return ListWorkitemsResponse
     */
    public function listWorkitems($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkitemsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string               $organizationId
     * @param ListWorkitemsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListWorkitemsResponse
     */
    public function listWorkitemsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        if (!Utils::isUnset($request->conditions)) {
            $query['conditions'] = $request->conditions;
        }
        if (!Utils::isUnset($request->extraConditions)) {
            $query['extraConditions'] = $request->extraConditions;
        }
        if (!Utils::isUnset($request->groupCondition)) {
            $query['groupCondition'] = $request->groupCondition;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->searchType)) {
            $query['searchType'] = $request->searchType;
        }
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $query['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $query['spaceType'] = $request->spaceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkitems',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/listWorkitems',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkitemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListWorkspacesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListWorkspacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->statusList)) {
            $request->statusListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'statusList', 'simple');
        }
        if (!Utils::isUnset($tmpReq->workspaceTemplateList)) {
            $request->workspaceTemplateListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->workspaceTemplateList, 'workspaceTemplateList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->statusListShrink)) {
            $query['statusList'] = $request->statusListShrink;
        }
        if (!Utils::isUnset($request->workspaceTemplateListShrink)) {
            $query['workspaceTemplateList'] = $request->workspaceTemplateListShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaces',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $jobId
     * @param string $pipelineRunId
     *
     * @return LogPipelineJobRunResponse
     */
    public function logPipelineJobRun($organizationId, $pipelineId, $jobId, $pipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->logPipelineJobRunWithOptions($organizationId, $pipelineId, $jobId, $pipelineRunId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $jobId
     * @param string         $pipelineRunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return LogPipelineJobRunResponse
     */
    public function logPipelineJobRunWithOptions($organizationId, $pipelineId, $jobId, $pipelineRunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'LogPipelineJobRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipeline/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRun/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/job/' . OpenApiUtilClient::getEncodeParam($jobId) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LogPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     * @param string $machineSn
     *
     * @return LogVMDeployMachineResponse
     */
    public function logVMDeployMachine($organizationId, $pipelineId, $deployOrderId, $machineSn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->logVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string         $machineSn
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return LogVMDeployMachineResponse
     */
    public function logVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'LogVMDeployMachine',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/deploy/' . OpenApiUtilClient::getEncodeParam($deployOrderId) . '/machine/' . OpenApiUtilClient::getEncodeParam($machineSn) . '/log',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LogVMDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return PassPipelineValidateResponse
     */
    public function passPipelineValidate($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->passPipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PassPipelineValidateResponse
     */
    public function passPipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PassPipelineValidate',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '/pass',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PassPipelineValidateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return RefusePipelineValidateResponse
     */
    public function refusePipelineValidate($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refusePipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RefusePipelineValidateResponse
     */
    public function refusePipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RefusePipelineValidate',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '/refuse',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefusePipelineValidateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $workspaceId
     *
     * @return ReleaseWorkspaceResponse
     */
    public function releaseWorkspace($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseWorkspaceWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * @param string         $workspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ReleaseWorkspaceResponse
     */
    public function releaseWorkspaceWithOptions($workspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ReleaseWorkspace',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/release',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     *
     * @return ResetSshKeyResponse
     */
    public function resetSshKey($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetSshKeyWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResetSshKeyResponse
     */
    public function resetSshKeyWithOptions($organizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ResetSshKey',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/sshKey',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResetSshKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     *
     * @return ResumeVMDeployOrderResponse
     */
    public function resumeVMDeployOrder($organizationId, $pipelineId, $deployOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResumeVMDeployOrderResponse
     */
    public function resumeVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ResumeVMDeployOrder',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/deploy/' . OpenApiUtilClient::getEncodeParam($deployOrderId) . '/resume',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResumeVMDeployOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return RetryPipelineJobRunResponse
     */
    public function retryPipelineJobRun($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RetryPipelineJobRunResponse
     */
    public function retryPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RetryPipelineJobRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RetryPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     * @param string $machineSn
     *
     * @return RetryVMDeployMachineResponse
     */
    public function retryVMDeployMachine($organizationId, $pipelineId, $deployOrderId, $machineSn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string         $machineSn
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RetryVMDeployMachineResponse
     */
    public function retryVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RetryVMDeployMachine',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/deploy/' . OpenApiUtilClient::getEncodeParam($deployOrderId) . '/machine/' . OpenApiUtilClient::getEncodeParam($machineSn) . '/retry',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RetryVMDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return SkipPipelineJobRunResponse
     */
    public function skipPipelineJobRun($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->skipPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SkipPipelineJobRunResponse
     */
    public function skipPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'SkipPipelineJobRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '/skip',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SkipPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     * @param string $machineSn
     *
     * @return SkipVMDeployMachineResponse
     */
    public function skipVMDeployMachine($organizationId, $pipelineId, $deployOrderId, $machineSn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->skipVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string         $machineSn
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SkipVMDeployMachineResponse
     */
    public function skipVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'SkipVMDeployMachine',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/deploy/' . OpenApiUtilClient::getEncodeParam($deployOrderId) . '/machine/' . OpenApiUtilClient::getEncodeParam($machineSn) . '/skip',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SkipVMDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param StartPipelineRunRequest $request
     *
     * @return StartPipelineRunResponse
     */
    public function startPipelineRun($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startPipelineRunWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param StartPipelineRunRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return StartPipelineRunResponse
     */
    public function startPipelineRunWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->params)) {
            $body['params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartPipelineRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organizations/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/run',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return StopPipelineJobRunResponse
     */
    public function stopPipelineJobRun($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopPipelineJobRunResponse
     */
    public function stopPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopPipelineJobRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     *
     * @return StopPipelineRunResponse
     */
    public function stopPipelineRun($organizationId, $pipelineId, $pipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopPipelineRunResponse
     */
    public function stopPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopPipelineRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     *
     * @return StopVMDeployOrderResponse
     */
    public function stopVMDeployOrder($organizationId, $pipelineId, $deployOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime);
    }

    /**
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopVMDeployOrderResponse
     */
    public function stopVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopVMDeployOrder',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/deploy/' . OpenApiUtilClient::getEncodeParam($deployOrderId) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopVMDeployOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                             $repositoryId
     * @param TriggerRepositoryMirrorSyncRequest $request
     *
     * @return TriggerRepositoryMirrorSyncResponse
     */
    public function triggerRepositoryMirrorSync($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->triggerRepositoryMirrorSyncWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string                             $repositoryId
     * @param TriggerRepositoryMirrorSyncRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return TriggerRepositoryMirrorSyncResponse
     */
    public function triggerRepositoryMirrorSyncWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->account)) {
            $query['account'] = $request->account;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TriggerRepositoryMirrorSync',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/mirror',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TriggerRepositoryMirrorSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $repositoryId
     * @param UpdateFileRequest $request
     *
     * @return UpdateFileResponse
     */
    public function updateFile($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFileWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string            $repositoryId
     * @param UpdateFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFileResponse
     */
    public function updateFileWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->branchName)) {
            $body['branchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->commitMessage)) {
            $body['commitMessage'] = $request->commitMessage;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->encoding)) {
            $body['encoding'] = $request->encoding;
        }
        if (!Utils::isUnset($request->newPath)) {
            $body['newPath'] = $request->newPath;
        }
        if (!Utils::isUnset($request->oldPath)) {
            $body['oldPath'] = $request->oldPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFile',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/files/update',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $organizationId
     * @param string               $id
     * @param UpdateFlowTagRequest $request
     *
     * @return UpdateFlowTagResponse
     */
    public function updateFlowTag($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowTagWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * @param string               $organizationId
     * @param string               $id
     * @param UpdateFlowTagRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateFlowTagResponse
     */
    public function updateFlowTagWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->color)) {
            $query['color'] = $request->color;
        }
        if (!Utils::isUnset($request->flowTagGroupId)) {
            $query['flowTagGroupId'] = $request->flowTagGroupId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFlowTag',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tags/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFlowTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $organizationId
     * @param string                    $id
     * @param UpdateFlowTagGroupRequest $request
     *
     * @return UpdateFlowTagGroupResponse
     */
    public function updateFlowTagGroup($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowTagGroupWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * @param string                    $organizationId
     * @param string                    $id
     * @param UpdateFlowTagGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateFlowTagGroupResponse
     */
    public function updateFlowTagGroupWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFlowTagGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tagGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $organizationId
     * @param string                 $id
     * @param UpdateHostGroupRequest $request
     *
     * @return UpdateHostGroupResponse
     */
    public function updateHostGroup($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHostGroupWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * @param string                 $organizationId
     * @param string                 $id
     * @param UpdateHostGroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateHostGroupResponse
     */
    public function updateHostGroupWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliyunRegion)) {
            $body['aliyunRegion'] = $request->aliyunRegion;
        }
        if (!Utils::isUnset($request->ecsLabelKey)) {
            $body['ecsLabelKey'] = $request->ecsLabelKey;
        }
        if (!Utils::isUnset($request->ecsLabelValue)) {
            $body['ecsLabelValue'] = $request->ecsLabelValue;
        }
        if (!Utils::isUnset($request->ecsType)) {
            $body['ecsType'] = $request->ecsType;
        }
        if (!Utils::isUnset($request->envId)) {
            $body['envId'] = $request->envId;
        }
        if (!Utils::isUnset($request->machineInfos)) {
            $body['machineInfos'] = $request->machineInfos;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceConnectionId)) {
            $body['serviceConnectionId'] = $request->serviceConnectionId;
        }
        if (!Utils::isUnset($request->tagIds)) {
            $body['tagIds'] = $request->tagIds;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateHostGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/hostGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $organizationId
     * @param string                        $pipelineId
     * @param UpdatePipelineBaseInfoRequest $request
     *
     * @return UpdatePipelineBaseInfoResponse
     */
    public function updatePipelineBaseInfo($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineBaseInfoWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $organizationId
     * @param string                        $pipelineId
     * @param UpdatePipelineBaseInfoRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdatePipelineBaseInfoResponse
     */
    public function updatePipelineBaseInfoWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->envId)) {
            $query['envId'] = $request->envId;
        }
        if (!Utils::isUnset($request->pipelineName)) {
            $query['pipelineName'] = $request->pipelineName;
        }
        if (!Utils::isUnset($request->tagList)) {
            $query['tagList'] = $request->tagList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipelineBaseInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/baseInfo',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $organizationId
     * @param string                     $groupId
     * @param UpdatePipelineGroupRequest $request
     *
     * @return UpdatePipelineGroupResponse
     */
    public function updatePipelineGroup($organizationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineGroupWithOptions($organizationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $organizationId
     * @param string                     $groupId
     * @param UpdatePipelineGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdatePipelineGroupResponse
     */
    public function updatePipelineGroupWithOptions($organizationId, $groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipelineGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups/' . OpenApiUtilClient::getEncodeParam($groupId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $organizationId
     * @param string                     $projectId
     * @param UpdateProjectMemberRequest $request
     *
     * @return UpdateProjectMemberResponse
     */
    public function updateProjectMember($organizationId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectMemberWithOptions($organizationId, $projectId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $organizationId
     * @param string                     $projectId
     * @param UpdateProjectMemberRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateProjectMemberResponse
     */
    public function updateProjectMemberWithOptions($organizationId, $projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleIdentifier)) {
            $body['roleIdentifier'] = $request->roleIdentifier;
        }
        if (!Utils::isUnset($request->targetIdentifier)) {
            $body['targetIdentifier'] = $request->targetIdentifier;
        }
        if (!Utils::isUnset($request->targetType)) {
            $body['targetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->userIdentifier)) {
            $body['userIdentifier'] = $request->userIdentifier;
        }
        if (!Utils::isUnset($request->userType)) {
            $body['userType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProjectMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/updateMember',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $repositoryId
     * @param string                         $id
     * @param UpdateProtectedBranchesRequest $request
     *
     * @return UpdateProtectedBranchesResponse
     */
    public function updateProtectedBranches($repositoryId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProtectedBranchesWithOptions($repositoryId, $id, $request, $headers, $runtime);
    }

    /**
     * @param string                         $repositoryId
     * @param string                         $id
     * @param UpdateProtectedBranchesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateProtectedBranchesResponse
     */
    public function updateProtectedBranchesWithOptions($repositoryId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->allowMergeRoles)) {
            $body['allowMergeRoles'] = $request->allowMergeRoles;
        }
        if (!Utils::isUnset($request->allowMergeUserIds)) {
            $body['allowMergeUserIds'] = $request->allowMergeUserIds;
        }
        if (!Utils::isUnset($request->allowPushRoles)) {
            $body['allowPushRoles'] = $request->allowPushRoles;
        }
        if (!Utils::isUnset($request->allowPushUserIds)) {
            $body['allowPushUserIds'] = $request->allowPushUserIds;
        }
        if (!Utils::isUnset($request->branch)) {
            $body['branch'] = $request->branch;
        }
        if (!Utils::isUnset($request->id)) {
            $body['id'] = $request->id;
        }
        if (!Utils::isUnset($request->mergeRequestSetting)) {
            $body['mergeRequestSetting'] = $request->mergeRequestSetting;
        }
        if (!Utils::isUnset($request->testSettingDTO)) {
            $body['testSettingDTO'] = $request->testSettingDTO;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProtectedBranches',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/protect_branches/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProtectedBranchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $repositoryId
     * @param UpdateRepositoryRequest $request
     *
     * @return UpdateRepositoryResponse
     */
    public function updateRepository($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRepositoryWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $repositoryId
     * @param UpdateRepositoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRepositoryResponse
     */
    public function updateRepositoryWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->adminSettingLanguage)) {
            $body['adminSettingLanguage'] = $request->adminSettingLanguage;
        }
        if (!Utils::isUnset($request->avatar)) {
            $body['avatar'] = $request->avatar;
        }
        if (!Utils::isUnset($request->buildsEnabled)) {
            $body['buildsEnabled'] = $request->buildsEnabled;
        }
        if (!Utils::isUnset($request->checkEmail)) {
            $body['checkEmail'] = $request->checkEmail;
        }
        if (!Utils::isUnset($request->defaultBranch)) {
            $body['defaultBranch'] = $request->defaultBranch;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $body['id'] = $request->id;
        }
        if (!Utils::isUnset($request->issuesEnabled)) {
            $body['issuesEnabled'] = $request->issuesEnabled;
        }
        if (!Utils::isUnset($request->mergeRequestsEnabled)) {
            $body['mergeRequestsEnabled'] = $request->mergeRequestsEnabled;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->openCloneDownloadControl)) {
            $body['openCloneDownloadControl'] = $request->openCloneDownloadControl;
        }
        if (!Utils::isUnset($request->path)) {
            $body['path'] = $request->path;
        }
        if (!Utils::isUnset($request->projectCloneDownloadMethodList)) {
            $body['projectCloneDownloadMethodList'] = $request->projectCloneDownloadMethodList;
        }
        if (!Utils::isUnset($request->projectCloneDownloadRoleList)) {
            $body['projectCloneDownloadRoleList'] = $request->projectCloneDownloadRoleList;
        }
        if (!Utils::isUnset($request->snippetsEnabled)) {
            $body['snippetsEnabled'] = $request->snippetsEnabled;
        }
        if (!Utils::isUnset($request->visibilityLevel)) {
            $body['visibilityLevel'] = $request->visibilityLevel;
        }
        if (!Utils::isUnset($request->wikiEnabled)) {
            $body['wikiEnabled'] = $request->wikiEnabled;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRepository',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $repositoryId
     * @param string                        $userId
     * @param UpdateRepositoryMemberRequest $request
     *
     * @return UpdateRepositoryMemberResponse
     */
    public function updateRepositoryMember($repositoryId, $userId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRepositoryMemberWithOptions($repositoryId, $userId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $repositoryId
     * @param string                        $userId
     * @param UpdateRepositoryMemberRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateRepositoryMemberResponse
     */
    public function updateRepositoryMemberWithOptions($repositoryId, $userId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->accessLevel)) {
            $body['accessLevel'] = $request->accessLevel;
        }
        if (!Utils::isUnset($request->expireAt)) {
            $body['expireAt'] = $request->expireAt;
        }
        if (!Utils::isUnset($request->memberType)) {
            $body['memberType'] = $request->memberType;
        }
        if (!Utils::isUnset($request->relatedId)) {
            $body['relatedId'] = $request->relatedId;
        }
        if (!Utils::isUnset($request->relatedInfos)) {
            $body['relatedInfos'] = $request->relatedInfos;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRepositoryMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/' . OpenApiUtilClient::getEncodeParam($userId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRepositoryMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param string                      $accountId
     * @param UpdateResourceMemberRequest $request
     *
     * @return UpdateResourceMemberResponse
     */
    public function updateResourceMember($organizationId, $resourceType, $resourceId, $accountId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param string                      $accountId
     * @param UpdateResourceMemberRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateResourceMemberResponse
     */
    public function updateResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleName)) {
            $body['roleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/' . OpenApiUtilClient::getEncodeParam($resourceType) . '/' . OpenApiUtilClient::getEncodeParam($resourceId) . '/members/' . OpenApiUtilClient::getEncodeParam($accountId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $organizationId
     * @param string                     $id
     * @param UpdateVariableGroupRequest $request
     *
     * @return UpdateVariableGroupResponse
     */
    public function updateVariableGroup($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateVariableGroupWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * @param string                     $organizationId
     * @param string                     $id
     * @param UpdateVariableGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateVariableGroupResponse
     */
    public function updateVariableGroupWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->variables)) {
            $body['variables'] = $request->variables;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateVariableGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/variableGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $organizationId
     * @param UpdateWorkItemRequest $request
     *
     * @return UpdateWorkItemResponse
     */
    public function updateWorkItem($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkItemWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                $organizationId
     * @param UpdateWorkItemRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateWorkItemResponse
     */
    public function updateWorkItemWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fieldType)) {
            $body['fieldType'] = $request->fieldType;
        }
        if (!Utils::isUnset($request->identifier)) {
            $body['identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->propertyKey)) {
            $body['propertyKey'] = $request->propertyKey;
        }
        if (!Utils::isUnset($request->propertyValue)) {
            $body['propertyValue'] = $request->propertyValue;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkItem',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $organizationId
     * @param UpdateWorkitemCommentRequest $request
     *
     * @return UpdateWorkitemCommentResponse
     */
    public function updateWorkitemComment($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $organizationId
     * @param UpdateWorkitemCommentRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateWorkitemCommentResponse
     */
    public function updateWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->commentId)) {
            $body['commentId'] = $request->commentId;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->formatType)) {
            $body['formatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->workitemIdentifier)) {
            $body['workitemIdentifier'] = $request->workitemIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkitemComment',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/commentUpdate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkitemCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
