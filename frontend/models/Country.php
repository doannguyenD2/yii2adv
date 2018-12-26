<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $name
 * @property int $population
 * @property int $flag
 * @property int $id
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'population', 'flag', 'id'], 'required'],
            [['population', 'flag', 'id'], 'integer'],
            [['name'], 'string', 'max' => 3],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Name'),
            'population' => Yii::t('app', 'Population'),
            'flag' => Yii::t('app', 'Flag'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}
