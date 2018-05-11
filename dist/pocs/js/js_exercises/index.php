<?php
$pagename = "JS Sanbox";
include_once( '../../poc_header.php' );
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
    <article>
        <h2>HTTP2 Loading Javascript</h2>
        <p>Loading Javascript in three methods:</p>
        <ul>
            <li>Right Away</li>
            <li>Asynchronous</li>
            <li>Deferred</li>
        </ul>
        <h4>Right Away Loading</h4>
        <p>If we load it right away, the HTML will parse until it encounters a reference to a JavaScript, then the JavaScript file is loaded, executed and then we continue the HTML parsing. This is a JavaScript render blocking.</p>
        <h4>Asynchronous Loading</h4>
        <p>If we load our JavaScript file asynchronously by adding the async attribute, the file will be downloaded alongside the HTML and render blocking only kicks in when the script is executed.</p>
        <h4>Defer</h4>
        <p>If we defer the script, loading and execution of the file, even if it's referenced in the head, only happens when everything else is loaded.</p>
        <pre>
                <code class="html">
                    // Right away

                     &lt;script src="mijsfile.js"&gt;&lt;/script&gt;

                    // Asynchronous

                     &lt;script src="mijsfile.js" async &gt;&lt;/script&gt;

                     // Defer

                     &lt;script src="mijsfile.js" defer &gt;&lt;/script&gt;
                </code>
        </pre>

    </article>
    <article>
        <h2>Javascript DATA Types</h2>
        <p>The data types in javascript are:</p>
        <ul>
            <li>Numeric</li>
            <li>String</li>
            <li>Boolean</li>
            <li>null</li>
            <li>undefined</li>
            <li>Symbol</li>
        </ul>
        <h4>Numeric type</h4>
        <p>The numeric data type handles numbers. To store a numeric data type in a variable, simply assign a number to it. It can be any regular number, so one, two, three, 56, 3,847. It can be 3.1492 etc. It can be negative number, so minus one or minus 10 or minus 56.39, or minus one hundred billion.</p>
        <h4>String type</h4>
        <p> The string data type handles strings of letters and symbols, what we commonly refer to as words and sentences. To store a string data type in a variable, wrap your string of text in straight quotation marks. You can use single or double quotes. Just make sure you use the same one at the beginning and at the end.</p>
        <p>escape the string quotes by placing a backslash in front of each of them. This tells the browser, this straight quote is not part of the script. Treat it like regular text.</p>
        <h4>Boolean type</h4>
        <p> The Boolean data type handles the binary true/false. To store a Boolean data type in a variable, type in true or false without quotation marks.</p>
        <p>These are JavaScript commands, and will be understood by the browser.</p>
        
        <pre>
                <code class="js">
                    // Numeric data type

                    var number      = 1;
                    var integer     = 1.2334467;
                    var negNumber   = -1;
                    var negInteger  = -34.45734567;

                    // String

                    var string          = "Strings are words and sentences.";
                    var mixQuote        = 'here are the "Quotes"...';
                    var scapedQuotes    = "can also be \"scaped\".";

                    // Boolean

                    var theSunIsWarm            = true;
                    var theMoonIsMadeOfCheese   = false;

                </code>
        </pre>
    </article>
</div>

<?php include_once( '../../poc_footer.php' ); ?>
<script>
    $(document).ready(function () {

        var boxtext = 'you click me';

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
