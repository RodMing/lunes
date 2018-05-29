<html>
    <head>
        <title>Lunes Test</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/default.css">
    </head>
    <body>
        <div class="row">
          <div class="col">
            <img src="https://site.bitcoin.com.br/wp-content/themes/bitcoin/assets/images/bitchoin-moeda.png"/>
          </div>
          <div class="col">
            <a href="http://bitcoin.org">bitcoin.org</a>
            <br/>
            @foreach ($btc->prices as $price)
              @if ($price->exchange == 'bitfinex')
                Cotação BitCoin: ${{ round($price->price, 2) }}                
              @endif
            @endforeach
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form method="post">
              {{ csrf_field() }}
              <div class="col">
                <input class="form-control" type="text" placeholder="Endereço" name="btc_endereco">
              </div>
              <div class="col">
                <input class="btn btn-primary" type="submit" value="Buscar">
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col">
            @isset($btc_results)
              <table>
                <tr>
                  <td>
                    <b>VALOR</b>
                  </td>
                  <td>
                    <b>CONFIRMAÇÕES</b>
                  </td>
                  <td>
                    <b>DATA</b>
                  </td>
                </tr>
                @foreach ($btc_results->txs as $tx)
                    <tr>
                      <td>{{ $tx->value }}</td>
                      <td>{{ $tx->confirmations }}</td>
                      <td>{{ date('d/m/Y', $tx->time) }}</td>
                    </tr>
                @endforeach
              </table>
            @endisset
          </div>
        </div>
        <hr/>
        <div class="row">
          <div class="col">
            <img src="https://http2.mlstatic.com/D_Q_NP_721811-MLB27280659106_052018-Q.jpg"/>
          </div>
          <div class="col">
            <a href="http://litecoin.org">litecoin.org</a>
            <br/>
            @foreach ($ltc->prices as $price)
              @if ($price->exchange == 'bitfinex')
                Cotação BitCoin: ${{ round($price->price, 2) }}                
              @endif
            @endforeach
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form method="post">
              {{ csrf_field() }}
              <div class="col">
                <input class="form-control" type="text" placeholder="Endereço" name="ltc_endereco">
              </div>
              <div class="col">
                <input class="btn btn-primary" type="submit" value="Buscar">
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col">
            @isset($ltc_results)
              <table>
                <tr>
                  <td>
                    <b>VALOR</b>
                  </td>
                  <td>
                    <b>CONFIRMAÇÕES</b>
                  </td>
                  <td>
                    <b>DATA</b>
                  </td>
                </tr>
                @foreach ($ltc_results->txs as $tx)
                    <tr>
                      <td>{{ $tx->value }}</td>
                      <td>{{ $tx->confirmations }}</td>
                      <td>{{ date('d/m/Y', $tx->time) }}</td>
                    </tr>
                @endforeach
              </table>
            @endisset
          </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>