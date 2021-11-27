@extends('layouts.frontend')

@section('title', 'Contact')

@section('bottom-content')

<div class="row justify-content-center mt-5">
    <a href="https://wa.me/6281331916589">
        <button type="button" class="btn btn-outline-success mr-3">
            <i class="fab fa-whatsapp-square fa-9x"></i>
        </button>
    </a>
    {{-- <button type="button" class="btn btn-outline-success mr-3" data-toggle="modal" data-target=".bd-example-modal-sm1">
        <i class="fab fa-whatsapp-square fa-9x"></i>
    </button> --}}
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-sm2">
        <i class="fas fa-envelope fa-9x"></i>
    </button>
</div>

{{-- <div class="modal fade bd-example-modal-sm1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="card text-center">
        <div class="card-header">
            <h5>Contact</h5>
        </div>
        <div class="card-body">
            <p>081331916589</p>
        </div>
      </div>
    </div>
  </div>
</div> --}}

<div class="modal fade bd-example-modal-sm2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="card text-center">
                <div class="card-header">
                    <h5>Email</h5>
                </div>
                <div class="card-body">
                    <p>satria.kurniawan@undiksha.ac.id</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection