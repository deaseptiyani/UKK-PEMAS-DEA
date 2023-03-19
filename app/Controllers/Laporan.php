<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Laporan extends BaseController
{
	public function index()
	{
		return view('/petugas/laporan');
	}
	
	public function pengaduanTampil(){
			$this->tanggapan->join('pengaduan','pengaduan.id_pengaduan=tanggapan.id_pengaduan');
			$this->tanggapan->join('masyarakat','masyarakat.nik=pengaduan.nik');
			$this->tanggapan->join('petugas','petugas.id_petugas=tanggapan.id_petugas');
			$data['listPengaduan'] = 
			$this-> tanggapan ->where('tanggapan.tgl_tanggapan',$this->request->getPost('txtTglPengaduan'))->findAll();
		$arrBulan=[1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
		
		$htmlData=null;
		$no=null;
		$htmlData .='<p>Berikut adalah laporan Pengaduan yang sudah selesai tanggal '.$this->request->getPost('txtTglPengaduan').' :</p>';

		$htmlData .='<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
		$htmlData .='<thead class="bg-secondary text-center">
					<tr align="center">
						<th>No</th>
						<th>Nik</th>
						<th>Nama</th>
						<th>Petugas</th>
						<th>Tanggal Masuk</th>
						<th>Tanggal Ditanggapi</th>
						<th>Status</th>
						</tr>
					</thead>
					<tbody>';

		foreach ($data['listPengaduan'] as $row){
			$no++;
			$htmlData .='<tr align="center">';
			$htmlData .='<td>'.$no.'</td>';
			$htmlData .='<td>'.$row['nik'].'</td>';
			$htmlData .='<td>'.$row['nama'].'</td>';
			$htmlData .='<td>'.$row['nama_petugas'].'</td>';
			$htmlData .='<td>'.$row['tgl_pengaduan'].'</td>';
			$htmlData .='<td>'.$row['tgl_tanggapan'].'</td>';
			$htmlData .='<td>'.$row['status'].'</td>';
			$htmlData .='</tr>';
		}
		$htmlData .='
					</tbody>
					</table>';

		$htmlData .='<p>
		<button href"/print" onclick="window.print()" class="btn btn-primary btn-sm mr-2"<i class="fa fa-print"></i>Cetak</button>
		</p>';			
		echo $htmlData;	
	
	}	
}

