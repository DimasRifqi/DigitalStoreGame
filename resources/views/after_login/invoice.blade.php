<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SET_YOUR_CLIENT_KEY_HERE"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <title>Digital Store - Invoice</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400&display=swap" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/styleInvoice.css" rel="stylesheet">

  </head>
  <body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


        <div class="invoice-container">
        <div class="invoice-header">
            <div class="title-date">
            <h2 class="title">INVOICE</h2>
            @if ($invoiceGame)
                <p class="date">{{ $invoiceGame->kodepembayaran_invoice }}</p>
            @else
                <p class="error-message">Invoice not found</p>
            @endif
            </div>
            {{-- <div class="space"></div>
            <p class="invoice-number">{{ $invoiceGame->kodepembayaran_invoice}}</p> --}}
        </div>
        <div class="invoice-body">
            <table>
            <thead>
                <th>Nama Pembeli</th>
                <th>Nama Game</th>
                <th>ID Game</th>
                <th>Server Game</th>
                <th>Item</th>
                <th>PRICE</th>
            </thead>

                <tbody id="table-body">
                    @if($invoiceGame)
                        <tr class="single-row">
                            <td><input type="hidden" placeholder="nama_pembeli">{{ $invoiceGame->nama_pembeli}}</td>
                            <td><input type="hidden" placeholder="nama_game">{{ $invoiceGame->nama_game}}</td>
                            <td><input type="hidden" placeholder="game_id">{{ $invoiceGame->game_id}}</td>
                            <td><input type="hidden" placeholder="server_game">{{ $invoiceGame->server_game}}</td>
                            <td><input type="hidden" placeholder="item_game">{{ $invoiceGame->item_game}}</td>
                            <td><input type="hidden" placeholder="harga_item">Rp.{{ number_format($invoiceGame->hargaitem_game) }}</td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="4">No data available</td>
                        </tr>
                    @endif

                </tbody>

            </table>
        </div>
        <div class="button-container">
            <div class="d-grid gap-2 col-4">
            <button type="submit" class="btn btn-warning fw-medium" name="submit_topup " style="font-size: 1.5em; padding: 10px 20px;" id="pay-button">Pilih Pembayaran</button>
            </div>
        </div>
        </div>

        <script type="text/javascript">
            // For example trigger on button clicked, or any time you need
            var payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function () {
              // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
              window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result){
                  /* You may add your own implementation here */
                  alert("payment success!"); console.log(result);
                },
                onPending: function(result){
                  /* You may add your own implementation here */
                  alert("wating your payment!"); console.log(result);
                },
                onError: function(result){
                  /* You may add your own implementation here */
                  alert("payment failed!"); console.log(result);
                },
                onClose: function(){
                  /* You may add your own implementation here */
                  alert('you closed the popup without finishing the payment');
                }
              })
            });
          </script>

  </body>
</html>
