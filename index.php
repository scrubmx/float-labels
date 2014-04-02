<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=devide-width"/>
        <title>Float Label Pattern</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <style>
            * { box-sizing: border-box; }
            body{ font: 14px/1.5 sans-serif; color: #222; margin: 3em; }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <h2>Float Label Pattern Forms</h2>
                    <p class="lead">
                        This new pattern transforms Bootstrap's form fields into modern, fun and user-friendly experiences!<br />
                        <small class="text-muted">Learn more about this pattern at <a href="http://bradfrostweb.com/blog/post/float-label-pattern/" target="blank">http://bradfrostweb.com/blog/post/float-label-pattern/</a></small>
                    </p>

                    <hr />

                    <div class="row">
                        <div class="col-sm-8">

                            <h4 class="page-header">Default Implementation</h4>
                            <form role="form">
                                <div class="form-group float-label-control">
                                    <label for="">Username</label>
                                    <input type="email" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group float-label-control">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group float-label-control">
                                    <label for="">Textarea</label>
                                    <textarea class="form-control" placeholder="Textarea" rows="1"></textarea>
                                </div>
                            </form>


                            <h4 class="page-header">Bottom Labels</h4>
                            <form role="form">
                                <div class="form-group float-label-control label-bottom">
                                    <label for="">Username</label>
                                    <input type="email" class="form-control" placeholder="Username">
                                </div>
                            </form>


                            <h4 class="page-header">Placeholder Overrides</h4>
                            <form role="form">
                                <div class="form-group float-label-control">
                                    <label for="">Email Address</label>
                                    <input type="email" class="form-control" placeholder="What's your email address?">
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <footer>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>
        </footer>

    </body>
</html>


