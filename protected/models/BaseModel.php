<?php

/**
 * Created by PhpStorm.
 * User: Sarfraz
 * Date: 8/15/2015
 * Time: 2:34 PM
 */
class BaseModel extends CActiveRecord
{
    // to automatically update time
    /*
    public function beforeSave()
    {
        if ($this->isNewRecord) {
            $this->created = time();
        }

        $this->updated = time();

        return parent::beforeSave();
    }
    */

    // we could have used above beforeSave method to automatically update
    // created and updated times but yii provides builtin behaviour for this

    public function behaviors()
    {
        return array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'created',
                'updateAttribute' => 'updated',
                'setUpdateOnCreate' => true
            )
        );
    }

}