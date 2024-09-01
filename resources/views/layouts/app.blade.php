<!DOCTYPE html>
<html lang="en" class="scroll-smooth"   >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite('resources/css/app.css')

    <title>@yield('title')</title>

    {{-- GSAP --}}
    <script src="https://assets.codepen.io/16327/ScrollSmoother.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/splitting@1.0.7/dist/splitting.min.js"></script>
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.18/bundled/lenis.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://assets.codepen.io/16327/SplitText3.min.js"></script>

    {{-- Bootstrap --}}         
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @yield('styles')
    <style>
        @font-face {
            font-family: 'neue';
            src: url('/fonts/ComicNeue-Regular.ttf') format('truetype');
        }
        @font-face {
            font-family: 'fluro-light';
            src: url('/fonts/fluro-light.otf') format('opentype');
        }
        @font-face {
            font-family: 'dela-suko';
            src: url('/fonts/dela-suko.ttf') format('truetype');
        }
        body::-webkit-scrollbar {
            width: 10px;
            background-color: #000;
        }

        body::-webkit-scrollbar-thumb {
            background-color: #16a34a;
            border-radius: 10px;
            outline: 3px solid #16160e;
            box-shadow: 6px 6px 0px #16160e;
        }
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
        body {
            background-color: #0c1008   
        }
        .wrapper-box {
        height: 100%;
        width: 100%;
        background: transparent;
        position: fixed;
        transform: translate(0%, 0%);
        display: flex;
        align-items: center;
        overflow: hidden;
        }
        .box {
        position: fixed;
        top: 20px;
        background: transparent;
        height: 100%;              
        width: fit-content; 
        text-align: left;   
        margin: 0;
        padding: 0;
        position: relative;
        flex-shrink: 0;
        overflow: hidden;
        }


        .box h1 {
            font-family: dela-suko !important;
            color: black !important; 
            margin: 0;                  
            padding: 0;  
            opacity: 0.2;
            font-size: 250px;
            text-align: center;       
            pointer-events: none;  
        }
        @keyframes spotlightAnimation {
        0% {
            width: 1000px;
            height: 1000px;
            opacity: 0.7;
        }
        50% {
            width: 1200px;
            height: 1200px;
            opacity: 1;
        }
        100% {
            width: 1000px;
            height: 1000px;
            opacity: 0.7;
        }
        }

        .bg-contact {
            background-color: rgba(255, 255, 255, 0.1); 
            backdrop-filter: blur(20px); 
            border-top: 1px solid #fff;
            box-shadow: 0 25px 50px rgba(255, 255, 255, 0.1);
        }
        .spotlight {
        position: fixed;
        background: radial-gradient(circle, rgba(34, 197, 94,0.6) 10%, rgba(0,0,0,0) 50%);
        transform: translate(-50%, -50%);
        pointer-events: none;
        z-index: 0;
        animation: spotlightAnimation 15s infinite ease-in-out;
        filter: blur(110px);
    }
        .sp1 {
            top: -20%;
            left: 20%;
        }
        .sp2 {
            top: -20%;
            left: 80%;
        }
        .sp3 {
            top: 120%;
            left: 50%;
        }
        .sp5 {
            top: -20%;
            left: 50%;
        }

        h1, h2 {
            font-family: fluro-light !important;
        }
        p {
            font-family: neue;
            letter-spacing: 2px;    
            line-height: 1.8 !important;
        }
        
        .transp-button {
            background-color: transparent;
            color: #fff;
            border: 2px solid #fff;
            padding: 5px 20px;
            border-radius: 5px;
            transition: all 0.5s ease;
        }

        .transp-button:hover {
            background-color: transparent;
            color: #22c55e;
            border: 2px solid #22c55e;
            padding: 10px 25px;
        }
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body{
    height: 100%;
    width: 100%;
}

nav{
    z-index: 999;
    width: 300px;
    padding: 20px 10px;
    background-color: rgba(255, 255, 255, 0.1); 
    backdrop-filter: blur(20px); 
    border: 1px solid #fff;
    box-shadow: 0 25px 50px rgba(255, 255, 255, 0.1);
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    rotate: 90deg;
    position: fixed;
    top: 45%;
    /* transform: translate(-50%, 0); */
    border-radius: 10px;
    margin-left: -7.8vw;
}

a{
    rotate: -90deg;
    padding: 10px;
    text-decoration: none;
    color: white;
    transition: all .4s ease-in-out;
}

a:hover{
    transform: scale(1.2);
    color:#22c55e;
}

@media (max-width: 600px) {
    nav{
        rotate: 0deg;
        top: 0;
        position: fixed;
        bottom: 85vh;
        margin: 5vw;
        width: 90vw;

    }
    a{
        rotate: 0deg;

    }

    a:hover{
        transition: scale(1);
        
    }
    a:focus{
        transform: scale(1.2);
    }
}

    </style>
</head>
<body>
    <script>
        AOS.init();
    </script>
    <div class="spotlight sp1"></div>
    <div class="spotlight sp2"></div>
    <div class="spotlight sp3"></div>
    <div class="spotlight sp5"></div>


    <div class="wrapper-box">
        <div class="box">
          <h1>xeesoxee<br>seorina</h1>
        </div>
        <div class="box">
          <h1>skuukzy<br>dlwlrma</h1>
        </div>
        <div class="box">
          <h1>geewonii<br>jennierubyjane</h1>
        </div>
        <div class="box">
          <h1>renebaebae<br>yoona__lim</h1>
        </div>
        <div class="box">
          <h1>katarinabluu<br>imwinter</h1>
        </div>
        <div class="box">
          <h1>_chaechae_1<br>iamfinethankyouandryu</h1>
        </div>
      </div>

      <nav id="navbar" data-aos="fade-up">
        <a href="{{ url('/') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg>
          </i></a>
        <a href="{{ url('/projects') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
          </svg>
          </a>
        <a href="{{ url('/tictactoe') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
          </svg>
          </a>
    </nav>

    @yield('content')
    @yield('script')
        {{-- endless loop --}}

        <style>
            .o {
                color: red;
                font-weight: bold;
            }
            .x {
                color: green;
                font-weight: bold;
            }
        </style>
        
        <script>
        
        var board = [
            [null, null, null],
            [null, null, null],
            [null, null, null]
        ]
        
        var myMove = false;
        var score1 = 0;
        var score2 = 0;
        var gameOver = false; // Tambahkan variabel kontrol untuk melacak status permainan
        
        if (myMove) {
            makeMove();
        }
        
        function restartGame() {
            board = [
                [null, null, null],
                [null, null, null],
                [null, null, null]
            ];
            myMove = false;
            gameOver = false; // Reset status permainan saat restart
            $('div').removeClass('notEmpty o x');
            updateMove();
        }
        
        $(document).ready(function() {
            $(".square").click(function() {
        
                if($(this).hasClass('notEmpty') || gameOver) { // Cegah klik jika permainan sudah selesai
                    console.log('notEmpty or gameOver');
                } else {
                    var cell = $(this).attr("id")
                    var row = parseInt(cell[1])
                    var col = parseInt(cell[2])
                    $(this).addClass('notEmpty');
                    if (!myMove) {
                        board[row][col] = false;
                        myMove = true;
                        updateMove();
                        if (!gameOver) { // Hanya buat AI bergerak jika permainan belum selesai
                            makeMove();
                        }
                    }
                }
            });
            $("#restart").click(restartGame);
        });
        
        function updateMove() {
            updateButtons();
            
            var winner = getWinner(board);
            
            $("#status").text(winner == 1 ? "Skibidi, You Lose!" : winner == 0 ? "SIUUU, You Won!" : winner == -1 ? "Nice try, Tie!" : "Currently Playing");
            
            if (winner !== null) { // Jika ada pemenang, set gameOver menjadi true
                gameOver = true;
            }
        }
        
        function getWinner(board) {
           
            // Check if someone won
            vals = [true, false];
            var allNotNull = true;
            for (var k = 0; k < vals.length; k++) {
                var value = vals[k];
                
                // Check rows, columns, and diagonals
                var diagonalComplete1 = true;
                var diagonalComplete2 = true;
                for (var i = 0; i < 3; i++) {
                    if (board[i][i] != value) {
                        diagonalComplete1 = false;
                    }
                    if (board[2 - i][i] != value) {
                        diagonalComplete2 = false;
                    }
                    var rowComplete = true;
                    var colComplete = true;
                    for (var j = 0; j < 3; j++) {
                        if (board[i][j] != value) {
                            rowComplete = false;
                        }
                        if (board[j][i] != value) {
                            colComplete = false;
                        }
                        if (board[i][j] == null) {
                            allNotNull = false;
                        }
                    }
                    if (rowComplete || colComplete) {
                        return value ? 1 : 0;
                    }
                }
                if (diagonalComplete1 || diagonalComplete2) {
                    return value ? 1 : 0;
                }
            }
            if (allNotNull) {
                return -1;
            }
            return null;
        }
            
        function updateButtons() {
            for (var i = 0; i < 3; i++) {
                for (var j = 0; j < 3; j++) {
                    var square = $("#c" + i + "" + j);
                    square.removeClass('o x'); // Hapus kelas lama
        
                    if (board[i][j] == false) {
                        square.text("x").addClass('x');
                    } else if (board[i][j] == true) {
                        square.text("o").addClass('o');
                    } else {
                        square.text("");
                    }
                }
            }
        }
        
        function makeMove() {
            setTimeout(function() {
                if (!gameOver) { // Pastikan AI hanya bergerak jika permainan belum selesai
                    board = minimaxMove(board);
                    console.log(numNodes);
                    console.log('selected');
                    console.log(board);
                    myMove = false;
                    updateMove();
                }
            }, 600);
        }
        
        function minimaxMove(board) {
            numNodes = 0;
            return recurseMinimax(board, true)[1];
        }
        
        var numNodes = 0;
        
        function recurseMinimax(board, player) {
            numNodes++;
            var winner = getWinner(board);
            if (winner != null) {
                switch(winner) {
                    case 1:
                        // AI wins
                        return [1, board]
                    case 0:
                        // opponent wins
                        return [-1, board]
                    case -1:
                        // Tie
                        return [0, board];
                }
            } else {
                // Next states
                var nextVal = null;
                var nextBoard = null;
                
                for (var i = 0; i < 3; i++) {
                    for (var j = 0; j < 3; j++) {
                        if (board[i][j] == null) {
                            board[i][j] = player;
                            var value = recurseMinimax(board, !player)[0];
                            if ((player && (nextVal == null || value > nextVal)) || (!player && (nextVal == null || value < nextVal))) {
                                nextBoard = board.map(function(arr) {
                                    return arr.slice();
                                });
                                nextVal = value;
                            }
                            board[i][j] = null;
                        }
                    }
                }
                return [nextVal, nextBoard];
            }
        }
        
        updateMove();
        
        </script>
                    
</body>
</html>