<?php
namespace app\controllers;
use app\models\TicketForm;
use SoapClient;
use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

class TicketController extends Controller
{
    public function behaviors(): array
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['send-ticket', 'all-tickets'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['send-ticket', 'all-tickets'],
                        'roles' => ['@'], // '@' means logged-in users
                    ],
                ],
            ],
        ];
    }

    public function actionSendTicket(): string
    {
        $model = new TicketForm(); // Assuming you have a TicketForm model for validation
//        $username = 'admin';
//        $password = 'admin';
//        $url = 'http(s)://<url>/services/api/IPerson.svc?wsdl';
//        $soapClient = new SoapClient($url);
        $params = array(
            "userName" => "admin",
            "password" => "admin",
            "ticketInfo" => [
                "ActiveProcessLifePaths" => [
                    "ActiveProcessLifePathInfoArray0" => [
                        "Id" => "00000000-0000-0000-0000-000000000000",
                        "State" => ""
                    ]
                ],
                "AssignedTo" => "نام کاربری کارشناس",
                "EmailAddress" => "pejmanaslani7799@gmail.com",
                "Impact" => "میزان تاثیر گذاری درخواست",
                "Number" => 0,
                "ResponseStatus" => "وضعیت پاسخ",
                "Severity" => "میزان شدت",
                "Status" => "جدید",
                "Description" => $model->description,
                "IdentityId" => "cbaced18-e4c5-4997-9356-c265d4f65ddf",
                "Subject" => $model->subject,
                "CreatDate" => "1/14/2024 10:21:29 AM",
                "CrmId" => "a7ef4bee-b457-4368-a108-479757d68114",
                "CrmObjectTypeCode" => "147963************************************************",
                "CrmObjectTypeId" => "7479908d-49e6-49da-8b8d-6eea13450257",
                "CrmObjectTypeIndex" => 0,
                "CrmObjectTypeName" => "",
                "ExtendedProperties" => [
                    "BaseCrmObjectExtendedPropertyInfoArray0" => [
                        "Name" => "عنوان فیلد تعریف شده توسط کاربر",
                        "UserKey" => "کلید فیلد تعریف شده توسط کاربر ",
                        "Value" => "مقدار فیلد تعریف شده توسط کاربر"
                    ]
                ],
                "ModifyDate" => "1/14/2024 10:21:29 AM",
                "ParentCrmObjectId" => "fcd37b6c-943f-4705-a85a-7b2f7a0bdf90",
                "ProcessStateIndex" => 0,
                "RefId" => "ی ارجاعات احتمالی به CrmObject ",
                "Stage" => "مرحله درخواست پشتیبانی",
                "StageId" => "0f25cd11-e9f2-4c22-b7b4-58185b1e5af0",
                "Tags" => [
                    "StringArray" => "رایه ای از برچسب ) Tag )"
                ]
            ]
        );

        // Display the structure of the $params array
        var_dump($params);

        return $this->render('send-ticket', ['model' => $model]);
    }

    public function actionAllTickets(): string
    {
        return $this->render('all-tickets');
    }
}
