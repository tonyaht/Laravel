<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ConNguoi;
use App\Connect;

class CBGV extends Model
{
	protected $table = 'CBGV';
    public $timestamps = false;

    use ConNguoi;
    public $luongThuc;
	public $luongCung;
	public $thuong;
	public $phat;

	public function __toString()
    {
        return 'Hi, I am CBGV';
    }

	public function setLuongCung($luongCung)
	{
		$this->luongCung = $luongCung;
	}
	public function getLuongCung ()
	{
		return $this->luongCung;
	}

	public function setThuong($thuong)
	{
		$this->thuong = $thuong;
	}
	public function getThuong()
	{
		return $this->thuong;
	}

	public function setPhat($phat)
	{
		$this->phat = $phat;
	}
	public function getPhat()
	{
		return $this->phat;
	}

	public function setLuongThuc($luongThuc)
	{
		$this->luongThuc = $luongThuc;
	}
	public function getLuongThuc()
	{
		return $this->luongThuc;
	}
	public function tinhLuong()
	{
		return $this->luongCung + $this->thuong - $this->phat;
	}

	public function showList()
	{
		$array = CBGV::all()->toArray();
		foreach ($array as $key => $value) {
			$this->setID($value['ID']);
			$this->setHoTen($value['hoTen']);
			$this->setNamsinh($value['namSinh']);
			$this->setQueQuan($value['queQuan']);
			$this->setLuongCung($value['luongCung']);
			$this->setThuong($value['thuong']);
			$this->setPhat($value['phat']);

			$luongThuc = $this->tinhLuong();
			$array[$key]['luongThuc'] = $luongThuc;
			$this->setLuongThuc($luongThuc);
			CBGV::where('ID', '=', $value['ID'])->update(['luongThuc' => $luongThuc]);
		}
		return $array;
	}

	public function addCBGV($hoTen, $namSinh, $queQuan, $luongCung, $thuong, $phat)
	{
		CBGV::insert(['hoTen'=> $hoTen, 'namSinh'=>$namSinh, 'queQuan' => $queQuan, 'luongCung' => $luongCung, 'thuong' => $thuong, 'phat' => $phat]);
	}

	public function updateCBGV($id, $hoTen, $namSinh, $queQuan, $luongCung, $thuong, $phat)
	{
		CBGV::where('ID', '=', $id)->update(['hoTen'=> $hoTen, 'namSinh'=>$namSinh, 'queQuan' => $queQuan, 'luongCung' => $luongCung, 'thuong' => $thuong, 'phat' => $phat]);
	}

	public function deleteCBGV($id)
	{
		CBGV::where('ID', '=', $id)->delete();
	}

	public function searchCBGV($hoTen)
	{
		$array = CBGV::where('hoTen','Like', '%'.$hoTen.'%')->get()->toArray();
		return $array;
	}

	public function displayInforByID($id)
	{

		$array = CBGV::where('ID','=', $id)->get()->toArray();
		return $array;
	}


}
