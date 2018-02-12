<?php

namespace app\models\Contacts;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $place
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $vk_link
 * @property string $in_link
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['place', 'address', 'phone', 'email', 'vk_link', 'in_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'place' => 'Место',
            'address' => 'Адрес',
            'phone' => 'Телефон',
            'email' => 'Email',
            'vk_link' => 'Ссылка  "Вконтакте"',
            'in_link' => 'Ссылка "Instagram"',
        ];
    }
}
