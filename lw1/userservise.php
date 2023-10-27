<?

class UserService
{
    public static function sortByUsername(array $users, bool $ascending = true): array
    {
        usort($users, function (User $a, User $b) use ($ascending) {
            if ($a->username == $b->username) {
                return 0;
            }
            return ($a->username < $b->username xor !$ascending) ? -1 : 1;
        });
        return $users;
    }

    public static function sortByBirthday(array $users, bool $ascending = true): array
    {
        usort($users, function (User $a, User $b) use ($ascending) {
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