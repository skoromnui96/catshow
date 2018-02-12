<?php

namespace app\models\Programm;

use Yii;

/**
 * This is the model class for table "programm".
 *
 * @property int $id
 * @property string $day
 * @property int $from
 * @property int $to
 * @property string $description
 */
class Programm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['day'], 'integer'],
            [['from', 'to'], 'string'],
            [['description', 'month'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'day' => 'День',
            'month' => 'Месяц',
            'from' => 'Время с',
            'to' => 'Время до',
            'description' => 'Описание',
        ];
    }
}
