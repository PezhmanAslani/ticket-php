<?php
// File: models/TicketForm.php

namespace app\models;

use yii\base\Model;

class TicketForm extends Model
{
    public $subject;
    public $description;

    // Additional attributes can be added based on your form fields

    public function rules(): array
    {
        return [
            [['subject', 'description'], 'required'],
            [['subject'], 'string', 'max' => 255],
            [['description'], 'string'],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'subject' => 'Subject',
            'description' => 'Description',
        ];
    }
}
