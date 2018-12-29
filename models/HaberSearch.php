<?php

namespace kouosl\habermodulu\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\habermodulu\models\Haber;

/**
 * HaberSearch represents the model behind the search form of `frontend\models\Haber`.
 */
class HaberSearch extends Haber
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['HaberID'], 'integer'],
            [['Baslik', 'Ozet', 'Detay', 'Resim', 'EklenmeTarihi', 'GuncellenmeTarihi'], 'safe'],
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
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Haber::find();

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
            'HaberID' => $this->HaberID,
            'EklenmeTarihi' => $this->EklenmeTarihi,
            'GuncellenmeTarihi' => $this->GuncellenmeTarihi,
        ]);

        $query->andFilterWhere(['like', 'Baslik', $this->Baslik])
            ->andFilterWhere(['like', 'Ozet', $this->Ozet])
            ->andFilterWhere(['like', 'Detay', $this->Detay])
            ->andFilterWhere(['like', 'Resim', $this->Resim]);

        return $dataProvider;
    }
}
