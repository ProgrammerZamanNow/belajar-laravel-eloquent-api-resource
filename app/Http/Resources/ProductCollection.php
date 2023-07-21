<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{

    public static $wrap = "data";
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "data" => ProductResource::collection($this->collection)
        ];
    }

    public function withResponse(Request $request, JsonResponse $response)
    {
        $response->header("X-Powered-By", "Programmer Zaman Now");
    }
}
