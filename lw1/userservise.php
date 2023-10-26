<?php

class UserService
{
    public static function sortByUsername($users, $ascending = true)
    {
        usort($users, function ($a, $b) use ($ascending) {
            if ($a->username == $b->username) {
                return 0;
            }
            return ($a->username < $b->username xor !$ascending) ? -1 : 1;
        });
        return $users;
    }

    public static function sortByBirthday($users, $ascending = true)
    {
        usort($users, function ($a, $b) use ($ascending) {
            $dateA = $a->birthday;
            $dateB = $b->birthday;
            if ($dateA == $dateB) {
                return 0;
            }
            return ($dateA < $dateB xor !$ascending) ? -1 : 1;
        });
        return $users;
    }
}
