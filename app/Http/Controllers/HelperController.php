<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    function refereshcapcha() {
        return captcha_img('flat');
    }
}
