<?php

namespace app\models;

use Yii;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

use yii\web\UploadedFile; // Don't forget to import the UploadedFile class
use yii\base\Model;
/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property int $category_id
 * @property string|null $icon
 * @property string|null $title
 * @property float|null $price
 * @property string|null $warranty
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Category $category
 */
class Service extends \yii\db\ActiveRecord
{
        public $icon; // Add this line to declare the property

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id'], 'required'],
            [['category_id'], 'integer'],
            [['price'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
                        [['icon'], 'file', 'extensions' => 'png, jpg, jpeg, gif'],
            // [['icon'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],

            [[ 'title','title_ar', 'warranty','iconName'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'iconName' => 'Icon',
            'title' => 'Title',
            'title_ar' => 'Title_ar',
            'price' => 'Price',
            'warranty' => 'Warranty',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }



public function upload()
    {
        if ($this->validate()) {
            $this->icon->saveAs('uploads/' . $this->title . '.' . $this->icon->extension);
            return true;
        } else {
            return false;
        }
    }


    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    \yii\db\BaseActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }
// public function upload()
//     {
//         if ($this->validate()) {
//             $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
//             return true;
//         } else {
//             return false;
//         }
//     }
}
