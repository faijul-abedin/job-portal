<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobDetailsResource extends JsonResource
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
            'role' => $this->role,
            'apply_url' => $this->apply_url,
            'employment_type' => new EmployeeTypeResource($this->employment_type),
            'salary' => $this->salary,
            'description' => $this->description,
            'created_at' => $this->created_at->format('F, y D'),
        ];
    }
}
