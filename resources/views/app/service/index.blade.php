@extends('dashboardapp')

@section('contenudash')
    <section>
        <div class="mb-3">
            <a href="{{ route('service.create')}}" class="btn btn-primary">Ajouter</a>
        </div>
        {{-- <div class="card"> --}}
            {{-- <div class="card-body"> --}}
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nom du service</th>
                                <th>Prix</th>
                                {{-- <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th> --}}
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)

                                <tr>
                                    <td>{{ $service->service_name }}</td>
                                    <td>{{ $service->prix }}</td>
                                    <td class="d-flex justify-content-end gap-2">
                                        <a class="btn btn-warning" href="">Edit</a>
                                        <a class="btn btn-info" href="">Voir</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        {{-- <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot> --}}
                    </table>
                </div>
                {{--
            </div> --}}
            {{-- </div> --}}
    </section>
@endsection