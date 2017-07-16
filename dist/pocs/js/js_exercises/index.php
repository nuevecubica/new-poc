<?php
$pagename = "JS Sanbox";
include_once('../../poc_header.php');
?>
<style>
    .text-box {
        background-color: rgba(0, 0, 0, .8);
        color: #00cc66;
        min-height: 100px;
        min-width: 300px;
        border: dashed 2px white;
        margin: 10px;
        padding: 10px;
    }
</style>
<div class="app-holder">
    <h2>Using rel as an identifier for jS</h2>
    <article>
        <button class="btn btn-warning" rel="btn-click">this button</button>
        <button class="btn btn-danger" rel="btn-clear">clear</button>
        <div class="text-box" rel="box"></div>
        <pre>
                <code class="js">
    // HTML
        &lt;button class="btn btn-warning" rel="btn-click"&gt;this button&lt;/button&gt;
        &lt;button class="btn btn-danger" rel="btn-clear"&gt;clear&lt;/button&gt;
        &lt;div class="text-box" rel="box"&gt;&lt;/div&gt;
    // SCRIPT
  $(document).ready(function () {

        var boxtext =  'you click me';

        $("[rel *='btn-click']").click(function () {
            $("[rel *='box']").append(' - ', boxtext);

        });

        $("[rel *='btn-clear']").click(function () {
            $("[rel *='box']").text('');

        });

    });
                </code>
            </pre>
    </article>
</div>

<?php include_once('../../poc_footer.php'); ?>
<script>
    $(document).ready(function () {

        var boxtext =  'you click me';

        $("[rel *='btn-click']").click(function () {
            $("[rel *='box']").append(' - ', boxtext);

        });

        $("[rel *='btn-clear']").click(function () {
            $("[rel *='box']").text('');

        });

        $('pre code').each(function (i, block) {
            hljs.highlightBlock(block);
        });
    });
</script>
