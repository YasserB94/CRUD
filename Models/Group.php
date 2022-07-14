<?php
class Group
{
    private int $id;
    private string $name;
    public function __construct(int $groupId, string $groupName)
    {
        $this->id = $groupId;
        $this->name = $groupName;
    }
    public function getID()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
}
