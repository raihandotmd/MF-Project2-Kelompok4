<x-frontend.layout>
    @include('frontend.partials._nav')
    <!-- Open Content -->
    <section class="bg-light vh-100">
        <div class="container pb-5">
            <div class="row m-4">
                <div class="col-lg-5 mt-5 w-100 card">
                    <h2 class="text-center mt-3 mb-2">My Tickets</h2>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Ordered At</th>
                                    <th scope="col">Movie Name</th>
                                    <th scope="col">Cinema</th>
                                    <th scope="col">Seat</th>
                                    <th scope="col">Ticket Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td>No.</td>
                                    <td>Ordered At</td>
                                    <td>Movie Name</td>
                                    <td>Cinema</td>
                                    <td>Seat</td>
                                    <td>Ticket Code</td>
                                </tr>
                                <tr class="">
                                    <td>No.</td>
                                    <td>Ordered At</td>
                                    <td>Movie Name</td>
                                    <td>Cinema</td>
                                    <td>Seat</td>
                                    <td>Ticket Code</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
</x-frontend.layout>
