
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="http://bf4db.app/assets/images/favicon.png" >
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Home | BF4DB Style Guide</title>
</head><body>
<div id="bf4db">
    <header>
        <div class="nav-container">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav" aria-controls="header-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="header-nav">
                    <ul class="navbar-nav left">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">BF4 Stats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Servers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ban List</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        some example content
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="social">
            <ul class="list">
                <li class="icon twitter">
                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                </li>
                <li class="icon instagram">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </li>
                <li class="icon discord">

                </li>
            </ul>
        </div>
    </footer>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
