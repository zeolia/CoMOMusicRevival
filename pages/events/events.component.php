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
    <script src="https://sdk.scdn.co/spotify-player.js"></script>
    <script>
window.onSpotifyWebPlaybackSDKReady = () => {
  const token = 'BQAp9eePebT2uO7Eb-t24BzeQcw5FcdztYAxv9KncEyWv_PFgV85xHSX-MsHjLucXyDldEXH2qUhVkAJG7Tmdd2cu9SdijyGqaB1ftm8uVezY1bYSTVcR8lYedihILvreobG_Lw2ek129DaQ2cclqY7C_DBNfKq1txof0Bo';
  const player = new Spotify.Player({
    name: 'Web Playback SDK Quick Start Player',
    getOAuthToken: cb => { cb(token); }
  });

  // Error handling
  player.addListener('initialization_error', ({ message }) => { console.error(message); });
  player.addListener('authentication_error', ({ message }) => { console.error(message); });
  player.addListener('account_error', ({ message }) => { console.error(message); });
  player.addListener('playback_error', ({ message }) => { console.error(message); });

  // Playback status updates
  player.addListener('player_state_changed', state => { console.log(state); });

  // Ready
  player.addListener('ready', ({ device_id }) => {
    console.log('Ready with Device ID', device_id);
  });

  // Not Ready
  player.addListener('not_ready', ({ device_id }) => {
    console.log('Device ID has gone offline', device_id);
  });

  // Connect to the player!
  player.connect();
};
    </script>
    <title>Events</title>
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

   
</body>
</html>