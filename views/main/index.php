
<div class="text-end mx-5 navs">
    <a href="." class="btn btn-theme rounded-pill" title="Your Boards"><i class="fas fa-clipboard"></i></a> 
    <button type="button" class="btn btn-theme rounded-pill" title="Add Board" data-bs-toggle="modal" data-bs-target="#addBoard"><i class="fas fa-plus"></i></button>
</div>
<div class="content">
        <div class="container">

            <div class="col-12 mb-3">
                <h3>Your Boards.</h3>
            </div>

            <div class="row" id="my-board">
                <?php foreach ($boards as $board) : ?>
                    <div class="col-md-4">
                        <div class="login-form">
                                <div class="form-section board-card">
                                    <h4> 
                                        <a href="/main/board/<?= $board["bid"] ?>"> <?= $board["board_title"] ?></a>
                                    </h4>
                                    <p class="small"><?= $board["board_desc"] ?></p>
                                    <div class="c-footer">
                                        <span><?= $board["created_at"] ?></span> 
                                        <a href="/main/addmember/<?= $board["bid"] ?>" class="signup-link">Add Participant</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="container mt-4">

            <div class="col-12 mb-3">
                <h3>Guest Boards .</h3>
            </div>

            <div class="row" id="guest-board">
             
            </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addBoard" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addBoardLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content bg-transparent border-0">
        <div class="modal-body">
            <div class="login-form">
                <div class="form-section ">
                    <h4 class="">Add <span>Board</span></h4>
                    <hr>
                    <form class="mt-5" method="POST">
                        <div class="icon-form">
                            <input type="text" name="btitle" class="form-control" placeholder="Enter an Title ">
                        </div>
                        <div class="icon-form">
                            <input type="text" name="bdesc" class="form-control" placeholder="Enter an Description">
                        </div>
                        <div class="row mt-5">
                            <div class="col-6">
                                <button class="btn btn-theme" type="submit" name="sbmt_ad_board">Add</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-theme-2" type="button" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal --> 