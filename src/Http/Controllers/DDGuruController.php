<?php namespace Bantenprov\AngkaHarapanHidup\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\AngkaHarapanHidup\Facades\AngkaHarapanHidup;
use Bantenprov\AngkaHarapanHidup\Models\AngkaHarapanHidupModel;

/**
 * The AngkaHarapanHidupController class.
 *
 * @package Bantenprov\AngkaHarapanHidup
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class AngkaHarapanHidupController extends Controller
{
    public function demo()
    {
        return AngkaHarapanHidup::welcome();
    }
}
