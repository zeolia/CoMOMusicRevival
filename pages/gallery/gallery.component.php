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
    <title>Gallery</title>
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
            <li><a href='../artists/artist.component.php'>Artists</a></li>
            <li><a href='../events/events.component.php'>Events</a></li>
            <li><a href='../contact/contact.component.php'>Contact</a></li>
        </ul>
    </nav>

    <div class='container'>
        <div class='row'>
            <div class='col s12 m4 l4'>
                <img class="materialboxed" class='responsive-img' src="../../assets/images/gallery/IMG_6711.JPG">
            </div>
            <div class='col s12 m4 l4'>
                <img class="materialboxed" class='responsive-img' src="../../assets/images/gallery/IMG_6711.JPG">
            </div>
            <div class='col s12 m4 l4'>
                <img class="materialboxed" class='responsive-img' src="../../assets/images/gallery/IMG_6711.JPG">
            </div>
        </div>
    </div>


<script>
    $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
</script>
</body>
</html>