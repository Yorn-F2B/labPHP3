<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LoaiSanPhamResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'ten_loai'      => $this->tenLoai,
            'mo_ta'         => $this->moTa,
            'ngay_tao'      => $this->created_at->format('d/m/Y H:i'),
            'ngay_cap_nhat' => $this->updated_at->format('d/m/Y H:i'),
        ];
    }
}
