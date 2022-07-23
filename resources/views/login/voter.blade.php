@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Voter Page</h1>
        @if(Session::has('pesan'))
          <div class="alert alert-success">{{ Session::get('pesan') }}</div>
        @endif
    </div>
    <br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data
    </button>
    <br>
    <br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>NIM</th>
            <th>Angkatan</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($tabel_voter as $voter)
        <tr>
            <td>{{ ++$no }}</td>
            <td>{{ $voter->email }}</td>
            <td>{{ $voter->nim }}</td>
            <td>{{ $voter->angkatan }}</td>
            <td>@if ($voter->status == 0)
                  <span style='color:red;'>Belum Memilih</span>
                @else
                  <span style='color:green;'>Sudah Memilih</span>
                @endif
            </td>
            <td>
              <form action="{{ route('voter.token', $voter->email) }}" method="POST">
                @csrf
                <button onclick="return confirm('generate token? ')" type="submit">Generate Token</button>
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



























<!-- Modal -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('voter.tambah') }}" method="POST">
          @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">NIM</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nim" required>
             </div>
             <select class="form-select" aria-label="Default select example" name="angkatan" required>
                <option selected disabled>Angkatan</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
             </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection



