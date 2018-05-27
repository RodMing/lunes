<html>
    <head>
        <title>Lunes Test</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="row">
          <div class="col">
            <img src="https://site.bitcoin.com.br/wp-content/themes/bitcoin/assets/images/bitchoin-moeda.png" width="10%"/>
          </div>
          <div class="col" align="center">
            Cotação BitCoin: ${{ round($btc->price, 2) }}
          </div>
        </div>
        <div class="row">
          <form method="post">
            {{ csrf_field() }}
            <div class="col">
              <input class="form-control" type="text" placeholder="Endereço" id="btc_endereco">
            </div>
            <div class="col" align="center">
              <input class="btn btn-primary" type="submit" value="Buscar">
            </div>
          </form>
          @isset($btc_results)
            @forelse ($btc_results as $result)
                <li>{{ var_dump($result) }}</li>
            @empty
                <p>Empty result</p>
            @endforelse
          @endisset
        </div>
        <hr/>
        <div class="row">
          <div class="col">
            <img src="https://http2.mlstatic.com/D_Q_NP_721811-MLB27280659106_052018-Q.jpg" width="10%"/>
          </div>
          <div class="col" align="center">
            Cotação LiteCoin: ${{ round($ltc->price, 2) }}
          </div>
        </div>
        <div class="row">
          <form method="post">
            {{ csrf_field() }}
            <div class="col">
              <input class="form-control" type="text" placeholder="Endereço" id="ltc_endereco">
            </div>
            <div class="col" align="center">
              <input class="btn btn-primary" type="submit" value="Buscar">
            </div>
          </form>
          @isset($ltc_results)
            @forelse ($ltc_results as $result)
                <li>{{ var_dump($result) }}</li>
            @empty
                <p>Empty result</p>
            @endforelse
          @endisset
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>