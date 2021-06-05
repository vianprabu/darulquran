<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jenisizin]].
 *
 * @see Jenisizin
 */
class JenisizinQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jenisizin[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jenisizin|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
