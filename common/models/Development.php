<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "development".
 *
 * @property int $id
 * @property int|null $ch
 * @property string|null $naim
 * @property string|null $edizm
 * @property string|null $plan
 * @property string|null $fakt
 * @property string|null $otklon
 * @property string|null $otvetstv
 * @property string|null $podtv
 * @property string|null $znam
 * @property string|null $chisl
 * @property string|null $prim
 * @property string|null $otmetka
 */
class Development extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'development';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ch', 'naim', 'edizm', 'plan', 'fakt', 'otklon', 'otvetstv', 'podtv', 'znam', 'chisl', 'prim', 'otmetka'], 'default', 'value' => null],
            [['ch'], 'integer'],
            [['naim', 'plan', 'fakt', 'otklon', 'otvetstv', 'podtv', 'znam', 'chisl', 'prim', 'otmetka'], 'string', 'max' => 255],
            [['edizm'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ch' => 'Ch',
            'naim' => 'Naim',
            'edizm' => 'Edizm',
            'plan' => 'Plan',
            'fakt' => 'Fakt',
            'otklon' => 'Otklon',
            'otvetstv' => 'Otvetstv',
            'podtv' => 'Podtv',
            'znam' => 'Znam',
            'chisl' => 'Chisl',
            'prim' => 'Prim',
            'otmetka' => 'Otmetka',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\DevelopmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DevelopmentQuery(get_called_class());
    }

}
