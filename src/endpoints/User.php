<?php

class User {
    public function __construct(public readonly string $name, public readonly string $email, public readonly string $phoneNumber) 
    {
        
    }


    public function create(): void 
    {

    }
}