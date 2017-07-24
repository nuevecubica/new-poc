<?php
$pagename = "Using Mongo DB";
include_once('../poc_header.php');
?>
    <div class="app-holder">
        <article>
            <button class="btn back-tut "><a href="index.php"><i class="fa fa-arrow-circle-o-left"></i> Go back</a></button>
            <h1>Using Mongo DB</h1>
            <div class="sequence-block">
                <div class="bullet-block">
                    <div class="sequence-step">1</div>
                </div>
                <div class="sequence-section">
                    <h4>Start using MongoDB</h4>
                    <p>Remember to start your <strong>mongod</strong> in a terminal window and in another terminal issue the commnad <strong>mongo</strong>.</p>
                    <div class="highlight-sh">
                        <div class="highlight">
                            <div class="pre-sequence-block">
    mongo
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer"></div>
                <div class="sequence-section">
                    <h4>Check which db are you at, move to another and insert a document and created a database.</h4>
                    <p>Type <strong>db</strong> to check at whitch database are you position. this will show you that your are at tse db.</p>
                    <p>you can change to a database by issuing <strong>use learning_mongo</strong> for example</p>
                    <div class="highlight-sh">
                        <div class="highlight">
                            <div class="pre-sequence-block">

    > db
    test
    > use learning_mongo
    switched to db learning_mongo
    > db.cars.insert({"make":"Subaru","make":"Bora"})
    show collections
    > cars


                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer"></div>
                <div class="sequence-section">
                    <h4>Lets create a </h4>
                    <p>Type <strong>db</strong> to check at whitch database are you position. this will show you that your are at tse db.</p>
                    <p>you can change to a database by issuing <strong>use learning_mongo</strong> for example</p>
                    <div class="highlight-sh">
                        <div class="highlight">
                            <div class="pre-sequence-block">

    > db
    test
    > use learning_mongo
    switched to db learning_mongo

                            </div>
                        </div>
                    </div>
                </div>
            </div>//block

        </article>
    </div>
<?php include_once('../poc_footer.php'); ?>