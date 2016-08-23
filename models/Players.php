<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "players".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $sponsor
 * @property string $dateCreated
 */
class Players extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'players';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dateCreated'], 'safe'],
            [['firstname', 'lastname', 'sponsor'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'sponsor' => 'Sponsor',
            'dateCreated' => 'Date Created',
        ];
    }

    /**
     * @inheritdoc
     * @return PlayersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PlayersQuery(get_called_class());
    }
}
