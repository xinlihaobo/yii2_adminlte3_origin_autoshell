<?php

namespace api\models;

use Yii;

use yii\web\Response;


/**
 * This is the model class for table "book".
 *
 * @property int $ID ID
 * @property string $name 图书名称
 * @property string|null $foreignname 图书外文名
 * @property string $type 图书类型
 * @property string|null $keywords 关键字
 * @property string $address 来源地址
 * @property string|null $isbn ISBN
 * @property string|null $publishdate 出版日期
 * @property string|null $press 出版社
 * @property float|null $price 图书价格
 * @property string $country 国别/地区
 * @property string|null $author 作者
 * @property string|null $translator 译者
 * @property string|null $wordnumber 字数
 * @property string|null $cip 中国版本图书馆CIP数据核字
 * @property string|null $coverfront 正封面图片
 * @property string|null $coverback 背封面图片
 * @property string|null $writing_technique 写作手法
 * @property string|null $comment 简短评论
 * @property string $create_at 新建日期
 * @property string $update_at 更新日期
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type', 'address', 'country'], 'required'],
            [['price'], 'number'],
            [['writing_technique', 'comment'], 'string'],
            [['create_at', 'update_at'], 'safe'],
            [['name', 'foreignname', 'keywords', 'isbn', 'publishdate', 'press', 'country', 'author', 'translator', 'coverfront', 'coverback'], 'string', 'max' => 255],
            [['type', 'cip'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 10],
            [['wordnumber'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'name' => 'Name',
            'foreignname' => 'Foreignname',
            'type' => 'Type',
            'keywords' => 'Keywords',
            'address' => 'Address',
            'isbn' => 'Isbn',
            'publishdate' => 'Publishdate',
            'press' => 'Press',
            'price' => 'Price',
            'country' => 'Country',
            'author' => 'Author',
            'translator' => 'Translator',
            'wordnumber' => 'Wordnumber',
            'cip' => 'Cip',
            'coverfront' => 'Coverfront',
            'coverback' => 'Coverback',
            'writing_technique' => 'Writing Technique',
            'comment' => 'Comment',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }

    /*
     * 获取图书总数
     */
    public function getBooksCount()
    {
        // 设置格式
        Yii::$app->response->format = Response::FORMAT_JSON;

        $res = self::find()
            ->count();

            // {
            //   "Message" : "OK",
            //   "RequestId" : "CC89A90C-978F-46AC-B80D-54738371E7CA",
            //   "SignStatus" : 1,
            //   "CreateDate" : " 2019-01-08 16:44:13",
            //   "Code" : "OK",
            //   "SignName" : "阿里云",
            //   "Reason" : "文件不能证明信息真实性，请重新上传"
            // }



        return [
            'Message' => 'ok',
            'SignName' => 'bs_library',
            'status' => '1', 
            'code' => 200, 
            'data' => $res
        ];

    }
}
