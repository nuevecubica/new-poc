<?php
$pagename = "3d Game";
include_once('../../poc_header.php');
?>
<section>
    <main class="app-holder">
        <div id="game_three">
            <div class="game-holder" id="gameHolder">
                <div class="header">
                    <div class="spacer"></div>
                    <div class="score" id="score">
                        <div class="score__content" id="level">
                            <div class="score__label">level</div>
                            <div class="score__value score__value--level" id="levelValue">1</div>
                            <svg class="level-circle" id="levelCircle" viewbox="0 0 200 200">
                                <circle id="levelCircleBgr" r="80" cx="100" cy="100" fill="none" stroke="#d1b790" stroke-width="24px" />
                                <circle id="levelCircleStroke" r="80" cx="100" cy="100" fill="none" #f25346 stroke="#68c3c0" stroke-width="14px" stroke-dasharray="502" />
                            </svg>
                        </div>
                        <div class="score__content" id="dist">
                            <div class="score__label">distance</div>
                            <div class="score__value score__value--dist" id="distValue">000</div>
                        </div>
                        <div class="score__content" id="energy">
                            <div class="score__label">energy</div>
                            <div class="score__value score__value--energy" id="energyValue">
                                <div class="energy-bar" id="energyBar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="world" id="world"></div>
               <div class="message message--replay" id="replayMessage">Click to Replay</div>
                <div class="message message--instructions" id="instructions">Grab the blue pills<span>avoid the red ones</span></div>
            </div>
    </main>
</section>

<script type="text/javascript" src="<?php echo $thisServer; ?>assets/scripts/vendor/greensock/TweenMax.min.js"></script>
<script type="text/javascript" src="<?php echo $thisServer; ?>assets/scripts/vendor/three/three.min.js"></script>
<script type="text/javascript" src="assets/js/game.js"></script>
<?php include('../../poc_footer.php') ?>
