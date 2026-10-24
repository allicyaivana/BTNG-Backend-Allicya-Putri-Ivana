<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SaltbreadResource extends JsonResource
{
    private $message;

    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->message = $message;
    }

    public function toArray(Request $request): array
    {
        return [
            'message' => $this->message,
            'data'    => parent::toArray($request),
        ];
    }
}