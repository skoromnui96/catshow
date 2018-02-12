<?php

namespace app\models\Cats;

use app\models\ImageManager;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "cats".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 */
class Cats extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cats';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'description' => 'Победитель в номинации',
        ];
    }
    public function getImages()
    {
        return $this->hasMany(ImageManager::className(), ['item_id' => 'id'])->andWhere(['class'=>self::tableName()])->orderBy('sort');
    }
    public function getImage()
    {
        return $this->hasOne(ImageManager::className(), ['item_id' => 'id'])->andWhere(['class'=>self::tableName()])->orderBy('sort');
    }
    public function getImagesLinks()
    {
        return ArrayHelper::getColumn($this->images,'imageUrl');
    }
    public function getImagesLinksData()
    {
        return ArrayHelper::toArray($this->images,[
                ImageManager::className() => [
                    'caption'=>'name',
                    'key'=>'id',
                ]]
        );
    }

    public function beforeDelete()
    {
        if ($this->getImages()){
            foreach ($this->images as $one){
                unlink(Yii::getAlias('@images').'/cats/'. $one->name);
            }
        }
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }

    public static function getIds()
    {
        return  self::find()->select('id')->orderBy('id DESC')->one();
    }
}
