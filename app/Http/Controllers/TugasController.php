<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class TugasController extends Controller
{
    public function tugas()
    {
        return view('tugas');
    }
 
    public function proses(Request $request)
    {
        $messagesError = [
            'gambar' => ':attribute harus berekstensi .png/ .jpg/ .jpeg dan berukuran maksimal 2 MB!',
            'gambar.mimes' => ':attribute harus berekstensi .png/ .jpg/ ataupun .jpeg!',
            'gambar.max' => ':attribute harus berukuran maksimal 2 MB!',
            'required' => ':attribute ini wajib diisi!',
            'min' => ':attribute harus berisi minimal :min karakter!',
            'max' => ':attribute harus berisi maksimal :max karakter!',
            'atk.between' => ':attribute harus berisi maksimal :between karakter!',
        ];
        
        $this->validate($request,[
            'nama' => 'required|min:5|max:100',
            'gender'=> 'required|in:Male,Female',
            'atk' => 'required|numeric|between:2.50,99.99',
            'def' => 'required|numeric|between:2.50,99.99',
            'speed' => 'required|numeric|between:100,300',
            'weapons' => 'required|array|min:1',
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'skill'=> 'required|in:Hypermovement,Immunity,Endurance'
        ], $messagesError);

        session()->flash('success','Karakter baru Anda berhasil dibuat!!');
        
        $img = $request->file('gambar');
        $direktoriTujuan = 'img/';
        $direktoriGambar = $img->getClientOriginalName();
        $img->move($direktoriTujuan, $direktoriGambar);
 		
        return view('proses-tugas',['data' => $request]);
    }
}   