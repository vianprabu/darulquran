<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jeniscuti]].
 *
 * @see Jeniscuti
 */
class JeniscutiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jeniscuti[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jeniscuti|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
