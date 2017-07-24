<?php
$pagename = "Installing Mongo DB";
include_once('../poc_header.php');
?>
<div class="app-holder">
    <article>
        <button class="btn back-tut "><a href="index.php"><i class="fa fa-arrow-circle-o-left"></i> Go back</a></button>
        <h1>Installing MongoDB with Brew in OSX Sierra </h1>
        <div class="sequence-block">
            <div class="bullet-block">
                <div class="sequence-step">1</div>
            </div>
            <div class="sequence-section">
                <h4>Update Hombrew</h4>
                <p>Issue the following command in a system shell:</p>
                <div class="highlight-sh">
                    <div class="highlight">
                        <div class="pre-sequence-block">
    brew update
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sequence-block">
            <div class="bullet-block">
                <div class="sequence-step">2</div>
            </div>
            <div class="sequence-section">
                <h4>Install MongoDB</h4>
                <p>To install the MongoDB binaries, issue the following command in a system shell. This will install MongoDB at usr/local/bin.</p>
                <div class="highlight-sh">
                    <div class="highlight">
                        <div class="pre-sequence-block">
    brew install mongodb
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sequence-block">
            <div class="bullet-block">
                <div class="sequence-step">3</div>
            </div>
            <div class="sequence-section">
                <h4>Create the data directory</h4>
                <p> Before you can start MongoDB for the first time, you have to create the directory to which the  <strong>mongod</strong>
                    process will write data.</p><p> By default Mongo DB uses <strong>/data/db</strong> directory. In your system shell go to <strong>usr/local/bin</strong> and
                    issue the following statements.</p>
                <div class="highlight-sh">
                    <div class="highlight">
                        <div class="pre-sequence-block">
    sudo mkdir -p /data/db
    sudo chmod 777 /data
    sudo chmod 777 /data/db
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sequence-block">
            <div class="bullet-block">
                <div class="sequence-step">4</div>
            </div>
            <div class="sequence-section">
                <h4>Run MongoDB</h4>
                <p>Just use the command <strong>mongod (mongo deamon)</strong></p>
                <p>Mongo DB will finish its setup and will initialize its deamon. </p>
                <div class="highlight-sh">
                    <div class="highlight">
                        <div class="pre-sequence-block">
    mongod
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sequence-block">
            <div class="bullet-block">
                <div class="sequence-step">4</div>
            </div>
            <div class="sequence-section">
                <h4>Start using MongoDB</h4>
                <p>Open another terminal window with cmd+n use mongo to run MongoDB</p>
                <div class="highlight-sh">
                    <div class="highlight">
                        <div class="pre-sequence-block">
    mongo
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
<?php include_once('../poc_footer.php'); ?>
