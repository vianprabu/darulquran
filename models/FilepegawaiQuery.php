<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Filepegawai]].
 *
 * @see Filepegawai
 */
class FilepegawaiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Filepegawai[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Filepegawai|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
