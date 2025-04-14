<?php

namespace App\Enums;

enum CourseStatus: int
{
    case DRAFT = 1; // Borrador

    case PENDING = 2; // Pendiente

    case PUBLISHED = 3; // Publicado
}
