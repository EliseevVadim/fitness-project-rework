<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuDayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'menu_id' => $this->menu_id,
            'day_number' => $this->day_number,
            'name' => $this->name,
            'description' => $this->description,
            'content' => $this->content,
            'info' => $this->info,
            'menu_type_id' => $this->menu_type_id,
        ];
    }
}
