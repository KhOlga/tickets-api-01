<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
	 * @param  Request  $request
	 * @return array
     */
    public function toArray($request)
    {
		return [
			'id' => $this->id,
			'ticket_title' => $this->name,
			'ticket_number' => $this->number,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
		];
    }
}
