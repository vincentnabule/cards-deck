<?php include_once 'inc/header.php' ?>

<main>
    <section class="row row-cols-2 row-cols-sm-2 row-cols-lg-4 mb-2 mt-2">
        <!-- Normal Cards -->
        <section class="col">
            <div class="h4">Cards A, 1...10</div>
            <div class="cards card shadow p-1 rounded">
                <img src="assets/images/cards/heart5.png" alt="sp">
            </div>
        </section>
        <!-- Special Cards -->
        <section class="col">
            <div class="h4">Cards J, G, K</div>
            <div class="cards card shadow p-1 rounded">
                <img src="assets/images/cards/heartk.png" alt="sp">
            </div>
        </section>
        <!-- Flip -->
        <section class="col">
            <div class="h4">Card Flip</div>
            <div class="cards p-1 flip_it">
                <div class="my_card">
                    <div class="back_card cardhcards">
                        <img src="assets/images/Backside/card-back.jpg" alt="sp" class="rounded shadow">
                    </div>
                    <div class="front_card cardbcards">
                        <img src="assets/images/cards/heart1.png" alt="sp" class="rounded shadow">
                    </div>
                </div>
            </div>
        </section>
        <!-- Back side -->
        <section class="col">
            <div class="h4">Back Side</div>
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2">
                <div class="col">
                    <div class="cards card shadow p-1 rounded d-flex justify-content-center">
                        <img src="assets/images/Backside/back.png" alt="" id="0a">
                    </div>
                </div>
                <div class="col">
                    <div class="hcard mt-1 mx-auto di-block">
                        <button class="p-1 border-0"><img src="assets/images/Backside/card-orange.png" alt="" width="40px" height="60px" id="2a" onclick="change_bg('0a', '2a')"></button>
                        <button class="p-1 border-0"><img src="assets/images/Backside/card-back.jpg" alt="" width="40px" height="60px" id="1a" onclick="change_bg('0a', '1a')"></button>
                        <button class="p-1 border-0"><img src="assets/images/Backside/card-red.jpg" alt="" width="40px" height="60px" id="3a" onclick="change_bg('0a', '3a')"></button>
                        <button class="p-1 border-0"><img src="assets/images/Backside/card-blue.jpg" alt="" width="40px" height="60px" id="4a" onclick="change_bg('0a', '4a')"></button>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- Draw -->
    <section class="card">
        <div class="h1 text-center">Card Playing</div>
        <div class="d-flex justify-content-between">
            <div class="cards card shadow p-1 rounded mx-auto" onclick="generate();">
                <img src="assets/images/Backside/card-blue.jpg" alt="black">
            </div>
            <section class="mx-auto" id="data_here">
            </section>
        </div>
        <div class="d-flex justify-content-center mt-3 mb-2">
            <button class="btn btn-primary w-50 btn-sm" onclick="generate();">Draw Card</button>
        </div>
    </section>

    <!-- All Cards -->
    <section>
        <div class="h1 text-center">All Deck Cards</div>
        <div class="row row-cols-2 row-cols-sm-2 row-cols-lg-4">
            <?php
            $suites = ['spade', 'diamond', 'clubs', 'heart'];
            $symbol = ['j', 'q', 'k'];
            $cards = 0;
            for ($i = 0; $i < count($suites); $i++) {
            ?>
                <div class="col">
                    <div class="h1 text-center text-dark mx-auto bg-light pb-2"><?= ucwords($suites[$i]) ?>&#160;<img src="assets/images/<?= $suites[$i] ?>.svg" alt="<?= $suites[$i] ?>.svg" width="40px" heght="60px"></div>
                    <?php
                    for ($j = 1; $j < 14; $j++) {
                        $cards += 1;
                        if ($j <= 10) {
                            if ($j == 1) {
                                $face = 'A';
                            } else {
                                $face = $j;
                            }
                    ?>

                            <div class="cards card rounded shadow p-1 m-2 mx-auto">
                                <img src="assets/images/cards/<?= $suites[$i] . $j ?>.png" alt="<?= $suites[$i] . $j ?>.png">
                            </div>
                        <?php
                        } else {
                            if ($j == 11) {
                                $face = 'j';
                            } else if ($j == 12) {
                                $face = 'q';
                            } else if ($j == 13) {
                                $face = 'k';
                            }
                        ?>
                            <div class="cards card rounded shadow p-1 m-2 mx-auto">
                                <img src="assets/images/cards/<?= $suites[$i] . $face ?>.png" alt="<?= $suites[$i] . $face ?>.png">
                            </div>
                    <?php
                        }
                    }
                    ?>

                </div>
            <?php
            }
            ?>
        </div>
        <div class="h3 text-info text-center">Total Cards: <?= $cards ?></div>
    </section>
</main>

<?php include_once 'inc/footer.php' ?>