<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
    <link rel='stylesheet' type='text/css' href='assets/styles/styles.css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Como Music</title>
</head>
<body>
    <nav>
        <div id='header'>
            <img src='assets/images/logo.png'>
        </div>
        <ul>
            <li><a href='index.php' class='active'>Home</a></li>
            <li><a href='pages/about/about.component.php'>About</a></li>
            <li><a href='pages/gallery/gallery.component.php'>Gallery</a></li>
            <li><a href='pages/events/events.component.php'>Events</a></li>
            <li><a href='pages/contact/contact.component.php'>Contact</a></li>
        </ul>
    </nav>

    <?php echo 'test' ?>
    
    <div class='parallax1'>
        <div class='add-height valign-wrapper'>
            <h1 class='center'>Welcome to the new home of Como Music!</h1>
        </div>
    </div>


   <div class='section white'>
            <div class='row'>
                <div class='col s12 m4 l4'>
                    <div class='icon-block'>
                        <h2 class='center'><i class='material-icons medium'>library_music</i></h2>
                        <h4 class='center'>Header</h4>
                        <p class='light'>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                             Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque 
                             penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                              ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                               Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                                 pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                  eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                   Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                        </p>
                    </div>
                </div>
                <div class='col s12 m4 l4'>
                    <div class='icon-block'>
                        <h2 class='center'><i class='material-icons medium'>linked_camera</i></h2>
                        <h4 class='center'>Header</h4>
                        <p class='light'>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque 
                                penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                 ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                  Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                   rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                                    pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                     eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                      Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                        </p>
                    </div>
                    
                </div>
                <div class='col s12 m4 l4'>
                    <div class='icon-block'>
                        <h2 class='center'><i class='material-icons medium'>event</i></h2>
                        <h4 class='center'>Header</h4>
                        <p class='light'>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque 
                                penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                 ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                  Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                   rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                                    pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                     eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                      Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                        </p>
                    </div>
                    
                </div>
            </div>
   </div>

   <div class='parallax2'></div>

   <div class='section'>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,</p> 
   </div>
   
         

<script>
$(window).on('scroll', function() {
    if ($(window).scrollTop()) {
        $('nav').addClass('switch');
    } else {
        $('nav').removeClass('switch');
    }
})
</script>
<script src='assets/scripts/script.js'></script>
</body>
</html>