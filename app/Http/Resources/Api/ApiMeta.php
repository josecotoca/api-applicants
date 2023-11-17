<?php

namespace App\Http\Resources\Api;
use Illuminate\Database\Eloquent\Model;

class ApiMeta extends Model
{
    public static function Success($message = []) {
        return [
            'success' => true,
            'errors' => is_array($message) ? $message : [$message],
        ];
    }

    public static function Error($message) {
        return [
            'success' => false,
            'errors' => is_array($message) ? $message : [$message],
        ];
    }
}
