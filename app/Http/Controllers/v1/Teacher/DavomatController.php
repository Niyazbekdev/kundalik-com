<?php

namespace App\Http\Controllers\v1\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreDavomatRequest;
use App\Models\Lesson;
use App\Services\v1\Teacher\davomat\IndexDavomatService;
use App\Services\v1\Teacher\davomat\StoreDavomatService;
use Illuminate\Http\Request;

class DavomatController extends Controller
{
    public function index(Lesson $lesson)
    {
        return app(IndexDavomatService::class)->execute($lesson);
    }

    public function store(Lesson $lesson ,StoreDavomatRequest $request)
    {
        return app(StoreDavomatService::class)->execute($request, $lesson);
    }
}
