<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <div style="text-align:center">
            <h3> <?= $title_pdf ?></h3>
        </div>
        <table id="table">
            <thead>
                <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Debit</th>
                <th>Kredit</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; foreach($penjualan as $item) : ?>
                <tr>
                    <td><?=  $nomor++ ?></td>
                    <td><?=  $item->tanggal ?></td>
                    <td>Kas</td>
                    <td>Rp <?= number_format($item->total_harga) ?></td>
                    <td></td>
                </tr>

                <?php endforeach ?>

                <?php $nomor = 1; foreach($penjualan as $item) : ?>
                <tr>
                    <td></td>
                    <td><?=  $item->tanggal ?></td>
                    <td>Penjualan</td>
                    <td></td>
                    <td>Rp <?= number_format($item->total_harga) ?></td>
                </tr>

                <?php endforeach ?>
                


                    
            </tbody>
        </table>
    </body>
</html>