<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Jawaban;
use App\Models\JawabanPeserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreJawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $soals_id = $request->soals_id;
        $jawabans_id = $request->jawabans_id;
        $jawaban = $request->jawaban;

        if (!empty($jawaban)) {
            JawabanPeserta::where('users_id', Auth::user()->id)->where('soals_id', $soals_id)->update([
                'is_checked' => '0',
                'jawaban' => $jawaban,
                'is_true' => '0'
            ]);

            return true;
        }

        $jawabans = Jawaban::find($jawabans_id);

        $is_true = 0;
        if ($jawabans->is_true == 1) {
            $is_true = 1;
        }

        JawabanPeserta::where('users_id', Auth::user()->id)->where('soals_id', $soals_id)->update([
            'jawabans_id' => $jawabans_id,
            'is_checked' => '1',
            'is_true' => $is_true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
