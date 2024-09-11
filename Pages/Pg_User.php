<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="../music/assets/Images/headset.png">    
    <link rel="stylesheet" href="../Styles/User_info.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuneSYNC</title>
</head>
<body>
    
    <div class="top-header">
        <div class="logo"><img src="../assets/TuneSYNC_logo-2.png" alt=""></div>
    </div>

    <div class="nav">
        <ul>
            <li> <a href="../Pages/Pg_Home.php">Home</a> </li>
            <li> <a href="../Pages/Pg_Collaboration.php">Collaboration</a> </li>
        </ul>
    </div>

    <div class="user_info">
        <div class="information">
            <h2 class="Data-info">Name:</h2>
            <h3 class="info">Vishwas G</h3><br>
            <h2 class="Data-info">Email:</h2>
            <h3 class="info">vishwasganesh32@gmail.com</h3><br>
            <h2 class="Data-info">Phone Number:</h2>
            <h3 class="info">9743167158</h3><br>
            <h2 class="Data-info">Info:</h2>
            <h3 class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta deserunt, quos asperiores repellendus nisi sunt dolorum, praesentium voluptatum ab accusamus perferendis natus. Reprehenderit aliquam obcaecati repudiandae provident, facilis ut ad ipsa quam illo vel minima nostrum eveniet placeat modi aut voluptatibus dolores soluta ab sequi est voluptatum. Animi necessitatibus accusamus quam aliquam, earum, inventore ab, sit ipsum nobis modi asperiores dolorum eos assumenda quae? Dignissimos enim dolorem aut iste maxime itaque sit mollitia, similique, corrupti consequatur odio sequi animi officia quia totam nisi pariatur optio! Deserunt itaque nobis autem molestias quos, id nihil provident temporibus fugit quo et fuga enim?</h3><br><br>
        </div>
    </div>


    <div class="main">
        <div class="player-container">
            <h1>My Playlist</h1>
            <audio id="audio" controls>
                <source id="audioSource" src="" type="audio/mp3">
            </audio>

            <div class="buttons">
                <button onclick="playPrevious()">
                    <img src="https://cdn-icons-png.flaticon.com/512/318/318477.png" alt="">
                </button>
                <button onclick="togglePlayPause()">
                    <img id="playImg" src="https://static.vecteezy.com/system/resources/previews/009/992/357/large_2x/pause-icon-sign-symbol-design-free-png.png" alt="">
                </button>
                <button onclick="playNext()">
                    <img src="https://cdn-icons-png.flaticon.com/512/181/181669.png" alt="">
                </button>
            </div>

            <div class="playlist">
                <ol id="playlist">
                    <li class="playlist-music" id="music1" onclick="playMusic('music1')"><a href="../Audios/Billie Eilish, Khalid - lovely.mp3" style="pointer-events: none">Lovely</a></li>
                    <li class="playlist-music" id="music2" onclick="playMusic('music2')"><a href="../Audios/Ed Sheeran - Shape of You.mp3" style="pointer-events: none">Shape of you</a></li>
                    <li class="playlist-music" id="music3" onclick="playMusic('music3')"><a href="../Audios/Charlie Puth - Attention.mp3" style="pointer-events: none">Attention</a></li>
                    <li class="playlist-music" id="music4" onclick="playMusic('music4')"><a href="../Audios/Halsey - Without Me.mp3" style="pointer-events: none">Without me</a></li>
                </ol>
            </div>
            <h4 id="trackTitle"></h4>
        </div>
    </div>

    <!-- Script JS -->
    <script src="../Scripts/music_player.js"></script>




    <div class="footer">
        <div class="foot-container">
            <img src="../assets/TuneSYNC-1.png" alt="">
            <p>This Website as all the copyright&copy; by TuneSYNC.</p>
            <div class="links">
                <i class="fa fa-instagram" style="font-size:36px"></i>
                <i class="fa fa-github" style="font-size:36px"></i>
                <i class="fa fa-linkedin" style="font-size:36px"></i>
            </div>
        </div>
    </div>


</body>
</html>