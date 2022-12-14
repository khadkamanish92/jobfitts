@extends('layouts.app')

@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-center pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading"></span>
                            <h2 class="mt-2">Available Jobs</h2>
                            @include('partials.search-jobs')
                        </div>
                    </div>
                    <div class="row">
                        @if (count($data['jobs']) != 0)
                            @foreach ($data['jobs'] as $job)
                                <div class="col-md-12 ftco-animate">
                                    <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                                        <div class="one-third mb-4 mb-md-0">
                                            <div class="job-post-item-header d-flex align-items-center">
                                                <h2 class="mr-3 text-black"><a
                                                        href="{{ route('jobs.detail', $job->id) }}">{{ ucWords($job->title) }}</a>
                                                </h2>
                                                <div class="badge-wrap">
                                                    @if ($job->job_type == 'part-time')
                                                        <span
                                                            class="bg-primary text-white badge py-2 px-3">{{ ucfirst($job->job_type) }}</span>
                                                    @endif
                                                    @if ($job->job_type == 'full-time')
                                                        <span
                                                            class="bg-warning text-white badge py-2 px-3">{{ ucfirst($job->job_type) }}</span>
                                                    @endif
                                                    @if ($job->job_type == 'casual')
                                                        <span
                                                            class="bg-info text-white badge py-2 px-3">{{ ucfirst($job->job_type) }}</span>
                                                    @endif
                                                    @if ($job->job_type == 'contract')
                                                        <span
                                                            class="bg-danger text-white badge py-2 px-3">{{ ucfirst($job->job_type) }}</span>
                                                    @endif
                                                </div>
                                                @auth
                                                    @if ($job->hasApplied)
                                                        <div class="badge-wrap">
                                                            <span
                                                                class="bg-danger text-white badge pl-2 py-2 px-3">Applied</span>
                                                        </div>
                                                    @endif
                                                @endauth
                                            </div>
                                            <div class="job-post-item-body d-block d-md-flex">
                                                <div class="mr-3"><span class="icon-layers"></span>
                                                    {{ ucWords($job->company->company_name) }}</div>
                                                <div><span class="icon-my_location"></span>
                                                    <span>{{ ucWords($job->address) }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="one-forth ml-auto d-flex align-items-center">
                                            <div>
                                                <a href="{{ route('jobs.detail', $job->id) }}"
                                                    class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                                    <button type="button" class="btn btn-primary py-2">View</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h1 class="text-center">No jobs found. Search again !</h1>
                        @endif
                    </div>
                    {{ $data['jobs']->links('partials.paginate') }}
                </div>
            </div>
        </div>
    </section>
@endsection
