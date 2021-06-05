<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Anakpegawai]].
 *
 * @see Anakpegawai
 */
class AnakpegawaiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Anakpegawai[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Anakpegawai|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
