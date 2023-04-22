<?php

?>

        <div class="sticky-notes">
            <ul>
                <li>
                    <div class="heading">
                        <p>Todo</p>
                        <div class="option">
                            <input type="text" class="form-control" id="todo_search" onkeyup="search_card(this.value,'cont_todo',1)" placeholder="Search..">
                            <button class="btn btn-search" id="todo_search_btn" onclick="search_show('todo_search')"><i class="fas fa-search"></i></button>
                            <button class="btn btn-filter" onclick="filter_show('filter-todo')"><img src="assets/img/filter-icon.png" alt=""></button>
                        </div>
                    </div>
                    <div class="filter-option" id="filter-todo">
                    <div class="col-md-6 pr-1">
                            <select class="custom-select form-control" id="inputGroupSelect01" onchange="filter_user_card(this.value,'cont_todo',1)">
                                <option selected disabled>Members...</option>
                                            <?php foreach($members as $member): ?>
                                                <option value="<?= $member["uid"] ?>"><?= $member["name"] ?></option>
                                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6 pl-1">
                            <select class="custom-select form-control" id="inputGroupSelect01" onchange="filter_label_card(this.value,'cont_todo',1)">
                                <option selected value="0">Label...</option>
                                <?php foreach($labels as $label): ?>
                                                    <option value="<?= $label["clid"] ?>"><?= $label["label_name"] ?></option>
                                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="todo_container container1" id="cont_todo">

                    </div>
                    <div class="container-footer">
                        <button class="btn btn-board rounded-pill" title="Add Card" title="Add Board" data-bs-toggle="modal" data-bs-target="#addCard"><i class="fas fa-plus"></i> Add Card</button>
                    </div>
                </li>
                <li>
                    <div class="heading">
                        <p>Progress</p>
                        <div class="option">
                            <input type="text" class="form-control" id="progress_search" onkeyup="search_card(this.value,'cont_prog',2)" placeholder="Search..">
                            <button class="btn btn-search" id="todo_search_btn" onclick="search_show('progress_search')"><i class="fas fa-search"></i></button>
                            <button class="btn btn-filter" onclick="filter_show('filter-progress')"><img src="assets/img/filter-icon.png" alt=""></button>
                        </div>
                    </div>
                    <div class="filter-option" id="filter-progress">
                    <div class="col-md-6 pr-1">
                            <select class="custom-select form-control" id="inputGroupSelect01"  onchange="filter_user_card(this.value,'cont_prog',2)">
                                <option selected disabled>Members...</option>
                                <?php foreach($members as $member): ?>
                                                <option value="<?= $member["uid"] ?>"><?= $member["name"] ?></option>
                                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6 pl-1">
                            <select class="custom-select form-control" id="inputGroupSelect01" onchange="filter_label_card(this.value,'cont_prog',2)">
                                <option selected value="0">Label...</option>
                                <?php foreach($labels as $label): ?>
                                                    <option value="<?= $label["clid"] ?>"><?= $label["label_name"] ?></option>
                                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="progress_container container1" id="cont_prog">
                    </div>

                    <div class="container-footer">
                        <button class="btn btn-board rounded-pill" title="Add Card" title="Add Board" data-bs-toggle="modal" data-bs-target="#addCard"><i class="fas fa-plus"></i> Add Card</button>
                    </div>
                </li>
                <li>
                    <div class="heading">
                        <p>Code Review</p>
                        <div class="option">
                            <input type="text" class="form-control" id="review_search" onkeyup="search_card(this.value,'cont_review',3)" placeholder="Search..">
                            <button class="btn btn-search" id="todo_search_btn" onclick="search_show('review_search')"><i class="fas fa-search"></i></button>
                            <button class="btn btn-filter" onclick="filter_show('filter-review')"><img src="assets/img/filter-icon.png" alt=""></button>
                        </div>
                    </div>
                    <div class="filter-option" id="filter-review">
                    <div class="col-md-6 pr-1">
                            <select class="custom-select form-control" id="inputGroupSelect01" onchange="filter_user_card(this.value,'cont_review',3)">
                                <option selected disabled>Members...</option>
                                <?php foreach($members as $member): ?>
                                                <option value="<?= $member["uid"] ?>"><?= $member["name"] ?></option>
                                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6 pl-1">
                            <select class="custom-select form-control" id="inputGroupSelect01" onchange="filter_label_card(this.value,'cont_review',3)">
                                <option selected disabled>Label...</option>
                                <?php foreach($labels as $label): ?>
                                                    <option value="<?= $label["clid"] ?>"><?= $label["label_name"] ?></option>
                                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="review_container container1" id="cont_review">

                    </div>

                    <div class="container-footer">
                        <button class="btn btn-board rounded-pill" title="Add Card" title="Add Board" data-bs-toggle="modal" data-bs-target="#addCard"><i class="fas fa-plus"></i> Add Card</button>
                    </div>
                </li>
                <li>
                    <div class="heading">
                        <p>Done</p>
                        <div class="option">
                            <input type="text" class="form-control" id="done_search" onkeyup="search_card(this.value,'cont_done',4)" placeholder="Search..">
                            <button class="btn btn-search" id="todo_search_btn" onclick="search_show('done_search')"><i class="fas fa-search"></i></button>
                            <button class="btn btn-filter" onclick="filter_show('filter-done')"><img src="assets/img/filter-icon.png" alt=""></button>
                        </div>
                    </div>
                    <div class="filter-option" id="filter-done">
                        <div class="col-md-6 pr-1">
                            <select class="custom-select form-control" id="inputGroupSelect01" onchange="filter_user_card(this.value,'cont_done',4)" >
                                <option selected disabled>Members...</option>
                                <?php foreach($members as $member): ?>
                                                <option value="<?= $member["uid"] ?>"><?= $member["name"] ?></option>
                                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6 pl-1">
                            <select class="custom-select form-control" id="inputGroupSelect01" onchange="filter_label_card(this.value,'cont_done',4)">
                                <option selected disabled>Label...</option>
                                <?php foreach($labels as $label): ?>
                                                    <option value="<?= $label["clid"] ?>"><?= $label["label_name"] ?></option>
                                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="done_container container1" id="cont_done">
                        <a href="#" draggable="true" class="draggable">
                            <input type="number" hidden id="data" value="23">
                            <h2>Notes #4</h2>
                            <p>Text Content #4</p>
                            <div class="note-footer ">
                                <span class="small">12:34 22/04/23</span>
                                <button class="btn rounded-circle"><i class="fas fa-eye"></i></button>
                            </div>
                        </a>
                    </div>

                    <div class="container-footer">
                        <button class="btn btn-board rounded-pill" title="Add Card" title="Add Board" data-bs-toggle="modal" data-bs-target="#addCard"><i class="fas fa-plus"></i> Add Card</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addCard" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="1" aria-labelledby="addCardLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body">
                    <div class="login-form">
                        <div class="form-section">
                            <form method="POST">
                                <input type="number" name="fk_board" hidden value="<?= $board["bid"] ?>">
                                <div class="row">
                                    <div class="col-md-6 my-auto">
                                        <h4 class="">Add <span>Card</span></h4>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-form m-0">
                                            <select class="custom-select" id="inputGroupSelect01" name="fk_cat">
                                                <option selected disabled>Cateorgy...</option>

                                                <?php foreach($categories as $category): ?>
                                                    <option value="<?= $category["ccid"] ?>"><?= $category["cat_name"] ?></option>
                                                <?php endforeach; ?>


                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-3">
                                <div class="icon-form">
                                    <input type="text" class="form-control" placeholder="Enter an Title " name="ctitle">
                                </div>
                                <div class="icon-form">
                                    <input type="text" class="form-control" placeholder="Enter an Description" name="cdesc">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="icon-form mt-0">
                                            <select class="custom-select form-control" id="inputGroupSelect01" name="fk_user">
                                                <option selected disabled>Members...</option>
                                                <?php foreach($members as $member): ?>
                                                <option value="<?= $member["uid"] ?>"><?= $member["name"] ?></option>
                                            <?php endforeach; ?>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-form mt-0">
                                            <select class="custom-select form-control" id="inputGroupSelect01" name="fk_label">
                                                <option selected disabled>Label...</option>

                                                <?php foreach($labels as $label): ?>
                                                    <option value="<?= $label["clid"] ?>"><?= $label["label_name"] ?></option>
                                                <?php endforeach; ?>


                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <button class="btn btn-theme" type="submit" name="submit">Add</button>
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
    

<script>
    function refreash() {
        get_card(1, 'cont_todo');
        get_card(2, 'cont_prog');
        get_card(3, 'cont_review');
        get_card(4, 'cont_done');
        printCards();
    };
    window.onload = () => {
        refreash();
    }

    function printCards(){
        var cards = <?= json_encode($board_cards) ?>;

        for (obj of cards) {
                if(obj.fk_tbl_cat == "1"){
                    cont = "cont_todo"
                }else if(obj.fk_tbl_cat == "2"){
                    cont = "cont_prog"
                }else if(obj.fk_tbl_cat == "3"){
                    cont = "cont_review"
                }else if(obj.fk_tbl_cat == "4"){
                    cont = "cont_done"
                }
                document.getElementById(cont).innerHTML += `
                <a href="/main/cardview/${obj.cid}" draggable="true" class="draggable">
                
                <input type="number" hidden id="data" value="${obj.cid}">
                <h2>${obj.ctitle}</h2>
                <p>${obj.cdesc}</p>
                <div class="note-footer ">
                    <span class="small">${obj.craeted_at}</span>
                    <button class="btn rounded-circle"><i class="fas fa-eye"></i></button>
                </div>
            </a>
                `;
            }
    }

    function get_card(cat,cont_id){
        var cards = <?= json_encode($board_cards) ?>;
        if (cat == 1) {
            localStorage.setItem("todo", JSON.stringify(cards))
        } else if (cat == 2) {
            localStorage.setItem("progress", JSON.stringify(cards))
        } else if (cat == 3) {
            localStorage.setItem("review", JSON.stringify(cards))
        } else {
            localStorage.setItem("done", JSON.stringify(cards))
        }            
    }

  

    function filter_show(id) {
        document.getElementById(id).classList.toggle("active");
    }
    function search_show(id) {
            document.getElementById(id).classList.toggle("active");
        }
    setTimeout(() => {
      
        const draggables = document.querySelectorAll('.draggable')
        const todo_container = document.querySelector('.todo_container')
        const progress_container = document.querySelector('.progress_container')
        const review_container = document.querySelector('.review_container')
        const done_container = document.querySelector('.done_container')

        draggables.forEach(draggable => {
            draggable.addEventListener('dragstart', () => {
                draggable.classList.add('dragging')
                localStorage.setItem("drag_id", JSON.stringify(document.querySelector('.dragging input').value));
            })
            draggable.addEventListener('dragend', () => {
                draggable.classList.remove('dragging')
            })
        })


        todo_container.addEventListener('dragover', e => {
            e.preventDefault();
            var devain_id = JSON.parse(localStorage.getItem("drag_id"));
            change_card(devain_id, 1);

            todo_container.appendChild(document.querySelector('.dragging'))
        })
        progress_container.addEventListener('dragover', e => {
            e.preventDefault();
            var devain_id = JSON.parse(localStorage.getItem("drag_id"));
            change_card(devain_id, 2);

            progress_container.appendChild(document.querySelector('.dragging'))
        })
        review_container.addEventListener('dragover', e => {
            e.preventDefault();
            var devain_id = JSON.parse(localStorage.getItem("drag_id"));
            change_card(devain_id, 3);

            review_container.appendChild(document.querySelector('.dragging'))
        })
        done_container.addEventListener('dragover', e => {
            e.preventDefault();
            var devain_id = JSON.parse(localStorage.getItem("drag_id"));
            change_card(devain_id, 4);

            done_container.appendChild(document.querySelector('.dragging'))
        })


    }, 300);

    function search_card(txt,cont_id,cat){
        var cards=[];
        if(txt!=""){
            if(cat==1){cards=JSON.parse(localStorage.getItem('todo'))}
            else if(cat==2){cards=JSON.parse(localStorage.getItem('progress'))}
            else if(cat==3){ cards=JSON.parse(localStorage.getItem('review'))}
            else{ cards=JSON.parse(localStorage.getItem('done'))}
        document.getElementById(cont_id).innerHTML='';
            for(obj of cards){
                if(obj.ctitle.search(txt)>0){
                    document.getElementById(cont_id).innerHTML+=`
                <a href="/main/cardview/${obj.cid}" draggable="true" class="draggable">
        
                <input type="number" hidden id="data" value="${obj.cid}">
                <h2>${obj.ctitle}</h2>
                <p>${obj.cdesc}</p>
                <div class="note-footer ">
                    <span class="small">${obj.craeted_at}</span>
                    <button class="btn rounded-circle"><i class="fas fa-eye"></i></button>
                </div>
            </a>
                `;
                }
           
            }
        }else{
            if(cat==1){cards=JSON.parse(localStorage.getItem('todo'))}
            else if(cat==2){cards=JSON.parse(localStorage.getItem('progress'))}
            else if(cat==3){ cards=JSON.parse(localStorage.getItem('review'))}
            else{ cards=JSON.parse(localStorage.getItem('done'))}
        document.getElementById(cont_id).innerHTML='';
            for(obj of cards){
            
                    document.getElementById(cont_id).innerHTML+=`
                <a href="/main/cardview/${obj.cid}" draggable="true" class="draggable">
        
                <input type="number" hidden id="data" value="${obj.cid}">
                <h2>${obj.ctitle}</h2>
                <p>${obj.cdesc}</p>
                <div class="note-footer ">
                    <span class="small">${obj.craeted_at}</span>
                    <button class="btn rounded-circle"><i class="fas fa-eye"></i></button>
                </div>
            </a>
                `;
                }
           
            
        }
       
    }
    function filter_label_card(txt,cont_id,cat){
        var cards=[];
        if(txt!=0){
            if(cat==1){cards=JSON.parse(localStorage.getItem('todo'))}
            else if(cat==2){cards=JSON.parse(localStorage.getItem('progress'))}
            else if(cat==3){ cards=JSON.parse(localStorage.getItem('review'))}
            else{ cards=JSON.parse(localStorage.getItem('done'))}
        document.getElementById(cont_id).innerHTML='';
            for(obj of cards){
                if(obj.fk_tbl_label==txt){
                    document.getElementById(cont_id).innerHTML+=`
                <a href="/main/cardview/${obj.cid}" draggable="true" class="draggable">
        
                <input type="number" hidden id="data" value="${obj.cid}">
                <h2>${obj.ctitle}</h2>
                <p>${obj.cdesc}</p>
                <div class="note-footer ">
                    <span class="small">${obj.craeted_at}</span>
                    <button class="btn rounded-circle"><i class="fas fa-eye"></i></button>
                </div>
            </a>
                `;
                }
           
            }
        }else{
            if(cat==1){cards=JSON.parse(localStorage.getItem('todo'))}
            else if(cat==2){cards=JSON.parse(localStorage.getItem('progress'))}
            else if(cat==3){ cards=JSON.parse(localStorage.getItem('review'))}
            else{ cards=JSON.parse(localStorage.getItem('done'))}
        document.getElementById(cont_id).innerHTML='';
            for(obj of cards){
            
                    document.getElementById(cont_id).innerHTML+=`
                <a href="/main/cardview/${obj.cid}" draggable="true" class="draggable">
        
                <input type="number" hidden id="data" value="${obj.cid}">
                <h2>${obj.ctitle}</h2>
                <p>${obj.cdesc}</p>
                <div class="note-footer ">
                    <span class="small">${obj.craeted_at}</span>
                    <button class="btn rounded-circle"><i class="fas fa-eye"></i></button>
                </div>
            </a>
                `;
                }
           
            
        }
       
    }

    function filter_user_card(txt,cont_id,cat){
        var cards=[];
        if(txt!=0){
            if(cat==1){cards=JSON.parse(localStorage.getItem('todo'))}
            else if(cat==2){cards=JSON.parse(localStorage.getItem('progress'))}
            else if(cat==3){ cards=JSON.parse(localStorage.getItem('review'))}
            else{ cards=JSON.parse(localStorage.getItem('done'))}
        document.getElementById(cont_id).innerHTML='';
            for(obj of cards){
                if(obj.fk_tbl_u!=txt){
                    document.getElementById(cont_id).innerHTML+=`
                <a href="/main/cardview/${obj.cid}" draggable="true" class="draggable">
        
                <input type="number" hidden id="data" value="${obj.cid}">
                <h2>${obj.ctitle}</h2>
                <p>${obj.cdesc}</p>
                <div class="note-footer ">
                    <span class="small">${obj.craeted_at}</span>
                    <button class="btn rounded-circle"><i class="fas fa-eye"></i></button>
                </div>
            </a>
                `;
                }
           
            }
        }else{
            if(cat==1){cards=JSON.parse(localStorage.getItem('todo'))}
            else if(cat==2){cards=JSON.parse(localStorage.getItem('progress'))}
            else if(cat==3){ cards=JSON.parse(localStorage.getItem('review'))}
            else{ cards=JSON.parse(localStorage.getItem('done'))}
        document.getElementById(cont_id).innerHTML='';
            for(obj of cards){
            
                    document.getElementById(cont_id).innerHTML+=`
                <a href="/main/cardview/${obj.cid}" draggable="true" class="draggable">
        
                <input type="number" hidden id="data" value="${obj.cid}">
                <h2>${obj.ctitle}</h2>
                <p>${obj.cdesc}</p>
                <div class="note-footer ">
                    <span class="small">${obj.craeted_at}</span>
                    <button class="btn rounded-circle"><i class="fas fa-eye"></i></button>
                </div>
            </a>
                `;
                }
           
            
        }
       
    }
</script>