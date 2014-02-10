<?php
App::uses('AppController', 'Controller');

class ReportsController extends AppController {
   	
	var $uses = array();
	
	public function beforeFilter(){
		parent::beforeFilter();
		
		$this->loadModel('TrFixPurchaseOrder');
		$this->loadModel('Warehouse');
		$this->TrFixPurchaseOrder->recursive = 2;
	}
	
	/**
	 * fungsi filtering untuk list stock
	 * @var tanggal
	 * @var jenis barang
	 * @var Jenis Gudang
	 */
	 
	 function listStockFilter($keys){
	 	
		$db = $this->TrFixPurchaseOrder->getDataSource();
		$datas = $db->fetchAll(
					    'SELECT Stock.name, Unit.name, SUM( TrFixPurchaseOrder.qty ) AS qty_in, Stock.qty AS saldo_akhir
					    		 from 
						    		  tr_fix_purchase_orders TrFixPurchaseOrder ,
						    		  fixed_purchase_orders FixedPurchaseOrder,
						    		  stocks Stock,
						    		  warehouses Warehouse,
						    		  units Unit
					    		  where 
					    		  	  TrFixPurchaseOrder.stock_id = Stock.id AND
					    		  	  Stock.warehouse_id = Warehouse.id AND
					    		  	  Warehouse.id = ? AND
					    		  	  FixedPurchaseOrder.date Between ? AND ? ',
					    array($keys['Reports']['gudang'],$keys['Reports']['date_from'],$keys['Reports']['date_to'])
					);
		
		return $datas;
	 }
	 
	/**
	 * Fungsi untuk membuat laporan kartu stock
	 * inputan  berupa post dari form :
	 * @var tanggal
	 * @var jenis barang
	 * @var gudang
	 */
	public function listStock(){ 
		$reports = array();
		$gudang = $this->Warehouse->find('list',array('fields'=>array(
			'id','name'
		)));
		if($this->request->is('post')){
			$reports = $this->listStockFilter($this->request->data);
		}
		$this->set(compact('reports','gudang'));
	}	
	
}