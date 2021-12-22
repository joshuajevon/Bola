<?php

namespace App\Http\Controllers;

use App\Http\Requests\BolaRequest;
use App\Models\Bola;
use App\Models\Status;
use Illuminate\Http\Request;

class BolaController extends Controller
{
    public function getCreatePage(){
        $bola = Bola::get();
        return view('insert', ['bola' => $bola]);

        $statuses = Status::all();
        return view('insert', ['statuses' => $statuses]);
    }

    public function insertData(BolaRequest $request){

        $file = $request->file('file'); /*menyimpan data file yang diupload ke variabel $file */

	    $nama_file = time()."_".$file->getClientOriginalName();


	    $tujuan_upload = 'data_file'; /*isi dengan nama folder tempat kemana file diupload */
	    $file->move($tujuan_upload,$nama_file);

        Bola::create([
            'name'=> $request->name,
            'club'=> $request->club,
            'number'=> $request->number,
            'birthday'=> $request->birthday,
            'status'=>$request->status,
            'file'=> $nama_file,
            'note'=> $request->note,
        ]);

        return redirect(route('getCreatePage'));
    }

    public function getData(){
        $bolas = Bola::all();
        return view('view', ['bolas'=>$bolas]);

    }

    public function updateData($id){
        $bola = Bola::find($id); /*ambil 1 id */
        return view('update', ['bola' => $bola]);
    }

    public function updateBola(BolaRequest $request, $id){
        $bola = Bola::find($id);

        $file = $request->file('file');

	    $nama_file = time()."_".$file->getClientOriginalName();


	    $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$nama_file);

        $bola->update([
            'name'=> $request->name,
            'club'=> $request->club,
            'number'=> $request->number,
            'birthday'=> $request->birthday,
            'status'=>$request->status,
            'file'=> $nama_file,
            'note'=>$request->note,
        ]);
        return redirect(route('getData'));
    }

    public function deleteBola($id){
        Bola::destroy($id);
        return redirect(route('getData'));
    }
}
