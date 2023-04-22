<div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-10 mx-auto login-form">
                    <div class="form-section">
                        <h4 class="">Add <span>Participant</span></h4>
                        <form method="POST">
                            <div class="row no-gutters">
                                <div class="col-md-8 mt-3 mb-5">
                                    <input type="numebr" hidden value="<?=$board["bid"]?>" name="fk_board">
                                    <select class="custom-select form-control" id="inputGroupSelect01" name="fk_tbl_u">
                                        <option selected disabled>Members...</option>
                                            <?php foreach($members as $member): ?>
                                                <option value="<?= $member["uid"] ?>"><?= $member["name"] ?></option>
                                            <?php endforeach; ?>
                                      </select>
                                </div>
                                <div class="col-md-4 pl-md-2  mt-3">
                                    <button class="btn btn-theme px-1" type="submit" name="smbt_member">Add Member</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="30px">#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach($board_members as $boardMember): ?>
                                <tr>
                                    <td><?= $boardMember["uid"] ?></td>
                                    <td><?= $boardMember["name"] ?></td>
                                    <td><?= $boardMember["email"] ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>