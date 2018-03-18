<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Automata]].
 *
 * @see Automata
 */
class AutomataQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Automata[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Automata|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
