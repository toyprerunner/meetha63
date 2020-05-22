<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Group;

/**
 * GroupSearch represents the model behind the search form of `app\models\group`.
 */
class GroupSearch extends Group
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cat_id'], 'integer'],
            [['name', 'create_date'], 'safe'],
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
        // $query = group::find();
        $query = group::find()->where(['cat_id' => 1]);

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
            'create_date' => $this->create_date,
            'cat_id' => $this->cat_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
    // public function searchGroup() {

    //     $cat_id =  Yii::$app->request->getQueryParam('cat_id');
    //     $query = group::find();
    //     $dataProvider = new ActiveDataProvider([
    //         'query' => $query->where(['cat_id' => $cat_id]),
    //     ]);
    //     return $dataProvider;
    // }
    public function searchIndex()
    {
        $query = group::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }
    
    public function searchHa() {

        $query = group::find()->where(['cat_id' => 2]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchHad() {

      $query = group::find()->where(['cat_id' => 3]);
      $dataProvider = new ActiveDataProvider([
          'query' => $query,
      ]);
        return $dataProvider;
      }

      public function searchHadc() {

          $query = group::find()->where(['cat_id' => 4]);
          $dataProvider = new ActiveDataProvider([
              'query' => $query,
          ]);
          return $dataProvider;
      }

      public function searchHadd() {

          $query = group::find()->where(['cat_id' => 5]);
          $dataProvider = new ActiveDataProvider([
              'query' => $query,
          ]);
          return $dataProvider;
      }

      public function searchHade() {

          $query = group::find()->where(['cat_id' => 6]);
          $dataProvider = new ActiveDataProvider([
              'query' => $query,
          ]);
          return $dataProvider;
      }

      public function searchHadf() {

          $query = group::find()->where(['cat_id' => 7]);
          $dataProvider = new ActiveDataProvider([
              'query' => $query,
          ]);
          return $dataProvider;
      }

      public function searchHadg() {

          $query = group::find()->where(['cat_id' => 8]);
          $dataProvider = new ActiveDataProvider([
              'query' => $query,
          ]);
          return $dataProvider;
      }

      public function searchHadh() {

          $query = group::find()->where(['cat_id' => 9]);
          $dataProvider = new ActiveDataProvider([
              'query' => $query,
          ]);
          return $dataProvider;
      }

      public function searchHadi() {

          $query = group::find()->where(['cat_id' => 10]);
          $dataProvider = new ActiveDataProvider([
              'query' => $query,
          ]);
          return $dataProvider;
      }

      public function searchHadj() {

          $query = group::find()->where(['cat_id' => 11]);
          $dataProvider = new ActiveDataProvider([
              'query' => $query,
          ]);
          return $dataProvider;
      }

      public function searchHadk() {

          $query = group::find()->where(['cat_id' => 12]);
          $dataProvider = new ActiveDataProvider([
              'query' => $query,
          ]);
          return $dataProvider;
      }


}
