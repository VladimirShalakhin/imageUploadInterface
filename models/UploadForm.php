<?php

namespace app\models;

class UploadForm extends \yii\base\Model
{
    /**
     * @var UploadedFile file attribute
     */
    public $file;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['file'], 'file', 'maxFiles' => 5, 'extensions' => 'gif, jpg, jpeg, png, tiff, psd, pdf, eps, ai, indd, raw'],
        ];
    }
}