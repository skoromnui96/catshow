<?php

namespace app\models\About;

use app\models\ImageManager;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'string', 'max' => 1000000000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
        ];
    }
    public function getImages()
    {
        return $this->hasMany(ImageManager::className(), ['item_id' => 'id'])->andWhere(['class'=>self::tableName()])->orderBy('sort');
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
                unlink(Yii::getAlias('@images').'/about/'. $one->name);
            }
        }
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }

    public static function getIds()
    {
        return  self::find()->select('id')->orderBy('id DESC')->one();
    }
}