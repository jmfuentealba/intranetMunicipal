<!--
/*
 *  JFuentealba @itux
 *  created at September 10, 2020 - 11:46 am
 *  updated at October 4, 2020 - 10:07 am
 */
-->

@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card shadow">

                <div class="card-header h5 bg-dark text-white">

                    <i class="icofont-listing-number px-1"></i>

                    Ver Contacto

                </div>


                <div class="card-body">

                	<div>
                		
                		<strong>Dirección / Departamento: </strong>{{ $contact->dependency->name }}

                	</div>

                	<div>
                		
                		<strong>Unidad: </strong>{{ $contact->unidad }}

                	</div>

                    <div class="mb-3">
                        
                        <strong>Número Contacto: </strong>{{ $contact->telefono }}

                    </div>

                	<div>
                		
                		<a href="{{ route('contacts.index') }}" class="btn btn-warning btn-block">
                			
                			<i class="icofont-double-left"></i>

                			Volver

                		</a>

                	</div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

@push('scripts')

<!-- JQuery DataTable -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>

<!-- JQuery DatePicker -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
        
</script>

@endpush