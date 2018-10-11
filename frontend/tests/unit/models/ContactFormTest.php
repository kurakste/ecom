<?php
namespace frontend\tests\unit\models;

use Yii;
use app\models\Category;

class ContactFormTest extends \Codeception\Test\Unit
{
    public function testAddNewCategory()
    {
        $model = new Category();

        $model->attributes = [
            'name' => 'Tester',
            'cpu' => 'new-tester',
            'description' => 'very important letter subject',
            'image' => 'body of current message',
        ];

        $this->assertTrue($model->save());
        $this->assertTrue($model->name === 'Tester');

        $id = $model->id;

        $newmodel = Category::find()->where(['id' => $id])->one(); 
        $this->assertTrue($newmodel->name === 'Tester');
         

        /* expect_that($model->sendEmail('admin@example.com')); */

        /* // using Yii2 module actions to check email was sent */
        /* $this->tester->seeEmailIsSent(); */

        /* $emailMessage = $this->tester->grabLastSentEmail(); */
        /* expect('valid email is sent', $emailMessage)->isInstanceOf('yii\mail\MessageInterface'); */
        /* expect($emailMessage->getTo())->hasKey('admin@example.com'); */
        /* expect($emailMessage->getFrom())->hasKey('tester@example.com'); */
        /* expect($emailMessage->getSubject())->equals('very important letter subject'); */
        /* expect($emailMessage->toString())->contains('body of current message'); */
    }
}
