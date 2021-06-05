<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Logbook]].
 *
 * @see Logbook
 */
class LogbookQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Logbook[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Logbook|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
