<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:40px;
            width:750px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:740px;
        }
        td, tr, th{
            padding:12px;
            border:1px solid #333;
            width:185px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Tanggal Transaksi</th>
							<th>No Referensi</th>
							<th>Nama Pembeli</th>
							<th>Nama alamat</th>
							<th>Banyak</th>
							<th>Total Penjualan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($table_invoice as $i){ ?>
						<tr>
							<td><?php echo date('j F Y',strtotime($i->tgl_beli)) ?></td>
							<td><?php echo $i->ref ?></td>
							<td><?php echo $i->nama ?></td>
							<td><?php echo $i->alamat?></td>

							
							<td><?php echo $i->banyak ?></td>
							<td>Rp <?php echo number_format($i->grandtotal) ?></td>
							
							<td style=" text-align: center;">
								<?php echo anchor('example/invoice_page/'.$i->ref, '<button class="btn btn-info btn-xs" type="button"><span class="fa fa-newspaper-o"></span></button>');?>
								
								<?php echo anchor('example/remove_inv/'.$i->ref, '<button class="btn btn-danger btn-xs" type="button"><span class="fa fa-trash"></span></button>');?>


					         </td>
						</tr>

						<?php } ?>
					</tbody>

				</table>
    </div>
</body>
</html>
