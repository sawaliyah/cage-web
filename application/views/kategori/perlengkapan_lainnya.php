<div class="container-fluid">
    <div class="row text-center mt-4">
  
        <?php foreach ($perlengkapan_lainnya as $pl):?>
          <div class="card ml-4 mb-4" style="width: 16rem;">
        <img src="<?php echo base_url().'/assets/img/'.$pl->gambar;?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-1"><?php echo $pl->nama_brg;?></h5>
          <small><?php echo $pl->keterangan;?></small><br/>
          <span class="badge badge-pill badge-info mb-3">Rp. <?php echo number_format($pl->harga,0,',','.');?></span>
          <?php echo anchor('shop/tambah_keranjang/'.$pl->id_brg,'<div class="btn btn-success btn-sm">Tambah ke Keranjang</div>');?>
          <?php echo anchor('product/'.$pl->id_brg,'<div class="btn btn-primary btn-sm">Detail</div>');?>
    
  </div>
</div>
        <?php endforeach;?>
    
    </div>
</div>