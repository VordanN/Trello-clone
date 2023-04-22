<?php

namespace controllers;

use core\Controller;
use core\Utils;
use Exception;
use models\Users;
use models\Board;



class MainController extends Controller {
    public function indexAction()
    {
        $uid = Users::getLoginedUser();
        if(isset($_POST["sbmt_ad_board"])){
            $title = $_POST["btitle"];
            $desc = $_POST["bdesc"];
            
            Board::createBoard($uid,$title,$desc);
            Utils::Redirect(".");
        }
        return $this->render(
            [
                "boards" => Board::getBoardsByUser($uid)
            ]
        );
    }
    public function boardAction($params){

        $bid = array_shift($params);
        $board = Board::getBoard($bid);
        $uid = Users::getLoginedUser();

        if(isset($_POST["submit"])){
            $fk_label = $_POST["fk_label"];
            $fk_cat = $_POST["fk_cat"];
            $ctitle = $_POST["ctitle"];
            $cdesc = $_POST["cdesc"];

            Board::createCard($bid,$uid,$fk_label,$fk_cat,$ctitle,$cdesc);
            Utils::Redirect("/main/board/".$bid);
        }
        return $this->render(
            [
                "board" => $board,
                "members" => Board::getBoardMembers($bid,$uid),
                "board_cards" => Board::getBoardCards($bid),
                "labels" => Board::getCardLables(),
                "categories" => Board::getBoardCategories(),
            ]
        );
    }

    public function cardviewAction($params){
        $cid = array_shift($params);
        $card = Board::getCardById($cid);
        $uid = Users::getLoginedUser();
        $board = Board::getBoard($card["fk_tbl_board"]);

        return $this->render(
            [
                "card" => $card,
                "members" => Board::getBoardMembers($card["fk_tbl_board"],$uid),
                "board_cards" => Board::getBoardCards($card["fk_tbl_board"]),
                "labels" => Board::getCardLables(),
                "categories" => Board::getBoardCategories(),
                "board" => $board,
            ]
        );
    }

    public function addmemberAction($params){
        $bid = array_shift($params);
        if(isset($_POST["smbt_member"])){
            $uid = $_POST["fk_tbl_u"];
            Board::addMember($bid,$uid);            
        }
        return $this->render(
            [
                "members" => Board::getBoardMembers($bid,Users::getLoginedUser()),
                "board_members" => Board::getBoardMembers($bid,Users::getLoginedUser()),
            ]
        );

    }
}