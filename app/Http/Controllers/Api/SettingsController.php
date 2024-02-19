<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ApiResource;
use App\Services\IndustryService;

class SettingsController extends Controller
{
    private $service;
    private $user;

    public function __construct(IndustryService $industry_service)
    {
        $this->service = $industry_service;
        $this->user = auth()->user();
    }
    /**
     * Recuperar configuraciones
     * @OA\Get(
     * path="/api/auth/reconection",
     * summary="Reconection",
     * tags={"auth"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     * @OA\MediaType(
     * mediaType="application/json"
     * )),
     * @OA\Response(
     * response=200,
     * description="Reconection",
     * @OA\JsonContent()
     * ),
     * )
     */
    public function reconection()
    {
        $year = date('Y');
        $data['industry'] = $this->service->getIndustryByUser($this->user->id);
        $data['period'] = $this->service->getPeriodActive();
        $data['resume'] = $this->service->getResumesByYearAndIndustry($data['industry']->id, $year);
        $data['options'] = $this->service->getOptionsByIndustry($data['industry']->id);
        return (new ApiResource($data));
    }
}
