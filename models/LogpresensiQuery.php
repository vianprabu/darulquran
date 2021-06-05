<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Logpresensi]].
 *
 * @see Logpresensi
 */
class LogpresensiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Logpresensi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Logpresensi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
