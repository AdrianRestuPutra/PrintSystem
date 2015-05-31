<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Upload;

/**
 * UploadSearch represents the model behind the search form about `frontend\models\Upload`.
 */
class UploadSearch extends Upload
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idFile'], 'integer'],
            [['fileName'], 'safe'],
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
        $query = Upload::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idFile' => $this->idFile,
        ]);

        $query->andFilterWhere(['like', 'fileName', $this->fileName]);

        return $dataProvider;
    }
}
