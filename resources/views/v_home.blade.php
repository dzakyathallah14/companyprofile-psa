<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
    <title>Company Profile</title>
  </head>
<body>
    <div id="wrapper">
        <header>
            @include('templates.v_header')
        </header>
        <div class="line">
            <div class="line-left mt-3">
            </div>
            <div class="dot">
                <button type="button" class="btn" data-toggle="modal" data-target="#startModal">Get Started</button>
                @include('templates.v_modal')
            </div>
            <div class="line-right mt-3">
            </div>
        </div>
        
        <div class="container overview text-center text-light p-4">
            <h4>Overviews</h4>
            <p>PT. PENTA SINERGI AZIMA adalah perusahaan swasta nasional yang berkecimpung di bidang Kesehatan Kerja dan Kesehatan Lingkungan untuk menjembatani dan memenuhi kebutuhan dunia industri khususnya dan masyarakat pada umumnya.</p>
        </div>

    </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>