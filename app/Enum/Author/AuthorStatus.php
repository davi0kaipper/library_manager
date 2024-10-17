<?php

namespace App\Enum\Author;

enum AuthorStatus: string
{
    case Active = 'active';
    case Inactive = 'inactive';
}
