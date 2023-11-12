<!DOCTYPE html>
<html lang="en">

<?php
include "../connection.php";
include "Header.php";
include "sidebar.php";
?>

    <style>
        .card {
            width: 100px;
            height: 150px;
            background-color: #3498db;
            margin: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            color: white;
            cursor: pointer;
        }
        
        .board {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>

<body>
    <center><h1><font color="green"><b>Memorama números</b></font></h1></center>
    <div class="board" id="board"></div>
    <script>
        const kanjiPairs = [
            { kanji: '一', hiragana: 'いち' },
            { kanji: '二', hiragana: 'に' },
            { kanji: '三', hiragana: 'さん' },
            { kanji: '四', hiragana: 'よん' },
            { kanji: '五', hiragana: 'ご' },
            { kanji: '六', hiragana: 'ろく' },
            { kanji: '七', hiragana: 'なな' },
            { kanji: '八', hiragana: 'はち' },
            { kanji: '九', hiragana: 'きゅう' },
            { kanji: '十', hiragana: 'じゅう' }
        ];

        let cards = [];
        kanjiPairs.forEach(pair => {
            cards.push({ content: pair.kanji, match: pair.hiragana });
            cards.push({ content: pair.hiragana, match: pair.kanji });
        });

        let flippedCards = [];
        let matchedCards = [];
        let lockBoard = false;

        function shuffleArray(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
            return array;
        }

        function createBoard() {
            cards = shuffleArray(cards);
            const board = document.getElementById('board');

            cards.forEach((card, index) => {
                const div = document.createElement('div');
                div.classList.add('card');
                div.dataset.index = index;
                div.textContent = '?';
                div.dataset.match = card.match; // Almacena la correspondencia en hiragana
                div.addEventListener('click', flipCard);
                board.appendChild(div);
            });
        }

        function flipCard() {
            if (lockBoard || flippedCards.length >= 2) return;
            const index = this.dataset.index;
            const cardElement = this;

            cardElement.textContent = cards[index].content;
            flippedCards.push(cardElement);

            if (flippedCards.length === 2) {
                lockBoard = true;

                setTimeout(() => {
                    const [card1, card2] = flippedCards;
                    if (card1.dataset.match === card2.textContent &&
                        card2.dataset.match === card1.textContent) {
                        matchedCards.push(card1, card2);
                        flippedCards = [];

                        if (matchedCards.length === cards.length) {
                            alert('よくできました! Has encontrado todos los kanjis y sus lecturas.');
                        }
                    } else {
                        card1.textContent = '?';
                        card2.textContent = '?';
                        flippedCards = [];
                    }

                    lockBoard = false;
                }, 1000);
            }
        }

        createBoard();
    </script>
        </div>
    <?php
    include "sidenav.php";
    ?>
    <center>
        <a class="btn btn-danger" href="numeros.php" role="button">Volver a los números</a>
    </center>
</body>

</html>
