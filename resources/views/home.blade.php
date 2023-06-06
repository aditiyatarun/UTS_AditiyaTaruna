@extends('name')

@section('content')
<div class="container mt-4">
    <img src="{{ Vite::asset('resources/images/adit.jpeg') }}" class="img-fluid" alt="main" style="width:600px">
    <div  style="width:600px">
    <div class="container ">
        <table class="ms-5 table-striped">
            <thead>
             <tr>
                <th class="h3">Aditiya Taruna S.W</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="h4">Nim: 1204200016</td>
              </tr>
              <tr>
                <td class="h4">Sekolah : IT Telkom Surabaya</td>
              </tr>
              <tr>
                <td class="h4">Hobi: Badminton</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
@endsection
