<?php
$pagename = "HTML Select";
include('../../poc_header.php');
?>
<link rel="stylesheet" href="assets/css/style6.css">
<script type="text/javascript" src="assets/scripts/modernizr.custom.63321.js"></script>
<div class="app-holder">
    <article>
        <div>
            <section class="main clearfix">

                    <p>In this example we use a gutter of 5 and stack the items with a slight offset</p>


                    <div class="holder col-md-4">
                        <select id="cd-dropdown" name="cd-dropdown" class="cd-select">
                            <option value="-1" selected>Choose your animal</option>
                            <option value="1" class="icon-monkey">Monkey</option>
                            <option value="2" class="icon-bear">Bear</option>
                            <option value="3" class="icon-squirrel">Squirrel</option>
                            <option value="4" class="icon-elephant">Elephant</option>
                        </select>
                    </div>

                <div class="holder col-md-4">
                    <select id="cd-dropdown6" class="cd-select">
                        <option value="-1" selected>Choose your prize</option>
                        <option value="1" class="icon-camera">Camera</option>
                        <option value="2" class="icon-diamond">Diamonds</option>
                        <option value="3" class="icon-rocket">Spaceship</option>
                        <option value="4" class="icon-star">Star</option>
                        <option value="5" class="icon-clock">Time</option>
                    </select>
                </div>
                <div class="holder col-md-4">
                    <select id="cd-dropdown2" class="cd-select">
                        <option value="-1" selected>Choose a network to add</option>
                        <option value="1" class="icon-google-plus">Google Plus</option>
                        <option value="2" class="icon-facebook">Facebook</option>
                        <option value="3" class="icon-twitter">Twitter</option>
                        <option value="4" class="icon-github">GitHub</option>
                    </select>
                </div>

        </section>
</div>
</article>
</div>


<?php
include('../../poc_footer.php');
?>
<script type="text/javascript" src="assets/scripts/jquery.dropdown.js"></script>
<script type="text/javascript">

    $(function () {

        $('#cd-dropdown').dropdown({
            gutter: 5,
        });
        $('#cd-dropdown6').dropdown({
            gutter: 5,
            stack: false,
            delay: 100,
            slidingIn: 100
        });
        $( '#cd-dropdown2' ).dropdown( {
            gutter : 5,
            delay : 100,
            random : true
        } );

    });

</script>