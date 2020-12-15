<?php

namespace App\Form;

use Symfony\Component\Validator\Constraints as Assert;

class Note
{
    /**
     * @Assert\NotBlank
     */
    public $message = '';

    /**
     * @Assert\NotBlank
     * @Assert\Type("\DateTime")
     */
    public $created = null;

    public function __construct()
    {
        $this->created = new \DateTime();
    }
}