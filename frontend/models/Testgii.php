<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "testgii".
 *
 * @property int $id
 * @property int $ngay sinh
 * @property int $thang sinh
 * @property int $nam sinh
 * @property int $ho ten
 */
class Testgii extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testgii';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ngay sinh', 'thang sinh', 'nam sinh', 'ho ten'], 'required'],
            [['id', 'ngay sinh', 'thang sinh', 'nam sinh', 'ho ten'], 'integer'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ngay sinh' => Yii::t('app', 'Ngay Sinh'),
            'thang sinh' => Yii::t('app', 'Thang Sinh'),
            'nam sinh' => Yii::t('app', 'Nam Sinh'),
            'ho ten' => Yii::t('app', 'Ho Ten'),
        ];
    }
}
