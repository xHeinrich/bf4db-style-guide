<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="http://bf4db.app/assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Home | BF4DB Style Guide</title>
</head>
<body>
<div id="bf4db">
    <div class="nav-container">
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"
                    aria-controls="header-nav" aria-expanded="false" aria-label="Toggle navigation">
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
    <header>

    </header>
    <div class="body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1>h1. Bootstrap heading</h1>
                        <h2>h2. Bootstrap heading</h2>
                        <h3>h3. Bootstrap heading</h3>
                        <h4>h4. Bootstrap heading</h4>
                        <h5>h5. Bootstrap heading</h5>
                        <h6>h6. Bootstrap heading</h6>


                        <p class="h1">h1. Bootstrap heading</p>
                        <p class="h2">h2. Bootstrap heading</p>
                        <p class="h3">h3. Bootstrap heading</p>
                        <p class="h4">h4. Bootstrap heading</p>
                        <p class="h5">h5. Bootstrap heading</p>
                        <p class="h6">h6. Bootstrap heading</p>

                        <h3>
                            Fancy display heading
                            <small class="text-muted">With faded secondary text</small>
                        </h3>

                        <p class="lead">
                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
                        </p>

                        <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                        <p><del>This line of text is meant to be treated as deleted text.</del></p>
                        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                        <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                        <p><u>This line of text will render as underlined</u></p>
                        <p><small>This line of text is meant to be treated as fine print.</small></p>
                        <p><strong>This line rendered as bold text.</strong></p>
                        <p><em>This line rendered as italicized text.</em></p>

                        <p><abbr title="attribute">attr</abbr></p>
                        <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>

                        <blockquote class="blockquote">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </blockquote>

                        <blockquote class="blockquote">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>

                        <ul class="list-unstyled">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit
                                <ul>
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                </ul>
                            </li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ul>

                        <ul class="list-inline">
                            <li class="list-inline-item">Lorem ipsum</li>
                            <li class="list-inline-item">Phasellus iaculis</li>
                            <li class="list-inline-item">Nulla volutpat</li>
                        </ul>

                        <dl class="row">
                            <dt class="col-sm-3">Description lists</dt>
                            <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                            <dt class="col-sm-3">Euismod</dt>
                            <dd class="col-sm-9">
                                <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                                <p>Donec id elit non mi porta gravida at eget metus.</p>
                            </dd>

                            <dt class="col-sm-3">Malesuada porta</dt>
                            <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                            <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                            <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                            <dt class="col-sm-3">Nesting</dt>
                            <dd class="col-sm-9">
                                <dl class="row">
                                    <dt class="col-sm-4">Nested definition list</dt>
                                    <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                </dl>
                            </dd>
                        </dl>

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
