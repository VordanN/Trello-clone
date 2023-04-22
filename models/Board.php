<?php

namespace models;

use core\Core;
use core\Utils;


class Board
{
    public static $tablelName = "tbl_board";

    public static function getBoards(){
        return Core::getInstance()->context->table(self::$tablelName)->select()->execute();
    }

    public static function getBoard($bid){
        return Core::getInstance()->context->table(self::$tablelName)->select()->where([
            "bid" => $bid
        ])->execute()[0] ?? null;
    }

    public static function getBoardsByUser($uid){
        return Core::getInstance()->context->table(self::$tablelName)->select()->where([
            "fk_tbl_u" => $uid
        ])->execute();
    }

    public static function createBoard($uid,$title,$description){
        $result = Core::getInstance()->context->table(self::$tablelName)->insert([
            "fk_tbl_u" => $uid,
            "board_title" => $title,
            "board_desc" => $description
        ])->execute();
    }


    public static function getBoardMembers($bid,$uid){
        $users = Core::getInstance()->context->table("tbl_u")->select()->execute();
        
        $board = self::getBoard($bid);

        $members = [];

        foreach($users as $user){
            if($user["uid"] != $board["fk_tbl_u"] && $user["uid"] != $uid){
                $members[] = $user;
            }
        }

        return $members;
    }

    public static function addMember($bid,$uid){

        $board_users = Core::getInstance()->context->table("tbl_board_user")->select()->where([
            "fk_tbl_board" => $bid
        ])->execute();

        foreach($board_users as $board_user){
            if($board_user["tbl_u"] == $uid){
                return;
            }
        }


        $result = Core::getInstance()->context->table("tbl_board_user")->insert([
            "fk_tbl_board" => $bid,
            "tbl_u" => $uid
        ])->execute();
    }

    public static function updateCard($cid,$status){
        $result = Core::getInstance()->context->table("tbl_card")->update([
            "status" => $status
        ])->where([
            "cid" => $cid
        ])->execute();
    }

    public static function getBoardMembersByBoard($bid){
        $users = Core::getInstance()->context->table("tbl_u")->select()->execute();
        $board_users = Core::getInstance()->context->table("tbl_board_user")->select()->where([
            "fk_tbl_board" => $bid
        ])->execute();

        $members = [];

        foreach($users as $user){
            foreach($board_users as $board_user){
                if($user["uid"] == $board_user["fk_tbl_u"]){
                    $members[] = $user;
                }
            }
        }

        return $members;
    }

    public static function getBoardCards($bid){
        return Core::getInstance()->context->table("tbl_card")->select()->where([
            "fk_tbl_board" => $bid
        ])->execute();
    }

    public static function getCardLables(){
        return Core::getInstance()->context->table("tbl_card_label")->select()->execute();
    }

    public static function getBoardCategories(){
        return Core::getInstance()->context->table("tbl_card_cat")->select()->execute();
        
    }

    public static function updateCardStatus($cid,$status){
        $result = Core::getInstance()->context->table("tbl_card")->update([
            "fk_tbl_cat" => $status
        ])->where([
            "cid" => $cid
        ])->execute();
    }

    public static function updateCardLabel($cid,$lid){
        $result = Core::getInstance()->context->table("tbl_card")->update([
            "fk_tbl_label" => $lid
        ])->where([
            "cid" => $cid
        ])->execute();
    }

    public static function updateCardMember($cid,$uid){
        $result = Core::getInstance()->context->table("tbl_card")->update([
            "fk_tbl_u" => $uid
        ])->where([
            "cid" => $cid
        ])->execute();
    }

    public static function getCardById($cid){
        return Core::getInstance()->context->table("tbl_card")->select()->where([
            "cid" => $cid
        ])->execute()[0] ?? null;
    }

    public static function createCard($fk_board,$fk_user,$fk_label,$fk_cat,$ctitle,$cdesc){
        $result = Core::getInstance()->context->table("tbl_card")->insert([
            "fk_tbl_board" => $fk_board,
            "fk_tbl_u" => $fk_user,
            "fk_tbl_label" => $fk_label,
            "fk_tbl_cat" => $fk_cat,
            "ctitle" => $ctitle,
            "cdesc" => $cdesc
        ])->execute();
    }
}