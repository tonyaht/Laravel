<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CBGV;

class MyController extends Controller
{
    protected $gv;

    public function __construct(CBGV $gv)
    {
        $this->gv = $gv;
    }

    //demo Service Provider
    public function __toString()
    {
        echo $this->gv;
        echo '<br>';
        return 'Hello, I am Controller';
    }

    public function viewList()
    {
    	$array = array();

    	$array = $this->gv->showList();
    	return view('DisplayList', ['array'=> $array]);
    }

    public function callAddForm()
    {
    	return view('addForm');
    }

    public function add(Request $request)
    {
    	$hoTen = $request->hoTen;
    	$namSinh = $request->namSinh;
    	$queQuan = $request->queQuan;
    	$luongCung = $request->luongCung;
    	$thuong = $request->thuong;
    	$phat = $request->phat;

    	// $gv = new CBGV();
    	$this->gv->addCBGV($hoTen, $namSinh, $queQuan, $luongCung, $thuong, $phat);
    	return redirect()->to('http://localhost/CBGV/public/');
    	
    }

    public function callUpdateForm($id)
    {
    	// $gv = new CBGV();
    	$array = array();

    	$array = $this->gv->displayInforByID($id);

    	return view('updateForm', ['array'=> $array]);
    }

    public function update(Request $request)
    {
    	$id = $request->id;
    	$hoTen = $request->hoTen;
    	$namSinh = $request->namSinh;
    	$queQuan = $request->queQuan;
    	$luongCung = $request->luongCung;
    	$thuong = $request->thuong;
    	$phat = $request->phat;

    	// $gv = new CBGV();
    	$this->gv->updateCBGV($id, $hoTen, $namSinh, $queQuan, $luongCung, $thuong, $phat);

    	return redirect()->to('http://localhost/CBGV/public/');
    }

    public function delete($id)
    {
    	// $gv = new CBGV();
    	$this->gv->deleteCBGV($id);

    	return redirect()->to('http://localhost/CBGV/public/');
    }

    public function search(Request $request)
    {
    	$ten = $request->name;
    	// $gv = new CBGV();
    	$array = array();

    	$array = $this->gv->searchCBGV($ten);

    	return view('DisplayList', ['array'=> $array]);
    }
}
