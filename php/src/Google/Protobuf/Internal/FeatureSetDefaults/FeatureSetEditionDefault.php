<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal\FeatureSetDefaults;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBWire;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\InputStream;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A map from every known edition with a unique set of defaults to its
 * defaults. Not all editions may be contained here.  For a given edition,
 * the defaults at the closest matching edition ordered at or before it should
 * be used.  This field must be in strict ascending order by edition.
 *
 * Generated from protobuf message <code>google.protobuf.FeatureSetDefaults.FeatureSetEditionDefault</code>
 */
class FeatureSetEditionDefault extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .google.protobuf.Edition edition = 3;</code>
     */
    protected $edition = null;
    /**
     * Defaults of features that can be overridden in this edition.
     *
     * Generated from protobuf field <code>optional .google.protobuf.FeatureSet overridable_features = 4;</code>
     */
    protected $overridable_features = null;
    /**
     * Defaults of features that can't be overridden in this edition.
     *
     * Generated from protobuf field <code>optional .google.protobuf.FeatureSet fixed_features = 5;</code>
     */
    protected $fixed_features = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $edition
     *     @type \Google\Protobuf\Internal\FeatureSet $overridable_features
     *           Defaults of features that can be overridden in this edition.
     *     @type \Google\Protobuf\Internal\FeatureSet $fixed_features
     *           Defaults of features that can't be overridden in this edition.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.Edition edition = 3;</code>
     * @return int
     */
    public function getEdition()
    {
        return isset($this->edition) ? $this->edition : 0;
    }

    public function hasEdition()
    {
        return isset($this->edition);
    }

    public function clearEdition()
    {
        unset($this->edition);
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.Edition edition = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEdition($var)
    {
        GPBUtil::checkEnum($var, \Google\Protobuf\Internal\Edition::class);
        $this->edition = $var;

        return $this;
    }

    /**
     * Defaults of features that can be overridden in this edition.
     *
     * Generated from protobuf field <code>optional .google.protobuf.FeatureSet overridable_features = 4;</code>
     * @return \Google\Protobuf\Internal\FeatureSet|null
     */
    public function getOverridableFeatures()
    {
        return $this->overridable_features;
    }

    public function hasOverridableFeatures()
    {
        return isset($this->overridable_features);
    }

    public function clearOverridableFeatures()
    {
        unset($this->overridable_features);
    }

    /**
     * Defaults of features that can be overridden in this edition.
     *
     * Generated from protobuf field <code>optional .google.protobuf.FeatureSet overridable_features = 4;</code>
     * @param \Google\Protobuf\Internal\FeatureSet $var
     * @return $this
     */
    public function setOverridableFeatures($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Internal\FeatureSet::class);
        $this->overridable_features = $var;

        return $this;
    }

    /**
     * Defaults of features that can't be overridden in this edition.
     *
     * Generated from protobuf field <code>optional .google.protobuf.FeatureSet fixed_features = 5;</code>
     * @return \Google\Protobuf\Internal\FeatureSet|null
     */
    public function getFixedFeatures()
    {
        return $this->fixed_features;
    }

    public function hasFixedFeatures()
    {
        return isset($this->fixed_features);
    }

    public function clearFixedFeatures()
    {
        unset($this->fixed_features);
    }

    /**
     * Defaults of features that can't be overridden in this edition.
     *
     * Generated from protobuf field <code>optional .google.protobuf.FeatureSet fixed_features = 5;</code>
     * @param \Google\Protobuf\Internal\FeatureSet $var
     * @return $this
     */
    public function setFixedFeatures($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Internal\FeatureSet::class);
        $this->fixed_features = $var;

        return $this;
    }

}
