@extends('layout.template')

@section('content')
    <style>
        #kotak {
            border-radius: 10px;
            height: 50px;
            background: white;
            padding: 5px;
        }

        #kotak1 {
            border-radius: 10px;
            height: 50px;
            background: white;
            padding: 5px;
        }

        #kotak2 {
            border-radius: 10px;
            height: 50px;
            background: white;
            padding: 5px;
        }
        th, h4 {
            color:black;
        }
        h4 {
            text-align:right;
        }

    </style>
    <div class="container header-left background-all">
        <br>

        <?php
        if (isset($_GET['kodeproduk']) && isset($_GET['jumlah'])) {
            $kode_produk = $_GET['kodeproduk'];
            $jumlah = $_GET['total'];
            include 'database.php';
            $sql = "select * from produk where kodeproduk='$kodeproduk'";
            $query = mysqli_query($kon, $sql);
            $data = mysqli_fetch_array($query);
            $kode_produk = $data['kodeproduk'];
            $nama_produk = $data['namaproduk'];
            $harga = $data['harga'];
        } else {
            $kode_produk = '';
            $jumlah = 0;
        }

        if (isset($_GET['aksi'])) {
            $aksi = $_GET['aksi'];
        } else {
            $aksi = '';
        }

        switch ($aksi) {
            case 'tambah_produk':
                $itemArray = [$kode_produk => ['kodeproduk' => $kodeproduk, 'namaproduk' => $namaproduk, 'jumlah' => $jumlah, 'harga' => $harga]];
                if (!empty($_SESSION['keranjangbelanja'])) {
                    if (in_array($data['kodeproduk'], array_keys($_SESSION['keranjangbelanja']))) {
                        foreach ($_SESSION['keranjangbelanja'] as $k => $v) {
                            if ($data['kodeproduk'] == $k) {
                                $_SESSION['keranjangbelanja'] = array_merge($_SESSION['keranjangbelanja'], $itemArray);
                            }
                        }
                    } else {
                        $_SESSION['keranjangbelanja'] = array_merge($_SESSION['keranjangbelanja'], $itemArray);
                    }
                } else {
                    $_SESSION['keranjangbelanja'] = $itemArray;
                }
                break;
            //Fungsi untuk menghapus item dalam cart
            case 'delete':
                if (!empty($_SESSION['keranjangbelanja'])) {
                    foreach ($_SESSION['keranjangbelanja'] as $k => $v) {
                        if ($_GET['kodeproduk'] == $k) {
                            unset($_SESSION['keranjangbelanja'][$k]);
                        }
                        if (empty($_SESSION['keranjangbelanja'])) {
                            unset($_SESSION['keranjangbelanja']);
                        }
                    }
                }
                break;

            case 'update':
                $itemArray = [$kode_produk => ['kodeproduk' => $kode_produk, 'namaproduk' => $namaproduk, 'jumlah' => $jumlah, 'harga' => $harga]];
                if (!empty($_SESSION['keranjangbelanja'])) {
                    foreach ($_SESSION['keranjangbelanja'] as $k => $v) {
                        if ($_GET['kodeproduk'] == $k) {
                            $_SESSION['keranjangbelanja'] = array_merge($_SESSION['keranjangbelanja'], $itemArray);
                        }
                    }
                }
                break;
        }
        ?>

        <div id="kotak">
            <table class="table">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Nama</th>
                        <th>Harga Satuan</th>
                        <th>Kuantitas</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
        </div>
        <tbody>
            <div class="kotak1">
                <?php
            $no=0;
            $sub_total=0;
            $total=0;
            $total_berat=0;
            if(!empty($_SESSION["keranjangbelanja"])):
            foreach ($_SESSION["keranjangbelanja"] as $item):
                $no++;
                $sub_total = $item["jumlah"]*$item['harga'];
                $total+=$sub_total;
        ?>
                <input type="hidden" name="kodeproduk[]" class="kodeproduk" value="<?php echo $item['kodeproduk']; ?>" />
                <tr>
                    <td><?php echo $item['imgproduk']; ?></td>
                    <td><?php echo $item['namaproduk']; ?></td>
                    <td>Rp. <?php echo number_format($item['harga'], 0, ',', '.'); ?> </td>
                    <td>
                        <input type="number" min="1" value="<?php echo $item['jumlah']; ?>" class="form-control"
                            id="jumlah<?php echo $no; ?>" name="jumlah[]">
                        <script>
                            $("#jumlah<?php echo $no; ?>").bind('change', function() {
                                var jumlah<?php echo $no; ?> = $("#jumlah<?php echo $no; ?>").val();
                                $("#jumlaha<?php echo $no; ?>").val(jumlah<?php echo $no; ?>);
                            });
                            $("#jumlah<?php echo $no; ?>").keydown(function(event) {
                                return false;
                            });
                        </script>

                    </td>
                    <td>Rp. <?php echo number_format($sub_total, 0, ',', '.'); ?> </td>

                    <td>
                        <form method="get">
                            <input type="hidden" name="kodeproduk" value="<?php echo $item['kodeproduk']; ?>" class="form-control">
                            <input type="hidden" name="aksi" value="update" class="form-control">
                            <input type="hidden" name="halaman" value="keranjang-belanja" class="form-control">
                            <input type="hidden" name="jumlah" value="<?php echo $item['jumlah']; ?>" id="jumlaha<?php echo $no; ?>"
                                value="" class="form-control">
                            <input type="submit" class="btn btn-warning btn-xs" value="Update">
                        </form>
                        <a href="index.php?halaman=keranjang-belanja&kode_produk=<?php echo $item['kodeproduk']; ?>&aksi=hapus"
                            class="btn btn-danger btn-xs" role="button">Delete</a>
                    </td>
                </tr>
                <?php
            endforeach;
            endif;
        ?>
            </div>
        </tbody>
        </table>
        <br>
        <div class="kotak2">
            <h4>Total Pembayaran Rp. <?php echo number_format($total, 0, ',', '.'); ?> </h4>
        </div>
    </div>
@endsection
