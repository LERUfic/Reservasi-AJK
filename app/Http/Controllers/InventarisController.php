<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inventaris;
use App\barang_inventaris;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InventarisController extends Controller
{
	public function index() {
    	$reservations = $this->getAll();

    	return view('inventarislist', ['reservations' => $reservations]);
    }
    public function userindex() {
        $reservations = $this->getAll();

        return view('inventarislistuser', ['reservations' => $reservations]);
    }

    public function addinven() {
    	return view('inventarisadd');
    }

    public function create(Request $request) {

    	$barang = $request->input('barang');
        $jumlah_total = $request->input('jumlah_total');
        $jumlah_dipinjam = $request->input('jumlah_dipinjam');
    	
		DB::table('inventaris_ajk')->insert(
    		['barang' => $barang, 'jumlah_total' => $jumlah_total, 'jumlah_dipinjam' => $jumlah_dipinjam]
		);

    	return redirect('/inventaris');
    }

    public function delete(Request $request) {
        inventaris::destroy($request->input('id'));

        return view('inventarislist', ['reservations' => $this->getAll()]);
    }

    private function getAll() {
		$reservations = inventaris::all();
		$num = 0;
    	foreach ($reservations as $res) {
    		$res->num = $num+1;
    		$res->barang = $res->barang;
    		$res->jumlah_total = $res->jumlah_total;
    		$res->jumlah_sisa = $res->jumlah_total - $res->jumlah_dipinjam;
    	}
    	return $reservations;
	}

	public function edit(Request $request){
        $task = inventaris::find($request->input('id'));

        return view('inventarisedit')->withTask($task);
    }

    public function update(Request $request, $id){

        $task = inventaris::find($id);
        $barang = $request->input('barang');
        $jumlah_total = $request->input('jumlah_total');
        $jumlah_dipinjam = $request->input('jumlah_dipinjam');
        
        DB::table('inventaris_ajk')
            ->where('id', $task->id)
            ->update(['barang' => $barang, 'jumlah_total' => $jumlah_total, 'jumlah_dipinjam' => $jumlah_dipinjam]);

        return redirect('/inventaris');
    }

    public function showReserve() {
        return view('invenreserve');
    }

    public function reserve(Request $request) {
        $dateStart = new \DateTime($request->input('start'));
        $dateEnd = new \DateTime($request->input('end'));

        $reservation = new barang_inventaris();
        $reservation->barang = $request->input('barang');
        $reservation->start = date_format($dateStart, "Y-m-d H:i:s");
        $reservation->end = date_format($dateEnd, "Y-m-d H:i:s");
        $reservation->status = "PENDING";
        $reservation->jumlah = $request->input('jumlah');
        $reservation->user_id = Auth::id();
        $reservation->save();

        return redirect('/inventaris/reserve');
    }

    public function indexadmin() {
        $reservations = $this->getAll2();

        return view('invenreserveindex', ['reservations' => $reservations]);
    }

     public function indexuser() {
        $reservations = $this->getAll2();

        return view('invenreserveindexuser', ['reservations' => $reservations]);
    }
    
    private function getAll2() {
        $reservations = barang_inventaris::all();
        $num = 0;
        foreach ($reservations as $res) {
            $res->nama = $res->user->name;
            $res->nrp = $res->user->nrp;
        }
        return $reservations;
    }

    public function listaccept(Request $request) {
        $reservation = barang_inventaris::find($request->input('id'));
        $reservation->status = "ACCEPTED";
        $reservation->save();

        return view('invenreserveindex', ['reservations' => $this->getAll2()]);
    }

    public function listreject(Request $request) {
        $reservation = barang_inventaris::find($request->input('id'));
        $reservation->status = "REJECTED";
        $reservation->save();

        return view('invenreserveindex', ['reservations' => $this->getAll2()]);
    }

    public function listdelete(Request $request) {
        barang_inventaris::destroy($request->input('id'));

        return view('invenreserveindex', ['reservations' => $this->getAll2()]);
    }
}