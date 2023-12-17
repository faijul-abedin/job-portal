<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'company_name' => $this->company_name,
            'company_logo' => $this->company_logo,
            'employment_type' => new EmployeeTypeResource($this->employment_type),
            'salary' => $this->salary,
            'description' => str($this->description)->limit(200),
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
