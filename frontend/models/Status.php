<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $status
 * @property string $statusname
 *
 * @property Upload[] $uploads
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['statusname'], 'required'],
            [['statusname'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'status' => 'Status',
            'statusname' => 'Statusname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUploads()
    {
        return $this->hasMany(Upload::className(), ['status' => 'status']);
    }
}
