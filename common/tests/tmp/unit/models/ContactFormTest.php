<?php
namespace frontend\tests\unit\models;

use Yii;
use backend\models\Category;

class ContactFormTest extends \Codeception\Test\Unit
{
    public function testSendEmail()
    {
        $model = new ContactForm();

        $model->attributes = [
            'name' => 'Tester',
            'email' => 'new-tester',
            'description' => 'very important letter subject',
            'imege' => 'body of current message',
        ];

        $model->save();

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
