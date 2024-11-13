<?php

namespace questbluesdk\Models\Responses\IFaxPro;

use JMS\Serializer\Annotation\Type;
use questbluesdk\Models\Responses\BaseResponse;

class IFaxProAvailableDidsResponse extends BaseResponse
{

    #[Type('int')]
    private int $total;

    #[Type('array<string>')]
    private array $data;


    public function getTotal(): int
    {
        return $this->total;

    }//end getTotal()


    public function getData(): array
    {
        return $this->data;

    }//end getData()


}//end class
