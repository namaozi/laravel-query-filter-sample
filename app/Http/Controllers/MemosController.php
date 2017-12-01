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
        $memos = Memo::tagFilter(request('tag'))
            ->searchTitle(request('word'))
            ->get();
        return view('memos.index', compact('memos'));
    }
}