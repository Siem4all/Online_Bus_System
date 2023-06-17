@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="btn-dark col-md-8">
            <div class="card">
                <div class="btn-dark"><h3>Contact us </h3></div>

                <div class="card-body btn-success">
                    <form>
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmail:<input class="text-black" type="email" value="admin@admin.com" readonly><br><br>
                    Telephone NO_1:<input type="tel"value="+251116722020" readonly><br><br>
                        Telephone NO_2:<input type="tel"value="+251116722277" readonly><br><br>
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Address:<input type="text" value="Bole W.03 House No." readonly><br><br>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

