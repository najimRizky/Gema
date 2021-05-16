<!DOCTYPE html>
<html lang="en">

<style>

.image-detail {
    margin: 0px;
}

.title {
    margin: 0px;
}

.price {
    margin: 5px;
}

.detail {
    margin-top: 20px;
}

.deskripsi {
    margin-top: 0px;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $style ?>
    <title><?= $game[0]['Nama_Barang']?></title>
</head>
<body>
    <?= $nav ?>
    <div class="ui container" id="main" style="text-align: center; font-family: 'Quicksand', sans-serif;">
        <img class="image-detail" width="300px" src="<?= base_url("/assets/uploads/poster/".$game[0]['Gambar'])?>" alt="Image not found">
        <h1 class="title"><?= $game[0]['Nama_Barang']?></h1>
        <h2 class="price">IDR <?= number_format($game[0]['Harga'])?></h2>
        <h2 class="deskripsi"><?= $kategori[0]['Deskripsi']?></h2>
        <div class="left floated author">
            <a href="" class="ui teal icon button"><i class="cart plus icon"></i></a>
        </div>
        <p style="background-color:transparent; font-size: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="ui segment left aligned"><?= $game[0]['Deskripsi']?></p>   

        <h2>Recommended Games</h2>
        <div class="ui center aligned grid">
                <?php foreach($recommend as $item) {?>
                <div class="eight wide mobile five wide tablet four wide computer stackable column left aligned">
                    <br>
                    <div class="row">
                        <div class="ui fluid teal card" style="background-color: #222831; box-shadow: none;">
                            <div class="image">
                                <img class="img-recommend" id="poster" src="<?= base_url('assets/uploads/poster/'.$item['Gambar']) ?>">
                            </div>
                            <div class="content">
                                <a href="<?= base_url('index.php/base/details/'.$item['Id']) ?>" class="ui header" style="color: white; height: 50px; font-weight: normal;"><?= $item['Nama_Barang'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
        </div>
    </div>
</body>
</html>