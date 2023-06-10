<div class="container-fluid">
  <div class="row text-center mt-4">
      <?php foreach ($barang as $brg):?>
      <div class="card ml-4 mb-4" style="width: 16rem;">
      <img src="<?php echo base_url().'/assets/img/'.$brg->gambar;?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title mb-1"><?php echo $brg->nama_brg;?></h5>
        <small><?php echo $brg->keterangan;?></small><br/>
        <span class="badge badge-pill badge-info mb-3">Rp. <?php echo number_format($brg->harga,0,',','.');?></span>
        <?php echo anchor('shop/tambah_keranjang/'.$brg->id_brg,'<div class="btn btn-success btn-sm">Tambah ke Keranjang</div>');?>
        <?php echo anchor('product/'.$brg->id_brg,'<div class="btn btn-primary btn-sm">Detail</div>');?>
  </div>
</div>
        <?php endforeach;?>
    </div>
</div>