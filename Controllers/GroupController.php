<?php

class GroupController
{
    public function render()
    {
        $this->renderAllGroups();
        $this->renderAddButton();
    }
    private function renderAllGroups()
    {
        $groups = DBGroupLoader::getAllGroups();
        foreach ($groups as $key => $group) {
            require __DIR__ . '../../Views/groupView.php';
        }
    }
    private function renderAddButton()
    {
        require __DIR__ . '../../Views/Components/groupAddButton.php';
    }
}
