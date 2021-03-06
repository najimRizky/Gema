<?php foreach($games as $item){ ?>
<div class="eight wide mobile four wide tablet three wide computer stackable column left aligned"  style="margin-bottom: 10px;">
    <div class="row">
        <div class="ui fluid rounded image" style="height: 265px">
            <img id="poster" style="width: 100%; height: 100%; object-fit:cover; object-position: left top;" src="<?= base_url('assets/uploads/poster/'.$item['Gambar']) ?>">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="ui fluid teal card" style="background-color: #222831; box-shadow: none;">
            <div class="content">
                <h5 class="ui header" style="color: white; height: 50px; font-weight: normal;"><?= $item['Nama_Barang'] ?></h5>
                <div class="ui divider"></div>
                <div class="description">
                    <h4 style="color: white;">IDR <?= number_format($item['Harga']) ?>/day</h4>    
                    <h5 style="color: white; text-align:right">Stock : <?= $item['Stock'] ?> </h5>
                </div>
            </div>
            <div class="extra content">
                <div class="right floated author">
                    <a href="<?= base_url('index.php/base/details/'.$item['Id']) ?>" class="ui green icon button" data-tooltip="See details"><i class="ellipsis horizontal icon"></i></a>
                    <a href="<?= base_url('index.php/customer/addToCart/'.$item['Id'])?>" class="ui teal icon button" data-tooltip="Add to cart"><i class="cart plus icon"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>