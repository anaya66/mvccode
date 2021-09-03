@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @can('admin')
                        <h2>
                            Welcome to Online Exam Platform. Test Your Skill
                        </h2>
                    @else
                        <h2>
                            Welcome to Online Exam Platform. Test Your Skill
                        </h2>


                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
