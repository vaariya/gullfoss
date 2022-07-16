<?php
 require_once 'dompdf/vendor/autoload.php';
 use Dompdf\Dompdf;
 $con=new PDO('mysql:host=localhost;dbname=gullfoss','root','');
 $sql='SELECT * FROM cart';
 $stmt=$con->prepare($sql);
 $stmt->execute();
 $row=$stmt->fetchAll(PDO::FETCH_ASSOC);
 //print_r($row);
 $gt=0;
 $i=1;

 $html='
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Invoice</title>
     <style>
         h2{
             font-family: Verdana, Geneva, Tahoma, sans-serif;
             text-align: center;
         }
         table{
             font-family: Arial, Helvetica, sans-serif;
             border-collapse: collapse;
             width: 100%;
         }
         td,th{
             border: 1px solid #444;
             padding: 8px;
             text-align: left;
         }
         .my-table{
             text-align: right;
         }
     </style>
 </head>
 <body>
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdeys">
<div class="row">
  <div class="col-sm-12">
        <div class="panel panel-default invoice" id="invoice">
          <div class="panel-body">
            <div class="invoice-ribbon"><div class="ribbon-inner">PAID</div></div>
            <div class="row">

                <div class="col-sm-6 top-left">
                    <i class="fa fa-rocket"></i>
                </div>

                <div class="col-sm-6 top-right">
                        <h3 class="marginright">INVOICE-1234578</h3>
                        <span class="marginright">14 April 2014</span>
                </div>

            </div>
            <hr>
            <div class="row">

                <div class="col-xs-4 from">
                    <p class="lead marginbottom">From : Dynofy</p>
                    <p>350 Rhode Island Street</p>
                    <p>Suite 240, San Francisco</p>
                    <p>California, 94103</p>
                    <p>Phone: 415-767-3600</p>
                    <p>Email: contact@dynofy.com</p>
                </div>

                <div class="col-xs-4 to">
                    <p class="lead marginbottom">To : John Doe</p>
                    <p>425 Market Street</p>
                    <p>Suite 2200, San Francisco</p>
                    <p>California, 94105</p>
                    <p>Phone: 415-676-3600</p>
                    <p>Email: john@doe.com</p>

                </div>
                

            </div>

            <div class="row table-row">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th class="text-center" style="width:5%">#</th>
                      <th style="width:50%">Item</th>
                      <th class="text-right" style="width:15%">Quantity</th>
                      <th class="text-right" style="width:15%">Unit Price</th>
                      <th class="text-right" style="width:15%">Total Price</th>
                    </tr>
                  </thead>
             <tbody>';

             foreach($row as $rows)
             {
                $html.=' <tr>
                <td>'.$i.'</td>
                <td>'.$rows['name'].'</td>
                <td>'.number_format($rows['quantity']).'</td>
                <td>'.number_format($rows['price']).'</td>
                <td>'.number_format($rows['price'] * $rows['quantity']).'</td>
            </tr>';
            $gt += $rows['price']*$rows['quantity'];
            $i++;
             }
             $html.='            </tbody>
             <tr>
                 <th colspan="4" class="my-table">No GST</th>
                 <th>00</th>
             </tr>
             <tr>
                 <th colspan="4" class="my-table">Grand Total</th>
                 <th>'.number_format($gt,2).'</th>
             </tr>
             <tr>
                 <th colspan="4" class="my-table">Round Fig. Price</th>
                 <th>'.number_format($gt,2).'</th>
             </tr>
     </table>

            </div>

            <div class="row">
            <div class="col-xs-6 margintop">
                <p class="lead marginbottom">THANK YOU!</p>

                <button class="btn btn-success" id="invoice-print"><i class="fa fa-print"></i> Print Invoice</button>
                <button class="btn btn-danger"><i class="fa fa-envelope-o"></i> Mail Invoice</button>
            </div>
            <div class="col-xs-6 text-right pull-right invoice-total">
                      <p>Subtotal : $1019</p>
                      <p>Discount (10%) : $101 </p>
                      <p>VAT (8%) : $73 </p>
                      <p>Total : $991 </p>
            </div>
            </div>

          </div>
        </div>
    </div>
</div>
</div>';

 $dompdf=new Dompdf();
 $dompdf->loadHtml($html);
 $dompdf->setPaper('A4','portrait');
 $dompdf->render();
 $dompdf->stream('invoice.pdf');
?>