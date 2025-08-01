<?php
/*
 * Copyright 2025 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START policysimulator_v1_generated_OrgPolicyViolationsPreviewService_ListOrgPolicyViolationsPreviews_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\PolicySimulator\V1\Client\OrgPolicyViolationsPreviewServiceClient;
use Google\Cloud\PolicySimulator\V1\ListOrgPolicyViolationsPreviewsRequest;
use Google\Cloud\PolicySimulator\V1\OrgPolicyViolationsPreview;

/**
 * ListOrgPolicyViolationsPreviews lists each
 * [OrgPolicyViolationsPreview][google.cloud.policysimulator.v1.OrgPolicyViolationsPreview]
 * in an organization. Each
 * [OrgPolicyViolationsPreview][google.cloud.policysimulator.v1.OrgPolicyViolationsPreview]
 * is available for at least 7 days.
 *
 * @param string $formattedParent The parent the violations are scoped to.
 *                                Format:
 *                                `organizations/{organization}/locations/{location}`
 *
 *                                Example: `organizations/my-example-org/locations/global`
 *                                Please see {@see OrgPolicyViolationsPreviewServiceClient::organizationLocationName()} for help formatting this field.
 */
function list_org_policy_violations_previews_sample(string $formattedParent): void
{
    // Create a client.
    $orgPolicyViolationsPreviewServiceClient = new OrgPolicyViolationsPreviewServiceClient();

    // Prepare the request message.
    $request = (new ListOrgPolicyViolationsPreviewsRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $orgPolicyViolationsPreviewServiceClient->listOrgPolicyViolationsPreviews($request);

        /** @var OrgPolicyViolationsPreview $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = OrgPolicyViolationsPreviewServiceClient::organizationLocationName(
        '[ORGANIZATION]',
        '[LOCATION]'
    );

    list_org_policy_violations_previews_sample($formattedParent);
}
// [END policysimulator_v1_generated_OrgPolicyViolationsPreviewService_ListOrgPolicyViolationsPreviews_sync]
