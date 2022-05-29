@extends('plantillaBase')

@section('contenido')
<div class="container">
    <div class="card bg-white mr-4 p-5" style="border-radius:15px">   
        <div class="mb-4 text-center">
            <h4>{{ __('CONTACTO') }}</h4>
        </div>
        <div div class="col-4 my-3 pt-3 shadow" style="width:600px; border-radius:15px; background-color:#E6E3E3; margin-left:auto; margin-right:auto">
        <p style="text-align: center">
        Sharyö es en la actualidad la empresa de viajes compartidos líder de España.
        </p>
        <div style="margin-left:5%">
            <strong>Email:</strong> info@sharyo.com
            <br>
            <strong>Phone: </strong> 965 212 563
            <br>
            <strong>Fax: </strong>901 905 906
            <br>
            <strong>Dirección: </strong>C/ Alicante nº 2
</div>
        </div>

    </div>

</div>
@endsection
