<?php

namespace common\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Development;

/**
 * DevelopmentSearch represents the model behind the search form of `common\models\Development`.
 */
class DevelopmentSearch extends Development
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ch'], 'integer'],
            [['naim', 'edizm', 'plan', 'fakt', 'otklon', 'otvetstv', 'podtv', 'znam', 'chisl', 'prim', 'otmetka'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = Development::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'ch' => $this->ch,
        ]);

        $query->andFilterWhere(['like', 'naim', $this->naim])
            ->andFilterWhere(['like', 'edizm', $this->edizm])
            ->andFilterWhere(['like', 'plan', $this->plan])
            ->andFilterWhere(['like', 'fakt', $this->fakt])
            ->andFilterWhere(['like', 'otklon', $this->otklon])
            ->andFilterWhere(['like', 'otvetstv', $this->otvetstv])
            ->andFilterWhere(['like', 'podtv', $this->podtv])
            ->andFilterWhere(['like', 'znam', $this->znam])
            ->andFilterWhere(['like', 'chisl', $this->chisl])
            ->andFilterWhere(['like', 'prim', $this->prim])
            ->andFilterWhere(['like', 'otmetka', $this->otmetka]);

        return $dataProvider;
    }
}
