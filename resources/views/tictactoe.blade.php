@extends('layouts.app')

@section('title', 'Tic Tac Toe | Nicholas F.')

@section('styles')
    <style>

        .parent {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
        }

.container {
    max-width: fit-content;
    z-index: 10;
}
.spotlight {
    z-index: -2;
}
.wrapper-box {
    z-index: -1;
}

.gameboard {
    max-width: 360px;
}

.center {
    flex-grow: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.row {
    clear: both;
    overflow: hidden;
}

.square {
    float: left;
    height: 100px;
    width: 117px;
    text-align: center;
    font-size: 80px;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    text-shadow: 1px 1px 0px rgba(255,255,255,0.4);
    font-family: fluro-light !important;
}

.bottom {
    border-bottom: 4px solid rgba(255,255,255,0.8);
}

.right {
    border-right: 4px solid rgba(255,255,255,0.8);
}

.left-side {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    max-width: 160px;
}

.right-side {
    font-family: 'Lato';
    flex-grow: 0;
    text-align: center;
    max-width: 340px;
}

.left-side .row {
    font-size: 50px;
    font-family: 'Indie Flower';
    text-shadow: 1px 1px 0px rgba(255,255,255,0.4);
    padding: 5px;
}

.win {
    border: 2px solid green; /* Border hijau */
    color: green; /* Teks hijau */
}

/* Class untuk menandakan kekalahan */
.lose {
    border: 2px solid red; /* Border merah */
    color: red; /* Teks merah */
}


input#restart {
    width: 90px;
    margin: 10px 0 20px 0;
}

div#winner {
    margin-left: 8%;
    margin-top: 20px;
}



    </style>
@endsection

@section('content')
<div class="parent" data-aos="zoom-in">
    
<div class="container flex flex-col sm:flex-row">
    <div class="center">
        <div class="gameboard">
            <div class="row">
                <div class="square bottom right" id="c00"></div>
                <div class="square bottom right" id="c01"></div>
                <div class="square bottom" id="c02"></div>
            </div>
            <div class="row">
                <div class="square bottom right" id="c10"></div>
                <div class="square bottom right" id="c11"></div>
                <div class="square bottom" id="c12"></div>
            </div>
            <div class="row">
                <div class="square right" id="c20"></div>
                <div class="square right" id="c21"></div>
                <div class="square" id="c22"></div>
            </div>
            
        </div>



    </div>
    <div class="sm:ml-32">
        <h1 class="text-white text-5xl mt-8" id="status">Currently Playing</h1>
        <button class="transp-button mt-8" id="restart">Restart</button>
    </div>
</div>
</div>

@endsection

@section('script')
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
        $('div').removeClass('notEmpty');
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
        
        $("#status").text(winner == 1 ? "Nice try, AI Won!" : winner == 0 ? "Yay, You Won!" : winner == -1 ? "Good play, Tie!" : "Currently Playing");
        
        if (winner !== null) {
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
                $("#c" + i + "" + j).text(board[i][j] == false ? "x" : board[i][j] == true ? "o" : "");
                if (board[i][j] == true) {
                  $("#c" + i + "" + j).addClass('notEmpty');
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
    
@endsection