<?php

namespace kouosl\habermodulu\models;

use Yii;

/**
 * This is the model class for table "{{%Haber}}".
 *
 * @property int $HaberID
 * @property string $Baslik
 * @property string $Ozet
 * @property string $Detay
 * @property string $Resim
 * @property string $EklenmeTarihi
 * @property string $GuncellenmeTarihi
 */
class Haber extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Haber';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['HaberID', 'Baslik', 'Ozet', 'Detay', 'Resim', 'EklenmeTarihi', 'GuncellenmeTarihi'], 'required'],
            [['HaberID'], 'integer'],
            [['Ozet', 'Detay', 'Resim'], 'string'],
            [['EklenmeTarihi', 'GuncellenmeTarihi'], 'safe'],
            [['Baslik'], 'string', 'max' => 128],
            [['HaberID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'HaberID' => 'Haber ID',
            'Baslik' => 'Baslik',
            'Ozet' => 'Ozet',
            'Detay' => 'Detay',
            'Resim' => 'Resim',
            'EklenmeTarihi' => 'Eklenme Tarihi',
            'GuncellenmeTarihi' => 'Guncellenme Tarihi',
        ];
    }

    /**
     * {@inheritdoc}
     * @return HaberQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HaberQuery(get_called_class());
    }
}
