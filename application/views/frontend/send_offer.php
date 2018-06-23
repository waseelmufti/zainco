<!-- Main Content -->
<div id="main-wrap">
    <div id="page-warrior">
        <div id="email-pg">
            <div class="container">
                <div class="wrapper">
                    <div class="row">


                        <!-- Threecol Last -->
                        <div class="threecol">
                        </div>
                        <!-- // END Threecol Last -->


                        <!-- sixcol (Content) -->
                        <div class="sixcol block">
                            <div class="pad-20">
                               <h2><span aria-hidden="true" class="icon icon-comments"></span> Send your offer</h2>
                                <p><strong>Send us an offer:</strong><br/><?= $car[0]->registered . ' ' . $car[0]->makeof . ' ' . $car[0]->model?><br/><?= $car[0]->title ?><br/><br/><br/>Fill in the form below and a member of our sales team will be in touch to arrange your test drive.</p>

                                <!--<form action="email.php?modal=1" method="post">-->
                                <?= form_open('enquiry') ?>
                                    <fieldset>
                                       <input type="hidden" name="form_type" value="sendoffer">
                                        <input type="hidden" name="vehicle_id" value="<?= $car[0]->id ?>">
                                        <input type="hidden" name="subject" value="Send your offer: <?= $car[0]->registered . ' ' . $car[0]->makeof . ' ' . $car[0]->model?>">

                                        <div class="row">
                                            <div class="threecol"><label>Name<span class="required">*</span></label></div>
                                            <div class="ninecol last"><input size=40 name="name" value="" placeholder="Name (Required)" type="text" required></div>
                                        </div>

                                        <div class="row">
                                            <div class="threecol"><label>Tel<span class="required">*</span></label></div>
                                            <div class="ninecol last"><input size=40 name="phone" value="" placeholder="Tel (Required)" type="text" required></div>
                                        </div>

                                        <div class="row">
                                            <div class="threecol"><label>Email<span class="required">*</span></label></div>
                                            <div class="ninecol last"><input size=40 name="email" value="" placeholder="Email (Required)" type="text" required></div>
                                        </div>

                                        <div class="row">
                                            <div class="threecol"><label>Message<span class="required">*</span></label></div>
                                            <div class="ninecol last"><textarea rows=5 cols=40 name="message" placeholder="Enquiry (Required)" required></textarea></div>
                                        </div>



                                        <div class="row">
                                            <div class="threecol"><label>Security</label></div>
                                            <div class="ninecol last">

                                                <div id="recaptcha_widget">

                                                </div>

                                                <div class="row">
                                                    <input type="submit" value="Submit Enquiry" class="button black full">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                <?= form_close() ?>

                            </div>
                        </div>
                        <!-- // Sixcol (Content) -->


                        <!-- Threecol Last -->
                        <div class="threecol last">
                        </div>
                        <!-- // END Threecol Last -->


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // Main Content -->
