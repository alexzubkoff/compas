<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property int $id
 * @property string $country
 * @property string $city
 * @property string $region
 * @property int $ind
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'city', 'region', 'ind'], 'required'],
            [['ind'], 'integer'],
            [['country', 'city', 'region'], 'string', 'max' => 45],
            [['country', 'city', 'region'], 'match','pattern' => '/^[A-z]/i','message' =>'Only alphabetical characters!']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Страна',
            'city' => 'Город',
            'region' => 'Регион',
            'ind' => 'Код города(индекс)',
        ];
    }
}
