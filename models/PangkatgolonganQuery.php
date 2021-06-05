<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pangkatgolongan]].
 *
 * @see Pangkatgolongan
 */
class PangkatgolonganQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Pangkatgolongan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Pangkatgolongan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
