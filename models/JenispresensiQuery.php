<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jenispresensi]].
 *
 * @see Jenispresensi
 */
class JenispresensiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jenispresensi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jenispresensi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
