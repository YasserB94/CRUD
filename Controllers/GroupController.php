<?php

class GroupController
{
    public function render()
    {
        $groups = DBGroupLoader::getAllGroups();
        foreach ($groups as $key => $group) {
            require __DIR__ . '../../Views/groupView.php';
        }
    }
}
