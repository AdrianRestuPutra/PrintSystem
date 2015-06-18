<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "shift".
 *
 * @property integer $shift
 * @property string $shiftname
 *
 * @property Upload[] $uploads
 */
class Shift extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shift';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shiftname'], 'required'],
            [['shiftname'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'shift' => 'Shift',
            'shiftname' => 'Shiftname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUploads()
    {
        return $this->hasMany(Upload::className(), ['shift' => 'shift']);
    }
}
