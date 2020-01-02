<?php
/**
 * @file
 * Contains \rusty\lumenGenerator\Model\MicroServiceExtendModel.
 */

namespace rusty\lumenGenerator\Model;

use biliboobrian\MicroServiceModelUtils\Models\MicroServiceBaseOracleModel;

/**
 * A base model class that can be used in a microservice.
 *
 * @package biliboobrian\MicroServiceModelUtils\Models\MicroServiceBaseModel
 */
abstract class MicroServiceExtendOracleModel extends MicroServiceBaseOracleModel
{

    /**
     * Get the value of the primary key, used to identify this model.
     *
     * @return mixed
     */
    public function getPrimaryKeyValue()
    {
        return $this[$this->primaryKey];
    }

    public function getDates()
    {
        return $this->dates;
    }
}