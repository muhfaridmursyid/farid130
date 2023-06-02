<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa130".
 *
 * @property int $id
 * @property string $nim130
 * @property string $nama130
 * @property string $kelas130
 * @property string $status
 */
class Mahasiswa130 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa130';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim130', 'nama130', 'kelas130', 'status130'], 'required'],
            [['nim130', 'nama130', 'kelas130', 'status130'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id130' => 'ID',
            'nim130' => 'No Induk Mahasiswa',
            'nama130' => 'Nama Mahasiswa',
            'kelas130' => 'kelas',
            'status130' => 'status',
        ];
    }
}
