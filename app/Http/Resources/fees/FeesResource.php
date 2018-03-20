<?php

namespace App\Http\Resources\fees;

use Illuminate\Http\Resources\Json\JsonResource;

class FeesResource extends JsonResource
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
            'feesStatus' => $this->paidAmount == 0 ? 'Pending' : $this->feesAmount <= $this->paidAmount ?
                'Paid' : 'Due' ,
            'Total Amount' => $this->feesAmount,
            'Paid Amount' => $this->paidAmount,
            'Due Amount' => $this->feesAmount-$this->paidAmount,
        ];
    }
}
