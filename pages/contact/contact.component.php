<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
    <link rel='stylesheet' type='text/css' href='../../assets/styles/styles.css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
    <nav>
        <div id='header'>
                <img src='../../assets/images/logo.png'>
        </div>
        <ul>
            <li><a href='../../index.php' class='active'>Home</a></li>
            <li><a href='../about/about.component.php'>About</a></li>
            <li><a href='../gallery/gallery.component.php'>Gallery</a></li>
            <li><a href='../events/events.component.php'>Events</a></li>
            <li><a href='../contact/contact.component.php'>Contact</a></li>
        </ul>
    </nav>

    <br><br><br><br><br><br>

    <div class='container'>
        <div class='row'>
            <div class='col s12'>
                        <div class='row'>
                            <form class="col s12" action='contact.php' method='post'>
                                <div class="row">
                                  <div class="input-field col s6">
                                    <input id="first_name" type="text" class="validate">
                                    <label for="first_name">First Name</label>
                                  </div>
                                  <div class="input-field col s6">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Last Name</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="input-field col s12">
                                    <input id='band_name' type="text" class="validate">
                                    <label for="band_name">Band Name</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="input-field col s12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                  </div>
                                </div>
                                <div class='row'>
                                    <div class='input-field col s12'>
                                        <textarea id='textarea' class='materialize-textarea'></textarea>
                                        <label for='textarea'>Enter details</label>
                                    </div>
                                </div>
                                <a class='btn' type='submit' name='submit'>Submit</a>
                              </form>
                        </div>
        </div>
    </div>
</body>
</html>