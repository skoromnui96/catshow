<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cost;

/**
 * CostSearch represents the model behind the search form of `app\models\Cost`.
 */
class CostSearch extends Cost
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name','th11', 'th12', 'th13', 'th14', 'td21', 'td22', 'td23', 'td24', 'td31', 'td32', 'td33', 'td34', 'td41', 'td42', 'td43', 'td44', 'td51', 'td52', 'td53', 'td54', 'td61', 'td71', 'td81'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Cost::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'th11', $this->th11])
            ->andFilterWhere(['like', 'th12', $this->th12])
            ->andFilterWhere(['like', 'th13', $this->th13])
            ->andFilterWhere(['like', 'th14', $this->th14])
            ->andFilterWhere(['like', 'td21', $this->td21])
            ->andFilterWhere(['like', 'td22', $this->td22])
            ->andFilterWhere(['like', 'td23', $this->td23])
            ->andFilterWhere(['like', 'td24', $this->td24])
            ->andFilterWhere(['like', 'td31', $this->td31])
            ->andFilterWhere(['like', 'td32', $this->td32])
            ->andFilterWhere(['like', 'td33', $this->td33])
            ->andFilterWhere(['like', 'td34', $this->td34])
            ->andFilterWhere(['like', 'td41', $this->td41])
            ->andFilterWhere(['like', 'td42', $this->td42])
            ->andFilterWhere(['like', 'td43', $this->td43])
            ->andFilterWhere(['like', 'td44', $this->td44])
            ->andFilterWhere(['like', 'td51', $this->td51])
            ->andFilterWhere(['like', 'td52', $this->td52])
            ->andFilterWhere(['like', 'td53', $this->td53])
            ->andFilterWhere(['like', 'td54', $this->td54])
            ->andFilterWhere(['like', 'td61', $this->td61])
            ->andFilterWhere(['like', 'td71', $this->td71])
            ->andFilterWhere(['like', 'td81', $this->td81]);

        return $dataProvider;
    }
}
