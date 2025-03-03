<?php

namespace questbluesdk\Models\Responses\Sms\Data;

use JMS\Serializer\Annotation\Type;
use questbluesdk\Models\Responses\BaseResponse;

class SmsDidData extends BaseResponse
{
    #[Type(name: "string")]
    protected string $did;

    #[Type(name: "string")]
    protected string $smsEnabled;

    #[Type(name: "string")]
    protected string $smsMode;

    #[Type(name: "string")]
    protected ?string $email2forward;

    public function getDid(): string
    {
        return $this->did;
    }

    public function getSmsEnabled(): string
    {
        return $this->smsEnabled;
    }

    public function getSmsMode(): string
    {
        return $this->smsMode;
    }

    public function getEmail2forward(): ?string
    {
        return $this->email2forward;
    }
}
