<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\JobDetailsResource;

class JobDetailsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Job $job)
    {
        return inertia()->render('Frontend/JobDetails',[
            'job' => new JobDetailsResource($job)
        ]);
    }
}
