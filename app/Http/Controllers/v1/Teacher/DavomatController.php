<?php

namespace App\Http\Controllers\v1\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Services\v1\Teacher\davomat\IndexDavomatService;
use Illuminate\Http\Request;

class DavomatController extends Controller
{
    public function index(Lesson $lesson)
    {
        return app(IndexDavomatService::class)->execute($lesson);
    }
}
