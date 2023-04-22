<div class="">
        <section class="login-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 mx-auto login-form">
                        <div class="form-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="h6">List - <a href="/main/board/<?=$board["bid"]?>">
                                        
                                    <span><?=$card["fk_tbl_cat"]?></span>
                                    </a></h4>
                                </div>
                                <div class="col-md-3 pr-md-1 mb-md-0 mb-3">
                                    <small><b>Assigned to : </b> <?=$members[0]["name"]?> </small>
                                    <select class="custom-select form-control" id="inputGroupSelect01" onchange="update_member(<?=$card_id?>,this.value)">
                                        <option selected disabled>Members...</option>
                                        <?php foreach($members as $member): ?>
                                                <option value="<?= $member["uid"] ?>"><?= $member["name"] ?></option>
                                            <?php endforeach; ?>

                                      </select>
                                </div>
                                <div class="col-md-3 pl-md-1  mb-md-0 mb-3">
                                <small><b>Label</b> <?=$labels[0]["label_name"]?> </small>
                                    <select class="custom-select form-control" id="inputGroupSelect01" onchange="update_label(<?=$card["cid"]?>,this.value)">
                                        <option selected disabled>Label...</option>
                                          
                                        <?php foreach($labels as $label): ?>
                                                    <option value="<?= $label["clid"] ?>"><?= $label["label_name"] ?></option>
                                                <?php endforeach; ?>
                                      </select>
                                </div>
                            </div>
                            <h2 class="h3"><?=$card["ctitle"]?></h2>
                            <form>
                                <div class="icon-form">
                                    <input type="text" readonly value="<?=$card["cdesc"]?>" class="form-control" placeholder="Enter an description ">
                                    <i class="fas fa-align-right"></i>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input border-0" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01"><i class="fas fa-paperclip mr-3"></i> Choose file</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-5 col-8">
                                        <button class="btn btn-info" type="button">Attachment</button>
                                    </div>


                                </div>
                                <div class="col-lg-2 col-md-3 col-4 ml-auto text-right">
                                    <a href="/main/board/<?=$board["bid"]?>" class="btn d-block btn-theme-2 text-danger px-2">Back</a>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
