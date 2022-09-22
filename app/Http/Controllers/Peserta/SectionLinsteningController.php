<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Jawaban;
use App\Models\JawabanPeserta;
use App\Models\Soal;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionLinsteningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = UserDetail::where('users_id', Auth::user()->id)->first();
        $soals = Soal::where('level', $detail->level)->get();
        $jawabans = Jawaban::inRandomOrder()->get();
        $soalsection = Soal::where('level', $detail->level)->where('section', 1)->get();

        $jawabanpesertas = JawabanPeserta::where('users_id', Auth::user()->id)->get();
        if ($jawabanpesertas->count() <= 0) {
            foreach ($soals as $soal) {
                JawabanPeserta::create([
                    'is_checked' => 0,
                    'is_true' => 0,
                    'soals_id' => $soal->id,
                    'users_id' => Auth::user()->id
                ]);
            }
        } elseif ($jawabanpesertas->count() > 0 && $jawabanpesertas->count() < $soals->count()) {
            foreach ($jawabanpesertas as $key) {
                JawabanPeserta::destroy($key->id);
            }
            foreach ($soals as $soal) {
                JawabanPeserta::create([
                    'is_checked' => 0,
                    'is_true' => 0,
                    'soals_id' => $soal->id,
                    'users_id' => Auth::user()->id
                ]);
            }
        }

        $lastJawaban = Jawaban::orderBy('id', 'DESC')->first();
        $lastJawaban = $lastJawaban->id;

        $lastSoal = Soal::orderBy('id', 'DESC')->first();
        $lastSoal = $lastSoal->id;

        return view('peserta.listening', compact('soalsection', 'jawabans', 'lastJawaban', 'lastSoal', 'jawabanpesertas'));
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
        $user = User::find(Auth::user()->id);

        $user->syncPermissions([]);
        $user->givePermissionTo('reading');
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        return redirect()->route('readingsection.index');
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
