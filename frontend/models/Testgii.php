<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "testgii".
 *
 * @property int $id
 * @property int $ngay_sinh
 * @property int $thang_sinh
 * @property int $nam_sinh
 * @property int $ho_ten
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
            [['id', 'ngay_sinh', 'thang_sinh', 'nam_sinh', 'ho_ten'], 'required'],
            [['id', 'ngay_sinh', 'thang_sinh', 'nam_sinh', 'ho_ten'], 'integer'],
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
            'ngay_sinh' => Yii::t('app', 'Ngay Sinh'),
            'thang_sinh' => Yii::t('app', 'Thang Sinh'),
            'nam_sinh' => Yii::t('app', 'Nam Sinh'),
            'ho_ten' => Yii::t('app', 'Ho Ten'),
        ];
    }
}
