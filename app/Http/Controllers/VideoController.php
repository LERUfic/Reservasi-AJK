<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\video;
use App\pcstatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    //VIDEO
    public function index() {
    	return view('index');
    }

    public function viewVideo() {
    	return view('video');
    }

    public function create(Request $request) {

    	$link = $request->input('linkvideo');
    	$judul = $request->input('judulvideo');
        $durasi = $request->input('durasivideo');

        $url = $link;
        parse_str(parse_url( $url, PHP_URL_QUERY ), $vars );
        echo $vars['v'];
    	
		DB::table('video_link')->insert(
    		['link' => $link, 'videoid' => $vars['v'], 'judul' => $judul, 'durasi' => $durasi]
		);

    	return redirect('/videolist');
    }

    public function listvideo()
    {
        $data = video::all();
        $result = array(
            'video' => $data
        );

        return Response()->json($result);
    }

    private function getAll() {
		$reservations = video::all();
		$num = 0;
    	foreach ($reservations as $res) {
    		$res->num = $num+1;
    		$res->judul = $res->judul;
    		$res->link = $res->link;
            $res->durasi = $res->durasi;
            $num = $res->num;
    	}
    	return $reservations;
	}

    public function next() {
    	$reservations = $this->getAll();

    	return view('videolist', ['reservations' => $reservations]);
    }

    public function delete(Request $request) {
        video::destroy($request->input('idvideo'));

        return view('videolist', ['reservations' => $this->getAll()]);
    }

    public function edit(Request $request){
        $task = video::find($request->input('idvideo'));

        return view('videoedit')->withTask($task);
    }

    public function update(Request $request, $id){

        $task = video::find($id);
        $link = $request->input('link');
        $judul = $request->input('judul');
        $durasi = $request->input('durasi');
        
        DB::table('video_link')
            ->where('id', $task->id)
            ->update(['link' => $link, 'judul' => $judul, 'durasi' => $durasi]);

        return redirect('/videolist');
    }

    public function display() {

        return view('videodisplay');
    }

    //PC AJK
    public function pc_status() {
        //return view('pcstatus');
        return view('pcedit');
    }

    public function pcedit() {
        for($i=0; $i<27; $i++){
            $pc[$i+1] = pcstatus::find($i+1);    
        }

        //return view('pcedit', ['pc' => $pc]);
        return view('pcstatus', ['pc' => $pc]);
    }

    public function changestatus(Request $request) {

        $pc[1] = $request->input('pc1');
        $pc[2] = $request->input('pc2');
        $pc[3] = $request->input('pc3');
        $pc[4] = $request->input('pc4');
        $pc[5] = $request->input('pc5');
        $pc[6] = $request->input('pc6');
        $pc[7] = $request->input('pc7');
        $pc[8] = $request->input('pc8');
        $pc[9] = $request->input('pc9');
        $pc[10] = $request->input('pc10');
        $pc[11] = $request->input('pc11');
        $pc[12] = $request->input('pc12');
        $pc[13] = $request->input('pc13');
        $pc[14] = $request->input('pc14');
        $pc[15] = $request->input('pc15');
        $pc[16] = $request->input('pc16');
        $pc[17] = $request->input('pc17');
        $pc[18] = $request->input('pc18');
        $pc[19] = $request->input('pc19');
        $pc[20] = $request->input('pc20');
        $pc[21] = $request->input('pc21');
        $pc[22] = $request->input('pc22');
        $pc[23] = $request->input('pc23');
        $pc[24] = $request->input('pc24');
        $pc[25] = $request->input('pc25');
        $pc[26] = $request->input('pc26');
        $pc[27] = $request->input('pc27');
        $value = 0;

        for($i=0; $i<27; $i++){
            DB::table('pc_status')
            ->where('id', $i+1)
            ->update(['status' => $pc[$i+1]]);
        }

        return redirect('/pcview');
    }

    public function reset(Request $request) {
        
        for($i=0; $i<27; $i++){
            DB::table('pc_status')
            ->insert(['status' => 1]);
        }

        return redirect('/pcstatus');
    }

}
