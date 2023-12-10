<section class="content">

    <div class="container my-5">
        <div class="row d-flex justify-content-center mx-auto">
            <div class="col-md-8">
            <?php foreach($dataStock as $stock) : ?>
            <form action="<?= base_url() ?>stock/updateStock" method="post" class="form">
            <input type="hidden" name="id_stock" value="<?= $stock->id_stock ?>">

                <div class="mb-3">
                    <label for="" class="form-label">Nama Item</label>
                    <input type="text" value="<?= $stock->nama_item ?>"  class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jumlah Item Awal</label>
                    <input type="number"value="<?= $stock->jumlah_item ?>" class="form-control" disabled >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jumlah Porsi / Satuan</label>
                    <input type="number" name="porsi_satuan" value="<?= $stock->porsi_satuan ?>" class="form-control" >
                </div>

                <button class="btn btn-success form-control">Update Stock</button>
            </form>
            <?php endforeach ?>
            </div>
           
        </div>
    </div>


</section>