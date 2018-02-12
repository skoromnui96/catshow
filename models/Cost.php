<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cost".
 *
 * @property int $id
 * @property string $th11
 * @property string $th12
 * @property string $th13
 * @property string $th14
 * @property string $td21
 * @property string $td22
 * @property string $td23
 * @property string $td24
 * @property string $td31
 * @property string $td32
 * @property string $td33
 * @property string $td34
 * @property string $td41
 * @property string $td42
 * @property string $td43
 * @property string $td44
 * @property string $td51
 * @property string $td52
 * @property string $td53
 * @property string $td54
 * @property string $td61
 * @property string $td71
 * @property string $td81
 */
class Cost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cost';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','th11', 'th12', 'th13', 'th14', 'td21', 'td22', 'td23', 'td24', 'td31', 'td32', 'td33', 'td34', 'td41', 'td42', 'td43', 'td44', 'td51', 'td52', 'td53', 'td54', 'td61', 'td71', 'td81'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название чемпионата',
            'th11' => 'Th11',
            'th12' => 'Th12',
            'th13' => 'Th13',
            'th14' => 'Th14',
            'td21' => 'Td21',
            'td22' => 'Td22',
            'td23' => 'Td23',
            'td24' => 'Td24',
            'td31' => 'Td31',
            'td32' => 'Td32',
            'td33' => 'Td33',
            'td34' => 'Td34',
            'td41' => 'Td41',
            'td42' => 'Td42',
            'td43' => 'Td43',
            'td44' => 'Td44',
            'td51' => 'Td51',
            'td52' => 'Td52',
            'td53' => 'Td53',
            'td54' => 'Td54',
            'td61' => 'Td61',
            'td71' => 'Td71',
            'td81' => 'Td81',
        ];
    }
}
