<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[JadwalpresensiPegawai]].
 *
 * @see JadwalpresensiPegawai
 */
class JadwalpresensiPegawaiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return JadwalpresensiPegawai[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return JadwalpresensiPegawai|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
