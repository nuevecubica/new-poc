<?php
$pagename = "Installing Mongo DB";
include_once('../poc_header.php');
?>
<div class="app-holder">
    <article>

        <h1>How to add the Divi Builder to all Custom Post Types with one function</h1>
       <p>
           add this into your functions.php file
       </p>
        <h2>Script</h2>
        <pre>
            <code class="php">
                &lt;?php
                function dpb_all_post_types( $post_types ) {

                    $post_types = get_post_types();

                    if ( $post_types ) { // If there are any custom public post types.

                        foreach ( $post_types as $post_type ) {
                            $post_types[] ='$post_type';

                            return $post_types;
                        }
                    }
                }
                add_filter( 'et_builder_post_types', 'dpb_all_post_types' );
                ?&gt;
            </code>
        </pre>
    </article>
</div>
<script>
    $(document).ready(function () {
        $('pre code').each(function (i, block) {
            hljs.highlightBlock(block);
        });
    });
</script>
<?php include_once('../poc_footer.php'); ?>
