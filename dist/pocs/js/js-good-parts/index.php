<?php
$pagename = "Google Maps API Js";
include_once( '../../poc_header.php' );
?>

<div class="app-holder">
    <article>
        <h2>Embed Google Maps API Multiple Markers</h2>
        <main>
            <div id="map"></div>
        </main>
        <div class="spacer"></div>
        <h2>Fun Functions</h2>

        <div class="spacer"></div>
        <h2>Script</h2>
        <pre>
            <code class="js">

    function indentity(x) {
        return x;
    }

    console.log(indentity(3)); // 3

    /**
     ++++++++++++++++++++++++++++++++++++++++++
    */

    var identity = function identity(x) {
        return x;
    };
    console.log(indentity(6)); // 6

    function log(arg){
        document.write(arg);
    }

    log(identity(3));

    function funcky(o){
        o = null;
    }
    var x = [1,2,3];
    funcky(x);
    console.log(x); // [1,2,3]

    // SWAP
    function swap(a, b) {
        var temp = a;
        a = b;
        b = temp;
    }
    var  x = 1, y = 2;
    swap(x,y);
    console.log(x); //1

     /**
     * SUM
     */

    function add(a, b) {
        return a + b;
    }

    /**
     * sub
     */

    function sub(a, b) {
        return a - b;
    }

    /**
     * mul
     */

    function mul(a, b) {
        return a * b;
    }

    console.log(add(3, 4)); // 7
    console.log(sub(3, 4)); // -1
    console.log(mul(3, 4)); // 12


    function identityf(x){
        return function(){
            return x;
        }
    }

    var three = identityf(3);

    console.log('var three: '+three()); //3

    function addf(a) {
        return function (b) {
          return add( a , b);
        };
    }

    console.log('esta es la suma: '+addf(3)(4)) // 7


    // Higher-Order function
    // Higher-order functions are functions that receive other functions as parameters, and return other functions as results.
    function liftf(bin) {
        return function (a) {
            return function (b) {
                return bin(a , b);
            }
        }
    }

    console.log('this add '+liftf(add)(3)(4));
    console.log('this multiply '+liftf(mul)(3)(7));

            </code>
        </pre>
    </article>
</div>
<?php
include_once( '../../poc_footer.php' )
?>
<script>
    function indentity(x) {
        return x;
    }

    console.log(indentity(3)); // 3
    /**
     *
     */
    var identity = function identity(x) {
        return x;
    };

    console.log(identity(6)); // 6
    /**
     * writes an argument to the browser
     */
    function log(arg) {
        document.write(arg);
    }

    log(identity(3));

    /**
     *
     */

    function funcky(o) {
        o = null;
    }

    var x = [1, 2, 3];
    funcky(x);
    console.log(x);

    /**
     * SWAP
     */

    function swap(a, b) {
        var temp = a;
        a = b;
        b = temp;

        console.log('el valor de a: ' + a);
    }

    var x = 1, y = 2;
    swap(x, y);
    console.log(x);

    /**
     * SUM
     */

    function add(a, b) {
        return a + b;
    }

    /**
     * sub
     */

    function sub(a, b) {
        return a - b;
    }

    /**
     * mul
     */

    function mul(a, b) {
        return a * b;
    }

    console.log(add(3, 4));
    console.log(sub(3, 4));
    console.log(mul(3, 4));

    /**
     *
     */




    function identityf(x) {
        return function () {
            return x;
        }
    }

    var three = identityf(3);

    console.log('var three: ' + three());


    function addf(a) {
        return function (b) {
            return add(a, b);
        };
    }

    console.log('esta es la suma: ' + addf(3)(4))


    function liftf(bin) {
        return function (a) {
            return function (b) {
                return bin(a , b);
            }
        }
    }

    console.log('this add '+liftf(add)(3)(4));
    console.log('this multiply '+liftf(mul)(3)(7));

</script>

<script>
    $(document).ready(function () {
        $('pre code').each(function (i, block) {
            hljs.highlightBlock(block);
        });
    });
</script>

