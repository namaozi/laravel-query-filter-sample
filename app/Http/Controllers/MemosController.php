<?php

namespace App\Http\Controllers;

use App\Memo;
use Illuminate\Http\Request;

class MemosController extends Controller
{
    /**
     * メモ一覧を表示する。
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memos = Memo::all();
        return $memos;
    }
}