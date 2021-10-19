<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;
// 定義している

    const SKILL_STATUS_NOT_YET = 1;
    const SKILL_STATUS_LEARNING = 2;
    const SKILL_STATUS_LEARNED = 3;
    const SKILL_STATUS_RELEARN = 4;
    const SKILL_STATUS_MASTER = 5;
    
    const SKILL_STATUS_NAME_NOT_YET = '全く追い込めなかった';
    const SKILL_STATUS_NAME_LEARNING = '少し追い込めた';
    const SKILL_STATUS_NAME_LEARNED = 'いい感じ';
    const SKILL_STATUS_NAME_RELEARN = 'バチバチ';
    const SKILL_STATUS_NAME_MASTER = 'マッチョ';
    
    const DOG_STATUS_OBJECT = [
        self::SKILL_STATUS_NOT_YET  => self::SKILL_STATUS_NAME_NOT_YET,
        self::SKILL_STATUS_LEARNING => self::SKILL_STATUS_NAME_LEARNING,
        self::SKILL_STATUS_LEARNED  => self::SKILL_STATUS_NAME_LEARNED,
        self::SKILL_STATUS_RELEARN  => self::SKILL_STATUS_NAME_RELEARN,
        self::SKILL_STATUS_MASTER   => self::SKILL_STATUS_NAME_MASTER,
    ];
    
}
