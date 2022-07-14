<?php

class GroupController
{
    public function render()
    {
        $this->renderAllGroups();
    }
    private function renderAllGroups()
    {
        $groups = DBGroupLoader::getAllGroups();
        foreach ($groups as $key => $group) {
            require __DIR__ . '../../Views/groupView.php';
        }
    }
}
