<?php

class Person
{
    public string $name;
    public string $address;
    public string $zipCode = "h1h1h1";
    public string $phone;
    public string $email;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __destruct()
    {
        echo "Hello $this->name: Address: ";
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setProps(string $name, string $address, string $phone): void
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function getMessage(): string
    {
        return "Hello $this->name!<br> Your address is : $this->address, $this->zipCode, $this->phone";
    }
}

?>
<!-- 
nom ClassName   = new ClassName
prop $propName =  obj->propName
method methodName() obj->methodpName() -->