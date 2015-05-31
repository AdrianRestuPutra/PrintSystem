<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "upload".
 *
 * @property integer $idFile
 * @property string $fileName
 */
class Upload extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $file;
    public static function tableName()
    {
        return 'upload';
    }

    /**
     * @inheritdoc
     */
	
    public function rules()
    {
        return [
            [['file'], 'safe'],
            [['file'], 'file', 'extensions'=>'txt, doc, pdf'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idFile' => 'Id File',
            'file' => 'File Upload',
        ];
    }
}
