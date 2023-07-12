@include('frontend.partials._header')

<div class="d-flex justify-content-center align-items-center bg-light" style="min-height: 100vh;">
    <div class="card p-3">
        <div class="card-body text-center ">
            <div class="text-success">
                <i class="fa fa-check" aria-hidden="true" style="font-size: 500%"></i>
            </div>
            <h1 class="card-title fw-bold text-success">Success</h1>
            <p class="card-text text-secondary">We received your order request!</p>

            <p class="card-text mt-2">Here is your Tickets: <span class="fw-bold">#{{ session('ticketCode') }}</span>
            </p>
            <div class="a-link mt-3 d-flex align-items-center gap-2 justify-content-center">
                <a href="{{ route('frontend') }}" class="btn btn-danger">Back to Home</a>
                <a href="{{ route('movie.order') }}" class="view rounded">View All Tickets</a>
            </div>
        </div>
    </div>
</div>
