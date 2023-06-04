<?php

namespace app\models;

class
Image extends \yii\db\ActiveRecord
{
    public function fields()
    {
        $fields = parent::fields();

        // remove fields that contain sensitive information
        unset($fields['upload_date']);

        return $fields;
    }
}