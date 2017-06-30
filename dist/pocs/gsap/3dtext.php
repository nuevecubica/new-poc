<?php include_once('../poc_header.php'); ?>
<style>
    h2{
    font-size:100px;
    position:relative;
    }

    /*
    text-shadow originated from: https://codepen.io/zitrusfrisch
    */
    .superShadow {
    text-shadow:     0 1px 0 hsl(174,5%,80%),
    0 2px 0 hsl(174,5%,75%),
    0 3px 0 hsl(174,5%,70%),
    0 4px 0 hsl(174,5%,66%),
    0 5px 0 hsl(174,5%,64%),
    0 6px 0 hsl(174,5%,62%),
    0 7px 0 hsl(174,5%,61%),
    0 8px 0 hsl(174,5%,60%),

    0 0 5px rgba(0,0,0,.05),
    0 1px 3px rgba(0,0,0,.2),
    0 3px 5px rgba(0,0,0,.2),
    0 5px 10px rgba(0,0,0,.2),
    0 10px 10px rgba(0,0,0,.2),
    0 20px 20px rgba(0,0,0,.3);
    }

    strong{
    font-size:200px;
    }
</style>
<div class="app-holder" style="background-color: lightslategrey">
    <article>
        <main>
            <h2>gsap</h2>
        </main>
    </article>
</div>

<?php include_once('../poc_footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.1/TweenMax.min.js"></script>
<script>
    var tl = new TimelineMax({repeat: 6, repeatDelay: 1, yoyo: true});
    tl.staggerTo("h2", 0.2, {className: "+=superShadow", top: "-=10px", ease: Power1.easeIn}, "0.3", "start")

</script>
