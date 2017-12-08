<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "italiareg".
 *
 * @property int $id
 * @property string $region
 */
class Italiareg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'italiareg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region'], 'required'],
            [['region'], 'string', 'max' => 5],
             [['region'], 'match','pattern' => '/^[A-z]{2}/i','message' =>'Only alphabetical characters!']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region' => 'Region',
        ];
    }
}
