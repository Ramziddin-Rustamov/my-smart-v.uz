@extends('layouts.app')

@section('title', 'Telefon raqamlar ')

@section('content')
    <section style="background-color: #193c1a71;padding-top:80px; padding-bottom: 380px">
        <div class="container py-5" style="max-height: 80vh; overflow-y: auto;">
            <table class="table table-hover bg-white rounded">
                <thead>
                    <tr>
                        <th scope="col">T/R</th>
                        <th scope="col">F.I.O</th>
                        <th scope="col">Lovozimi</th>
                        <th scope="col">Telefon raqam</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($emergencyPhoneNumbers->isEmpty())
                        <tr>
                            <td colspan="4" class="text-center">Hali Nomerlar qo'shilmagan</td>
                        </tr>
                    @else
                        @foreach ($emergencyPhoneNumbers as $key => $number)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $number->fio }}</td>
                                <td>{{ $number->role }}</td>
                                <td>
                                    <a class="text-black" href="tel:{{ $number->phone_number }}">
                                        {{ $number->phone_number }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </section>
@endsection
