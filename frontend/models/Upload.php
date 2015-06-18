<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "upload".
 *
 * @property integer $idFile
 * @property string $username
 * @property integer $filecopy
 * @property integer $typecolor
 * @property integer $shift
 * @property string $datestart
 * @property string $dateend
 * @property integer $size
 * @property integer $status
 * @property string $fileName
 *
 * @property Color $typecolor0
 * @property Status $status0
 * @property Shift $shift0
 */
class Upload extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['username', 'filecopy', 'typecolor', 'shift', 'datestart', 'dateend', 'size', 'status', 'fileName'], 'required'],
            [['filecopy', 'typecolor', 'shift', 'size', 'status'], 'integer'],
            [['username', 'datestart', 'dateend'], 'string', 'max' => 255],

            [['fileName'],'safe'],
            [['fileName'],'file','extensions'=>'pdf, txt, doc, docx', 'maxSize' =>1024 * 1024 * 5],
            [['fileName'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idFile' => 'Id File',
            'username' => 'Username',
            'filecopy' => 'Filecopy',
            'typecolor' => 'Typecolor',
            'shift' => 'Shift',
            'datestart' => 'Datestart',
            'dateend' => 'Dateend',
            'size' => 'Size',
            'status' => 'Status',
            'fileName' => 'File Upload',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypecolor0()
    {
        return $this->hasOne(Color::className(), ['typecolor' => 'typecolor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['status' => 'status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShift0()
    {
        return $this->hasOne(Shift::className(), ['shift' => 'shift']);
    }
}
