<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'identidade' => $this->id,
            'nome' => $this->name,
            'email' => $this->email,
            'criacao' => Carbon::make($this->created_at)->format('Y-m-d'),
        ];
    }
}
