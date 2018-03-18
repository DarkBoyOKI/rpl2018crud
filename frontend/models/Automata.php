<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "automata".
 *
 * @property int $id
 * @property string $brand
 * @property string $model
 */
class Automata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'automata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand', 'model'], 'required'],
            [['brand', 'model'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand' => 'Brand',
            'model' => 'Model',
        ];
    }

    /**
     * @inheritdoc
     * @return AutomataQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AutomataQuery(get_called_class());
    }
}
