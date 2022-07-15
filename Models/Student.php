<?php
class Student
{
    private int $id;
    private string $name;
    public function __construct(int $StudentId, string $StudentName)
    {
        $this->id = $StudentId;
        $this->name = $StudentName;
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
