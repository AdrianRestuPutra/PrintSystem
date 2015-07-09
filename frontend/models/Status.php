<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property string $status
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
            [['status'], 'required'],
            [['status'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'status' => 'Status',
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
