<!DOCTYPE html>
<html lang="zxx" class="js">

<!-- HEAD -->
<?php $this->load->view('backend/includes/head'); ?>
<!-- /HEAD -->

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">

            <!-- /SidBar -->
            <?php $this->load->view('backend/includes/sidebar'); ?>
            <!-- /SidBar -->
            <!-- wrap @s -->
            <div class="nk-wrap ">


                <!-- /Header -->
                <?php $this->load->view('backend/includes/header'); ?>
                <!-- /Header -->

                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block nk-block-lg">

                                        <div class="card card-preview">
                                            <div class="card-inner">


                                                <div class="nk-block">
                                                    <div class="nk-block-head">
                                                        <h5 class="title">Subcription Package Details</h5>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Package Name</span>
                                                                <span class="profile-ud-value"><?= $subscription_package[0]['sub_package']; ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Package Type</span>
                                                                <span class="profile-ud-value"><?= $subscription_package[0]['type_name']; ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Package Price</span>
                                                                <span class="profile-ud-value">$<?= $subscription_package[0]['sub_package_price'] ?></span>
                                                            </div>
                                                        </div>

                                                       

                                                        <!-- .bq-note -->
                                                    </div>


                                                </div><!-- .profile-ud-list -->
                                                <div class="nk-block">
                                                    <div class="nk-block-head">
                                                        <h5 class="title">Package Description</h5>
                                                    </div>
                                                    <div class="bq-note">
                                                        <div class="bq-note-item">
                                                            <div class="bq-note-text">
                                                                <p><?= $subscription_package[0]['sub_package_details']; ?></p>
                                                            </div>
                                                            <div class="bq-note-meta">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-block">
                                                    <div class="nk-block-head">
                                                        <div class="nk-block-head-content">
                                                            <h5 class="title nk-block-title">Package Modules</h5>
                                                        </div>
                                                    </div>
                                                    <div class="card card-preview">
                                                        <div class="card-inner">
                                                            <ul class="preview-list">
                                                                <?php for ($i = 0; $i < count($subscription_package[1]); $i++) : ?>

                                                                    <li class="preview-item">
                                                                        <span class="badge badge-dot badge-dark"><span><?= $subscription_package[1][$i]['name']; ?></span></span>
                                                                    </li>
                                                                <?php endfor ?>
                                                               
                                                            </ul>
                                                        </div>
                                                    </div><!-- .card-preview -->

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-preview -->

                                </div>

                            </div><!-- .components-preview -->
                        </div>
                    </div>
                </div>
            </div>



            <!-- content @e -->




            <!-- footer @s -->
            <?php $this->load->view('backend/includes/footer'); ?>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
    </div>
    <!-- app-root @e -->



    <!-- JavaScript -->
    <?php $this->load->view('backend/includes/scripts'); ?>
    <!-- /JavaScript -->




</body>

</html>