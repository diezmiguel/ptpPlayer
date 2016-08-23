<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teams_temp".
 *
 * @property string $col_0
 * @property string $col_1
 * @property string $col_2
 * @property string $last_names
 * @property string $ranking
 * @property string $col_5
 * @property string $col_6
 * @property string $col_7
 * @property string $col_8
 * @property string $col_9
 * @property string $col_10
 * @property string $col_11
 * @property string $col_12
 * @property string $col_13
 * @property string $col_14
 * @property string $col_15
 * @property string $col_16
 * @property string $col_17
 * @property string $col_18
 * @property string $col_19
 * @property string $col_20
 */
class TeamsTemp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teams_temp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['col_0', 'col_1', 'col_2', 'last_names', 'ranking', 'col_5', 'col_6', 'col_7', 'col_8', 'col_9', 'col_10', 'col_11', 'col_12', 'col_13', 'col_14', 'col_15', 'col_16', 'col_17', 'col_18', 'col_19', 'col_20'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'col_0' => 'Col 0',
            'col_1' => 'Col 1',
            'col_2' => 'Col 2',
            'last_names' => 'Last Names',
            'ranking' => 'Ranking',
            'col_5' => 'Col 5',
            'col_6' => 'Col 6',
            'col_7' => 'Col 7',
            'col_8' => 'Col 8',
            'col_9' => 'Col 9',
            'col_10' => 'Col 10',
            'col_11' => 'Col 11',
            'col_12' => 'Col 12',
            'col_13' => 'Col 13',
            'col_14' => 'Col 14',
            'col_15' => 'Col 15',
            'col_16' => 'Col 16',
            'col_17' => 'Col 17',
            'col_18' => 'Col 18',
            'col_19' => 'Col 19',
            'col_20' => 'Col 20',
        ];
    }
}
