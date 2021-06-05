<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Izindetail]].
 *
 * @see Izindetail
 */
class IzindetailQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Izindetail[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Izindetail|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
