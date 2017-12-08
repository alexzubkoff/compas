<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "commodity".
 *
 * @property int $id
 * @property string $name
 */
class Commodity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'commodity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 45],
            [['name'], 'match','pattern' => '/^[A-z]/i','message' =>'Only alphabetical characters!']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
        ];
    }
}
