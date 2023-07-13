<x-frontend.layout>
    @include('frontend.partials._logonav')
    <!-- Open Content -->
    <section class="bg-light cinemas">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5 w-100">
                    <div class="card mb-3">
                        <div class="container">
                            <div class="heading_container align-items-center">
                                <h3 class="gt-teks pb-2">
                                    Cinema {{ $cinema->code }} Seats
                                </h3>
                                <h4>
                                    pick one seat.
                                </h4>
                                <hr>
                            </div>
                            <form class="mx-auto" action="{{ route('movie.order.store') }}" method="POST" id="myForm">
                                @csrf
                                <h6 class="text-center rounded mx-auto py-3 fw-bold" style="margin-bottom: 15rem;">
                                    Screen
                                </h6>
                                <div class="cinema-seats">
                                    @php
                                        $prevFirstChar = null;
                                    @endphp
                                    @foreach ($seats->sortBy('seat_code') as $seat)
                                        @php
                                            $firstChar = substr($seat->seat_code, 0, 1);
                                        @endphp
                                        @if ($firstChar !== $prevFirstChar)
                                            @if (!is_null($prevFirstChar))
                                </div>
                                @endif
                                <div class="row justify-content-center">
                                    @endif
                                    <div class="seat {{ $seat->seat_status === 'unavailable' ? 'disabled' : '' }} rounded m-1"
                                        data-id="{{ $seat->id }}" data-status="{{ $seat->seat_status }}">
                                        {{ $seat->seat_code }}
                                    </div>
                                    @php
                                        $prevFirstChar = $firstChar;
                                    @endphp
                                    @endforeach
                                </div>
                                <input type="hidden" name="seat" id="selected-seat-input">
                                <input type="hidden" name="movie_schedule" id="movie_schedule-input">
                                <div class="text-center my-4">
                                    <a class="text-danger" href="{{ url()->previous() }}"
                                        id="cancel-cinema-btn">Cancel</a>
                                    <button type="button" class="btn-box rounded p-2" id="checkout-btn"
                                        data-bs-target="#confirmModal" data-bs-toggle="modal" disabled>Next</button>
                                </div>
                                <!-- Button trigger modal -->

                                <!-- Modal -->
                                <div class="modal fade" id="confirmModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Your Ticket
                                                    Order</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Name</th>
                                                                <td>{{ Auth::user()->name }}</td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Movie</th>
                                                                <td>{{ \App\Models\Movies::find($movie->movie_id)->title }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Starts</th>
                                                                <td>{{ $movie->starts }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Ends</th>
                                                                <td>{{ $movie->ends }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Seat</th>
                                                                <td id="selected-seat"></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Price</th>
                                                                <td>Rp. {{ $movie->price }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn-box rounded p-2"
                                                    data-bs-target="#qrCodeModal"
                                                    data-bs-toggle="modal">Confirm</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal 2 -->
                                <div class="modal fade" id="qrCodeModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Qris Payment</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('assets/images/qrframe.png') }}" alt="Qr Payment">
                                                <p class="text-center">Scan this QR Code to pay Rp. {{ $movie->price }}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn-secondary" data-bs-dismiss="modal"
                                                    id="close-modal">Close</button>
                                                <button type="submit" class="btn-primary" id="submit-transaction">Check
                                                    Transaction</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    const seats = document.querySelectorAll('.seat');
                                    let selectedSeat = null;

                                    document.getElementById('movie_schedule-input').value = {{ $movie->id }};

                                    // Retrieve selected seat from localStorage
                                    const storedSeat = localStorage.getItem('selectedSeat');
                                    if (storedSeat) {
                                        const seat = document.querySelector(`.seat[data-id="${storedSeat}"]`);
                                        if (seat) {
                                            seat.classList.add('selected');
                                            selectedSeat = seat;
                                            document.getElementById('selected-seat-input').value = seat.textContent.trim();
                                            document.getElementById('selected-seat').textContent = seat.textContent.trim();
                                            document.getElementById('checkout-btn').disabled = false;
                                        }
                                    }

                                    seats.forEach(seat => {
                                        seat.addEventListener('click', () => {
                                            if (selectedSeat) {
                                                selectedSeat.classList.remove('selected');
                                            }
                                            seat.classList.add('selected');
                                            selectedSeat = seat;
                                            document.getElementById('checkout-btn').disabled = false;
                                            document.getElementById('selected-seat-input').value = seat.textContent.trim();
                                            document.getElementById('selected-seat').textContent = seat.textContent.trim();

                                            // Store selected seat in localStorage
                                            localStorage.setItem('selectedSeat', seat.dataset.id);
                                        });
                                    });

                                    // get the form by its id (replace with your form's id)
                                    const form = document.getElementById('myForm');

                                    form.addEventListener('submit', function(event) {
                                        // prevent the form from submitting if you want to do something first
                                        event.preventDefault();

                                        // your form submission logic here...

                                        // remove the selectedSeat item from local storage
                                        localStorage.removeItem('selectedSeat');

                                        // if you prevented the default submission, you may need to submit the form programmatically
                                        form.submit();
                                    });
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
</x-frontend.layout>
