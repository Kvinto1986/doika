<?php

namespace Diglabby\Doika\Http\Controllers\Widget;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

final class HelpController extends Controller
{
    public function show(): Renderable
    {
        return view('widget.pages.help.show');
    }
}
