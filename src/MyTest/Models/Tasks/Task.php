<?php

namespace MyTest\Models\Tasks;

use MyTest\Exceptions\InvalidArgumentException;
use MyTest\Models\ActiveRecordEntity;
use MyTest\Models\Users\User;

class Task extends ActiveRecordEntity
{

    /** @var int */
    protected $is_done;
    /** @var string */
    protected $text;
    /** @var string */
    protected $authorId;
    /** @var string */
    protected $createdAt;



    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIsDone()
    {
        return $this->is_done;
    }

    /**
     * @param mixed $is_done
     */
    public function setIsDone($is_done)
    {
        $this->is_done = $is_done;
    }

    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @param mixed $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


    protected static function getTableName(): string
    {
        return 'tasks';
    }


    /**
     * @return User
     */
    public function getAuthor():User
    {
        return User::getById($this->authorId);
    }
    public function getEmailAuthor():User
    {
        return User::getById($this->authorId);
    }
    /**
     * @param User $author
     */
    public function setAuthor(User $author): void
    {
        $this->authorId = $author->getId();
    }
    public static function createFromArray(array $fields, User $author): Task
    {

        if (empty($fields['text'])) {
            throw new InvalidArgumentException('Не передан текст задачи');
        }

        $task = new Task();

        $task->setAuthor($author);
        $task->setText($fields['text']);

        $task->save();

        return $task;
    }
    public function updateFromArray(array $fields): Task
    {

        if (empty($fields['text'])) {
            throw new InvalidArgumentException('Не передан текст ');
        }


        $this->setText($fields['text']);

        $this->save();

        return $this;
    }
}