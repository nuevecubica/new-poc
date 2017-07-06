<?php
$pagename = "3d Text";
include_once('../poc_header.php');
?>

<style>
    h1, h2 {
        font-size: 100px;
        position: relative;
    }
    strong {
        font-size: 200px;
    }
    @media (max-width: 680px){
      h1, h2{
            font-size: 55px;
        }

    }
</style>
<div class="app-holder">
    <article>
            <h2 class="superShadow">HEY YOU!!</h2>
        <main>
            <h2>tweenMax.js</h2>
            <h2>and some CSS...</h2>
        </main>
        <div class="spacer"></div>
        <p>Using GSAP tweenMax.js plugin, reapeting 60 times... using css the effect on H2 elements.</p>
        <!-- CODE -->
        <pre>
            <code class="javascript">
    // initializing tweenMax
    var tl = new TimelineMax({repeat: 60, repeatDelay: 1, yoyo: true});
    tl.staggerTo("h2", 0.2, {className: "+=superShadow", top: "-=10px", ease: Power1.easeIn}, "0.3", "start");
            </code>
        </pre>
        <!-- / CODE -->
    </article>
</div>

<?php include_once('../poc_footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.1/TweenMax.min.js"></script>
<script>
    var tl = new TimelineMax({repeat: 60, repeatDelay: 1, yoyo: true});
    tl.staggerTo("h2", 0.2, {className: "+=superShadow", top: "-=10px", ease: Power1.easeIn}, "0.3", "start");
    hljs.initHighlightingOnLoad();

    window.addEventListener('mousemove', function(e) {
        var x = (e.clientX / window.innerWidth * 2) - 1;
        var y = (e.clientY / window.innerHeight * -2) + 1;

        // something awesome
        console.log(x+' and '+y)
    });

</script>
