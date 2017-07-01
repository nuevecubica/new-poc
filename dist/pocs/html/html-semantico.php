<?php
$pagename = "Html Semantico";
include_once('../poc_header.php');
?>
<div class="app-holder">
    <article>
        <h1>What are HTML5's Semantic Elements</h1>
        <p>First let’s define Semantics as the study of the meaning of words and phrases for a language.</p>
        <p>Thus, we can say that <strong>Semantic Elements </strong>are Elements with a meaning.</p>
        <p> A semantic element describes its meaning to both the browsers and the developers.</p>
        <p> For example:</p>
        <p> A <em>non-semantic element </em> &nbsp;will be the <strong>&lt;div&gt;</strong> or <strong>&lt;span&gt;</strong> element, this elements don’t tell anything about the its contents. </p>
        <p> A <em>semantic element</em> &nbsp;like <strong>&lt;form&gt;</strong> and <strong>&lt;article&gt;</strong> clearly defines its contents.</p>
        <h3>New semantic elements in HTML5</h3>
        <ul class="no-bullet"
        ">
        <li><strong>&lt;article&gt;</strong><br>
            <p><em>An article should make sense on its own, and it should be possible to read it independently from the rest of the web site</em></p>
        </li>
        <li><strong>&lt;aside&gt;</strong><br>
            <p><em>The aside content should be related to the surrounding content.</em></p>
        </li>
        <li><strong>&lt;details&gt;</strong><br>
            <p><em>Defines additional details that the user can view or hide</em></p>
        </li>
        <li><strong>&lt;figcaption&gt;</strong><br>
            <p><em>Defines a caption for a <strong>&lt;figure&gt;</strong> element</em></p>
        </li>
        <li><strong>&lt;figure&gt;</strong><br>
            <p><em>Specifies self-contained content, like illustrations, diagrams, photos, code listings, etc.</em></p>
        </li>
        <li><strong>&lt;footer&gt;</strong><br>
            <p><em>Defines a footer for a document or section</em></p>
        </li>
        <li><strong>&lt;header&gt;</strong><br>
            <p><em>Specifies a header for a document or section</em></p>
        </li>
        <li><strong>&lt;main&gt;</strong><br>
            <p><em>Specifies the main content of a document</em></p>
        </li>
        <li><strong>&lt;mark&gt;</strong><br>
            <p><em>Defines marked/highlighted text</em></p>
        </li>
        <li><strong>&lt;nav&gt;</strong><br>
            <p><em>Defines navigation links</em></p>
        </li>
        <li><strong>&lt;section&gt;</strong><br>
            <p><em>Defines a section in a document</em></p>
        </li>
        <li><strong>&lt;summary&gt;</strong><br>
            <p><em>Defines a visible heading for a <strong>&lt;details&gt;</strong> element</em></p>
        </li>
        <li><strong>&lt;time&gt;</strong><br>
            <p><em> Defines a date/time</em></p>
        </li>
        </ul>
        <div class="spacer"></div>
        <p>here is an exmple with the above semantic elements:</p>
        <div class="spacer"></div>
    </article>
    <!-- SEMANTIC HTML5 -->


    <!-- SEMANTIC HTML5 -->
    <!-- CODE -->
    <pre>
        <code class="xml hljs">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"&gt;
    &lt;meta http-equiv="X-UA-Compatible" content="ie=edge"&gt;
    &lt;title&gt;:: ::&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;!-- MAIN HEADER --&gt;
&lt;header&gt;
    &lt;h1&gt;Main Title&lt;/h1&gt;
    &lt;p&gt;description&lt;/p&gt;
&lt;/header&gt;
&lt;!-- / MAIN HEADER --&gt;
&lt;!-- MAIN NAV --&gt;
&lt;nav&gt;
    &lt;a href="/html/"&gt;HTML&lt;/a&gt; |
    &lt;a href="/css/"&gt;CSS&lt;/a&gt; |
    &lt;a href="/js/"&gt;JavaScript&lt;/a&gt; |
    &lt;a href="/jquery/"&gt;jQuery&lt;/a&gt;
&lt;/nav&gt;
&lt;!-- / MAIN NAV --&gt;
&lt;!-- INTRODUCTION SECTION --&gt;
&lt;section&gt;
    &lt;p&gt;Introduction Section&lt;/p&gt;i
&lt;/section&gt;
&lt;!-- / INTRODUCTION SECTION --&gt;
&lt;!-- BLOG SECTION --&gt;
&lt;section&gt;
    &lt;article&gt;
        &lt;header&gt;
            &lt;h2&gt;Article Title&lt;/h2&gt;
            &lt;p&gt;date: &lt;time datetime="2008-02-14 20:00"&gt;Article date&lt;/time&gt;&lt;/p&gt;
        &lt;/header&gt;
        &lt;main&gt;
            &lt;p&gt;this will be the content, &lt;mark&gt;remember&lt;/mark&gt; to read it all.&lt;/p&gt;
            &lt;figure&gt;
                &lt;img src="pic_mountain.jpg" alt="The Pulpit Rock" width="304" height="228"&gt;
                &lt;figcaption&gt;Fig1. - The Pulpit Rock, Norway.&lt;/figcaption&gt;
            &lt;/figure&gt;
        &lt;/main&gt;
        &lt;footer&gt;
            &lt;p&gt;Posted by: Hege Refsnes&lt;/p&gt;
            &lt;p&gt;Contact information: &lt;a href="mailto:someone@example.com"&gt;
                someone@example.com&lt;/a&gt;.&lt;/p&gt;
        &lt;/footer&gt;
    &lt;/article&gt;
&lt;/section&gt;
&lt;!-- / BLOG SECTION --&gt;
&lt;!-- MAIN ASIDE --&gt;
&lt;aside&gt;
    &lt;h4&gt;Aside title&lt;/h4&gt;
    &lt;p&gt;Other Related information&lt;/p&gt;
&lt;/aside&gt;
&lt;!-- / MAIN ASIDE --&gt;
&lt;footer&gt;
    &lt;details&gt;
        &lt;summary&gt;Copyright 1999-2014.&lt;/summary&gt;
        &lt;p&gt; - by X Data. All Rights Reserved.&lt;/p&gt;
        &lt;p&gt;All content and graphics on this web site are the property of the company X Data.&lt;/p&gt;
    &lt;/details&gt;
&lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
    <!-- / CODE -->
    <div class="spacer"></div>
</div>

<?php include_once('../poc_footer.php'); ?>
<script>
    hljs.initHighlightingOnLoad();
</script>
