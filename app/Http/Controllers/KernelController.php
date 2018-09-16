<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Kernel;
use Illuminate\Http\JsonResponse;

class KernelController extends BaseController
{
    //TODO: fill this in __construct() to be able to use it everwhere in the class;

    protected $kernel;
    protected $kernelData;

    public function __construct(
        Kernel $kernel
    ) {
        $this->kernel = $kernel;
        $this->kernelData = $this->kernel->first();
    }

    /**
     * @return Kernel Version
     */
    public function getVersion() : JsonResponse
    {
        return response()->json([
            "message" => 'API version ' . $this->kernelData->app_version,
        ], 200);
    }

    /**
     * Reply to ping command by sending a string.
     *
     * @return string
     */
    public function replyPing() : JsonResponse
    {
        return response()->json([
            'message' => 'Reply from mouschti.me (kernel v' . $this->kernelData->app_version . ' )'
        ], 200);
    }
}
