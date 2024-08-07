<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/provisioning_service.proto

namespace Google\Cloud\ApigeeRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateInstance.
 *
 * Generated from protobuf message <code>google.cloud.apigeeregistry.v1.CreateInstanceRequest</code>
 */
class CreateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent resource of the Instance, of the form: `projects/&#42;&#47;locations/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Identifier to assign to the Instance. Must be unique within scope of the
     * parent resource.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance_id = '';
    /**
     * Required. The Instance.
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.Instance instance = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance = null;

    /**
     * @param string                                   $parent     Required. Parent resource of the Instance, of the form: `projects/&#42;/locations/*`
     *                                                             Please see {@see ProvisioningClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\ApigeeRegistry\V1\Instance $instance   Required. The Instance.
     * @param string                                   $instanceId Required. Identifier to assign to the Instance. Must be unique within scope of the
     *                                                             parent resource.
     *
     * @return \Google\Cloud\ApigeeRegistry\V1\CreateInstanceRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\ApigeeRegistry\V1\Instance $instance, string $instanceId): self
    {
        return (new self())
            ->setParent($parent)
            ->setInstance($instance)
            ->setInstanceId($instanceId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent resource of the Instance, of the form: `projects/&#42;&#47;locations/&#42;`
     *     @type string $instance_id
     *           Required. Identifier to assign to the Instance. Must be unique within scope of the
     *           parent resource.
     *     @type \Google\Cloud\ApigeeRegistry\V1\Instance $instance
     *           Required. The Instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\ProvisioningService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent resource of the Instance, of the form: `projects/&#42;&#47;locations/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent resource of the Instance, of the form: `projects/&#42;&#47;locations/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Identifier to assign to the Instance. Must be unique within scope of the
     * parent resource.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * Required. Identifier to assign to the Instance. Must be unique within scope of the
     * parent resource.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_id = $var;

        return $this;
    }

    /**
     * Required. The Instance.
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.Instance instance = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApigeeRegistry\V1\Instance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Required. The Instance.
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.Instance instance = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApigeeRegistry\V1\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApigeeRegistry\V1\Instance::class);
        $this->instance = $var;

        return $this;
    }

}

