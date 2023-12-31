<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/policysimulator/v1/simulator.proto

namespace Google\Cloud\PolicySimulator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The configuration used for a
 * [Replay][google.cloud.policysimulator.v1.Replay].
 *
 * Generated from protobuf message <code>google.cloud.policysimulator.v1.ReplayConfig</code>
 */
class ReplayConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * A mapping of the resources that you want to simulate policies for and the
     * policies that you want to simulate.
     * Keys are the full resource names for the resources. For example,
     * `//cloudresourcemanager.googleapis.com/projects/my-project`.
     * For examples of full resource names for Google Cloud services, see
     * https://cloud.google.com/iam/help/troubleshooter/full-resource-names.
     * Values are [Policy][google.iam.v1.Policy] objects representing the policies
     * that you want to simulate.
     * Replays automatically take into account any IAM policies inherited through
     * the resource hierarchy, and any policies set on descendant resources. You
     * do not need to include these policies in the policy overlay.
     *
     * Generated from protobuf field <code>map<string, .google.iam.v1.Policy> policy_overlay = 1;</code>
     */
    private $policy_overlay;
    /**
     * The logs to use as input for the
     * [Replay][google.cloud.policysimulator.v1.Replay].
     *
     * Generated from protobuf field <code>.google.cloud.policysimulator.v1.ReplayConfig.LogSource log_source = 2;</code>
     */
    protected $log_source = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $policy_overlay
     *           A mapping of the resources that you want to simulate policies for and the
     *           policies that you want to simulate.
     *           Keys are the full resource names for the resources. For example,
     *           `//cloudresourcemanager.googleapis.com/projects/my-project`.
     *           For examples of full resource names for Google Cloud services, see
     *           https://cloud.google.com/iam/help/troubleshooter/full-resource-names.
     *           Values are [Policy][google.iam.v1.Policy] objects representing the policies
     *           that you want to simulate.
     *           Replays automatically take into account any IAM policies inherited through
     *           the resource hierarchy, and any policies set on descendant resources. You
     *           do not need to include these policies in the policy overlay.
     *     @type int $log_source
     *           The logs to use as input for the
     *           [Replay][google.cloud.policysimulator.v1.Replay].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Policysimulator\V1\Simulator::initOnce();
        parent::__construct($data);
    }

    /**
     * A mapping of the resources that you want to simulate policies for and the
     * policies that you want to simulate.
     * Keys are the full resource names for the resources. For example,
     * `//cloudresourcemanager.googleapis.com/projects/my-project`.
     * For examples of full resource names for Google Cloud services, see
     * https://cloud.google.com/iam/help/troubleshooter/full-resource-names.
     * Values are [Policy][google.iam.v1.Policy] objects representing the policies
     * that you want to simulate.
     * Replays automatically take into account any IAM policies inherited through
     * the resource hierarchy, and any policies set on descendant resources. You
     * do not need to include these policies in the policy overlay.
     *
     * Generated from protobuf field <code>map<string, .google.iam.v1.Policy> policy_overlay = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPolicyOverlay()
    {
        return $this->policy_overlay;
    }

    /**
     * A mapping of the resources that you want to simulate policies for and the
     * policies that you want to simulate.
     * Keys are the full resource names for the resources. For example,
     * `//cloudresourcemanager.googleapis.com/projects/my-project`.
     * For examples of full resource names for Google Cloud services, see
     * https://cloud.google.com/iam/help/troubleshooter/full-resource-names.
     * Values are [Policy][google.iam.v1.Policy] objects representing the policies
     * that you want to simulate.
     * Replays automatically take into account any IAM policies inherited through
     * the resource hierarchy, and any policies set on descendant resources. You
     * do not need to include these policies in the policy overlay.
     *
     * Generated from protobuf field <code>map<string, .google.iam.v1.Policy> policy_overlay = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPolicyOverlay($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Iam\V1\Policy::class);
        $this->policy_overlay = $arr;

        return $this;
    }

    /**
     * The logs to use as input for the
     * [Replay][google.cloud.policysimulator.v1.Replay].
     *
     * Generated from protobuf field <code>.google.cloud.policysimulator.v1.ReplayConfig.LogSource log_source = 2;</code>
     * @return int
     */
    public function getLogSource()
    {
        return $this->log_source;
    }

    /**
     * The logs to use as input for the
     * [Replay][google.cloud.policysimulator.v1.Replay].
     *
     * Generated from protobuf field <code>.google.cloud.policysimulator.v1.ReplayConfig.LogSource log_source = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLogSource($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\PolicySimulator\V1\ReplayConfig\LogSource::class);
        $this->log_source = $var;

        return $this;
    }

}

