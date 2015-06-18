<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "color".
 *
 * @property integer $typecolor
 * @property string $color
 *
 * @property Upload[] $uploads
 */
class Color extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'color';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['color'], 'required'],
            [['color'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'typecolor' => 'Typecolor',
            'color' => 'Color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUploads()
    {
        return $this->hasMany(Upload::className(), ['typecolor' => 'typecolor']);
    }
}
